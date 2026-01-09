<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=movie_database", "roottest", "dsaad123sar");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Fetch data from both tables using a JOIN query
    $stmt = $pdo->query("SELECT m.*, a.likes, a.dislikes, a.downloads FROM movies m LEFT JOIN auto a ON m.id = a.id");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Movies and Auto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2); /* Adding subtle text shadow */
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px; /* Adding border radius */
        }

        .movie-title {
            white-space: nowrap; /* Prevent text from wrapping */
            overflow: hidden;
            text-overflow: ellipsis; /* Truncate text with ellipsis */
            text-shadow: 1px 1px 2px rgba(0,0,0,0.15); /* Adding text shadow */
        }

        .description {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4; /* Show 4 lines */
            -webkit-box-orient: vertical;
            max-height: 80px; /* adjust the height as needed */
            text-shadow: 1px 1px 2px rgba(0,0,0,0.15); /* Adding subtle text shadow */
        }

        .read-more {
            cursor: pointer;
            color: blue;
        }
        .shadow {
            text-shadow: 1px 1px 2px rgba(0,0,0,0.15); /* Adding subtle text shadow */
        }
        .container{
            padding: 0!important;
        }
    </style>
</head>
<body>
<h3 style="text-shadow: 1px 1px 2px rgba(0,0,0,0.15)">SERVICE</h3>
<div class="container shadow">

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Movie Title</th>
            <th>Description</th>
            <th>Poster</th>
            <th>Banner</th>
            <th>Video</th>
            <th>Download</th>
            <th>Genre</th>
            <th>Likes</th>
            <th>Dislikes</th>
            <th>Downloads</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): ?>
            <tr>
                <td class="movie-title"><?php echo $row['title']; ?></td>
                <td class="description"><?php echo $row['description']; ?></td>
                <td><img src="<?php echo $row['img_url']; ?>" alt="Extra Poster"></td>
                <td><img src="<?php echo $row['poster_url']; ?>" alt="Poster"></td>
                <td><a href="<?php echo $row['video_url']; ?>" class="btn btn-primary">Watch</a></td>
                <td><a href="<?php echo $row['download_url']; ?>" class="btn btn-success">Download</a></td>
                <td><?php echo $row['genre']; ?></td>
                <td><?php echo $row['likes']; ?></td>
                <td><?php echo $row['dislikes']; ?></td>
                <td><?php echo $row['downloads']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and Popper.js (for Bootstrap components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // JavaScript to toggle the full description on "read more" click
    document.querySelectorAll('.description').forEach(function (description) {
        var isFullText = false;

        description.addEventListener('click', function () {
            isFullText = !isFullText;
            if (isFullText) {
                description.style.overflow = 'visible';
                description.style.textOverflow = 'inherit';
                description.style.display = 'block';
                description.style.webkitLineClamp = 'initial';
            } else {
                description.style.overflow = 'hidden';
                description.style.textOverflow = 'ellipsis';
                description.style.display = '-webkit-box';
                description.style.webkitLineClamp = '4';
            }
        });

        // Add a "Read more" link
        description.innerHTML += ' <span class="read-more">Read more</span>';
    });
</script>
</body>
</html>
