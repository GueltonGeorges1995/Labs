




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
            <h3 class="box-title">Modifier l'utilisateur {{$user->id}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form role="form" method="POST" action="/admin/user/{{$user->id}}/update" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image : </label>
                        <input type="file" name="imgPath" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom : </label>
                        <input type="text" name="name" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password : </label>
                        <input type="text" name="password" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email : </label>
                        <input type="text" name="email" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Description : </label>
                        <textarea name="text" class="form-control" required></textarea>
                    </div>

                    <div class="fomr-group" style="margin-bottom:30px;"> 
                        <label >Choisir un rôle</label>
                        <select name="role" id="pet-select">
                            <option value="guest">Guest</option>
                            <option value="editeur">Editeur</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>




 
    
@stop
