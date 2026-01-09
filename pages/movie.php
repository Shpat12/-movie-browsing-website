<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
      <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/headers.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bs-body-bg);;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .banner {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 300px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .movie-title {
            font-size: 24px;
            margin: 0;
        }

        .description {
            margin-top: 10px;
            font-size: 16px;
        }

        .video-container {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%; /* 16:9 aspect ratio (divide 9 by 16 = 0.5625) */
            margin-bottom: 20px;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .action-buttons {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .action-buttons button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .action-buttons button:hover {
            background-color: #0056b3;
        }

        .download-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .counters {
            font-size: 14px;
            color: #666;}
    </style>
</head>
<body>
        <!-- Icon -->
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
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
      <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
      </symbol>
      <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
      </symbol>
      <symbol id="table" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
      </symbol>
      <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </symbol>
      <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
      </symbol>
      <symbol id="calendar3" viewBox="0 0 16 16">
        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </symbol>
      <symbol id="geo-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
      </symbol>
    </svg>


        <!-- Color Menu -->
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
    <!-- Header Code -->
    <div class="cover-container d-flex p-3 mx-auto flex-column d-flex he80 text-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)), url('<?php echo $poster_url; ?>'); background-repeat: no-repeat;">
    <!-- Content of your div goes here -->
</div>
  <header class="mb-auto">
    <div>
      <a href=" ../Home.php"> <img src="../assets/img/logo/logo.png" style="width: 3%; border-radius: 50%; float: left; "> </a>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0  active" aria-current="page"  href="../home.php">Home</a>
        <a class="nav-link fw-bold py-1 px-0" href="sing-in.html">Sing In</a>
        <a class="nav-link fw-bold py-1 px-0" href="sign-up.html">Sing Up</a> 
        <a class="nav-link fw-bold py-1 px-0"  href="about-us.html">About Us</a> 
        <a class="nav-link fw-bold py-1 px-0" href="contact-us.php">Contact Us</a> 
        
      </nav>
    </div>
  </header>


</div>


<div class="container">
<?php
// Database connection
$pdo = new PDO("mysql:host=localhost;dbname=movie_database", "roottest", "dsaad123sar");

// Check if movie ID is provided in the URL
if (isset($_GET['id'])) {
    // Retrieve movie details from the database based on the provided ID
    $movieId = $_GET['id'];
    $stmt = $pdo->prepare("SELECT id, title, description, poster_url, video_url, download_url, genre, img_url, img_url_2 FROM movies WHERE id = ?");
    $stmt->execute([$movieId]);
    $movie = $stmt->fetch(PDO::FETCH_ASSOC);

    // Retrieve auto details from the database
    $autoStmt = $pdo->prepare("SELECT id, likes, dislikes, downloads FROM auto WHERE id = ?");
    $autoStmt->execute([$movieId]);
    $auto = $autoStmt->fetch(PDO::FETCH_ASSOC);

    if ($movie && $auto) {
        // Check if the user has previously liked or disliked the movie
        $previousAction = '';
        if (isset($_GET['previous'])) {
            $previousAction = $_GET['previous'];
        }

        // Handle like action
        if (isset($_GET['action']) && $_GET['action'] == 'like') {
            if ($previousAction == 'like') {
                $pdo->prepare("UPDATE auto SET likes = likes - 1 WHERE id = ?")->execute([$movieId]);
                $auto['likes']--;
            } else {
                // If the previous action was dislike, update dislike count
                if ($previousAction == 'dislike') {
                    $pdo->prepare("UPDATE auto SET dislikes = dislikes - 1 WHERE id = ?")->execute([$movieId]);
                    $auto['dislikes']--;
                }
                $pdo->prepare("UPDATE auto SET likes = likes + 1 WHERE id = ?")->execute([$movieId]);
                $auto['likes']++;
            }
        }

        // Handle dislike action
        if (isset($_GET['action']) && $_GET['action'] == 'dislike') {
            if ($previousAction == 'dislike') {
                $pdo->prepare("UPDATE auto SET dislikes = dislikes - 1 WHERE id = ?")->execute([$movieId]);
                $auto['dislikes']--;
            } else {
                // If the previous action was like, update like count
                if ($previousAction == 'like') {
                    $pdo->prepare("UPDATE auto SET likes = likes - 1 WHERE id = ?")->execute([$movieId]);
                    $auto['likes']--;
                }
                $pdo->prepare("UPDATE auto SET dislikes = dislikes + 1 WHERE id = ?")->execute([$movieId]);
                $auto['dislikes']++;
            }
        }

        // Handle download action
        if (isset($_GET['action']) && $_GET['action'] == 'download') {
            $pdo->prepare("UPDATE auto SET downloads = downloads + 1 WHERE id = ?")->execute([$movieId]);
            $auto['downloads']++;
            // No need to redirect, just update the counter asynchronously
            echo "<script>window.onload = function() { updateDownloadCount(); }</script>";
        }

        // Display movie details
        echo "<div class='banner' style='background-image: url({$movie['poster_url']})'>";
        echo "<div class='banner-overlay'>";
        echo "<h1 class='movie-title'>{$movie['title']}</h1>";
        echo "<p class='description'>{$movie['description']}</p>";
        echo "</div>";
        echo "</div>";

        // Video player (assuming video_url is a field in the database)
        echo "<div class='video-container'>";
        echo "<iframe src='{$movie['video_url']}' frameborder='0' allowfullscreen></iframe>";
        echo "</div>";

        // Action buttons (like, dislike, download)
        echo "<div class='action-buttons'>";
        echo "<button onclick='like({$movieId})'><i class='fas fa-thumbs-up'></i> Like</button>";
        echo "<button onclick='dislike({$movieId})'><i class='fas fa-thumbs-down'></i> Dislike</button>";
        echo "<a id='downloadLink' href='{$movie['download_url']}' download onclick='updateDownloadCount();'><i class='fas fa-download'></i> Download</a>";
        echo "</div>";

// Counters for likes, dislikes, and downloads
echo "<div class='counters'>";
echo "<p><i class='fas fa-thumbs-up'></i> Likes: <span id='likeCount'>{$auto['likes']}</span></p>";
echo "<p><i class='fas fa-thumbs-down'></i> Dislikes: <span id='dislikeCount'>{$auto['dislikes']}</span></p>";
echo "<p><i class='fas fa-download'></i> Downloads: <span id='downloadCount'>{$auto['downloads']}</span></p>";
echo "</div>";



    } else {
        // Movie not found
        echo "<p>Movie not found.</p>";
    }
} else {
    // Movie ID not provided
    echo "<p>Movie ID not provided.</p>";
}
?>


<script>
    function updateDownloadCount() {
        var movieId = "<?php echo $movieId; ?>";
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "?id=" + movieId + "&action=download", true);
        xhr.send();
        // Update download count displayed on the page
        var downloadCountElement = document.getElementById('downloadCount');
        if (downloadCountElement) {
            var currentCount = parseInt(downloadCountElement.innerHTML);
            downloadCountElement.innerHTML = currentCount + 1;
        }
    }
</script>



</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function like(movieId) {
        var likeCount = $('#likeCount');
        var dislikeCount = $('#dislikeCount');
        var previousAction = likeCount.hasClass('liked') ? 'like' : '';

        $.ajax({
            url: "<?php echo $_SERVER['PHP_SELF']; ?>",
            type: "GET",
            data: {id: movieId, action: 'like', previous: previousAction},
            success: function(data) {
                if (previousAction === 'like') {
                    likeCount.text(parseInt(likeCount.text()) - 1);
                } else {
                    likeCount.text(parseInt(likeCount.text()) + 1);
                    if (dislikeCount.hasClass('disliked')) {
                        dislikeCount.text(parseInt(dislikeCount.text()) - 1);
                        dislikeCount.removeClass('disliked');
                    }
                }
                likeCount.toggleClass('liked');
            }
        });
    }

    function dislike(movieId) {
        var likeCount = $('#likeCount');
        var dislikeCount = $('#dislikeCount');
        var previousAction = dislikeCount.hasClass('disliked') ? 'dislike' : '';

        $.ajax({
            url: "<?php echo $_SERVER['PHP_SELF']; ?>",
            type: "GET",
            data: {id: movieId, action: 'dislike', previous: previousAction},
            success: function(data) {
                if (previousAction === 'dislike') {
                    dislikeCount.text(parseInt(dislikeCount.text()) - 1);
                } else {
                    dislikeCount.text(parseInt(dislikeCount.text()) + 1);
                    if (likeCount.hasClass('liked')) {
                        likeCount.text(parseInt(likeCount.text()) - 1);
                        likeCount.removeClass('liked');
                    }
                }
                dislikeCount.toggleClass('disliked');
            }
        });
    }
</script>



    <script src="../assets/js/color-modes.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../assets/css/main.css" rel="stylesheet">
</body>
</html>
