@php
   $comicsList = [
        ["name" => "Characters"],
        ["name" => "Comics"],
        ["name" => "Movies"],
        ["name" => "Tv"],
        ["name" => "Games"],
        ["name" => "Videos"],
        ["name" => "News"]
    ];

    $shopList = [
        ["name" => "Shop DC"],
        ["name" => "Shop DC Collectibles"]
    ];

    $dcList = [
        ["name" => "Terms of Use"],
        ["name" => "Privacy policy (New)"],
        ["name" => "Ad Choices"],
        ["name" => "Advertising"],
        ["name" => "Jobs"],
        ["name" => "Subscriptions"],
        ["name" => "Talent Workshops"],
        ["name" => "CPSC Certificates"],
        ["name" => "Ratings"],
        ["name" => "Shop Help"],
        ["name" => "Contact Us"]
    ];

    $sitesList = [
        ["name" => "DC"],
        ["name" => "MAD Magazine"],
        ["name" => "DC Kids"],
        ["name" => "DC Universe"],
        ["name" => "DC Power Visa"]
    ];

    
@endphp


<footer>
    <div class="footer-list">
        <div class="container d-flex">
            <div class="d-flex py-5">
                <div>
                    <ul>
                        <h4>DC COMICS</h4>
                        @foreach ($comicsList as $singleItem )
                            <li><a href="#">{{ $singleItem["name"] }}</a></li>
                        @endforeach
                        
                    </ul>
                    <ul>
                        <h4>SHOP</h4>
                        @foreach ( $shopList as $singleItem)
                            <li><a href="#">{{ $singleItem["name"] }}</a></li>
                        @endforeach
                        
                    </ul>
                </div>
                <ul>
                    <h4>DC</h4>
                    @foreach ($dcList as $singleItem)
                        
                    <li><a href="#">{{ $singleItem["name"] }}</a></li>
                    @endforeach
                </ul>
                <ul>
                    <h4>SITES</h4>
                    @foreach ( $sitesList as $singleItem)
                        
                    <li><a href="#">{{ $singleItem["name"] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <img src="/images/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer-contacts">
        <div class="container d-flex justify-content-between py-4">
            <div class="btn btn-style">SIGN-UP NOW!</div>
            <div class="contacts-container d-flex gap-3">
                <h4>FOLLOW US</h4>
                <a href="#"><img src="/images/footer-facebook.png" alt=""></a>
                <a href="#"><img src="/images/footer-twitter.png" alt=""></a>
                <a href="#"><img src="/images/footer-youtube.png" alt=""></a>
                <a href="#"><img src="/images/footer-pinterest.png" alt=""></a>
                <a href="#"><img src="/images/footer-periscope.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>