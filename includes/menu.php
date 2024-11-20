<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Link our CSS file -->
       <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- Juice Menu Section Start -->
<div class="container text-center">
    <h2 class="mb-4">Juice Menu</h2>
    <div class="row g-4"> <!-- Added justify-content-center to center the cards -->
        <!-- Juice Item 1 -->
        <div class="col-md-4 col-sm-6">
            <div class="card" style="width: 20rem;">
                <img src="https://media.istockphoto.com/id/904617420/photo/fresh-mango-smoothie-in-the-glass.webp?a=1&b=1&s=612x612&w=0&k=20&c=owVY4fKM9_0n5MNTJ32JpUX7R39Uk0OW2v3OToswNi0=" 
                     class="card-img-top rounded-circle" 
                     alt="Fresh Mango Juice" 
                     style="width: 200px; height: 200px; object-fit: cover; margin: 0 auto;">
                <div class="card-body">
                    <h5 class="card-title">Fresh Mango Juice</h5>
                    <p class="card-text">Made with handpicked ripe mangoes and a touch of organic honey.</p>
                    <a href="./order.php" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>

        <!-- Juice Item 2 -->
        <div class="col-md-4 col-sm-6">
            <div class="card" style="width: 20rem;">
                <img src="https://plus.unsplash.com/premium_photo-1667543228378-ec4478ab2845?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fG9yYW5nZSUyMGp1aWNlfGVufDB8fDB8fHww" 
                     class="card-img-top rounded-circle" 
                     alt="Orange Juice" 
                     style="width: 200px; height: 200px; object-fit: cover; margin: 0 auto;">
                <div class="card-body">
                    <h5 class="card-title">Orange Juice</h5>
                    <p class="card-text">Freshly squeezed oranges, rich in Vitamin C.</p>
                    <a href="./order.php" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>

        <!-- Juice Item 3 -->
        <div class="col-md-4 col-sm-6">
            <div class="card" style="width: 20rem;">
                <img src="https://images.unsplash.com/photo-1507120366498-4656eaece7fa?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fEJlcnJ5JTIwYmxhc3QlMjBqdWljZXxlbnwwfHwwfHx8MA%3D%3D" 
                     class="card-img-top rounded-circle" 
                     alt="Berry Blast" 
                     style="width: 200px; height: 200px; object-fit: cover; margin: 0 auto;">
                <div class="card-body">
                    <h5 class="card-title">Berry Blast</h5>
                    <p class="card-text">A refreshing mix of blueberries, strawberries, and raspberries.</p>
                    <a href="./order.php" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>

        <!-- Juice Item 4 -->
        <div class="col-md-4 col-sm-6">
            <div class="card" style="width: 20rem;">
                <img src="https://media.istockphoto.com/id/2005482636/photo/fresh-watermelon-slices-with-watermelon-smoothie.webp?a=1&b=1&s=612x612&w=0&k=20&c=MvZ0WtR2N5YlnIn9LqoR86frrVVyUmAcvHd99QRRQR4=" 
                     class="card-img-top rounded-circle" 
                     alt="Watermelon Juice" 
                     style="width: 200px; height: 200px; object-fit: cover; margin: 0 auto;">
                <div class="card-body">
                    <h5 class="card-title">Watermelon Juice</h5>
                    <p class="card-text">A hydrating juice with a touch of mint.</p>
                    <a href="./order.php" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>

        <!-- Juice Item 5 -->
        <div class="col-md-4 col-sm-6">
            <div class="card" style="width: 20rem;">
                <img src="https://media.istockphoto.com/id/1160058176/photo/pineapple-juice.webp?a=1&b=1&s=612x612&w=0&k=20&c=ztQt7zUzqeUgWg-nTb9zMMawjGaR3aYk32O1WD4COO0=" 
                     class="card-img-top rounded-circle" 
                     alt="Pineapple Juice" 
                     style="width: 200px; height: 200px; object-fit: cover; margin: 0 auto;">
                <div class="card-body">
                    <h5 class="card-title">Pineapple Juice</h5>
                    <p class="card-text">Freshly pressed pineapple juice with a tropical twist.</p>
                    <a href="./order.php" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>

        <!-- Juice Item 6 -->
        <div class="col-md-4 col-sm-6">
            <div class="card" style="width: 20rem;">
                <img src="https://images.unsplash.com/photo-1638176066781-31ad97feacc9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8a2l3aSUyMGNvb2xlcnxlbnwwfHwwfHx8MA%3D%3D" 
                     class="card-img-top rounded-circle" 
                     alt="Kiwi Cooler" 
                     style="width: 200px; height: 200px; object-fit: cover; margin: 0 auto;">
                <div class="card-body">
                    <h5 class="card-title">Kiwi Cooler</h5>
                    <p class="card-text">A zesty kiwi-based juice perfect for summer.</p>
                    <a href="./order.php" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Juice Menu Section End -->
</body>
</html>