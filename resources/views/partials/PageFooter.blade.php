<footer>
    <div class="footer__nav__bg">
        <div class="frame">
            <div class="footer__nav">
                <div class="links">
                    @foreach($footerLinks as $footerLink)
                        <h3>dc comics</h3>
                        <ul>
                            @foreach($footerLink as $group)
                                <li>
                                    <a href="">{{$group['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach                
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
                        <li><img src="{{asset('img/footer-facebook.png')}}" alt="footer-li-img"></li>
                        <li><img src="{{asset('img/footer-twitter.png')}}" alt="footer-li-img"></li>
                        <li><img src="{{asset('img/footer-youtube.png')}}" alt="footer-li-img"></li>
                        <li><img src="{{asset('img/footer-pinterest.png')}}" alt="footer-li-img"></li>
                        <li><img src="{{asset('img/footer-periscope.png')}}" alt="footer-li-img"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>