<?php
// Initialize variables
$pricePerSize = ['S' => 50, 'M' => 60, 'L' => 70];
$totalPrice = 0;
$glassSize = ' '; // Default size set to 'S'
$quantity = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected glass size and quantity from the form
    $glassSize = $_POST['glass-size'] ?? 'S';
    $quantity = $_POST['qty'] ?? 1;

    // Calculate total price based on glass size and quantity
    if (isset($pricePerSize[$glassSize])) {
        $totalPrice = $pricePerSize[$glassSize] * $quantity;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript function to dynamically update the total price
        function updateTotalPrice() {
            var glassSize = document.querySelector('input[name="glass-size"]:checked').value;
            var quantity = document.querySelector('input[name="qty"]').value;
            var pricePerSize = { "S": 50, "M": 60, "L": 70 };
            var totalPrice = pricePerSize[glassSize] * quantity;
            document.getElementById("total-price").innerText = '₹' + totalPrice;
        }
    </script>
</head>
<body>
<section class="food-search" style="background-color: #f8f9fa; padding: 40px 0;">
    <div class="container" style="max-width: 700px; margin: 0 auto;">
        <h2 class="text-center text-dark" style="font-weight: bold; margin-bottom: 20px;">Fill this form to confirm your order</h2>

        <form action="" method="POST" class="order" style="background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <fieldset style="margin-bottom: 20px; border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
                <legend style="font-weight: bold; font-size: 1.2rem; padding: 0 10px; color: #007bff;">Selected Food</legend>

                <div class="food-menu-img text-center" style="margin-bottom: 15px;">
                    <img src="images/menu-pizza.jpg" alt="Chicken Hawaiian Pizza" 
                         style="width: 180px; height: 180px; object-fit: cover; border-radius: 50%; border: 4px solid #007bff;">
                </div>

                <div class="food-menu-desc text-center">
                    <h3 style="font-weight: bold; color: #343a40;">Food Title</h3>
                    <p class="food-price" style="color: #28a745; font-size: 1.2rem;">Total Price: <span id="total-price"><?php echo $totalPrice; ?></span></p>

                    <div class="order-label" style="margin-top: 10px;">Quantity</div>
                    <input type="number" name="qty" class="form-control" style="max-width: 100px; margin: 0 auto;" value="<?php echo $quantity; ?>" min="1" oninput="updateTotalPrice()" required>

                    <div class="order-label" style="margin-top: 10px;">Choose Glass Size</div>
                    <div>
                        <label class="btn btn-outline-primary <?php if ($glassSize == 'S') echo 'active'; ?>">
                            <input type="radio" name="glass-size" value="S" <?php if ($glassSize == 'S') echo 'checked'; ?> onclick="updateTotalPrice()"> S
                        </label>
                        <label class="btn btn-outline-primary <?php if ($glassSize == 'M') echo 'active'; ?>">
                            <input type="radio" name="glass-size" value="M" <?php if ($glassSize == 'M') echo 'checked'; ?> onclick="updateTotalPrice()"> M
                        </label>
                        <label class="btn btn-outline-primary <?php if ($glassSize == 'L') echo 'active'; ?>">
                            <input type="radio" name="glass-size" value="L" <?php if ($glassSize == 'L') echo 'checked'; ?> onclick="updateTotalPrice()"> L
                        </label>
                    </div>
                </div>
            </fieldset>

            <!-- Delivery Details -->
            <fieldset style="border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
                <legend style="font-weight: bold; font-size: 1.2rem; padding: 0 10px; color: #007bff;">Delivery Details</legend>

                <div class="mb-3">
                    <label class="order-label" for="full-name" style="margin-bottom: 5px;">Full Name</label>
                    <input type="text" id="full-name" name="full-name" placeholder="E.g xyz" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="order-label" for="contact" style="margin-bottom: 5px;">Phone Number</label>
                    <input type="tel" id="contact" name="contact" placeholder="E.g. xxxxxxxxxx" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="order-label" for="email" style="margin-bottom: 5px;">Email</label>
                    <input type="email" id="email" name="email" placeholder="E.g. xyz@gmail.com" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="order-label" for="address" style="margin-bottom: 5px;">Address</label>
                    <textarea id="address" name="address" rows="4" placeholder="E.g. Street, City, Country" class="form-control" required></textarea>
                </div>

                <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary w-100" style="font-size: 1.1rem;">
            </fieldset>
        </form>
    </div>
</section>
<?php include 'includes/footer.php';?>
</body>
</html>
