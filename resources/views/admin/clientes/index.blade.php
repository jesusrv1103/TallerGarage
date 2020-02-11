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
    <li class="active">Menu</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
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
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                      aria-expanded="false">Buscar por:
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
                <label>Tipo</label>
                <select class="form-control">
                  <option>Fisica</option>
                  <option>Moral</option>
                </select>
              </div>

            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                <label>Tipo</label>
                <select class="form-control">
                  <option>Fisica</option>
                  <option>Moral</option>
                </select>
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