@extends('layout.layout')

@section('content')
    {{-- <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h2>Request</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="card">
                            <div class="card-body">
                                @foreach ($forms as $item)
                                    <h4 class="card-title my-3">{{ Str::upper($item->firstname . ' ' . $item->middlename . ' ' . $item->lastname)  }}</h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row"
                                                width="30%">Alias</th>
                                                <td width="70%">{{ Str::upper($item->alias) }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Age</th>
                                                <td>{{ Str::upper($item->age) }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Birthdate</th>
                                                <td>{{ Str::upper($item->age) }}</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                    <span>Alias: {{ Str::upper($item->alias) }}</span><br>
                                    <span>Age: {{ Str::upper($item->age) }}</span><br>
                                    <span>Birthdate: {{ Str::upper($item->birthdate) }}</span><br>
                                    <span>Gender: {{ Str::upper($item->gender) }}</span><br>
                                    <span>Lot: {{ Str::upper($item->lot) }}</span><br>
                                    <span>Barangay: {{ Str::upper($item->barangay) }}</span><br>
                                    <div class="row justify-content-around">
                                        <a href="#" class="btn btn-success mt-3 col-5">Accept</a>
                                        <a href="#" class="btn btn-danger mt-3 col-5">Decline</a>
                                    </div>
                                    <br>
                                    <hr>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-header">
                    <h2>Request</h2>
                </div>
                @foreach ($forms as $item)
                    <div class="card col-sm-12 mt-3 d-flex justify-content-center align-items-center">
                    {{-- <div class="card col-sm-12 mt-3"> --}}
                        <div class="card-body">
                            <h4 class="card-title my-3">{{ Str::upper($item->firstname . ' ' . $item->middlename . ' ' . $item->lastname)  }}</h4>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row"
                                        width="30%">Alias</th>
                                        <td width="70%">{{ Str::upper($item->alias) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Age</th>
                                        <td>{{ Str::upper($item->age) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Birthdate</th>
                                        <td>{{ Str::upper($item->birthdate) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Birthplace</th>
                                        <td>{{ Str::upper($item->birthplace) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Civil Status</th>
                                        <td>{{ Str::upper($item->civilstatus) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Gender</th>
                                        <td>{{ Str::upper($item->gender) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Occupation</th>
                                        <td>{{ Str::upper($item->occupation) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lot No./ Street name</th>
                                        <td>{{ Str::upper($item->lot) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Barangay</th>
                                        <td>{{ Str::upper($item->barangay) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Municipality</th>
                                        <td>{{ Str::upper($item->municipality) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Province</th>
                                        <td>{{ Str::upper($item->province) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ZIP Code</th>
                                        <td>{{ Str::upper($item->zipcode) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Emergency Contact Name</th>
                                        <td>{{ Str::upper($item->ecname) }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Emergency Contact Number</th>
                                        <td>{{ Str::upper($item->ecnumber) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row justify-content-around">
                                <a href="#" class="btn btn-success mt-3 col-5">Accept</a>
                                <a href="#" class="btn btn-danger mt-3 col-5">Decline</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>  
@endsection