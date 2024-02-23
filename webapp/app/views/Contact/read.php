<html>
<head>
    <title><?= $name ?> view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
		
        /* Custom CSS for styling messages */
        .message-box {
            border: 1px solid #ced4da; 
            border-radius: 0.25rem; 
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id='container'>
		<h1>Contact us - messages sent</h1>
        <?php
        foreach($data as $index => $msg){
            echo "<div class='message-box'>
                    <p><strong>Email:</strong> $msg->email</p>
                    <p><strong>Message:</strong> $msg->message</p>
                </div>";
        }
        ?>
    </div>
</body>
</html>
