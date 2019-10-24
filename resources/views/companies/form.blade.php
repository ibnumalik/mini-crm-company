@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h1>Create new company</h1>
            <form action="{{ route('companies.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter company name">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter company email address">
                    @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" id="website" name="website"
                        placeholder="Enter company website">
                    @error('website')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
