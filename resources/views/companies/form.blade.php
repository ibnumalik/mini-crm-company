@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h1>{{ $company ?? '' ?? '' ? 'Edit ' . $company->name : 'Create new company' }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">

            @if ($company ?? '')
                <form action="{{ route('companies.update', ['company' => $company->id]) }}" method="post">
                @method('PUT')
            @else
                <form action="{{ route('companies.store') }}" method="post">
            @endif
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter company name" value="{{ $company->name ?? ''}}">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter company email address" value="{{$company->email ?? ''}}">
                    @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" id="website" name="website"
                        placeholder="Enter company website" value="{{$company->website ?? ''}}">
                    @error('website')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input
                        class="form-control-file"
                        type="file"
                        name="logo_path"
                        id="logo"
                        @change="companyLogoFileChanged"
                    >
                    <img class="mt-2 mw-100" v-bind:src="companyLogoPreview" alt="Logo Preview">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
