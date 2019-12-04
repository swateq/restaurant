@extends('layouts.main')

@section('content')

<div class="owl-slider">
    <div id="carousel" class="owl-carousel owl-theme">
        <div class="item">
            <img class="owl-lazy" data-src="{{ url('/img/slider1.jpg')}}" alt="">
        </div>
        <div class="item">
            <img class="owl-lazy" data-src="{{ url('/img/slider2.jpg')}}" alt="">
        </div>
    </div>
</div>

<div class="bg-cover py-12 px-4" style="background-image: url('/img/bg-info.png')">
    <h4 class="text-4xl text-gray-custom pb-2">
        Lorem ipsum dolor sit.
    </h4>
    <p class="text-gray-custom w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque unde nemo nesciunt autem culpa explicabo, fugiat excepturi dolorem suscipit nam est voluptas laudantium rerum et soluta sed distinctio? A, recusandae.</p>
</div>

<div class="bg-cover" style="background-image: url('/img/bg-oferta.png')">
    <h3 class="text-5xl text-center py-10">Zobacz naszą ofertę</h3>
    <div class="flex pb-24 px-4">
        <div class="bg-cover w-1/3 py-24 text-center px-4 mr-4 text-white text-3xl" style="background-image: url('/img/oferta-dla-grup.png')">
            Oferta dla grup
        </div>
        <div class="bg-cover w-1/3 py-24 text-center px-4 mr-4 text-white text-3xl" style="background-image: url('/img/oferta-okolicznosciowa.png')">
            Oferta okolicznościowa
        </div>
        <div class="bg-cover w-1/3 py-24 text-center px-4 text-white text-3xl" style="background-image: url('/img/oferta-biznesowa.png')">
            Oferta biznesowa
        </div>
    </div>
</div>
<div class="bg-cover" style="background-image: url('/img/bg-aktualnosci.png')">
    <h3 class="text-5xl text-center py-10 text-gray-custom">Aktualności</h3>
    <div class="flex px-24 pb-24">
        <div class="w-1/2 pr-4">
            <img src="{{ url('/img/dzienkobiet.jpg')}}" alt="">
        </div>
        <div class="w-1/2 text-gray-custom pl-4 py-8">
        <h4 class="text-4xl"> {{ $news->title }}</h4>
            <span class="text-xs">{{ $news->created_at }}</span>
            <div class="text-lg">{{ $news->content }}</div>
            <div class="relative w-full py-4">
                <a class="absolute right-0 text-gray-custom hover:text-gray-custom_disabled hover:no-underline" href="/#">Czytaj więcej</a>
            </div>
        </div>
    </div>
</div>

<div class="flex bg-second px-10 py-4">
    <div class="w-1/3">
        <div class="flex">
            <img src="{{ url('/img/ico-adres.png')}}" alt="">
            <span class="text-main font-bold py-2 text-xl pl-2">adres</span>
        </div>
    </div>
    <div class="w-1/3">
        <div class="flex">
            <img src="{{ url('/img/ico-telefon.png')}}" alt="">
            <span class="text-main font-bold py-2 text-xl pl-2">123-456-789</span>
        </div>
    </div>
    <div class="w-1/3">
        <div class="flex">
            <img src="{{ url('/img/ico-mail.png')}}" alt="">
            <span class="text-main font-bold py-2 text-xl pl-2">mail@mail.com</span>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    jQuery("#carousel").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        dots: true,
        /*
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        */
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        responsive: {
            0: {
            items: 1
            }
        }
    });
</script>
@endsection