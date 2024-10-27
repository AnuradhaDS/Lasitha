<?php include'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Gallery Café</title>
    <script src="assets/js/main.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center">
            <h1>Welcome to The Gallery Café</h1>
            <p>Experience fine dining with a blend of Sri Lankan, Chinese, and Italian cuisine.</p>
            <a href="reservations/reservation.php" class="btn btn-primary">Make a Reservation</a>
            <a href="menu.php" class="btn btn-primary">Place an Order</a>

        </div>
    </section>

    <!-- Introduction Section -->
    <section class="introduction">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/cafe.jpg" alt="The Gallery Café" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>The Gallery Café is a popular restaurant located in Colombo, offering a unique dining experience with a variety of cuisines.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Highlights -->
    <section class="menu-highlights">
        <div class="container">
            <h2 class="text-center">Our Menu Highlights</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/srilankan.jpg" class="card-img-top" alt="Sri Lankan Cuisine">
                        <div class="card-body">
                            <h5 class="card-title">Sri Lankan Cuisine</h5>
                            <p class="card-text">Traditional Sri Lankan dishes with a modern twist.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/italian.jpg" class="card-img-top" alt="Italian Cuisine">
                        <div class="card-body">
                            <h5 class="card-title">Italian Cuisine</h5>
                            <p class="card-text">Delicious pasta, pizza, and other Italian favorites.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/chinese.jpg" class="card-img-top" alt="Chinese Cuisine">
                        <div class="card-body">
                            <h5 class="card-title">Chinese Cuisine</h5>
                            <p class="card-text">Authentic Chinese flavors, freshly prepared for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
