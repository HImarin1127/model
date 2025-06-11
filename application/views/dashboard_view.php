<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user); ?>!</h1>
    <p>You are now logged in.</p>
    <a href="index.php?c=login&m=logout">Logout</a>
</body>
</html>
