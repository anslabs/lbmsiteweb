@extends('layouts.sbadmin') 
@section('title')
    {{ __('Evénements') }}
@endsection
@section('content')
    <div class="content mt-3">
        <div class="col-sm-12">
            <div class="login-logo">
                <a href="{{ route('pilotevideo.create') }}">
                    <h2><i style="color:#000000">{{ __('Nouvelle video pilote') }}</i></h2>
                </a>
            </div>
            <div class="login-form"> 
                <form action="{{ route('pilotevideo.store') }}" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- print success message after file upload  -->
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                            @php
                                            Session::forget('success');
                                            @endphp
                                        </div>
                                    @endif

                                    <div class="form-group" {{ $errors->has('title') ? 'has-error' : '' }}>
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="title" required>
                                        <span class="text-danger"> {{ $errors->first('title') }}</span>
                                    </div>

                                    <div class="form-group" {{ $errors->has('speculation') ? 'has-error' : '' }}>
                                        <label for="speculation">Spéculation</label>
                                        <input type="text" class="form-control" id="title" name="speculation" aria-describedby="titleHelp" placeholder="spéculation" required>
                                        <span class="text-danger"> {{ $errors->first('speculation') }}</span>
                                    </div>

                                    <div class="form-group" {{ $errors->has('resume') ? 'has-error' : '' }}>
                                        <label for="resume">Resume</label>
                                        <textarea class="form-control" id="resume" name="resume" rows="3" required></textarea>
                                        <span class="text-danger"> {{ $errors->first('resume') }}</span>
                                    </div>


                                    <div class="form-group" {{ $errors->has('photo') ? 'has-error' : '' }}>
                                        <label for="photo"></label>
                                        <input type="file" name="photo" id="photo" class="form-control" required accept=".jpg, .png">
                                        <span class="text-danger"> {{ $errors->first('photo') }}</span>
                                    </div>

                                    <div class="form-group" {{ $errors->has('video') ? 'has-error' : '' }}>
                                        <label for="video"></label>
                                        <input type="file" name="video" id="video" class="form-control" required accept=".mp4, .avi">
                                        <span class="text-danger"> {{ $errors->first('video') }}</span>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-md"> Upload </button>
                                    </div>
                                    {{ csrf_field() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--/.col-->

    </div> <!-- .content -->
@endsection