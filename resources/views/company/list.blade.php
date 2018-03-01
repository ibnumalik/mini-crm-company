@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col">

      @if (session('status'))
          <div id="alert" class="alert alert-success alert-dismissible fade show" role="success">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif

      <a href="{{ route('company.create') }}" class="btn btn-success mb-4">
        Create New Company
      </a>
        <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Website</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              {{--  {{dd($companies)}}  --}}
              @foreach ($companies as $company)
              <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{$company->name}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->website}}</td>
                <td>
                  <a href="{{ route('company.edit', ['company' => $company->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                  <form method="POST" action="{{ route('company.destroy', ['company' => $company->id]) }}" class="form--button">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
  </div>
</div>

@endsection

<script>
  window.setTimeout(function() {
    $(".alert").alert('close');
  }, 5000);
</script>