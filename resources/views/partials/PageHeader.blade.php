<header>
    <div class="ad">
        <div class="frame">
            <p>DC POWER VISA</p>
            <p>ADDICIONAL DC SITES ►</p>
        </div>
    </div>
    <div class="header__core frame">
        <div class="header__core__logo">
            <img src="{{asset('img/dc-logo.png')}}">
        </div>
        <div class="header__core__nav">
            <ul class="header__core__nav__list">
                @foreach($headerLinks as $headerLink)
                    <li>
                        <a href="{{route($headerLink['route'])}}">{{$headerLink['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>