<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Document</title>
    </head>

    <body>
        @include("partials.PageHeader")
        <main>
            <div class="main__jumbotron"></div>
            <div class="separee">
                <div class="comic-frame">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>    
            </div>
            <div class="comic">
                <!----------------------------------->
                <div class="comic-frame">
                    <div class="comic__top">
                        <div class="comic__top__left">
                            <h1>{{$comic['title']}}</h1>
                            <div class="comic__top__left__price">
                                <h3>U.S. Price {{$comic['price']}}</h3>
                                <h3>available</h3>
                            </div>                        
                            <p>{{$comic['description']}}</p>
                        </div>
                        <div class="comic__top__right">
                            <h3>advertisement</h3>
                            <img src="{{asset('img/adv.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="comic__bottom">
                    <div class="comic-frame">
                        <h2>Talent</h2>
                        <p>Arts by:
                            @foreach($comic['artists'] as $artist)
                                <p>{{$artist}}</p>
                            @endforeach
                        </p>
                        <h2>Specs</h2>
                        <p>Written by:
                            @foreach($comic['writers'] as $writer)
                                <p>{{$writer}}</p>
                            @endforeach
                        </p>
                    </div>    
                </div>
                <!----------------------------------->
            </div>
            </div>            
            <div class="main__nav__bg">
                <div class="frame">
                    <div class="main__nav">
                        <ul>
                            @foreach($mainNav as $main)
                                <li>
                                    <img src="{{$main['image']}}" alt="{{$main['text']}}">
                                    <p>{{$main['text']}}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        @include("partials.PageFooter")
    </body>
</html>