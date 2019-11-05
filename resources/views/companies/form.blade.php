@extends('layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <b-container fluid>
            <b-row>
                <b-col cols="12" md="8" xl="4">
                    @if (session('invalid_file_error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('invalid_file_error')}}
                    </div>
                    @endif
                    <b-card title="Create new company">
                        @if ($company ?? '')
                        <form
                            action="{{ route('companies.update', ['company' => $company->id]) }}"
                            method="post"
                            enctype="multipart/form-data"
                        >
                            @method('PUT')
                        @else
                        <form action="{{ route('companies.store') }}" method="post" enctype="multipart/form-data">
                        @endif
                                @csrf

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter company name" value="{{ $company->name ?? ''}}">
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
                                    <input class="form-control-file" type="file" name="logo" id="logo"
                                        @change="companyLogoFileChanged">
                                    <img class="mt-2 w-25" v-bind:src="companyLogoPreview" alt="Logo Preview">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </b-card>
                </b-col>
            </b-row>
        </b-container>
    </div>
</div>
@endsection
