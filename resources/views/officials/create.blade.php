@extends('layout.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h3>Add New Official</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('officials') }}" method="post">
                {!! csrf_field() !!}
                <label class="mt-3">Fullname</label>
                <input type="text" name="fullname" id="fullname" class="form-control text-uppercase">
                <label class="mt-3">Committee</label>
                <input type="text" name="committee" id="committee" class="form-control text-uppercase">
                <label class="mt-3">Position</label>
                <input type="text" name="position" id="position" class="form-control text-uppercase">
                <input type="submit" value="Add Official" class="btn btn-success mt-3 float-end">
            </form>
        </div>
    </div>
@endsection