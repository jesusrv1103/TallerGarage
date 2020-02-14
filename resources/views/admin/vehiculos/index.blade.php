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
                    <h3 class="box-title">Vehiculos</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                <div class="form-group">
                                    <label>Buscar por Matricula: </label>
                                    <input type="text" class="form-control" placeholder="45DS-FDFD">
                                </div>


                            </div>
                        </div>
                        <div class="box-header with-border">
                            <h3 class="box-title">Datos del vehiculo</h3>
                        </div>


                        <div class="row">

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Matricula</label>
                                    <input type="text" class="form-control" placeholder="45DS-FDFD">
                                </div>

                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Marca</label>
                                    <select class="form-control">
                                        <option>TOYOTA</option>
                                        <option>VOLVO</option>
                                        <option>SUZUKI</option>
                                    </select>
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>SERIAL/VN</label>
                                    <input type="text" class="form-control" placeholder="4G3F43DF4GER54G2423E">
                                </div>

                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Transmision</label>
                                    <select class="form-control">
                                        <option></option>
                                        <option>VOLVO</option>
                                        <option>SUZUKI</option>
                                    </select>
                                </div>
                            </div>

                        </div>



                        <div class="row">

                            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-4">
                                <div class="form-group">
                                    <label>Año:</label>
                                    <input type="text" class="form-control" placeholder="2020">
                                </div>
                            </div>

                            <div class="col-lg-5 col-sm-5 col-md-5 col-xs-10">
                                <label>Modelo</label>
                                <select class="form-control">
                                    <option>Etios</option>
                                    <option>Yaris</option>
                                    <option>Corolla</option>
                                </select>
                            </div>

                            <div class="col-lg-5 col-sm-5 col-md-5 col-xs-10">
                                <div class="form-group">
                                    <label>Motor</label>
                                    <input type="text" class="form-control" placeholder="V6 3.5L 3456CC  211CI">
                                </div>
                            </div>


                        </div>



                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <div class="form-group">
                                    <label>Serial:</label>
                                    <input type="text" class="form-control" placeholder="4">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <label>Color:</label>
                                <select class="form-control">
                                    <option>Rojo</option>
                                    <option>Azul</option>
                                    <option>Cafe</option>
                                </select>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <label>Transmision</label>
                                <select class="form-control">
                                    <option>Automatica</option>
                                    <option>Manual</option>

                                </select>
                            </div>

                        </div>



                        <div class="row">


                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <label>Tipo:</label>
                                <select class="form-control">
                                    <option>Van</option>
                                    <option>Combi</option>
                                </select>
                            </div>

                            

                          

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <label>Sistema de combustion</label>
                                <select class="form-control">
                                    <option>Inyeccion</option>
                                </select>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <label>Combustible:</label>
                                <select class="form-control">
                                    <option>Gasolina</option>
                                    <option>Diesel</option>
                                </select>
                            </div>

                        </div>


                        <div class="row">


                         

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <label>Dirreccion:</label>
                                <select class="form-control">
                                    <option>Hidraulica</option>
                                </select>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <br>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                            Aire acondicionado
                                        </label>
                                    </div>


                                </div>
                            </div>

                        </div>





                        <div class="box-header with-border">
                            <h3 class="box-title">Datos del cliente: (Propietario)</h3>
                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <div class="form-group">
                                    <label>ID Cliente:</label>
                                    <input type="text" class="form-control" placeholder="00002748">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <div class="form-group">
                                    <label>Identificacion</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" placeholder="JUAN PEREZ GARCIA">
                                </div>
                            </div>


                        </div>


                        <div class="box-header with-border">
                            <h3 class="box-title">Seguro/empresa</h3>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <div class="form-group">
                                    <label>ID SEG/EMPRESA</label>
                                    <input type="text" class="form-control" placeholder="JUAN PEREZ GARCIA">
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                                <label>Aseguradora:</label>
                                <select class="form-control">
                                    <option>ASEGURADORA LA CALIDAD</option>
                                    <option>QUALITAS</option>
                                </select>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-4">
                                <div class="form-group">
                                    <label>Observaciones</label>
                                    <textarea class="form-control" rows="3" placeholder="Observaciones"></textarea>
                                </div>
                            </div>



                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                                <br><br>
                                <div class="form-group">
                                    <a class="btn btn-app">

                                    
                                        <i class="fa fa-list-alt"></i> Historial
                                    </a>
                                </div>
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