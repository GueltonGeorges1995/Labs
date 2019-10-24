




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
            <h3 class="box-title">Modification de l'article {{$articles->id}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form role="form" method="POST" action="/admin/article/{{$articles->id}}/update" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image : </label>
                        <input type="file" name="imgPath" id="" class="form-control" value="{{$articles->imgPath}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre : </label>
                        <input type="titre" name="titre" id="" class="form-control" value="{{$articles->titre}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Text : </label>
                        <textarea name="text" id="" class="form-control" required>{{$articles->text}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Categorie : </label>
                        <select name="category" id="pet-select">
                            
                            @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Ajouter un ou plusieurs tag(s) </label>

                        @foreach ($tags as $tag)
                            <div>
                            <input type="checkbox" id="scales" name="{{$tag->name}}">
                                <label for="scales">{{$tag->name}}</label>
                            </div>
                        @endforeach
                    </div>

                  
                    
                   
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>
    
@stop
