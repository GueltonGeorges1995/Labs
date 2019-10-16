




@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')
      <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Modifier le project {{$projects->id}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form role="form" method="POST" action="/admin/project/{{$projects->id}}/update" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image : </label>
                        <input type="file" name="imgPath" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre : </label>
                        <input type="text" name="titre" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Text : </label>
                        <textarea name="text" id="" class="form-control"></textarea>
                    </div>
                   
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>
@stop
