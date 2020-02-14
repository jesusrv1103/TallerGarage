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
    <li class="active">Clientes</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Ficha de clientes</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">

          <div class="box-body">
            <div class="row">
              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <label>Busqueda por:</label>
                <div class="input-group input-group-xs">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Buscar por:
                      <span class="fa fa-caret-down"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Nombre</a></li>
                      <li><a href="#">Numero de cliente</a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="form-group col-lg-6 col-xs-6">
                <label>Numero de cliente</label>
                <input type="text" class="form-control" placeholder="435457764332">
              </div>


            </div>


            <div class="row">

              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                  <label>Tipo de persona</label>
                  <select class="form-control">
                    <option>Fisica</option>
                    <option>Moral</option>
                  </select>
                </div>

              </div>
              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                  <label>RFC</label>
                  <input type="text" class="form-control" placeholder="RAVJ931103F33">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" placeholder="IVAN IZQUIERDO MONTIEL">
                </div>
              </div>



            </div>

            <div class="box-header with-border">
              <h3 class="box-title">Domicilio</h3>
            </div>

            <div class="row">

              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                <div class="form-group">
                  <label>Colonia:</label>
                  <input type="text" class="form-control" placeholder="Fuentes de Tepepan, Tlalpan">
                </div>
              </div>

              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                <div class="form-group">
                  <label>Calle</label>
                  <input type="text" class="form-control" placeholder="Piedra del Comal">
                </div>
              </div>

              <div class="col-lg-2 col-sm-2 col-md-2 col-xs-4">
                <div class="form-group">
                  <label>Numero:</label>
                  <input type="text" class="form-control" placeholder="45">
                </div>
              </div>


              <div class="col-lg-2 col-sm-2 col-md-2 col-xs-4">
                <div class="form-group">
                  <label>C.P:</label>
                  <input type="text" class="form-control" placeholder="45678">
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                <div class="form-group">
                  <label>Telefono 1:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                  </div>
                  <!-- /.input group -->
                </div>
              </div>

              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                <div class="form-group">
                  <label>Telefono 2:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                  </div>
                  <!-- /.input group -->
                </div>
              </div>

              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                <div class="form-group">
                  <label>Movil:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                  </div>
                  <!-- /.input group -->
                </div>
              </div>



            </div>

        

            <div class="box-header with-border">
              <h3 class="box-title">Credito</h3>
            </div>

            <div class="row">
              <div class="col-lg-4 col-sm-4 col-md-4 col-xs-8">
                <div class="form-group">
                  <label>Credito:</label>
                  <input type="text" class="form-control" placeholder="14000">
                </div>
              </div>

              <div class="col-lg-2 col-sm-2 col-md-2 col-xs-4">
                <div class="form-group">
                  <label>Dias:</label>
                  <input type="text" class="form-control" placeholder="5">
                </div>
              </div>
            </div>



            <div class="box-header with-border">
              <h3 class="box-title">Vehiculos de su propiedad</h3>
            </div>

            <div class="row">
              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="box">

                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-condensed">
                      <tbody>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th style="width: 22.5%">Matricula</th>
                          <th style="width: 22.5%">Marca</th>
                          <th style="width: 22.5%">Modelo</th>
                          <th style="width: 22.5%">Año</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>JEF889</td>
                          <td>VOLSWAGEN</td>
                          <td>
                            JETTA
                          </td>
                          <td>
                            2006
                          </td>
                        </tr>

                        <tr>
                          <td>2.</td>
                          <td>45DS-FDD</td>
                          <td>TOYOTA</td>
                          <td>
                            SIENA XLE
                          </td>
                          <td>
                            200
                          </td>
                          
                        </tr>
                       
                    
                      
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
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