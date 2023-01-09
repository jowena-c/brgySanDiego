<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/408ec40bbd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href={{ asset('css/app.css')}}>
    <title>Brgy. San Diego</title>
</head>
<body>
    {{-- <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div> --}}

      <!-- Section: Design Block -->
<section class="landingPage">
    <!-- Jumbotron -->
    <div class="landing px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: #11101D">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight text-white">
              BRGY. SAN DIEGO <br />
              {{-- <span class="text-primary">for your business</span>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eveniet, itaque accusantium odio, soluta, corrupti aliquam
              quibusdam tempora at cupiditate quis eum maiores libero
              veritatis? Dicta facilis sint aliquid ipsum atque?
            </p> --}}
          </div>
  
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <form>
                  <!-- username input -->
                  {{-- <div class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" class="form-control" />
                  </div> --}}
                  <div class="form-floating mb-4">
                    <input type="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput" id="username">Username</label>
                  </div>
  
                  <!-- Password input -->
                  {{-- <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control" />
                  </div> --}}
                  <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword" id="password">Password</label>
                  </div>
  
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                      Remember Me
                    </label>
                  </div>
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary col-12 mb-4">
                    Login
                  </button>
  
                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </button>
  
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-google"></i>
                    </button>
  
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-twitter"></i>
                    </button>
  
                    {{-- <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-github"></i>
                    </button> --}}
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="registerdiv align-items-end mt-5 mb-5 position-absolute bottom-0 start-3">
        <p class="text-light">Not yet registered?</p>
        {{-- <a href="form.html">REGISTER NOW</a> --}}
        {{-- <a href={{ url('officials/create') }} class="btn btn-primary">REGISTER NOW</a> --}}
        <a href={{ url('forms/create') }} class="btn btn-primary">REGISTER NOW</a>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/408ec40bbd.js" crossorigin="anonymous"></script>
</body>
</html>