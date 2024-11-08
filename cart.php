<link href="cartSyle.css" rel="stylesheet" />
<?php 
include 'includes/header.php';
include 'includes/db_connection.php';
include 'includes/delete_from_cart.php';

try {
    $query = "SELECT * FROM cartitems";
    $result = $conn->query($query);

    if ($result) {
        $cartItems = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        throw new Exception("Error fetching cart items: " . $conn->error);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}


?>

<section class="about" id="about">
    <h1 class="heading"> <span>Your</span> Cart </h1>
    <div class="about-us-row">
        <div class="about-us-content">
            <h3>What are you waiting for to Check Out?</h3>
                <p>Ready to embark on a flavor-packed adventure?
                <br> Your Cart is where the magic begins.
                </p>
                <button id="btn" onclick="window.location.href='cart.php#classTable'">Check Your Items</button>
        </div>
    </div>
</section>

</div> <!-- End of all-content div -->

<div class="container" id="classTable">
    <h1 class="heading" style="text-align: center; padding-top: 10px; color:#424242;"><span>YOUR</span> CART</h1>
    <ul class="responsive-table">
    <li class="table-header">
        <div class="col col-1">Product Id</div>
        <div class="col col-2">Product Name</div>
        <div class="col col-3">Product Price</div>
        <div class="col col-4"> </div>
    </li>

    <?php foreach ($cartItems as $item): ?>
        <li class="table-row">
            <div class="col col-1"><?php echo htmlspecialchars($item['Id']); ?></div>
            <div class="col col-2"><?php echo htmlspecialchars($item['ProductName']); ?></div>
            <div class="col col-3"><?php echo number_format($item['ProductPrice'], 2); ?></div>
            <div class="col col-4">
            
                <!--delete button-->
                <form method="POST" onclick="return confirm('Are you sure you want to remove this item?');" style="display: inline;">
                    <input type="hidden" name="delete_id" value="<?php echo $item['Id']; ?>">
                    <button type="submit" style="border: none; background: none;">
                        <img src="assets/img/x-regular-24 black.png" height="25" width="25" alt="Remove">
                    </button>
                </form>

            </div>
        </li>
    <?php endforeach; ?>

    <li class="table-header">
        <div class="col col-1"></div>
        <div class="col col-2">Total:</div>
        <div class="col col-3">
            <?php
                $total = 0;
                foreach ($cartItems as $item) {
                    $total += $item['ProductPrice'];
                }
                echo "$" . number_format($total, 2);
            ?>
        </div>
        <div class="col col-4"></div>
    </li>

    </ul>
</div>

<?php include 'includes/footer.php'; ?>