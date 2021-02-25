@extends('layouts.sbadmin') 
@section('title')
    {{ __('Nos Annonces') }}
@endsection
@section('content')
            <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Toutes les annonces</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Titre</th>
            <th>Ouvrir</th>
            <th>Modifier</th>
            <th>Suprimer</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>Titre</th>
            <th>Ouvrir</th>
            <th>Modifier</th>
            <th>Suprimer</th>
          </tr>
        </tfoot>
        <tbody>
         
          @foreach($annonces as $event)
          <tr>
            <td>{{ $event->titre }}</td>
            <td> 
                <a class="btn btn-info disabled" href="{{ route('annonce.show', $event->id) }}">Ouvrir</a>
            </td>
            <td>{!! $event->article !!}</td>
            <td>
                <form action="{{ route('annonce.destroy', $event->id) }}" method="post">
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