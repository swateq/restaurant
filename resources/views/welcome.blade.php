<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body>
        <header>
            <div class="flex justify-between py-6 px-24 bg-main text-lg text-gray-custom uppercase">
                <div>
                    <a class="pr-4" href="/about">O nas</a>
                    <a class="pr-4" href="/offer">Oferta</a>
                    <a class="pr-4" href="/menu">Menu</a>
                    <a href="/gallery">Galeria</a>
                </div>
                <div class="flex">
                    <a class="pr-4" href="/news">Aktualności</a>
                    <a class="pr-4" href="/contact">Kontakt</a>
                    <div class="flex pt-1 text-gray-custom_disabled">
                        <a class="pr-1 text-xs active_language" href="/#">PL</a>
                        <a class="pr-1 text-xs" href="/#">EN</a>
                        <a class="pr-1 text-xs" href="/#">DE</a>
                    </div>
                </div>
            </div>
            <div class="slajder-wrapper">
                <img src="{{ url('/img/slider1.jpg')}}" alt="Slajder uno">
            </div>
        </header>

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
                    <h4 class="text-4xl">Dzień Kobiet</h4>
                    <span class="text-xs">1 marca 2019</span>
                    <div class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia beatae eos, obcaecati vero perferendis rerum suscipit. Deserunt, facilis dolor, iusto itaque quam labore asperiores cumque molestiae a quisquam pariatur qui!</div>
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

        <footer class="flex bg-main_light px-24 py-4 text-xl text-gray-custom uppercase">
            <img src="{{ url('/img/logo-footer.png')}}" alt="">
            <a class="pl-24 py-10" href="/about">O nas</a>
            <a class="pl-5 py-10" href="/offer">Oferta</a>
            <a class="pl-5 py-10" href="/menu">Menu</a>
            <a class="pl-5 py-10" href="/gallery">Galeria</a>
            <a class="pl-5 py-10" href="/news">Aktualności</a>
            <a class="pl-5 py-10" href="/contact">Kontakt</a>
        </footer>

        <div class="flex bg-main py-4 pl-10">
            <div class="w-1/3 flex">
                <span class="text-gray-custom">© 2019 Restaurant</span>
                <img class="pl-4" src="{{ url('/img/ico-social-1.png')}}" alt="">
                <img class="pl-4" src="{{ url('/img/ico-social-2.png')}}" alt="">
                <img class="pl-4" src="{{ url('/img/ico-social-3.png')}}" alt="">
            </div>
            <div class="w-1/3 text-gray-custom_disabled">
                Wybierz język: <span class="active_language">PL</span> | EN | DE
            </div>
            <div class="w-1/3">
                Wykonanie: <a href="/#">Ununnunium</a>
            </div>
        </div>
    </body>
</html>
