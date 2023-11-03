<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #f0f0f0;
            background-repeat: none;
            /* background-size: cover; */
            background-image: url(./img/5026563.jpg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            align-items: center;
            min-height: 100vh;
            background-attachment: fixed;
        }

        button[type="button"] {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s ease;
            margin: 10px;
            }

            button[type="button"]:hover{
            background-color: #2980b9;
        }

        a {
            text-decoration: none;
            font-weight: 600;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Data Added Successful</h1>
    <button type="button">
        <a href="index.php">Registration Page</a>
    </button>
    <button type="button">
        <a href="view.php">View Table</a>
    </button>
</body>
</html>