<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green position: bottom;'>New record created successfully</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; display: flex; justify-content: center; align-items: center; height: 100vh;">

    <div style="background-color: #ffffff; padding: 20px 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 300px; text-align: center;">
        <h2 style="margin-bottom: 20px; color: #333;">Register</h2>

        <form method="POST">
            <label for="username" style="display: block; font-weight: bold; margin-bottom: 5px; color: #555;">Username:</label>
            <input type="text" name="username" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="email" style="display: block; font-weight: bold; margin-bottom: 5px; color: #555;">Email:</label>
            <input type="email" name="email" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <label for="password" style="display: block; font-weight: bold; margin-bottom: 5px; color: #555;">Password:</label>
            <input type="password" name="password" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

            <input type="submit" value="Register" style="background-color: #5cb85c; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px;">
        </form>
    </div>

</body>
</html>
