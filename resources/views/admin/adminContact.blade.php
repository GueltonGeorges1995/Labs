@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Modification du formulaire de contact</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="/admin/contact" enctype="multipart/form-data">
    @csrf
    @METHOD('PATCH')
    <div class="box-body">

        <div class="form-group">
            <label for="exampleInputEmail1">Titre : </label>
            <input type="text" class="form-control" value="{{$contacts->titre}}" name="titre">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Text : </label>
            <input type="text" class="form-control" value="{{$contacts->text}}" name="text">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Titre du bureau : </label>
            <input type="text" class="form-control" value="{{$contacts->officeTitre}}" name="officeTitre">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Adresse : </label>
            <input type="text" class="form-control" value="{{$contacts->adress}}" name="adress">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Téléphone : </label>
            <input type="text" class="form-control" value="{{$contacts->phone}}" name="phone">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email : </label>
            <input type="text" class="form-control" value="{{$contacts->email}}" name="email">
        </div>

    

     

     
      
      
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Modifier les éléments</button>
    </div>
  </form>
</div>
    
@stop
