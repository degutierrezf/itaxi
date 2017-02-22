@extends('layouts.app')

@section('htmlheader_title')
Perimontu
@endsection

@section('contentheader_title')
Perimontu
@endsection

@section('$contentheader_description')
@endsection

@section('main-content')

<section class="content">

      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pasajeros</span>
              <span class="info-box-number">14</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-road"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">KM</span>
              <span class="info-box-number">53 KM</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pasajes</span>
              <span class="info-box-number">$ 6.000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-car"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Activos</span>
              <span class="info-box-number">3 Autos</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>


 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detalle de Vehículos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>N°</th>
                  <th>Vehículo</th>
                  <th>Total Pasajeros</th>
                  <th>Recaudación</th>
                  <th>Conductor</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td><form action="{{ url('Vehiculos/Detalles') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_incidente" value="1">
                        <button type="submit" >BGTT - 20</button></form></td>
                  <td>3</td>
                  <td>$ 1.500</td>
                  <td>Gabriel Quintana Arroyo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><form action="{{ url('Vehiculos/Detalles') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_incidente" value="1">
                        <button type="submit" >GVYC - 31</button></form></td>
                  <td>2</td>
                  <td>$ 1.000</td>
                  <td>José Miguel Araujo Torres</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><form action="{{ url('Vehiculos/Detalles') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_incidente" value="1">
                        <button type="submit" >FPYZ - 96</button></form></td>
                  <td>7</td>
                  <td>$ 3.500</td>
                  <td>Juan Alarcón Garcia</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>N°</th>
                  <th>Vehículo</th>
                  <th>Total Pasajeros</th>
                  <th>Recaudación</th>
                  <th>Conductor</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            <iframe src="https://www.google.com/maps/d/embed?mid=1z_mTxk_K3Rifqp4XU7vxnrkrZb8" width="100%" height="480"></iframe>

</section>

@endsection