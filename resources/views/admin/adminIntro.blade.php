@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Modification des liens de la barre de navigation</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="/admin/intro" enctype="multipart/form-data">
    @csrf
    @METHOD('PATCH')
    <div class="box-body">

      <div class="form-group">
        <label for="exampleInputEmail1">Text en dessous du Logo : </label>
        <input type="text" class="form-control" value="{{$introitems->textIntro}}" name="textIntro">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Logo: </label>
        <input type="file" class="form-control" value="{{$introitems->imgPathIntro}}" name="imgPathIntro">
      </div>
      
      
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Modifier le contenu</button>
    </div>
  </form>
</div>
    
@stop
