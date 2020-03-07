<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="../controller/accountController.php">
        <div class="form-label-group">
            <input type="user-name" id="inputEmail" class="form-control" name="user-name" placeholder="Email address" required autofocus>
            <label for="inputEmail">User-name</label>
        </div>
        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
            <label for="inputPassword">Password</label>
        </div>
    </form>
</body>

</html>