<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    h1 {
        margin-top: 0;
    }
    label {
        font-weight: bold;
    }
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    textarea {
        resize: vertical;
        min-height: 100px;
    }
    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>

<div class="container">
    <h1>Contact Us</h1>
    <form id="contactForm" class="mt-3" method="POST" action="/Contact/confirm_read">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" placeholder="jondoe@gmail.com" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea placeholder="Hello!" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" name="submit">Send Message</button>
    </form>
</div>

</body>
</html>
