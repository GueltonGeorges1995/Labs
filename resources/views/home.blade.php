@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 style="margin-bottom:30px;">Bienvenue dans l'admin du Labs</h1>

    <div class="box box-primary">
        <div class="box-header with-border">
        <h3 class="box-title">Mettre à jour vos données personnelles : {{$user->name}}</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="/home/update" enctype="multipart/form-data">
          @csrf
          @METHOD('PATCH')
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Email :</label>
            <input type="email" class="form-control"   name="email" value="{{$user->email}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password :</label>
            <input type="password" class="form-control" name="password" required >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Biographie :</label>
                <textarea name="text" id="" class="form-control">{{$user->text}}</textarea>
              </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile" name="imgPath">

            </div>
           
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
          </div>
        </form>
      </div>
@stop

@section('content')

    
@stop
