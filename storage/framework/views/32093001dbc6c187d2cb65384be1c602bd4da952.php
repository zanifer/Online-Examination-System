<?php /* C:\xampp\htdocs\Final_auth\resources\views/start_exam.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Student</title>
   <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href=" <?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
   
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


  <style>
  .header{
   width: 100%;
    padding: 5px;
    height: 80px;
    background-color: #495567ed;
    color: #f1f1f1f0;
       text-align: center;
}

  }

  .header h1{
  
    color:#2196F3;
    font-size:40px;
    text-align: center;
    }
    .header h1:hover {
  background-color: #556171;
  color: white;
}


  .topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: #ff9800e0;
  color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media  screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}

  body{
    background-color:#C7CBD1;
  }
  </style>

</head>
<body>
  <div class="header">  
    <div class="row">
      <div class="col-11">
        <h1 class="text-center"><b>Welcome to Sec Online Examination</b></h1>
    </div>

    <div class="col-1">


             <div class="logout mt-4">
    <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>      
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                   <b style="background:#fff;"> <?php echo e(Auth::user()->name); ?> </b><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
    
  </div>

    </div>
  </div>

</div>

    <div class="topnav">
  <a class="active" href="student">Home</a>
  <a href="<?php echo e(route('start_exam')); ?>"> Start Exam</a>
  <input type="text" placeholder="Search">
</div>
 <div class="container">
     <div class="pt-3"></div>
<div class="pt-3"></div>
<div class="pt-3"></div>


<div>

<?php
  $array;
  $i=1;
?>
<?php $__currentLoopData = $question; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <p class="lead">(<?php echo e($i); ?>) <?php echo e($question->question); ?> </p>

  <?php
  $array[$i]=$question->question_no;

  $i++;
  ?>

  <div class="m-4"></div>

  <div class="container">
    <p><strong>(a)<?php echo e($question->option_a); ?></strong></p>
    <p><strong>(b)<?php echo e($question->option_b); ?></strong></p>
    <p><strong>(c)<?php echo e($question->option_c); ?></strong></p>
    <p><strong>(d)<?php echo e($question->option_d); ?></strong></p>


  </div>


  <div class="pt-2">

<div class="pt-2"></div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>



<div>

  <h2 class="bg-success text-center">Fill in the form </h2>
  <form method="get" action="<?php echo e(route('count')); ?>">

   <label class="control-label col-sm-2" for="q1">Question 1:</label>
    <div class="col-sm-2">
      <input type="string"  name="q1" class="form-control" id="q1" placeholder="(1) Enter a/b/c/d">
      <input type="hidden" name="taken1" class="form-control"  value="<?php echo $array[1]; ?>"  >
       
    </div>


     <label class="control-label col-sm-2" for="q2">Question 2:</label>
    <div class="col-sm-2">
      <input type="string" name="q2" class="form-control" id="q2" placeholder="(2) Enter a/b/c/d ">
      <input type="hidden"  name="taken2" class="form-control"  value="<?php echo $array[2]; ?>">
    </div>

     <label class="control-label col-sm-2" for="q3">Question 3:</label>
    <div class="col-sm-2">
      <input type="string" name="q3" class="form-control"  id="q3" placeholder=" (3) Enter a/b/c/d">
      <input type="hidden" name="taken3" class="form-control "value="<?php echo $array[3]; ?>">
    </div>

     <label class="control-label col-sm-2" for="q4">Question 4:</label>
    <div class="col-sm-2">
      <input type="string" name="q4" class="form-control" id="q4" placeholder="(4) Enter a/b/c/d">
      <input type="hidden" name="taken4" class="form-control" value="<?php echo $array[4]; ?>">
    </div>

     <label class="control-label col-sm-2" for="q5">Question 5:</label>
    <div class="col-sm-2">
      <input type="string" name="q5" class="form-control" id="q5" placeholder="(5) Enter a/b/c/d">
      <input type="hidden" name="taken5" class="form-control" value="<?php echo $array[5]; ?>">
    </div>

     <label class="control-label col-sm-2" for="q6">Question 6:</label>
    <div class="col-sm-2">
      <input type="string" name="q6" class="form-control" id="q6" placeholder="(6) Enter a/b/c/d">
      <input type="hidden" name="taken6" class="form-control" value="<?php echo $array[6]; ?>">
    </div>

     <label class="control-label col-sm-2" for="q7">Question 7:</label>
    <div class="col-sm-2">
      <input type="string" name="q7" class="form-control" id="q7" placeholder="(7) Enter a/b/c/d">
      <input type="hidden" name="taken7" class="form-control" value="<?php echo $array[7]; ?>">
    </div>

     <label class="control-label col-sm-2" for="q8">Question 8:</label>
    <div class="col-sm-2">
      <input type="string" name="q8" class="form-control" id="q8" placeholder="(8) Enter a/b/c/d">
      <input type="hidden" name="taken8" class="form-control" value="<?php echo $array[8]; ?>">
    </div>

     <label class="control-label col-sm-2" for="q9">Question 9:</label>
    <div class="col-sm-2">
      <input type="string" name="q9" class="form-control" id="q9" placeholder="(9) Enter a/b/c/d">
      <input type="hidden" name="taken9" class="form-control" value="<?php echo $array[9]; ?>">
    </div>

     <label class="control-label col-sm-2" for="q10">Question 10:</label>
    <div class="col-sm-2">
      <input type="string" name="q10" class="form-control" id="q10" placeholder="(10) Enter a/b/c/d">
      <input type="hidden" name="taken10" class="form-control" value="<?php echo $array[10]; ?>">
    </div>

    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-warning">Submit</button>
    </div>


<!--
    
  -->



  </form>


</div>
  </div>
























