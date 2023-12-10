<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People Talk</title>
  


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles/signup.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">



</head>

<body>

  <div class="container-fluid themed-container sticky-top" style="background-color: #426196;">
    <div class="container-md ">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #426196;">
        <div class="container-fluid">

          <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>

          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link text-light active fs-5" aria-current="page" href="index.php#div-enroll-plan">Classes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5" href="index.php#div-courses">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5" href="index.php#div-about-us">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5" href="index.php#div-courses">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </div>
  </div>




  <div class="container-fluid ">
    <div class="container-md " >

      <div class="container min-vh-100 d-flex justify-content-center align-items-center" >


        <div class="container mb-2 ">

          <div class="row align-items-center row-cols-1  row-cols-md-2 g-2 " >

            <div class="container-fluid "> 


              <div class="col ">
                <div class="card border-0">
                  <div class="col text-center">
                  <h1 class="animate__animated animate__bounceInDown">

                  <img src="assets/peopletalklogoV2.png" width="400" class="  img-fluid">
                  </h1>

                    
                    <h1 class="animate__animated animate__bounceInLeft fs-3 text-dark ">Learn Faster, Speak Better</h1>
                  </div>
                </div>
  
              </div>


            </div>

            <form action="includes/formhandler.inc.php" method="post">

            <div class="col">
              <div class="card border-1 p-3 shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="col">
                  <div class="col">
                    <h1 class=" fs-3 mb-4 text-dark ">Sign Up</h1>
                    <div class="mb-3">

                      <label for="formGroupExampleInput" class="form-label">Name</label>
                      <input type="text" name="username" class="form-control" id="username" placeholder="">
                    </div>


                    <label for="formGroupExampleInput" class="form-label">Phone Number</label>
                      <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="">
                    </div>

                    <div class="mb-3">
                      <label for="formGroupExampleInput4" class="form-label">E-Mail</label>
                      <input type="text" name="email" class="form-control" id="email" placeholder="">
                    </div>


                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" name="pwd" id="password" class="form-control"
                      aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text mb-4">
                      Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                      spaces, special characters, or emoji.
                    </div>


                    <div class=" h-10 container-fluid themed-container">
                      <div class="container-md ">
                        <div class="pt-3 d-grid mx-auto">
                          <button class="shadow btn-getclass btn btn-primary btn-lg mb-3">Signup</button>
                        </div>

                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>





            </form>


          </div>

        </div>







      </div>






    </div>

















  </div>









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>