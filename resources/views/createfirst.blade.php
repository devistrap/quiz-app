<!DOCTYPE html>
<html lang="en">
<?php
$varValue = session('user_id');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body>
<nav>
    <ul>
        <div>
            <li><a href="{{ url('/') }}"><img class="logo" src="{{ asset('trophy.png') }}" style="width: 8vh" /></a>
            </li>
            <li class="menu-item"><a href="{{ url('/create') }}">create a quiz</a></li>
            <li class="menu-item"><a href="{{url('manage')}}">manage quizzes</a></li>
            <li class="menu-item"><a>explore quizzes</a></li>
        </div>
        <div class="login_div">

            @if(!empty($var1))
            <h3>
                logged in as: {{ $var1 }}
            </h3>
            @else
            <a href="{{ url('/login') }}"><button class="login">login</button></a>
            <a href="{{ url('/register') }}"><button class="signup">signup</button></a>
            @endif
        </div>
    </ul>

</nav>
    <div class="main">


        <div class="first_things_container">
            <h1  class="first_things">First things first....</h1>
            <form style="display:inline-block;" method="POST" action="{{ url('/createfirst') }}" enctype="multipart/form-data">
                @csrf
                
                <label class="firstquiz_label">What is the name of your quiz?</label><br>
                <input type="text" class="firstquiz_text" name="quiz_name" placeholder="Quiz name" required>
                <br><br>

                <label class="firstquiz_label">Describe your quiz here!</label><br>
                <input type="text" class="firstquiz_text" name="quiz_description" placeholder="Quiz description" required>
                <br><br>

                <br><br>

                <input type="submit" class="firstquiz_submit" value="Create your first question">

            </form>
            <div class="hero-img">
                <img src="{{ asset('list.png') }}" style="width: 50vh; float:center;" />
            </div>


</body>

</html>