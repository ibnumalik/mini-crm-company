@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <b-container fluid>

            <b-row>
                <b-col>
                    <b-card title="List companies">
                        <company-data-table :data='@json($companies)'></company-data-table>
                    </b-card>
                </b-col>
            </b-row>

        </b-container>
    </div>
</div>

@endsection
