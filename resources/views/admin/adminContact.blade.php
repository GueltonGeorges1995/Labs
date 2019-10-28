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
            <input type="text" class="form-control" value="{{$contacts->titre}}" name="titre" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Text : </label>
            <input type="text" class="form-control" value="{{$contacts->text}}" name="text" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Titre du bureau : </label>
            <input type="text" class="form-control" value="{{$contacts->officeTitre}}" name="officeTitre" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Adresse : </label>
            <input type="text" class="form-control" value="{{$contacts->adress}}" name="adress" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Téléphone : </label>
            <input type="number" class="form-control" value="{{$contacts->phone}}" name="phone" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email : </label>
            <input type="email" class="form-control" value="{{$contacts->email}}" name="email" required>
        </div>

    

     

     
      
      
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Modifier les éléments</button>
    </div>
  </form>
</div>
    
@stop
