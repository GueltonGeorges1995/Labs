@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')
@if ($errors->any())
<div  class="alert alert-danger alert-dismissible">
@foreach ($errors->all() as $error)
<li>
{{$error}}
</li>
@endforeach
</div>
@endif
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Modification des éléments de la section de about</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="/admin/about" enctype="multipart/form-data">
    @csrf
    @METHOD('PATCH')
    <div class="box-body">

      <div class="form-group">
        <label for="exampleInputEmail1">Titre : </label>
      <input type="text" class="form-control" value="{{$aboutitems->titre}}" name="titre" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Text de gauche : </label>
        <textarea name="textGauche" id=""  class="form-control" required>{{$aboutitems->textGauche}}</textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Text de droite : </label>
        <textarea name="textDroite" id=""  class="form-control" required>{{$aboutitems->textDroite}}</textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Image sur la vidéo : </label>
      <input type="file" class="form-control" value="{{$aboutitems->imgPath}}" name="imgPath" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Liens de la vidéo : </label>
      <input type="text" class="form-control" value="{{$aboutitems->videoPath}}" name="videoPath" required>
      </div>

     
      
      
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Modifier les éléments</button>
    </div>
  </form>
</div>
    
@stop
