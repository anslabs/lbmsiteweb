@extends('layouts.sbadmin') 
@section('title')
    {{ __('Nos marques') }}
@endsection
@section('content')
            <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Toutes les marques</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Logo</th>
            <th>Ouvrir</th>
            <th>Modifier</th>
            <th>Suprimer</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>Nom</th>
            <th>Logo</th>
            <th>Ouvrir</th>
            <th>Modifier</th>
            <th>Suprimer</th>
          </tr>
        </tfoot>
        <tbody>
         
          @foreach($marques as $event)
          <tr>
            <td>{{ $event->name }}</td>
            <td><img src="{{ asset('marques/') }}/{{ $event->logo }}" class="img-responsive" style="max-height:50px; max-width:50px;"/></td>
            <td> 
                <a class="btn btn-info disabled" href="{{ route('marque.show', $event->id) }}">Ouvrir</a>
            </td>
            <td><a href="{{ route('marque.edit',$event->id) }}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('marque.destroy', $event->id) }}" method="post">
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