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
    <h3 class="box-title">Modification des titres</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="/admin/titre" enctype="multipart/form-data">
    @csrf
    @METHOD('PATCH')
    <div class="box-body">

      <div class="form-group">
        <label for="exampleInputEmail1">Titre testimonial: </label>
        <input type="text" class="form-control" value="{{$titres->testimonialTitre}}" name="testimonialTitre" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Titre service: </label>
        <input type="text" class="form-control" value="{{$titres->serviceTitre}}" name="serviceTitre" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Titre team: </label>
        <input type="text" class="form-control" value="{{$titres->teamTitre}}" name="teamTitre" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Titre phone: </label>
        <input type="text" class="form-control" value="{{$titres->phoneTitre}}" name="phoneTitre" required>
      </div>

     

     
      
      
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Modifier les éléments</button>
    </div>
  </form>
</div>
    
@stop
