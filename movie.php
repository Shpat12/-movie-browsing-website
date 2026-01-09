<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
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
    <div class="container">
        <?php
        // Database connection
        $pdo = new PDO("mysql:host=localhost;dbname=movie_database", "roottest", "dsaad123sar");

        // Check if movie ID is provided in the URL
        if (isset($_GET['id'])) {
            // Retrieve movie details from the database based on the provided ID
            $movieId = $_GET['id'];
            $stmt = $pdo->prepare("SELECT * FROM movies WHERE id = ?");
            $stmt->execute([$movieId]);
            $movie = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($movie) {
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
                echo "<button><i class='fas fa-thumbs-up'></i> Like</button>";
                echo "<button><i class='fas fa-thumbs-down'></i> Dislike</button>";
                echo "<a href='{$movie['download_url']}' download><i class='fas fa-download download-icon'></i> Download</a>";
                echo "</div>";

                // Counters for likes, dislikes, and downloads
                echo "<div class='counters'>";
                echo "<p>Likes: {$movie['likes']}</p>";
                echo "<p>Dislikes: {$movie['dislikes']}</p>";
                echo "<p>Downloads: {$movie['downloads']}</p>";
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
    </div>
</body>
</html>
