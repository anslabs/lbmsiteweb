@extends('layouts.sbadmin') 
@section('title')
    {{ __('Evénements') }}
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Vue évènement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/evenement') }}"> Précédent</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre:</strong>
                {{ $event->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Résumé:</strong>
                {{ $event->description }}
            </div>
        </div>
    </div>

    </div>
<!-- /.container-fluid -->
@endsection