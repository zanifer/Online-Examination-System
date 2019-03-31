  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Teacher Panel</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
          <link rel="stylesheet" href=" {{asset('bootstrap/css/bootstrap.min.css')}}">
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
  @media screen and (max-width: 600px) {
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
    background-color:#DEE1E6;
  }

    </style>

  </head>
  <body>
     
<div class="header">  
  <div class="row">
              <div class="col-11">
                    <h1>Welcome To Teacher Dashboard</h1>
              </div>
          <div class="col-1">

                <div class="logout">
         <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                          @guest
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                              @if (Route::has('register'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                              @endif      
                          @else
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                     <b style="background:#fff;"> {{ Auth::user()->name }} </b><span class="caret"></span>
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @endguest
                      </ul>
        
                  </div>

                </div>
    </div>
 </div>
              <div class="topnav">  
                 <a href="teacher">Home</a>
                  <a href="add_ques">Add Ques</a>
                  <a href="questionList">Question List</a>
                  <input type="text" placeholder="Search">
             </div>
             <div class="container">
               <h3>Edit User</h3>
                <form class="form-horizontal" action="{{route('update' ,$question->id )}}" method="post">
     {{csrf_field()}}
      <div class="form-group">
    <label class="control-label col-sm-2" for="name">Question No:</label>
     <div class="col-sm-10">
    <input type="question_no" class="form-control" name="question_no" id="question_no" value="{{$question->question_no}}">
    </div>
  </div>

    <div class="form-group">
    <label class="control-label col-sm-2" for="question">Question:</label>
    <div class="col-sm-10">
      <input type="question" class="form-control"  name="question" id="question" value="{{$question->question}}">
    </div>
  </div>

     <div class="form-group">
    <label class="control-label col-sm-2" for="name">Option A:</label>
     <div class="col-sm-10">
    <input type="option_a" class="form-control" name="option_a" id="option_a" value="{{$question->option_a}}">
    </div>
  </div>

     <div class="form-group">
    <label class="control-label col-sm-2" for="name">Option B:</label>
     <div class="col-sm-10">
    <input type="option_b" class="form-control" name="option_b" id="option_b" value="{{$question->option_b}}">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="name">Option C:</label>
     <div class="col-sm-10">
    <input type="option_c" class="form-control" name="option_c" id="option_c" value="{{$question->option_c}}">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="name">Option D:</label>
     <div class="col-sm-10">
    <input type="option_d" class="form-control" name="option_d" id="option_d" value="{{$question->option_d}}">
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="name">Correct Answer:</label>
     <div class="col-sm-10">
    <input type="correct_answer" class="form-control" name="correct_answer" id="correct_answer" value="{{$question->correct_answer}}">
    </div>
  </div>
 



    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>
  </div>

</from>

              </div>

       

 

             
  <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  </body>
  </html>
 







 <!-- <h3>Edit User</h3>


   <form class="form-horizontal" action="{{route('update' ,$question->id )}}" method="post">
     {{csrf_field()}}
      <div class="form-group">
    <label class="control-label col-sm-2" for="name">Question No:</label>
     <div class="col-sm-10">

    <input type="question_no" class="form-control" name="question_no" id="question_no" value="{{$question->question_no}}">
    </div>
  </div>
 

  <div class="form-group">
    <label class="control-label col-sm-2" for="question">Question</label>
    <div class="col-sm-10">
      <input type="question" class="form-control"  name="question" id="question" value="{{$question->question}}">
    </div>
  </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>
</from>-->