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

<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-car"></i> Vehículo:  BGTT - 20.
            <small class="pull-right">Fecha: 19/10/2016</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          Conductor
          <address>
            <strong>Gabriel Quintana Arroyo</strong><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Horario
          <address>
            <strong>07:00 - 13:00 / 14:00 - 21:00</strong><br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Velocidad Máxima:</b> 95 KM/Hora<br>
          <b>KM Recorridos:</b> 21 KM<br> <br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">

      	<div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa  fa-map-marker"></i> Ubicación Actual
            <small class="pull-right">Hora: 22:23:22</small>
          </h2>
        </div>
        <div class="col-xs-12 table-responsive">
          <iframe src="https://www.google.com/maps/d/embed?mid=1jiDEC4zgkYjbfhALpQH-j6QSuS4" width="100%" height="480"></iframe>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <br>
      <div class="row">
        <!-- accepted payments column -->
		<div class="col-xs-6">
          <p class="lead">Movimientos</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Valor Pasaje:</th>
                <td>$ 500</td>
              </tr>
              <tr>
                <th>Pasajeros</th>
                <td>3</td>
              </tr>
              <tr>
                <th>Recaudación:</th>
                <td>$ 1.500</td>
              </tr>
            </table>
          </div>
        </div>

        <div class="col-xs-6">
          <p class="lead">Detalles</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Total Circuito:</th>
                <td>10 Vueltas</td>
              </tr>
              <tr>
                <th>Vueltas Realizadas</th>
                <td>4</td>
              </tr>
              <tr>
                <th>Vueltas Pendiente:</th>
                <td>6</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="#" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generar PDF
          </button>
        </div>
      </div>
    </section>

@endsection