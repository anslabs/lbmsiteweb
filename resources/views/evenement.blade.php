@extends('layouts.sbadmin') 
@section('title')
    {{ __('Evénements') }}
@endsection
@section('content')
    <div class="container mt-5">
    <form action="{{ route('evenement.store') }}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title ">
                            <h4>Evénements</h4>
                        </div>                       
                    </div>

                    <div class="card-body">
                    <!-- print success message after file upload  -->
                            @if(Session::has('success'))
                     
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            
                            <div class="form-group" {{ $errors->has('title') ? 'has-error' : '' }}>
                                <label for="title">Titre</label>
                                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="title" required>
                                <span class="text-danger"> {{ $errors->first('title') }}</span>
                            </div>

                            <div class="form-group" {{ $errors->has('photo') ? 'has-error' : '' }}>
                                <label for="photo">Image</label>
                                    <input type="file" name="photo" id="photo" class="form-control" required accept=".jpg, .png">
                                    <span class="text-danger"> {{ $errors->first('photo') }}</span>
                            </div>

                            <div class="form-group" {{ $errors->has('description') ? 'has-error' : '' }}>
                                <label for="description">Résumé</label>
                                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                                <span class="text-danger"> {{ $errors->first('description') }}</span>
                            </div>

                    
                            <div class="form-group" {{ $errors->has('texte') ? 'has-error' : '' }}>
                                <label for="article">Article</label>
                                <textarea class="form-control" id="article" name="article" rows="10"></textarea>
                                <span class="text-danger"> {{ $errors->first('video') }}</span>
                            </div>
                    </div>

                    <div class="card-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-md"> Enregistrer </button>
                        </div>
                        {{ csrf_field() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection