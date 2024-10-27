<?php
include 'includes/db.php';
include 'includes/header.php';


$sql = "SELECT * FROM menu";
$result = $conn->query($sql);
?>

<div class="container">
    <h2 class="mt-4">Our Menu</h2>
    <div class="row">
        <?php while($row = $result->fetch_assoc()): ?>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo $row['image_url']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <p class="card-text"><?php echo $row['description']; ?></p>
                    <p class="card-text"><strong>Price:</strong> $<?php echo number_format($row['price'], 2); ?></p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

<?php
include 'includes/footer.php';
$conn->close();
?>
