<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternal Moments - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/photo.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="photography.php">Eternal Moments</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="photography.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="experience.php">Experience & Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">Admin</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-light text-center py-5">
        <div class="container">
            <marquee><h1 class="display-4">Capture Your Precious Moments</h1></marquee>
            <p class="lead">We are dedicated to providing high-quality photography and videography services for your special occasions.</p>
            <a href="portfolio.php" class="btn btn-primary btn-lg">View Our Portfolio</a>
        </div>
    </header>

    <!-- Services Section -->
    <div class="container">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="./images/001.jpg" class="card-img-top" alt="Wedding Photography">
                    <div class="card-body">
                        <h5 class="card-title">Wedding Photography</h5>
                        <p class="card-text">Capture the beauty of your special day with our expert wedding photographers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="./images/3e1763a2ae45a355cfbb1aa9dd22eb13.jpg" class="card-img-top" alt="Wildlife Photography">
                    <div class="card-body">
                        <h5 class="card-title">Wildlife Photography</h5>
                        <p class="card-text">Experience the wild with stunning photographs of nature and wildlife.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="./images/0d557fcef7f082d6f82950d5f6481e27.jpg" class="card-img-top" alt="Event Videography">
                    <div class="card-body">
                        <h5 class="card-title">Event Photography</h5>
                        <p class="card-text">Professional Photography and Videography for events that you want to remember forever.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2024 Eternal Moments. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
