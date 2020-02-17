@extends('welcome')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        AUTOCONEX
        <small>SISTEMA DE CONTROL DE SERVICIOS EXPRESS GARAGE</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Vehiculos</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Presupuestos</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">

                    <div class="box-body">


                        <div class="row">

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>No Orden:</label>
                                        <input type="text" class="form-control" placeholder="P000061">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                                <div class="form-group">
                                    <label>Fecha:</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select class="form-control">
                                        <option>Presupuesto</option>
                                        <option>Orden de servicio</option>
                                    </select>
                                </div>
                            </div>

                        </div>


                        <div class="box-header with-border">
                            <h3 class="box-title">Cliente</h3>
                        </div>


                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="form-control">
                                        <option>Juanita Lopez</option>
                                        <option>Luis Sandoval Perez</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                                <div class="form-group">
                                    <label>Vehiculo</label>
                                    <select class="form-control">
                                        <option>JEF889</option>
                                        <option>45DS-FDD</option>
                                    </select>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Refacciones</h3>
                                </div>

                                <div class="box-header">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>
                                            Añadir</button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-remove"></i>
                                            Eliminar</button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-opencart"></i>
                                            Actualizar almacen</button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-condensed">
                                        <tbody>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Cantidad</th>
                                                <th>Clave</th>
                                                <th>Numero</th>
                                                <th>Descripcion</th>
                                                <th>Precio</th>
                                                <th>Total</th>
                                            </tr>
                                            <tr>
                                                <td style="width: 10px">1</td>
                                                <td>1</td>
                                                <td>25171500</td>
                                                <td>JG203TXT</td>
                                                <td>Juego de balatas</td>
                                                <td>645</td>
                                                <td>Total</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>

                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Mano de obra</h3>
                                </div>

                                <div class="box-header">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>
                                            Añadir</button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-remove"></i>
                                            Eliminar</button>

                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-condensed">
                                        <tbody>
                                            <tr>
                                                <th style="width: 10px">#</th>

                                                <th>Clave</th>

                                                <th>Descripcion</th>
                                                <th>Precio</th>
                                                <th>Total</th>
                                            </tr>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>1</th>


                                                <th>4356</th>
                                                <th>SERVICIO MECANICO PARA CAMBIAR LAS BALATAS TRASERAS</th>
                                                <th>3200.22</th>
                                                <th>3200.22</th>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>

                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Totales</h3>
                                </div>


                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-condensed">
                                        <tbody>
                                            <tr>
                                                <th>Concepto</th>
                                                <th>Monto</th>
                                            </tr>
                                            <tr>
                                                <td>Partes</td>
                                                <td>www</td>
                                            </tr>
                                            <tr>
                                                <td>M/O</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Descuento %</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Descuento (valor):</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td></td>
                                            </tr>

                                    
                                            <tr>
                                                <td>IVA %</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td></td>
                                            </tr>


                                            <tr>
                                                <td>Anticipos</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                    <td>Por pagar</td>
                                                    <td></td>
                                            </tr>
                                            <tr>
                                                    <td>Fecha Ingreso</td>
                                                    <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>

                        </div>



                        <div class="row col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">

                            </div>


                            <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
                                <div class="form-group">
                                    <button type="button" class="btn btn-block btn-default"><i
                                            class="fa fa-print"></i>Imprimir</button>

                                </div>&nbsp;
                            </div>
                            <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
                                <div class="form-group">
                                    <button type="button" class="btn btn-block btn-danger"><i class="fa fa-remove">
                                            Borrar</i></button>

                                </div>&nbsp;
                            </div>

                            <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">
                                <div class="form-group">
                                    <button type="button" class="btn btn-block btn-primary"><i class="fa fa-save"></i>
                                        Guardar</button>

                                </div>&nbsp;
                            </div>

                            <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">

                            </div>

                        </div>





















                </form>
            </div>
            <!-- /.box -->





            <!-- /input-group -->
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->


</section>
<!-- /.content -->
@endsection