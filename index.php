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

  <style>
    .btn-getclass {

      border-radius: 24px;
      background-color: rgb(15, 134, 108);
      border: 0;
    }



    /* Apply specific styles when the screen width is less than 600 pixels */
    @media screen and (max-width: 600px) {
      .btn-getclass img {
        pointer-events: none;
        /* Disable pointer events on the image */
        display: none;
        /* Hide the image */
      }
    }


    .title-txt {

      font-family: Roboto;
    }





    /* particle */
    .hero {

      align-items: center;


      overflow: hidden;
    }

    .glowing {
      position: relative;

      transform-origin: right;
      animation: colorChange 5s linear infinite;
    }

    .glowing:nth-child(even) {
      transform-origin: left;
    }

    @keyframes colorChange {
      0% {
        filter: hue-rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        filter: hue-rotate(360deg);
        transform: rotate(360deg);
      }
    }

    .glowing span {
      position: absolute;
      top: calc(80px * var(--i));
      left: calc(80px * var(--i));
      bottom: calc(80px * var(--i));
      right: calc(80px * var(--i));
    }

    .glowing span::before {
      content: "";
      position: absolute;
      top: 50%;
      left: -8px;
      width: 15px;
      height: 15px;
      background: #f00;
      border-radius: 50%;
    }

    .glowing span:nth-child(3n + 1)::before {
      background: rgba(134, 255, 0, 1);
      box-shadow: 0 0 20px rgba(134, 255, 0, 1),
        0 0 40px rgba(134, 255, 0, 1),
        0 0 60px rgba(134, 255, 0, 1),
        0 0 80px rgba(134, 255, 0, 1),
        0 0 0 8px rgba(134, 255, 0, .1);
    }

    .glowing span:nth-child(3n + 2)::before {
      background: rgba(255, 214, 0, 1);
      box-shadow: 0 0 20px rgba(255, 214, 0, 1),
        0 0 40px rgba(255, 214, 0, 1),
        0 0 60px rgba(255, 214, 0, 1),
        0 0 80px rgba(255, 214, 0, 1),
        0 0 0 8px rgba(255, 214, 0, .1);
    }

    .glowing span:nth-child(3n + 3)::before {
      background: rgba(0, 226, 255, 1);
      box-shadow: 0 0 20px rgba(0, 226, 255, 1),
        0 0 40px rgba(0, 226, 255, 1),
        0 0 60px rgba(0, 226, 255, 1),
        0 0 80px rgba(0, 226, 255, 1),
        0 0 0 8px rgba(0, 226, 255, .1);
    }

    .glowing span:nth-child(3n + 1) {
      animation: animate 10s alternate infinite;
    }

    .glowing span:nth-child(3n + 2) {
      animation: animate-reverse 3s alternate infinite;
    }

    .glowing span:nth-child(3n + 3) {
      animation: animate 8s alternate infinite;
    }

    @keyframes animate {
      0% {
        transform: rotate(180deg);
      }

      50% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes animate-reverse {
      0% {
        transform: rotate(360deg);
      }

      50% {
        transform: rotate(180deg);
      }

      100% {
        transform: rotate(0deg);
      }
    }

    /* particle */











/* wave */

    section {
      position: relative;

      background: #426196;
      overflow: hidden;
    }

    section .air {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background: url(https://1.bp.blogspot.com/-xQUc-TovqDk/XdxogmMqIRI/AAAAAAAACvI/AizpnE509UMGBcTiLJ58BC6iViPYGYQfQCLcBGAsYHQ/s1600/wave.png);
      background-size: 1000px 100px
    }

    section .air.air1 {
      animation: wave 30s linear infinite;
      z-index: 1000;
      opacity: 1;
      animation-delay: 0s;
      bottom: 0;
    }

    section .air.air2 {
      animation: wave2 15s linear infinite;
      z-index: 999;
      opacity: 0.5;
      animation-delay: -5s;
      bottom: 10px;
    }

    section .air.air3 {
      animation: wave 30s linear infinite;
      z-index: 998;
      opacity: 0.2;
      animation-delay: -2s;
      bottom: 15px;
    }

    section .air.air4 {
      animation: wave2 5s linear infinite;
      z-index: 997;
      opacity: 0.7;
      animation-delay: -5s;
      bottom: 20px;
    }

    @keyframes wave {
      0% {
        background-position-x: 0px;
      }

      100% {
        background-position-x: 1000px;
      }
    }

    @keyframes wave2 {
      0% {
        background-position-x: 0px;
      }

      100% {
        background-position-x: -1000px;
      }
    }



/* wave */









  </style>




</head>

<body>

  <div class="container-fluid themed-container fixed-top" style="background-color: #426196;">
    <div class="container-md ">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #426196;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="assets/peopletalklogo.png" alt="Logo" width="160" class="img-fluid align-text-top">
          </a>
          <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>

          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link text-light active fs-5" aria-current="page" href="#">Classes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5" href="#div-courses">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5" href="#div-about-us">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5" href="#div-courses">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5" href="signup.php">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </div>


  </div>

  
  <div class="container-fluid themed-container" style="background-image: url('assets/003.png'); ">
    <div class="container-md container text-center ">
      <div class="container-md bg-image p-5 shadow-1-strong text-white">
        <div class="row align-items-center mt-3">

          <div class="d-grid mx-auto">
            <h1 style="font-size:4vw;" class="title-txt mt-5 text-center">Quality Talks That Deliver</h1>
            <h1 style="font-size:4vw;" class="title-txt mt-2">Quality Conversation</h1>
          </div>


          <div class="container text-center">
            <div class="row">
              <div class="col">
              </div>
              <div class="col-8 ">
                <div class="d-grid mx-auto">
                  <button class="shadow btn-getclass btn btn-primary btn-lg mb-3" type="button">Get Classes
                    <img src="assets/arrowicon.png" width="20" />
                  </button>
                </div>
              </div>
              <div class="col">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <section>
    <div-enroll-plan class="container-md container text-center mt-5 ">
      <div class='air air1'></div>
      <div class='air air2'></div>
      <div class='air air3'></div>
      <div class='air air4'></div>

      <h1 class="card-title mb-5 text-light border-bottom border-light pb-2 ">Select Your Enrollment Plan</h1>

      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <div class="container-fluid text-center border-primary"> &nbsp;
                <h4 class="card-title">20 Minutes</h4>
                <h4 class="card-title text-primary">₩120,000
                  <span class="h6 text-dark">KRW</span>
                </h4>
                <p class="card-text">15 + 2 Classes per month </p>
                <a href="#" class="btn btn-outline-primary">Get Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 ">
          <div>
            <div class="card border border-primary">
              <div class="card-body">
                <div class="container-fluid text-center border-primary">
                  <span class="h8 text-primary">Recommended</span>

                  <h4 class="card-title">30 Minutes</h4>
                  <h4 class="card-title text-primary">₩130,000
                    <span class="h6 text-dark">KRW</span>
                  </h4>
                  <p class="card-text">15 + 2 Classes per month</p>
                  <a href="#" class="btn btn-primary">Get Now</a>
                </div>


              </div>
            </div>
          </div>

        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <div class="container-fluid text-center border-primary"> &nbsp;
                <h4 class="card-title">50 Minutes</h4>
                <h4 class="card-title text-primary">₩224,000
                  <span class="h6 text-dark">KRW</span>
                </h4>
                <p class="card-text">15 + 2 Classes per month</p>
                <a href="https://docs.google.com/forms/d/1jOCXdxZRrk07J5W66VbGBOvx_69iBOjgaNbwxr14miY/edit"
                  class="btn btn-outline-primary">Get Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="z-3 container-md container text-center mt-3 ">
      <div class="row mb-5">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">20 Minutes</h4>
              <h4 class="card-title text-primary">₩8,200
                <span class="h6 text-dark">KRW</span>
              </h4>
              <p class="card-text">1 Class only</p>
              <a href="#" class="btn btn-outline-primary">Get Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 ">
          <div class="card border">
            <div class="card-body">
              <h4 class="card-title">30 Minutes</h4>
              <h4 class="card-title text-primary">₩9,200
                <span class="h6 text-dark">KRW</span>
              </h4>
              <p class="card-text">1 Class only</p>
              <a href="#" class="btn btn-outline-primary">Get Now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-5 pb-5">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">50 Minutes</h4>
              <h4 class="card-title text-primary">₩15,200
                <span class="h6 text-dark">KRW</span>
              </h4>
              <p class="card-text">1 Class only</p>
              <a href="#" class="btn btn-outline-primary">Get Now</a>
            </div>
          </div>
        </div>

      </div>


    </div>

  </section>

  <!-- courses -->



  <div class="bg-cover bg-center;" style="background-image: url('assets/kors.jpg'); ">
    <div class="container-md text-center">
      <div class="container-md  ">

        <h1 id="div-courses" class="mb-5 pt-3 border-bottom border-light text-light pb-2">Courses Offered</h1>
      </div>

      <div class="accordion pb-5" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Intermediate Course
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body text-start">
              <p>-simple and useful English expressions</p>
              <p>-daily English expressions</p>
              <p>-expressing things you think about </p>
              <p>-introducing yourself</p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Higher intermediate course
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
              plugin adds the appropriate classes that we use to style each element. These classes control the overall
              appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom
              CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
              <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Lower advanced course
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
              plugin adds the appropriate classes that we use to style each element. These classes control the overall
              appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom
              CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
              <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Advanced course
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
              plugin adds the appropriate classes that we use to style each element. These classes control the overall
              appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom
              CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
              <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- courses -->










  <!-- ABOUT US -->
  <div class="hero container-fluid" style="background-color: #426196;">

    <div class="glowing">

      <span style="--i:1;"></span>

      <span style="--i:2;"></span>

      <span style="--i:3;"></span>

    </div>

    <div class="glowing">

      <span style="--i:1;"></span>

      <span style="--i:2;"></span>

      <span style="--i:3;"></span>

    </div>

    <div class="glowing">

      <span style="--i:1;"></span>

      <span style="--i:2;"></span>

      <span style="--i:3;"></span>

    </div>

    <div class="glowing">

      <span style="--i:1;"></span>

      <span style="--i:2;"></span>

      <span style="--i:3;"></span>

    </div>

    <div id="div-about-us" class="container-md mb-5  " style="background-color: #426196;">

      <div class="container pt-5">

        <h1 class="text-center fs-3 text-light">ABOUT US</h1>

      </div>

      <div class="container mb-5">

        <div class="row align-items-center row-cols-1 row-cols-md-2 g-2 " style="background-color: #426196;">


          <div class="col">
            <div class="card border-0" style="background-color: #426196;">
              <div class="col ">
                <p class="bg-transparent fs-4 text-light">We know that learning is easier when you have an excellent teacher. That’s
                  why
                  most
                  of our educators have achieved an advanced degree in their field. They are passionate about the
                  subjects
                  they teach and bring this enthusiasm into their seminars and courses.</p>
              </div>
            </div>

          </div>

          <div class="col">
            <div class="card border-0 text-center" style="background-color: #426196;">
              <div class="col">
                <img src="assets/paragraph1_350.png" class="  img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container  border-bottom border-light"></div>
      <div class="container pt-5">

        <h1 class="text-center fs-3 text-light">HIGHLY QUALIFIED EDUCATORS</h1>

      </div>

      <div class="container mb-5">

        <div class="row align-items-center row-cols-1 row-cols-md-2 g-2 " style="background-color: #426196;">


          <div class="col">
            <div class="card border-0" style="background-color: #426196;">
              <div class="col ">
                <p class="fs-4 text-light">We know that learning is easier when you have an excellent teacher. That’s
                  why
                  most
                  of our educators have achieved an advanced degree in their field. They are passionate about the
                  subjects
                  they teach and bring this enthusiasm into their seminars and courses.</p>
              </div>
            </div>

          </div>

          <div class="col">
            <div class="card border-0 text-center" style="background-color: #426196;">
              <div class="col">
                <img src="assets/paragraph2_350.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container  border-bottom border-light "></div>
      <div class="container pt-5">

        <h1 class="text-center fs-3 text-light">WIDE VARIETY OF COURSES</h1>

      </div>

      <div class="container ">

        <div class="row align-items-center row-cols-1 row-cols-md-2 g-2 " style="background-color: #426196;">


          <div class="col">
            <div class="card border-0" style="background-color: #426196;">
              <div class="col ">
                <p class="fs-4 text-light">Whether you’re looking for technical training, a best practice seminar, or a
                  management course, we can help you. Our courses are customizable for your needs to make sure you leave
                  with relevant skills.</p>
              </div>
            </div>

          </div>

          <div class="col">
            <div class="card border-0 text-center" style="background-color: #426196;">
              <div class="col">
                <img src="assets/paragraph3_350.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>



  </div>

  <!-- END ABOUT US -->


  <!-- START try -->

  <div class=" h-10 container-fluid themed-container fixed-bottom opacity-100"
    style="background-color: rgba(66,97,150,.50)">
    <div class="container-md ">
      <div class="pt-4 d-grid mx-auto">
        <button class="  shadow btn-getclass btn btn-primary btn-lg mb-3" type="button">Free 1:1 Trial Class
        </button>
      </div>

    </div>
  </div>


  <!-- END try -->










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>