@extends('layout.layout')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Officials</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8 mb-3">
                        <a href={{ url('officials/create') }} class="btn btn-success">Add New Official</a>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <div class="container-fluid">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                <table class="table" id="currentOfficials">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th width="25%">FULLNAME</th>
                            <th width="20%">COMMITTEE</th>
                            <th width="20%">POSITION</th>
                            <th width="25%">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($officials as $item)
                            <tr>
                                <td width="10%">{{ $item->id}}</td>
                                <td width="25%">{{ $item->fullname}}</td>
                                <td width="20%">{{ $item->committee}}</td>
                                <td width="20%">{{ $item->position}}</td>
                                <td width="25%">
                                    <a href="{{ url('/officials/' . $item->id )}}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ url('/officials/' . $item->id . '/edit')}}" class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ url('/officials/' . $item->id )}}" method="post" style="display: inline;">
                                        {{ method_field('DELETE')}}
                                        {{ csrf_field() }} 
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this official?')">DELETE</button>
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