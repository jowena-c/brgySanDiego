@extends('layout.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h3>Edit Official</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('officials/' . $officials->id)}}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{ $officials->id }}">
                <label>Fullname</label>
                <input type="text" name="fullname" id="fullname" value="{{ $officials->fullname }}" class="form-control text-uppercase">
                <label class="mt-3">Committee</label>
                <input type="text" name="committee" id="committee" value="{{ $officials->committee }}" class="form-control text-uppercase">
                <label class="mt-3">Position</label>
                <input type="text" name="position" id="position" value="{{ $officials->position }}" class="form-control text-uppercase">
                <input type="submit" value="Save" class="btn btn-success mt-3 float-end">
            </form>
        </div>
    </div>
@endsection