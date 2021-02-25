@extends('layouts.sbadmin') 
@section('title')
    {{ __('Evénements') }}
@endsection
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tous les événements</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Titre</th>
            <th>Résumé</th>
            <th>Ouvrir</th>
            <th>Modifier</th>
            <th>Suprimer</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>Titre</th>
            <th>Résumé</th>
            <th>Ouvrir</th>
            <th>Modifier</th>
            <th>Suprimer</th>
          </tr>
        </tfoot>
        <tbody>
         
          @foreach($events as $event)
          <tr>
            <td>{{ $event->title }}</td>
            <td>{{ $event->description }}</td>
            <td> 
                <a class="btn btn-info" href="{{ route('evenement.show', $event->id) }}">Show</a>
            </td>
            <td><a href="{{ route('evenement.edit',$event->id) }}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('evenement.destroy', $event->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
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