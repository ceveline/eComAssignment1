<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">
            <a class="navbar-brand" href="/Main/index">Winter 2024 Term Projects</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/Main/index">Landing Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Main/about_us">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Contact/index">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Contact/read">See the messages we get</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    // Include the main view file
    include($view);
    ?>
    <?php
    // Include the main view file
    include('app/views/Count/index.php');
    ?>
</body>

</html>