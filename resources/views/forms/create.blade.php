<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #11101D">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Registration Form</h2>
            </div>
            <div class="card-body">
                    <!-- registration form -->
    <div class="wrapper">
        <form class="row g-3 needs-validation" id="regForm" novalidate onsubmit="submitForm" action="{{ url('forms') }}" method="post"> 
            {!! csrf_field() !!}
            {{-- <div class="col-12 fw-bolder registration" onsubmit="openModal()" id="myForm">
                Registration Form
            </div> --}}
            {{-- <hr> --}}
            <div class="col-12 fw-bold">
                Personal Information
            </div>
            <div class="col-md-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required style="text-transform: uppercase">
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-3">
                <label for="middlename" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middlename"  name="middlename" style="text-transform: uppercase">
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname"  required style="text-transform: uppercase">
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-3">
                <label for="suffix" class="form-label">Suffix</label>
                <input type="text" class="form-control" id="suffix" name="suffix" style="text-transform: uppercase">
            </div>
            <div class="col-md-2">
                <label for="alias" class="form-label">Alias</label>
                <input type="text" class="form-control" id="alias" name="alias" style="text-transform: uppercase">
            </div>
            <div class="col-md-2">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" required min="0" max="100">
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-4">
                <!-- to do - disable future dates -->
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date"  data-provide="datepicker" data-date-end-date="0d"class="form-control" id="birthdate" name="birthdate" required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-4">
                <label for="birthplace" class="form-label">Birthplace</label>
                <input type="text" class="form-control" id="birthplace" name="birthplace" style="text-transform: uppercase" required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-4">
                <label for="civilstatus" class="form-label">Civil Status</label>
                <select class="form-select" id="civilstatus" name="civilstatus" required="true" >
                    <option value="" >Choose...</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Separated">Separated</option>
                    <option value="Divorced">Divorced</option>
                  </select>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-4">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender" required="true">
                    <option value="" >Choose...</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                  </select>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>

            <div class="col-md-4">
                <label for="occupation" class="form-label">Occupation</label>
                <input type="text" class="form-control" id="occupation" name="occupation" style="text-transform: uppercase"  required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
           
        
            <!-- <div class="col-12 fw-bold">
                Address Information
            </div> -->
            <div class="col-md-8">
                <label for="lot" class="form-label">Lot No./ Street name</label>
                <input type="text" class="form-control" id="lot" name="lot" style="text-transform: uppercase" required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <!-- <div class="col-md-4">
                <label for="inputSitio" class="form-label">Sitio</label>
                <input type="text" class="form-control" id="inputSitio" required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div> -->
            <div class="col-md-4">
                <label for="barangay" class="form-label">Barangay</label>
                <input type="text" class="form-control" id="barangay" name="barangay" style="text-transform: uppercase"  required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-5">
                <label for="municipality" class="form-label">Municipality</label>
                <input type="text" class="form-control" id="municipality" name="municipality" style="text-transform: uppercase"  required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-5">
                <label for="province" class="form-label">Province</label>
                <input type="text" class="form-control" id="province" name="province" style="text-transform: uppercase" required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-2">
                <label for="zipcode" class="form-label">ZIP Code</label>
                <input type="number" class="form-control" id="zipcode" name="zipcode" required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email"  name="email" required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-6">
                <label for="contactnumber" class="form-label">Contact Number</label>
                <input type="number" class="form-control" id="contactnumber" name="contactnumber"
                style="text-transform: uppercase"  required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputOccupation" class="form-label">Government ID (upload)</label>
                <input type="file" class="form-control" id="govId" aria-label="file example" required>
                <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>
            <div class="col-md-6">
                <label for="inputOccupation" class="form-label">ID Picture (upload)</label>
                <input type="file" class="form-control" id="idPicture" aria-label="file example" required>
                <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>
            
            <br><hr>
            <div class="col-12 fw-bold">
                    Emergency Contact
            </div>
            <div class="col-md-6">
                <label for="ecname" class="form-label">Name</label>
                <input type="text" class="form-control" id="ecname" name="ecname" style="text-transform: uppercase" required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-md-6">
                <label for="ecnumber" class="form-label">Contact Number</label>
                <input type="number" class="form-control" id="ecnumber" name="ecnumber" style="text-transform: uppercase"  required>
                <div class="invalid-feedback">
                    This field is required
                </div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    I Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
              </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-primary" type="button" onclick="backsite()">Back</button>
            </div>
            
        </form>
    </div>
            </div>
        </div>
    </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>