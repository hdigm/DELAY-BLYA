@extends('layouts/app')
@section('title', 'ТБ')
@section('content')
    <div class="title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slider main container -->
                    <div class="swiper marg--top_150 swiper-1">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="slide--card d-flex justify-content-center align-items-center h-100">
                                    <h1 class="slide--card_h1 text-center">Технологии безопасности 1</h1>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide--card d-flex justify-content-center align-items-center h-100">
                                    <h1 class="slide--card_h1 text-center">Технологии безопасности 2 </h1>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide--card d-flex justify-content-center align-items-center h-100">
                                    <h1 class="slide--card_h1 text-center">Технологии безопасности 3</h1>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        {{-- <div class="swiper-button-prev"></div> --}}
                        {{-- <div class="swiper-button-next"></div> --}}

                        <!-- If we need scrollbar -->
                        {{-- <div class="swiper-scrollbar"></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services marg--top_150">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Наши услуги</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="services--card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Разработка: безопасности объекта; комплектация и поставка
                                оборудования, выполнение монтажных, пуско-наладочных, ремонтных работ, гарантийного и после
                                гарантийного обслуживания;
                                Видеонаблюдения, речевого оповещения и эвакуации при пожаре, звукового сопровождения;</li>
                            <li class="list-group-item">Установка пожарной и охранно-пожарной сигнализации, систем
                                дымоудаления, систем оповещения и эвакуации людей при пожаре,
                                Установка систем пожаротушения;</li>
                            <li class="list-group-item">Установка противопожарных занавесов и завес, заполнение проемов и
                                противопожарных преград;
                                Производство работ по огнезащите материалов, изделий и конструкций;</li>
                            <li class="list-group-item">Работы по проектированию систем пожарной безопасности;</li>
                            <li class="list-group-item">Телефонизация, телевиденье;</li>
                            <li class="list-group-item">Электромонтажные и сантехнические работы любой сложности;</li>
                            <li class="list-group-item">Работы по теплоизоляции, гидроизоляции.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="images--card">
        <div class="container">
            <div class="row  marg--top_150">
                <div class="col-6">
                    <h3>Пожарная безопасность</h3>
                    <p>Установка пожарной и охранно-пожарной сигнализации, систем дымоудаления, систем оповещения и
                        эвакуации людей при пожаре.

                        Установка систем пожаротушения;

                        Установка противопожарных занавесов и завес, заполнение проемов и противопожарных преград;
                        Производство работ по огнезащите материалов, изделий и конструкций;
                        Работы по проектированию систем пожарной безопасности, планов эвакуации;</p>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="https://comfort-group.ru/uploads/filebrowser/162dc4996da10a6c84c06107f594e253.png?t=1"
                            alt="images" class="images--card_img w-50">
                    </div>
                </div>
            </div>
            <div class="row  marg--top_150">
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUQEhIVFRUVFRcVFRUVFxAYFxAVFRUWFhUWFxUYHSggGBolHRUVITEhJSkrLi4uGB8zODMxNygtLisBCgoKDQ0OFQ4PFS0dFR03Ky0tLS0rKysuLSstLSstKystKy0tLTctKy0rNy43LSsrKzcrKy0tLTgtKy03OCstLP/AABEIAL0BCwMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAwQCBQYBBwj/xABAEAACAQIEAwUFBgUCBQUAAAABAgADEQQSITEFQVETImFxgQYykaGxB0JSwdHwFCNicuEz8VOCkqLCFRYkc4P/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQP/xAAcEQEBAQACAwEAAAAAAAAAAAAAARExQQMSIQL/2gAMAwEAAhEDEQA/APuMREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQERIqtcDTcwJGYAXJsOpkQxCna/wAD+crtc6n/AGnjPaBZOIHQ/KZLWU8xNZVrylWrwOkic3huKMh/EvQ/keU6DD1g6hlOhgSREQE8JhmAFzsJpsbii+g0Xp184FjFcVC6ILnrymtq8Xq8iB6CYMkwbBVDsvxsPrAwbjdYfeB9P0k2H9pTs49f9tvnNdisFUXUofSx+k1jmB32E4kj25X25g+Rl2fN8LizTPgdx1/zOx4TxIMACbg+6engYG3iIgIiICIiAiIgIiICIiAiIgJi7gakyCpiuS6+PL/MhC8ybmBI9YttoPmZgBaGcCVauIlRNUq2lSrXkFWvKr1JBLUqyu7TEtMYUJm79nXsHBOgIPqb3+gmlVbzOpiQrrQzZRbPVYb5RsgPImB1gxCfiHxEkVgdjeci3FgxsoCqNAByEt0qt9YF/iGKubch8zNZXxQW1hfr4ScnqJVxWBD7O6f29mb/APWrQJ6PEUzBEHeP3jqNr238JnVet/xAOg2v8poMXhno97PmA2YDKV89bH0tL/CqnaA9o2axBF/u6bwJauOqJ74uOo/xKONprUGZd/3vNga6sz0d8tt+YIB/MTUVlNJ7cjr5j/EI47jlOsawAViDlClQTbXXynZcJrFTlJ0b6/5lbEpZr8jMkWB3nDcRnWx3XQ+PQy3NFwiv3lb8QsfX/M3sKREQEREBERARI69ZUGZjYfXwE0+J40dQgt8z18hoYG8iajhuPYsc7aa720I/ZEtVMUW0TQdTv6CBYrVwvieg3lV8z76DoPz6xTp21+fWevUtCPbASGrWkNfEyhVryietiJUqVpE9SRFpBIzzAmY3gQr2ZAQolilT5mBJQUKMx35eEoY7CByWAsx3OvesLC/SbFlvMSoGpgaLD0ipsZs8TjVoUjVc2A/IEn5A+tpniKGme1tvMjqek13tFw9sThXoruw05X9YFrgnHFxJsFK3XOlzfOlyubYW1B+B6GbbLOX9keENRPaVUyMtFMOoJVjkRna90uBcuTuTttOoDjqIEWJoZlK9R8DyM5zhFM9p2Z0KtbnoAMwHwIE6ozl8DRZ6rkbs17/8i31hG8xrohUlRmZgoItzOtz0tKvHaXcD/hI+DaH6j4SzjBTsocG9xk397kRae8YH8p/L8xCtLWXNSv0/Ke0BLGGT+U3rMcMmghG04W1lH9Lfnf8AOdTOX4eO6f7j9BOnTYeUK9iIgIiICIkVeuqC7HyHM+QgY42jmQjmNR+/K85PE1VQkkiwtfw6fEFh5AToKlZ3091enM+ZmubgVMkkjffx85LBqMBxB3qKtNLLfvM3MbaAeAG/zvOtFhKeHwqU/dEVsRLET1a9pRrYmV61eVXqwJalWQM8wZpjeFZEzyBMgIACZqsKJKqwPaS6ywBMaayUCAAmoxvH6FGqUqE3DImbozi4UDy1Jm6UTUcR4Fh6tUVHUs2dHy6WZ00U7XJ9ZKNjxCoq02LG2lvXl85q6GMHWdVgMFu1QAk/dNjYePjKPFOG0g2lNBcX0VRrz29JRrUxMmWtK1bB6d0ZD46j4AyotOuDvSt/+hPw/wAwi9jcTlXu7nQW6yDh2HZbHXQm5HMnVvmZmlAk394/TyEs4bEZf5ZBvv6EwFUJUZDc3Rr26acx55ZjxVrrl/ER8BqfpMqFMJmI5sSfUk/nMHGY3PkPCFQZbU7dfzniLaSkXPgJ5aEXsAndA/EfqbTpJpeG0+8o6C/w/wAkTdQpERATwm2srYzHpT0OrclG/r0E1rPUqnvaLyUbevWBbr8Rv3aev9R29Ov085HTo65mNz1MypUgs9epaESXAkNWtK9XESnVxECetXlKrWkVStK7vAzepIy0xvAhWQM9E8AkiiAUSRVnqLJkSB4qSVVmSrMwIBBM7QonsATabXA4ML3yO+RqT93wHSUsBhs7Zj7q/wDc36CbiAlTiNK63/D9Of78JbgiBztaiGFjf0NjK74IWy3PqTc+s2eJoZDblykJECjSoFeZ8rj6melGJufLltLJnhJ8PlAjFK2p/f6yJzfQTMkE2LAnpfWemEQlbaTKiut+k9Ilzh2Fzn+kb+PhCthwulZcx+9t5fv8pegCIAmcf7We3WGwl6b1DnG9OkFaoPMnu0/XWx2kf2o+0rYLC/yjarVPZow+5cEs/mANPFlM/OnEsQbEkkk3JJJJJOpJJ3MD6Th/tcD10oUMBmapUWmrVMRq7OwUE2pm2p6mfYaLd0E2BtrY6DruNp8V+wf2dSo1XHVEDGmwp0ri+RgA7sPGzIAfPrNz9sPtYaf/AMGkSO6Grkbtm9yl67n0HMwjsX9t8CanYjEqWvYHLUyE9A6gg+e3jNjWqtva46jUC/W23rPlPs/hP4OiuJzr2rKDrtlfQ2J5Dxt1nQ8No1qzrWVygyZiwYjMddje5FummkDqHxF5XerMBils3aPTbKSC17NcKCO8NfUgz00VK51ewsDZr+6dmzDceJAgYFpjPEUkXGoG5UhgPUTJRCvQJmqz1VkyrAwCSVEmSpJkSB4qSVRMlSSBRAxVJIFieEwBnhnhMscOpZnvyXX15fr6QNtRp5VC9BM4iAiIgYVaYYWP+01VegUOu3I9ZuIIgaFhIyJuK2BU7d0+G3wlR+GVOTofNWH/AJQOC4fgMQMXdlawcsz/AHSL8jzvtYdZ1VVgvvG3hzMvf+kVTvWVR/Qn5kyfC8EpIbkFz1c3+W3xga7A4R6xvbKnXr5dfOdDSphQFAsBtM4gIiIHzL7c+FPUwtPEICRRf+YByRxbN6HL6T4JjtRP2LVpqylWAZWBBBAIYHcEHcT5X7V/YzSqk1MFVFEnXsnBanf+lh3kHhqIF/7FsMF4TRa3vvWY+lZ1+iCfHuM1mxnEWsbmrXqEXv8Adbs1Hyn3z2E4JWwXD6WDr5e0p9pcoSykPVqOpBIB2YDUDafnbDUmbGKgNmL1VB2s3bGEddw3AMlZMLmp1s4vYlmsDmDJkv3WB5HnaxnW8Z45RwpSi7XVVDGnSPeZraEsdF538vEzQ4HhbYeuGqVkZihdi1rhkJ7lyPe7p1E4esGxFctUJa57RgSe+zHu36j9JRtOI8fqVLkAtY2AV09y53Gmu36mRYL2jYsoLPam6t2Lk7A3ynmZdthVIpuiE6WGUd3odLWjins9TqpnoknLtuXT+0nVh1U3v12Emzc7XLmugbjRxVZXwlM061MF+0uAcotdX3zC/XqeU+hcB4mnEKDAAUcTTOWqllvTfXkwPdax8rEcrz4RwXi1bD1CA2WoBbnlqo31U2HqJ1fD8ZiML2XGUIe7Fa9NQO/SuFIPQ6Cx5EKTtrUfSaOEra3ZNN8y2tbfYiTUwxOhUjmcrAE+He185axSLiEp4ilUzUaoVxbZgwBU36HpJqFC0ioFwzWuDr0AGvhrJgg9JcRZA4sSPUeR/wAgwMAIgmYkwPSZ4TPCZG7QPXabvh1DIgvudT4eE1fCsP2jZj7q/wDc3Ifn8JvoCIiAiIgIiICIiAiIgIiICIiAiIgVcTow8R9P95+X/bfCnDcRqrtkxBK/2VRdT8bz9R4xe7fpr6c58S+3XgV3pYtRpVXsXPR11pkn5ephFTB8IJAr4ircMoC5jfKtRGysCfug7+c5PDtaqp5NTQ+oY3+Em9lcPUxihTUISllz3JPZgm18vIDU+Etcf4cEL9mQThyXsCT/ACW0q+eVxe/4SOso5nieIIxFQ8835C3ytN1geNVBZaXeYaqNdbC5Fuc1XFcNntXXnYP4EaKx8Dt6CdH7I4BB/NZwj0u+ubquvOY+X1llrT8blkQ+0+Dz00xdNSpIz5SNQxF3Q+BFzfqL849lFOJcUe1K03Usy5iFqEAXW17XIPynRcS9oBxCi1QIi9nTChUva9PMRe/O4HpacLwhAKrUr5QHFm2yqxve/Kwb5TaM6+1fZZjShxPCarZuyJqUToCaTkFhbqGZG86vhO2UWGu40PmJ8qSimAx+AxFN8ys/8PWIN84qZVzG+p/1Mx/+oeE+r48ZW/uF/UaH8pFYM8r1n1B8x8Rf/wAfnBaRVTp6j6iBmTMSZ4TIneBkzxhKBqvlGgGrHoP1kCgt5dZ0HBsOFS4+8fkNB+fxgXKFIIoVRYCZxEBERAREQEREBERAREQEREBERAREQBnO+1HAUxmGq4N/vL3D+Fh7hv8AL4zopHXS403G36QPyRW7bB4h82ZGzGnWA0s45kdGtfz8p2vCuEmjRGN7Vc9lqU8xBDhtGRhfvC2jX1Aa+4nYfaz7F/xCnH0UzOq5cRTG9WmPvD+td/2Z8gwrsrU8PVc9kzDs3JOUqTre+gYX1H7NRuuIcKCocdgxnwh/1qXvPw9zq1OovOl+F9rb9TDgcQpTKrqF5BwWyf2sCDbwJNvCbvHYxMD2X8NUZKozAuB93MO6fu1qbXJysNDc6XEocW4caxWpSo0s9QA58I5VXY62OHY91+oF9eclm8rK9r1Uo4dwlrkEcu87jKNvO00fBqGau1wxBdFOUE3UBc508AZd/wDbmLDkVEfMqGplYglV2LZQTbfnbedN7LcOpYegcYzqbIwyMe8zF9bAbEZb3PMiVF321wqLg17BrGk3d0ItpZGC7A3J+E+tY2pnSm22YA+V1Bnxr2o4ia9FqwFs9QLlUG1wt1Cgi+gU/EdZ9nxVLJQRPwhF+AtIKBsNtfH9JFVbT1H1E8LyGpUhWdSpMKdMtqdB9ZnRoX3HkOs3eE4dzf8A6eQ8+sCtgsCW191fr5frNyigAAbDQT2ICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiBE6W1HqJ8v9uvs9Rs9fD089Jzmq0Bujf8Sj0PUCfVZE1MjVfhA/LWM4ZUw+rA1aF75xfMg5hxyPj4a22nR8T4vg+xpfwqsWVw41IygDRT632n2LjPsvRrksv8qodyAMrn+pefmNZ84499mNQEstG/8AXhzv5pz+BhGNQYrDlce7qHNlKkjVXFwn4mBC3zHp0Eq4H2ey1O3rhVp1GG4uqMwJAynnoRcjY36GanG+zuPIFMtiWUaAGkSfC5Ca+s33DvY3ieKslZqippdq1k2Fh3VALG3h6x85XbmdJ+CcOpYziNKjh8zYbD5alRmvZ2W2YgXsAzAKB0LGfVOO1bKB1N/hIfZr2eo8PodnT396pUNgahA3PQDkOXncmIUWxLZ7WS2hO3p184GreoTtLeBwLMep+S+c21LglMe9dvDYfLX5zYUqQUWUWECLC4RU8TzP6dJYiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIGL0wd5hkYbG8liBC1Qj7p9LTw1G5Kflp+/CTxArPhc/wDqG4/B93/m/F9PCWREQEREBERAREQEREBERAREQEREBERAREQEREBERA//2Q=="
                            alt="images" class="images--card_img w-50">
                    </div>
                </div>
                <div class="col-6">
                    <h3>Охранная безопасность</h3>
                    <p>Разработка безопасности объекта; комплектация и поставка оборудования, выполнение монтажных,
                        пуско-наладочных, ремонтных работ, гарантийного и после гарантийного обслуживания;

                        Видеонаблюдение, речевого оповещения и эвакуации при пожаре, звукового сопровождения;</p>
                </div>
            </div>
            <div class="row  marg--top_150">
                <div class="col-6">
                    <h3>Инженерные системы зданий</h3>
                    <p>Телефонизация, телевиденье;

                        Электромонтажные и сантехнические работы любой сложности;

                        Работы по теплоизоляции, гидроизоляции.</p>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="https://sun9-76.userapi.com/impg/WD7LfeY5UPFctGi5XP3omgt2WkVccOsc12naGA/Tolb4Mo_CmU.jpg?size=1052x730&quality=96&sign=545f8cddb7a3472b0c4b11c75e82ea39&type=album"
                            alt="images" class="images--card_img w-50">
                    </div>
                </div>
            </div>
            <div class="row  marg--top_150">
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img src="https://sun9-53.userapi.com/impg/yUqratoA4nE0rhd_sKV9S8UUJlGc0a7xWrV6yA/YXcOa81FDcc.jpg?size=1052x800&quality=96&sign=65d5a563065eb385438c38e07059ecdb&type=album"
                            alt="images" class="images--card_img w-50">
                    </div>
                </div>
                <div class="col-6">
                    <h3>Чистка вентеляции</h3>
                    <p>Предлагаем полный спектр услуг по чистке и дезинфекции вентиляционных систем.

                        Производим очистку вентиляции от сажи, пыли и жира.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- Нужно узнать --}}
    {{-- <div class="price marg--top_150">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Стоимость услуг</h2>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="map marg--top_150 w-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe class="map_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.4840181211284!2d39.79924811577572!3d43.57563366546045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f5c8df5560cdc3%3A0xc5894fca7d6ff217!2z0YPQuy4g0KfQtdC60LzQtdC90LXQstCwLCDQnNCw0YbQtdGB0YLQsCwg0JrRgNCw0YHQvdC-0LTQsNGA0YHQutC40Lkg0LrRgNCw0LksIDM1NDAyNA!5e0!3m2!1sru!2sru!4v1655814504828!5m2!1sru!2sru" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
