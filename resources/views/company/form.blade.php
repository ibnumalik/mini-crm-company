@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-md-center">
      <div class="col col-lg-6">

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        <form class="border rounded p-4 bg-primary text-white" method="POST" action="/company">
          @csrf
          <h3 class="h3">Create Company</h3>
          <hr>
          <div class="form-group">
            <label for="companyName">Name</label>
            <input type="text" class="form-control" id="companyName" name="name" value="{{ old('name', $company->name) }}">
          </div>
          <div class="form-group">
            <label for="companyEmail">Email</label>
            <input type="email" class="form-control" id="companyEmail" name="email" value="{{ old('email', $company->email) }}">
          </div>
          <div class="form-group">
            <label for="companyLogo">Logo</label>
            <input type="file" class="form-control-file" id="companyLogo" name="logo">
          </div>
          <div class="form-group">
            <label for="companyWebsite">Website</label>
            <input type="text" class="form-control" id="companyWebsite" name="website" value="{{ old('website', $company->website) }}">
          </div>
          <button class="btn btn-success" type="submit">Create</button>
        </form>
      </div>
    </div>
</div>

@endsection