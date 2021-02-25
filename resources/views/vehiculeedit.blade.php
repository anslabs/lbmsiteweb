@extends('layouts.sbadmin') 
@section('title')
    {{ __('Véhicules ') }}
@endsection
@section('content')
    <div class="container mt-5">
    <p><a href="{{ url('/vehicule') }}"  class="text-primary"> <i class="fas fa-fw fa-arrow-left text-primary"></i>Tous nos Véhicules</a></p>

    <form action="{{ route('vehicule.update',$event->id) }}" method="post" enctype="multipart/form-data">
    @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title ">
                            <h4>{{ $event->model }}</h4>
                        </div>                       
                    </div>

                    <div class="card-body">
                    <!-- print success message after file upload  -->
                            @if(Session::has('success'))
                     
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ Session::get('success') }}
                                    @php
                                    Session::forget('success');
                                    @endphp
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="form-group" {{ $errors->has('marque') ? 'has-error' : '' }}>
                            <label for="marque">Marque</label>
                            <select class="form-control" id="marque" name="marque">
                            @foreach($marques as $marque)

                                <option value="{{ $marque->id }}">{{ $marque->name }}</option>
                            @endforeach

                            </select>                            
                            <span class="text-danger"> {{ $errors->first('marque') }}</span>
                        </div>

                        <div class="form-group" {{ $errors->has('model') ? 'has-error' : '' }}>
                            <label for="model">Modèle</label>
                            <input type="text" class="form-control" id="model" name="model" aria-describedby="modelHelp" value="{{ $event->model }}"  required>
                            <span class="text-danger"> {{ $errors->first('model') }}</span>
                        </div>

                        <div class="form-group" {{ $errors->has('description') ? 'has-error' : '' }}>
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description"  rows="4">{{ $event->description }}</textarea>
                            <span class="text-danger"> {{ $errors->first('description') }}</span>
                        </div>

                        <div class="form-group" {{ $errors->has('moteur') ? 'has-error' : '' }}>
                            <label for="moteur">Moteur</label>
                            <select class="form-control" id="moteur" name="moteur">
                                <option>Hybride</option>
                                <option>Electrique</option>
                                <option>Essence</option>
                                <option>Diesel</option>
                            </select>                            
                            <span class="text-danger"> {{ $errors->first('moteur') }}</span>
                        </div>

                        <div class="form-group" {{ $errors->has('price') ? 'has-error' : '' }}>
                            <label for="price">Prix</label>
                            <input type="number" class="form-control" id="price" name="price" aria-describedby="priceHelp" value="{{ $event->price }}"  required>
                            <span class="text-danger"> {{ $errors->first('price') }}</span>
                        </div>

                        <div class="form-group" {{ $errors->has('image1') ? 'has-error' : '' }}>
                                <label for="image1">Image</label>
                                <input type="file" name="image1" id="image1" class="form-control"  accept=".png, .jpg, .jpeg">
                                <span class="text-danger"> {{ $errors->first('image1') }}</span>
                        </div>  

                    
                    </div>

                    <div class="card-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-md"> Enregistrer </button>
                        </div> 

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection