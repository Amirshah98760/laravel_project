
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CI/CD</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #e3342f;
        }

        p {
            color: #555;
            font-size: 18px;
        }

        .status {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Laravel!</h1>

        <p>Laravel application is running successfully.</p>

        <p class="status">CI/CD Deployment Successful!</p>

        <p>Updated automatically using GitHub Actions and AWS EC2.</p>
    </div>

</body>
</html>
