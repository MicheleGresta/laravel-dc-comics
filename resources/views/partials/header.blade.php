@php
    $navBar = [
        [
            'name' => 'CHARACTERS',
            'link' => '',
        ],
        [
            'name' => 'COMICS',
            'link' => '',
        ],
        [
            'name' => 'MOVIES',
            'link' => '',
        ],
        [
            'name' => 'TV',
            'link' => '',
        ],
        [
            'name' => 'GAMES',
            'link' => '',
        ],
        [
            'name' => 'COLLECTIBLES',
            'link' => '',
        ],
        [
            'name' => 'VIDEOS',
            'link' => '',
        ],
        [
            'name' => 'FANS',
            'link' => '',
        ],
        [
            'name' => 'NEWS',
            'link' => '',
        ],
        [
            'name' => 'SHOP',
            'link' => '',
        ],
    ];
    
@endphp


<header>
    <div class="container">
        <div class="box-container d-flex gap-5 py-3 justify-content-between">
            <div>
                <img src="/images/dc-logo.png" alt="">
            </div>
            <div class="d-flex gap-3 align-items-center">
                @foreach ($navBar as $singleOne)
                    <div>
                        <a href='#'> {{ $singleOne['name'] }}</a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="bg-container">
    </div>
</header>

