<!DOCTYPE html>
<html lang="en">

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


        <div class='new'>
            <h1>Your quizzes</h1>
            <div>
                @foreach($quizzes as $quiz)
                <div class="manage-container">
                    <div class="card">
                        <img src="{{ asset('quiz.png') }}" style="width: 8vh" />
                        <h2 class="card-title">{{$quiz->name}}</h2>
                        <p class="card-description">{{$quiz->description}} test</p>
                    </div>
                    @endforeach



                </div>

            </div>

</body>

</html>