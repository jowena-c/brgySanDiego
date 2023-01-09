@extends('layout.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Official Details</h2>
        </div>
        <div class="card-body">
            <h4>{{ Str::upper($officials->fullname) }}</h4>
            <span>Committee: {{ Str::upper($officials->committee) }}</span><br>
            <span>Position: {{ Str::upper($officials->position) }}</span>
        </div>
    </div>
@endsection