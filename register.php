<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
    body{
        background-color: white;
    }
    input{
        width: 40%;
        height: 5%;
        border: 1px;
        border-radius: 5px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px green;
    }
    </style>
</head>
<body>
    <center>
        <h1>Register account</h1>
        <form action="addAccount.php" method="POST">
        <input type="text" name="user" placeholder="User Name"><br>
        <input type="password" name="pw" placeholder="Password"><br>
        <input type="submit" value="Submit" name="submit">
        </form>
    </center>
</body>
</html>