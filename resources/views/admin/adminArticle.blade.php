




@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
        
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>imgPath</th>
                  <th>Titre</th>
                  <th>user_id</th>
                  <th>category_id</th>
                  <th>tags</th>
                  <th>Delete</th>
                  <th>UPDATE</th>
                </tr>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->imgPath}}</td>
                        <td>{{$article->titre}}</td>
                        <td>{{$article->user_id}}</td>
                        <td>{{$article->category_id}}</td>
                        <td>@foreach ($article->tags()->get() as $tag)
                                {{$tag->name}}
                            @endforeach
                            </td>
                        <td><a href="/admin/project/{{$article->id}}/delete" class="btn btn-danger">Delete</a></td>
                        <td><a href="/admin/project/{{$article->id}}/update" class="btn btn-success">Update</a></td>
                    </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>



      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ajouter un nouvel article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="POST" action="/admin/article" enctype="multipart/form-data">
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
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Categorie : </label>
                        <select name="pets" id="pet-select">
                            <option value="">--Please choose an option--</option>
                            
                            @foreach ($categories as $category)
                              <option value="{{$category->name}}">{{$category->name}}</option>
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
