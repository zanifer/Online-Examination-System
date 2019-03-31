<?php /* C:\xampp\htdocs\Final_auth\resources\views/student.blade.php */ ?>
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
    background-color:#CCCCCC;
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

  <div class="main">
                 <table class="table table-condensed table-bordered table-hover">
     <tr class="warning">
      <th>Id</th>
      <th>Question No</th>
      <th>Question</th>

       </tr>
         <?php $i = 0; ?>
     <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <?php $i++ ?>
     <tr class="success">
        <td><?php echo e($question->id); ?></td>
       <td><?php echo e($question->question_no); ?></td>
       <td><?php echo e($question->question); ?></td>
     </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    
   </table>
  
             </div>
  
<script type="text/javascript" src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>

</body>
</html>