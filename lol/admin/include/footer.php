<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Footer</title>
    <style>
        .admin-footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 14px;
        }
        .admin-footer a {
            color: #ffc107;
            text-decoration: none;
        }
        .admin-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Admin Footer -->
<div class="admin-footer">
    <p>&copy; <?php echo date("Y"); ?> Admin Panel. All rights reserved.</p>
    <p>
        <a href="privacy-policy.php">Privacy Policy</a> | 
        <a href="terms-of-service.php">Terms of Service</a> | 
        <a href="contact.php">Contact Us</a>
    </p>
</div>

</body>
</html>
