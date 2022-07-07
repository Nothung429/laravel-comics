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
        <div class="ad">
            <p>DC POWER VISA</p>
            <p>ADDICIONAL DC SITES ►</p>
        </div>
        <header class="frame">
            <div class="header__logo">
                <img src="{{asset('img/dc-logo.png')}}">
            </div>
            <div class="header__nav">
                <ul class="header__list">
                    <li><a href="">home</a></li>
                    <li><a href="">home</a></li>
                    <li><a href="">home</a></li>
                    <li><a href="">home</a></li>
                    <li><a href="">home</a></li>
                </ul>
            </div>
        </header>
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
        <footer>
            <div class="footer__nav__bg">
                <div class="frame">
                    <div class="footer__nav">
                        <div class="links">
                            <div class="col-1">
                                <div class="link-group-1">
                                    <h3>dc comics</h3>
                                    <ul>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                    </ul>
                                </div>
                                <div class="link-group-4">
                                    <h3>shop</h3>
                                    <ul>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="link-group-2">
                                    <h3>dc</h3>
                                    <ul>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="link-group-3">
                                    <h3>sites</h3>
                                    <ul>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                        <li><a href="">home</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>                    
                        <div class="footer__nav__img"></div>
                    </div>
                </div>            
            </div>
            <div class="footer__social__bg">
                <div class="frame">
                    <div class="footer__social">
                        <div class="footer__social__btn">
                            <button>SIGN-UP NOW!</button>
                        </div>
                        <div class="footer__social__links">
                            <h3>FOLLOW US</h3>
                            <ul>
                                <li><img src="{{asset('img/footer-youtube.png')}}" alt="footer-li-img"></li>
                                <li><img src="{{asset('img/footer-youtube.png')}}" alt="footer-li-img"></li>
                                <li><img src="{{asset('img/footer-youtube.png')}}" alt="footer-li-img"></li>
                                <li><img src="{{asset('img/footer-youtube.png')}}" alt="footer-li-img"></li>
                                <li><img src="{{asset('img/footer-youtube.png')}}" alt="footer-li-img"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>