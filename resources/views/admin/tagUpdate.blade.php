




@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

 
@stop

@section('content')

    
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ajouter un nouveau tag</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="/admin/tag/{{$tags->id}}/update" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
                <div class="box-body">
                    <div class="form-group">
                            <label for="exampleInputEmail1">Nom : </label>
                            <input type="text" class="form-control"  name="name">
                    </div>
               
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
            </form>
            
        </div>




 
    
@stop
