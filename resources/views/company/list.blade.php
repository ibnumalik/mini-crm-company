@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
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
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
  </div>
</div>

@endsection