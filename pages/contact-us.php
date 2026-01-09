<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <title>Contact Us</title>
    <script src="../assets/js/color-modes.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/headers.css" rel="stylesheet">


    <style>

        .card-group{
            padding: 2%;
        }
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  color: rgb(var(--bs-tertiary-color-rgb));
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}

/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }
}

.accordion{
  padding-top: 1%;
}
.row{
  padding: 0 1% 0% 1%;
}

.modal-sheet .modal-dialog {
  width: 380px;
  transition: bottom .75s ease-in-out;
  position: absolute;
  z-index: 100000000;
  left: 40%;
  top: 40%;
}
.modal-sheet .modal-footer {
  padding-bottom: 2rem;
}
.shadowsa {
text-shadow: 2px 7px 5px rgba(0, 0, 0, 0.15), 0px -4px 10px rgba(0, 0, 0, 0.2);
color: white!important;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: var(--bs-body-color);
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

.form-label {
    color: var(--bs-body-bg);
}

.form-control {
    border-radius: 5px;
}

.btn-primary {
    border-radius: 5px;
}

.alert-success {
    margin-top: 20px;
}
        
        </style>


  </head>
  <body>
  <?php
    // Database connection
$pdo = new PDO("mysql:host=localhost;dbname=movie_database", "roottest", "dsaad123sar");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare an SQL statement to insert data into the table
    $stmt = $pdo->prepare("INSERT INTO contactus (name, lastname, description) VALUES (:name, :lastname, :description)");
    
    // Bind parameters and execute the statement
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':lastname', $_POST['lastname']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->execute();
    
    // Redirect to a success page or do any other necessary actions
    header("Location: success.php");
    exit();
}
?>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="modal modal-sheet position-static d-block bg-body-secondary d-none " style="position: absolute;"  tabindex="-1" role="dialog" id="modalChoice">
      <div class="modal-dialog" role="document">
        <div class="modal-content rounded-3 shadow">
          <div class="modal-body p-4 text-center">
            <h5 class="mb-0">Do you acept our Policy</h5>
            <p class="mb-0">You can always change it in future.</p>
          </div>
          <div class="modal-footer flex-nowrap p-0">
              <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 border-end" id="hide1Button"><strong>Yes, enable</strong></button>
              <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0" data-bs-dismiss="modal" id="hide2Button">No thanks</button>
          </div>
        </div>
      </div>
    </div>

        <!-- Header Code -->
    <div class="cover-container d-flex  p-3 mx-auto flex-column d-flex he80 text-center"   style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)), url(assets/img/banner/65.jpg); background-repeat: no-repeat;">
  
    <header class="mb-auto">
      <div>
        <a href="../Home.php"> <img src="../assets/img/logo/logo.png" style="width: 3%; border-radius: 50%; float: left; "> </a>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link fw-bold py-1 px-0" href="../Home.php">Home</a>
          <a class="nav-link fw-bold py-1 px-0" href="sign-up.html">Sing Up</a> 
          <a class="nav-link fw-bold py-1 px-0" href="about-us.html">About Us</a> 
          <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="contact-us.php">Contact Us</a> 
          
        </nav>
      </div>
    </header>
  
  </div>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

<main>

  <div class="row">
    <div class="col">
      <div class="card-group">
        <div class="card" >
          <img src="../assets/img/aboutus/Person1.jpg" style="border-radius: 50%; width: 60%; margin: auto; padding-top: 1%;" class="card-img-top"  alt="...">
          <div class="card-body">
            <h5 class="card-title">CEO</h5>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea molestias quisquam cupiditate sequi repudiandae doloribus. Non, amet praesentium adipisci beatae corrupti ut laborum </p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
            <img src="../assets/img/logo/logo.png" style="border-radius: 50%; width: 60%; margin: auto; padding-top: 1%;" class="card-img-top"  alt="...">
          <div class="card-body">
            <h5 class="card-title">About The Website</h5>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea molestias quisquam cupiditate sequi repudiandae doloribus. Non, amet praesentium adipisci beatae corrupti ut laborum</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col">

      <div class="container">
        <h2 style="color: var(--bs-body-bg)">Contact Us</h2>
        <form class="row g-3 needs-validation" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label ">First Name</label>
                <input type="text" class="form-control" id="validationCustom01" name="name" value="" required>
                <div class="valid-feedback">Looks good!</div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="validationCustom02" name="lastname" value="" required>
                <div class="valid-feedback">Looks good!</div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom03" class="form-label">Message</label>
                <textarea class="form-control" id="validationCustom03" name="description" required></textarea>
                <div class="invalid-feedback">Please provide a message.</div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>

  </div>
    <!-- Map Section -->
    <div class="container mt-5">
        <h2 style="color: var(--bs-body-bg)">Map</h2>
        <!-- Replace the latitude and longitude with your desired location -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.211585359146!2d21.11752792261604!3d42.666372718302675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPrishtina!5e0!3m2!1ssq!2s!4v1709318197921!5m2!1ssq!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function(){
    $('#exampleCheck1').click(function(){
      $('#modalChoice').removeClass('d-none');
    });
    $('#enableButton').click(function(){
      // Add your logic here for when "Yes, enable" is clicked
      $('#modalChoice').addClass('d-none');
    });
      $('#hide1Button').click(function(){
      $('#modalChoice').addClass('d-none');
    });
      $('#hide2Button').click(function(){
      $('#modalChoice').addClass('d-none');
    });
  });
  </script>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (() => {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
</script>
    </body>
</html>
