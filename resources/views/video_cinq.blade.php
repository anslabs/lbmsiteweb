@extends('layouts.sbadmin') 
@section('title')
    {{ __('Evénements') }}
@endsection
@section('content')
    <div class="container mt-5">
    <form action="{{ route('videosection5.store') }}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title ">
                            <h4>Vidéo Section 5</h4>
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

                            @endif
                            
                            <div class="form-group" {{ $errors->has('title') ? 'has-error' : '' }}>
                                <label for="title">Titre</label>
                                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="title" required>
                                    <span class="text-danger"> {{ $errors->first('title') }}</span>
                            </div>

                            <div class="form-group" {{ $errors->has('video') ? 'has-error' : '' }}>
                                <label for="video">Vidéo</label>
                                    <input type="file" name="video" id="video" class="form-control" required accept=".mp4, .avi">
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