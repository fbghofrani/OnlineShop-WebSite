<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
</head>
<body class="winter-theme">
    
    <?//= session('error') ? '<p>' . session('error') . '</p>' : '' ?>
    <form  action="<?php echo base_url('AuthController/login'); ?>" method="post">
    <h1>Login</h1>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="<?php echo base_url('AuthController/regi'); ?>">Register</a></p>
    </form>
</body>
</html>
