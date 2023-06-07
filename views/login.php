<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <h1>Login</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <?php if (isset($error_message)) : ?>
                    <p class="text-danger"><?php echo $error_message; ?></p>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>

</html>