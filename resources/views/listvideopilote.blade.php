@extends('layouts.sbadmin') 
@section('title')
    {{ __('Evénements') }}
@endsection
@section('content')
    <div class="content mt-3">
        <div class="col-sm-12">
            <div class="login-logo">
                <a href="{{ route('pilotevideo.index') }}">
                    <h2><i style="color:#000000">{{ __('Régistre videos pilote') }}</i></h2>
                </a>
            </div>
            @include('errors')
            <div class="form-group">
                @foreach($datas as $data)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 m-auto p-2">
                        <div class="card shadow">
                            <img class="card-img-top" src="{{ asset('/public/uploads/pilotes/pics/'.$data->photo) }} " alt="{{ $data->title }} ">
                            <div class="card-body">
                                <p class="card-text">{{ $data->resume }}.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!--/.col-->

    </div> <!-- .content -->
@endsection