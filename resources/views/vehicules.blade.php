@extends('layouts.sbadmin') 
@section('title')
    {{ __('Véhicules') }}
@endsection
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tous les véhicules</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Prix</th>
            <th>Moteur</th>
            <th>Ouvrir</th>
            <th>Modifier</th>
            <th>Suprimer</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Prix</th>
            <th>Moteur</th>
            <th>Ouvrir</th>
            <th>Modifier</th>
            <th>Suprimer</th>
          </tr>
        </tfoot>
        <tbody>
         
          @foreach($events as $event)
          <tr>
            <td>{{ $event->name_marque }}</td>
            <td>{{ $event->model }}</td>
            <td>{{ $event->price }}</td>
            <td>{{ $event->moteur }}</td>
            <td> 
                <a class="btn btn-info disabled" href="{{ route('vehicule.show', $event->id) }}">Voir</a>
            </td>
            <td><a href="{{ route('vehicule.edit',$event->id) }}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('vehicule.destroy', $event->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>

          </tr>
           
            @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection