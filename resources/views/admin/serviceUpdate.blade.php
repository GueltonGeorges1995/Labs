




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
            <h3 class="box-title">{{$services->titre}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form role="form" method="POST" action="/admin/service/{{$services->id}}/update" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">
         
                    <div class="form-group">
                            <label for="exampleInputEmail1">Titre : </label>
                            <input type="text" class="form-control"  name="serviceTitre">
                    </div>
            
                        <div class="form-group">
                            <label for="exampleInputEmail1">Text : </label>
                            <input type="text" class="form-control"  name="serviceText">
                        </div>
            
                        <div class="form-group">
                            <label for="exampleInputEmail1">Logo : </label>
                            <select name="serviceLogo">
                                    <option>--Veuillez choisir un logo--</option>
                                    <option value="flaticon-001-picture">Image</option>
                                    <option value="flaticon-002-caliper">Compat</option>
                                    <option value="flaticon-003-energy-drink">Boisson energétique</option>
                                    <option value="flaticon-004-build">Construire</option>
                                    <option value="flaticon-005-thinking-1">Penser</option>
                                    <option value="flaticon-006-prism">Prism</option>
                                    <option value="flaticon-007-paint">Peinture</option>
                                    <option value="flaticon-008-team">Equipe</option>
                                    <option value="flaticon-009-idea-3">Idée</option>
                                    <option value="flaticon-010-diamond">Diamant</option>
                                    <option value="flaticon-011-compass">Boussole</option>
                                    <option value="flaticon-012-cube">Cube</option>
                                    <option value="flaticon-013-puzzle">Puzzle</option>
                                    <option value="flaticon-014-magic-wand">Baguette Magique</option>
                                    <option value="flaticon-015-book">Livre</option>
                                    <option value="flaticon-016-vision">Vision</option>
                                    <option value="flaticon-017-notebook">Livre de note</option>
                                    <option value="flaticon-018-laptop-1">Ordinateur portable</option>
                                    <option value="flaticon-019-coffee-cup">Tasse de café</option>
                                    <option value="flaticon-020-creativity">Créatifivé</option>
                                    <option value="flaticon-021-thinking">Penser 2</option>
                                    <option value="flaticon-022-branding">Branding</option>
                                    <option value="flaticon-023-flask">Fiole</option>
                                    <option value="flaticon-024-idea-2">Idée 2</option>
                                    <option value="flaticon-025-imagination">Imagination</option>
                                    <option value="flaticon-026-search">Rechercher</option>
                                    <option value="flaticon-027-monitor">Ecran</option>
                                    <option value="flaticon-028-idea-1">Idée 3</option>
                                    <option value="flaticon-029-sketchbook">Livre</option>
                                    <option value="flaticon-030-computer">Ordinateur</option>
                                    <option value="flaticon-031-scheme">Shema</option>
                                    <option value="flaticon-032-explorer">Explorer</option>
                                    <option value="flaticon-033-museum">Musé</option>
                                    <option value="flaticon-034-cactus">Cactus</option>
                                    <option value="flaticon-035-smartphone">GSM</option>
                                    <option value="flaticon-036-brainstorming">Brainstorming</option>
                                    <option value="flaticon-037-idea">Idée 4</option>
                                    <option value="flaticon-038-graphic-tool-1">Outil de graphisme</option>
                                    <option value="flaticon-039-vector">Vecteur</option>
                                    <option value="flaticon-040-rgb">RGB</option>
                                    <option value="flaticon-041-graphic-tool">Outil de graphisme 2</option>
                                    <option value="flaticon-042-typography">Typographie</option>
                                    <option value="flaticon-043-sketch">Sketch</option>
                                    <option value="flaticon-044-paint-bucket">Pot de peinture</option>
                                    <option value="flaticon-045-video-player">Lecteur de vidéo</option>
                                    <option value="flaticon-046-laptop">Ordinateur portable 2</option>
                                    <option value="flaticon-047-artificial-intelligence">IA</option>
                                    <option value="flaticon-048-abstract">Abstrait</option>
                                    <option value="flaticon-049-projector">Projecteur</option>
                                    <option value="flaticon-050-satellite">Satelite</option>
                                   
                             
                            </select>
                        </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
              </div>
            </form>
          </div>




 
    
@stop
