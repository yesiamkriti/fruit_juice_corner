<?php
// This is where you can add PHP code to handle form submissions, like sending emails or saving to a database.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // You can now process the form, like sending an email or saving data
    // Example: Send email to admin
    $to = "your-email@example.com";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);

    // Redirect or show a success message
    echo "<script>alert('Thank you for contacting us! We will get back to you soon.'); window.location = 'contact.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Add your styles here, or link to an external CSS file -->
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(https://as2.ftcdn.net/v2/jpg/05/86/41/35/1000_F_586413570_GSCmwjQTIxMtbzgBaiCNVlKIdGIqj3mF.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
    padding: 7% 0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group textarea {
            height: 150px;
            resize: none;
        }
        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #218838;
        }
        .form-group .error {
            color: red;
            font-size: 14px;
        }
        .contact-info {
            margin-top: 40px;
            text-align: center;
        }
        .contact-info p {
            margin: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Contact Us</h1>
        <!-- Contact Form -->
        <form action="contact.php" method="POST" id="contactForm">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your full name">
                <div class="error" id="nameError"></div>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email address">
                <div class="error" id="emailError"></div>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required placeholder="Enter the subject of your message">
                <div class="error" id="subjectError"></div>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required placeholder="Write your message"></textarea>
                <div class="error" id="messageError"></div>
            </div>

            <div class="form-group">
                <button type="submit" name="submit">Send Message</button>
            </div>
        </form>

        <!-- Contact Information -->
        <div class="contact-info">
            <h3>Contact Information</h3>
            <p><strong>Address:</strong> 123 Main Street, City, Country</p>
            <p><strong>Email:</strong> contact@yourdomain.com</p>
            <p><strong>Phone:</strong> +123 456 7890</p>
        </div>
    </div>

    <script>
        // Simple form validation before submission
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            let valid = true;
            
            // Validate Name
            let name = document.getElementById('name').value;
            if (name === "") {
                document.getElementById('nameError').innerText = "Name is required";
                valid = false;
            } else {
                document.getElementById('nameError').innerText = "";
            }

            // Validate Email
            let email = document.getElementById('email').value;
            if (email === "") {
                document.getElementById('emailError').innerText = "Email is required";
                valid = false;
            } else if (!validateEmail(email)) {
                document.getElementById('emailError').innerText = "Invalid email address";
                valid = false;
            } else {
                document.getElementById('emailError').innerText = "";
            }

            // Validate Subject
            let subject = document.getElementById('subject').value;
            if (subject === "") {
                document.getElementById('subjectError').innerText = "Subject is required";
                valid = false;
            } else {
                document.getElementById('subjectError').innerText = "";
            }

            // Validate Message
            let message = document.getElementById('message').value;
            if (message === "") {
                document.getElementById('messageError').innerText = "Message is required";
                valid = false;
            } else {
                document.getElementById('messageError').innerText = "";
            }

            if (!valid) {
                event.preventDefault(); // Prevent form submission
            }
        });

        // Email validation function
        function validateEmail(email) {
            const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return regex.test(email);
        }
    </script>

</body>
</html>
