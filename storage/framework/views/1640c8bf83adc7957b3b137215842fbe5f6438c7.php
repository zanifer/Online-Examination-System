<?php /* C:\xampp\htdocs\Final_auth\resources\views/welcome.blade.php */ ?>

<!DOCTYPE html>
<html> 
<head>
    <title> Sec Online Examination Sytem</title>
    <link rel="stylesheet"  href="css/style.css">
</head>
<body>
    <header>
        <div class="title ">
            <h1>Online Examination System</h1>
        </div>
        <div class="button clearfix">
            <a href="<?php echo e(route('login')); ?>" class="btn">Log in</a>
            <a href="<?php echo e(route('register')); ?>" class="btn">Register</a>
        </div>
        <div class="footer">
            <h3>Sylhet Engineering College</h3>
        </div>

    </header>

</body>
</html>