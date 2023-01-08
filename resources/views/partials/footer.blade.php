<footer>
    <div class="footer-top">
        <div class="container d-flex justify-content-start align-items-start">
            <div>
                <ul>
                   <li><h4>{{ $footerLinks[0]['listTitle'] }}</h4></li>
                   @foreach($footerLinks[0]['listItems'] as $link)
                        <li>{{$link}}</li>
                   @endforeach
                </ul>
                <ul>
                    <li><h4>{{ $footerLinks[1]['listTitle'] }}</h4></li>
                    @foreach($footerLinks[1]['listItems'] as $link)
                    <li>{{$link}}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <ul>
                    <li><h4>{{ $footerLinks[2]['listTitle'] }}</h4></li>
                    @foreach($footerLinks[2]['listItems'] as $link)
                    <li>{{$link}}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <ul>
                    <li><h4>{{ $footerLinks[3]['listTitle'] }}</h4></li>
                    @foreach($footerLinks[3]['listItems'] as $link)
                    <li>{{$link}}</li>
                    @endforeach
                </ul>
            </div>
            <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="DC logo bg version">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="shopBtn">shop now</div>
            <div class="socials d-flex justify-content-between align-items-center">
                <h4>follow us</h4>
                <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="Facebook Icon">
                <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="Twitter Icon">
                <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="YouTube Icon">
                <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="Pinterest Icon">
                <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="Periscope Icon">
            </div>
        </div>
    </div>
</footer>