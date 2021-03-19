@extends('layouts.sbadmin') 
@section('title')
    {{ __('Marque') }}
@endsection
@section('content')
    <div class="container mt-5">
    <p><a href="{{ url('/marque') }}"  class="text-primary"> <i class="fas fa-fw fa-arrow-left text-primary"></i>Toutes nos Marques</a></p>

    <form action="{{ route('marque.update',$marque->id) }}" method="post" enctype="multipart/form-data">
    @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title ">
                            <h4>{{ $marque->name }}</h4>
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

                            
                        <div class="form-group" {{ $errors->has('name') ? 'has-error' : '' }}>
                            <label for="name">Titre</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="{{ $marque->name }}"  placeholder="title" required>
                            <span class="text-danger"> {{ $errors->first('name') }}</span>
                        </div>

                        
                        <div class="form-group" {{ $errors->has('slogan') ? 'has-error' : '' }}>
                            <label for="slogan">Slogan</label>
                            <input type="text" class="form-control" id="slogan" name="slogan" aria-describedby="modelHelp"  value="{{ $marque->slogan }}"  placeholder="slogan" required>
                            <span class="text-danger"> {{ $errors->first('slogan') }}</span>
                        </div>

                        <div class="form-group" {{ $errors->has('marqueurlpath') ? 'has-error' : '' }}>
                            <label for="marqueurlpath">Site web du constructeur au Bénin</label>
                            <input type="url" class="form-control" id="marqueurlpath" name="marqueurlpath" aria-describedby="modelHelp" value="{{ $marque->marqueurlpath }}" placeholder="Site web " >
                            <span class="text-danger"> {{ $errors->first('marqueurlpath') }}</span>
                        </div>

                        <div class="form-group" {{ $errors->has('image') ? 'has-error' : '' }}>
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control"  accept=".png, .jpg, .jpeg">
                            <span class="text-danger"> {{ $errors->first('image') }}</span>
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