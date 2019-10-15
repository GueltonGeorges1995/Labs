




@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@section('css')
    <link rel="stylesheet" href="/css/flaticon.css">
@endsection()
 
@stop

@section('content')


      <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Modification du membre {{$teams->id}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="/admin/team/{{$teams->id}}/update" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">
                <div class="form-group">
                        <label for="exampleInputEmail1">Image : </label>
                        <input type="file" class="form-control"  name="imgPath">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom : </label>
                    <input type="text" class="form-control"  name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Function : </label>
                    <input type="text" class="form-control"  name="function">
                </div>
            

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
            
        </div>




 
    
@stop
