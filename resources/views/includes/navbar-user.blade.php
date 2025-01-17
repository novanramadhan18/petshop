<header class="w-full flex fixed top-0 bg-white border-b-2 z-30">
    <nav class="w-full max-w-6xl flex bg-white mx-auto px-8 py-2 items-center justify-between">
        <img class="h-16 mix-blend-multiply" src="{{asset('img/petshop.jpg')}}" alt="Logo">
        <div class="flex h-full items-center gap-x-16 px-8">
            <div class="h-full items-center gap-x-8 hidden lg:flex">
                <a class="btn-navbar @if (Request::is('/'))
                    text-primary
                @endif" href="{{route('home')}}">Home</a>
                <a class="btn-navbar @if (Request::is('consultation'))
                    text-primary
                @endif" href="{{route('consul')}}">Consultation</a>
                <a class="btn-navbar @if (Request::is('shop'))
                    text-primary
                @endif" href="{{route('shop')}}">Shop</a>
                <a class="btn-navbar @if (Request::is('about'))
                    text-primary
                @endif" href="{{route('about')}}">About</a>
                <a class="btn-navbar @if (Request::is('contact'))
                    text-primary
                @endif" href="{{route('contact')}}">Contact</a>
            </div>
            <div class="flex h-full items-center gap-x-8">
                <a class="btn-navbar" href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                <a class="btn-navbar" href=""><i class="fa-regular fa-heart"></i></a>
                <a class="btn-navbar" href=""><i class="fa-solid fa-cart-shopping"></i></a>
                <button class="btn-primary">Login</button>
            </div>
        </div>
    </nav>
</header>