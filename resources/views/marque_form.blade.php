@extends('layouts.sbadmin')
@section('title')
{{ __('Accessoires') }}
@endsection
@section('content')
<div class="container mt-5">
<p><a href="{{ url('/marque') }}"  class="text-primary"> <i class="fas fa-fw fa-arrow-left text-primary"></i>Toutes nos Marques</a></p>

    <form action="{{ route('marque.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title ">
                            <h4 class="push-rigth">Nouvelle Marque</h4>
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
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="modelHelp" placeholder="Nom" required>
                            <span class="text-danger"> {{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-group" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control" required accept=".png, .jpg, .jpeg">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
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
    </form>
@endsection
