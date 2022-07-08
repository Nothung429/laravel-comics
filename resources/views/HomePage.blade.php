<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>DC Comix</title>
    </head>
    
    <body>
        @include("partials.PageHeader")
        <!---------------------------------------->
        <main>
            <div class="main__jumbotron"></div>
            <div class="main__series">
                <div class="frame">
                    <div class="main__series__comics">
                        <div class="main__series__comics__container">
                            @foreach($comics as $comic)
                                <div class="main__series__comics__container__comic">
                                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                                    <h3>{{$comic['title']}}</h3>
                                </div>
                            @endforeach
                        </div>
                        <div class="main__series__comics__btn">
                            <button>load more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__nav__bg">
                <div class="frame">
                    <div class="main__nav">
                        <ul>
                            <li>
                                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                                <p>DIGITAL COMICS</p>
                            </li>
                            <li>
                                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                                <p>DIGITAL COMICS</p>
                            </li>
                            <li>
                                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                                <p>DIGITAL COMICS</p>
                            </li>
                            <li>
                                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                                <p>DIGITAL COMICS</p>
                            </li>
                            <li>
                                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                                <p>DIGITAL COMICS</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        <!---------------------------------------->
        @include("partials.PageFooter")
    </body>
</html>