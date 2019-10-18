




@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')
      <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Modifier la categorie {{$categories->id}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="POST" action="/admin/category/{{$categories->id}}/update" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name : </label>
                    <input type="text" name="name" id="" class="form-control" value="{{$categories->name}}">
                    </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>




 
    
@stop
