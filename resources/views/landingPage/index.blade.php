@extends('landingPage.layouts.main')

<!--

Alternatively if you want to just have a single hero

<section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

<div class="container mx-auto">

    <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
        <h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
        <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">products</a>

    </div>

</div>

</section>

-->


{{-- Section Sambutan Ketua RW --}}
@section('speech-content')
    <section class="bg-white py-8">
        <div class="container py-8 px-6 mx-auto">
            <a class="flex flex-col items-center justify-center md:flex-row p-5">
                <div class="h-72 w-72 border rounded-xl overflow-hidden ">
                    <img class="object-cover w-full"
                        src="https://i.pinimg.com/564x/ca/f8/0b/caf80b4d3115be8505a29834d594ea69.jpg " alt="">
                </div>


            <p class="mt-8 mb-8">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget nunc lobortis mattis aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in. Facilisi nullam vehicula ipsum a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed libero enim sed faucibus turpis in. Hac habitasse platea dictumst quisque. In aliquam sem fringilla ut. Gravida rutrum quisque non tellus orci ac auctor augue mauris. Accumsan lacus vel facilisis volutpat est velit egestas dui id. At tempor commodo ullamcorper a. Volutpat commodo sed egestas egestas fringilla. Vitae congue eu consequat ac.</p>
        </div>
                <div class="flex flex-col h-64 p-1 ml-12 max-w-3xl">
                    <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white uppercase">sambutan ketua RW</h5>
                    <p class="mb-3 font-normal text-justify">adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Vitae
                        aliquet nec ullamcorper sit. Nullam eget felis eget nunc lobortis mattis aliquam. In est ante in
                        nibh mauris. Egestas congue quisque egestas diam in. Facilisi nullam vehicula ipsum a arcu. Nec nam
                        aliquam sem et tortor consequat. Eget mi proin sed libero enim sed faucibus turpis in. Hac habitasse
                        platea dictumst quisque. In aliquam sem fringilla ut. Gravida rutrum quisque non tellus orci ac
                        auctor augue mauris. Accumsan lacus vel facilisis volutpat est velit egestas dui id. At tempor
                        commodo ullamcorper a. Volutpat commodo sed egestas egestas . fringilla. Vitae congue eu consequat
                        ac. lorem50. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ut accusamus rem laborum
                        et officiis excepturi quasi animi ex beatae odit ullam labore libero tenetur eaque magnam optio
                        voluptates, illum ducimus natus delectus ipsa? Ipsam reiciendis ratione quod deserunt cumque vitae
                        in perferendis, assumenda veniam est sed ea incidunt fugiat?</p>
                    </p>
                </div>
            </a>
    </section>
@endsection

@section('counting-content')


@section('product-content')
    <section class="bg-white p-10" id="ormas">
        <div class="container flex flex-wrap py-6 px-4 mx-auto max-w-screen-xl lg:py-6 lg:px-4">
            <div class="container flex flex-wrap py-6 px-4 mx-auto max-w-screen-xl lg:py-6 lg:px-4">
                <div class="w-full container mx-auto flex flex-wrap justify-center items-center mt-0 px-1 mb-0 ">
                    <h1 class="capitalize tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-4xl" href="#">
                        organisasi masyarakat
                    </h1>
                </div>
            </div>
            <div class="container flex flex-wrap mx-auto max-w-screen-xl">
                <div class="w-1/12 flex items-center">
                    <div class="w-full text-right">
                        <button class="p-3 hidden md:flex rounded-full bg-white border border-gray-100 shadow-lg ml-5 hover:opacity-90" id="blue-color" onclick="prev()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                              </svg>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 w-10/12 overflow-auto scroll-snap-type-both mandatory scroll-behavior-smooth" id="sliderContainer">
                    <ul id="slider" class="flex w-full transition-margin duration-700">
                        <li class="min-w-full p-5 transition" id="ormas-card">
                            <div class="border rounded-lg p-5">
                                <img class="h-50 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1494172961521-33799ddd43a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2l0aXplbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=900&q=60" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-500">Nadhlatul Ulama</h2>
                                <p class="mt-2 text-gray-500 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                        </li>
                        <li class="p-5 min-w-full" id="ormas-card">
                            <div class="border rounded-lg p-5">
                                <img class="h-50 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1494172961521-33799ddd43a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2l0aXplbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=900&q=60" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-500">Nadhlatul Ulama 2</h2>
                                <p class="mt-2 text-gray-500 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                        </li>
                        <li class="p-5 min-w-full" id="ormas-card">
                            <div class="border rounded-lg p-5">
                                <img class="h-50 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1494172961521-33799ddd43a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2l0aXplbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=900&q=60" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-500">Nadhlatul Ulama 3</h2>
                                <p class="mt-2 text-gray-500 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                        </li>
                        <li class="p-5 min-w-full" id="ormas-card">
                            <div class="border rounded-lg p-5">
                                <img class="h-50 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1494172961521-33799ddd43a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2l0aXplbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=900&q=60" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-500">Nadhlatul Ulama 4</h2>
                                <p class="mt-2 text-gray-500 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                        </li>
                        <li class="p-5 min-w-full" id="ormas-card">
                            <div class="border rounded-lg p-5">
                                <img class="h-50 w-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1494172961521-33799ddd43a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2l0aXplbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=900&q=60" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-500">Nadhlatul Ulama 5</h2>
                                <p class="mt-2 text-gray-500 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="w-1/12 hidden md:flex items-center ">
                    <div class="w-full text-left">
                        <button class="p-3 rounded-full bg-white border border-gray-100 shadow-lg ml-5 hover:opacity-90" id="blue-color" onclick="next()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                              </svg>
                        </button>
                    </div>
            </div>
        </div>
    </section>
    <section class="bg-white" id="agenda">
        <div class="container flex flex-wrap py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">

            <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-1 py-3 ">

                <h1 class="capitalize tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-4xl " href="#">
                    Agenda terbaru
                </h1>
            </div>

            <div class="w-full h-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <div class="border-gray-200 rounded-lg shadow">
                    <img class="hover:grow hover:shadow-lg h-52 object-cover w-full rounded-t-lg" src="https://media.istockphoto.com/id/1164624416/photo/malaysia-hawker-culture-clay-pot-chicken-rice-stock-photo.jpg?b=1&s=170667a&w=0&k=20&c=65L8gxjLg-jpXtSSJVp3wT8c2Z5LL_eMkFTW8DVx9Bk=&auto=format&fit=crop&w=400&h=280&q=80" alt="" />
                    <div class="p-5 text-center pt- items-center justify-center text-gray-900 text-bold bg-slate-100 text-base font-bol flex-grow rounded-lg shadow">
                        <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white items-center justify-center">Takjil Gratis</h5>
                        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400 text-sm text-center pt-1 justify-center">Takjil gratis adalah sebuah program yang biasanya diadakan pada bulan Ramadan di mana makanan ringan atau minuman manis seperti kolak, kurma, atau air zam-zam dibagikan secara gratis kepada masyarakat yang sedang berpuasa.</p>
                    </div>
                </div>
            </div>

            <div class="w-full h-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <div class="border-gray-200 rounded-lg shadow">
                    <img class="hover:grow hover:shadow-lg h-52 object-cover w-full rounded-t-lg" src="https://images.unsplash.com/photo-1615647112295-7f6355324a4a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&h=275&q=80" alt="">
                    <div class="p-5 text-center pt- items-center justify-center text-gray-900 bg-slate-100 text-bold text-base font-bold flex-grow rounded-lg shadow">
                        <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white items-center justify-center">Bazar Murah</h5>
                        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400 text-sm text-center pt-1 justify-center">Bazar murah sembako adalah sebuah acara di mana berbagai sembako (sembilan bahan pokok) seperti beras, minyak goreng, gula, tepung terigu, dan lain-lain dijual dengan harga yang lebih terjangkau atau murah dari harga pasar.</p>
                    </div>
                </div>
            </div>

            <div class="w-full h-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <div class="border-gray-200 rounded-lg shadow">
                    <img class="hover:grow hover:shadow-l h-52 object-cover w-full rounded-t-lg" src="https://images.unsplash.com/photo-1631002165139-81c716532830?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&h=275&q=80" alt="">
                    <div class="p-5 text-center pt- items-center justify-center text-gray-900 bg-slate-100 text-bold text-base font-bold flex-grow rounded-lg shadow">
                        <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white items-center justify-center">Perayaan Hari Kemerdekaan RI</h5>
                        <p class="mb-3 font-normal text-gray-400 dark:text-gray-400 text-sm text-center pt-1 justify-center">Perayaan kemerdekaan RI merupakan acara tahunan yang dirayakan pada tanggal 17 Agustus untuk memperingati kemerdekaan Indonesia. Perayaan ini diisi dengan berbagai kegiatan seperti  pawai, lomba, dan pertunjukan seni budaya.</p>
                    </div>
                </div>
            </div>

            <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-2 py-3 ">
                <button href="#" class="block items-center justify-center mt-0 px-5 py-2 rounded-md text-white hover:underline" id="blue-color">Lihat Lagi</button>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900" id="potensi">
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">Potensi UMKM</h2>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
            </div>
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover" src="https://images.unsplash.com/photo-1555126634-323283e090fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="">
                    <h3 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#" class="hover:underline">Mie Ayam Pak No</a>
                    </h3>
                    <p class="text-base">Mie dengan topping ayam dan kuah segar</p>
                    <a class="inline-flex items-center text-sm font-bold underline hover:text-blue-900 text-blue-600" href="">beli sekarang
                        <svg aria-hidden="true" class="w-3 h-3 ml-2 -mr-1 mt-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover" src="https://images.unsplash.com/photo-1567982047351-76b6f93e38ee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                    <h3 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#" class="hover:underline">Pecel Ayam Jaya</a>
                    </h3>
                    <p class="text-base">Penyetan ayam dengan sambel orek</p>
                    <a class="inline-flex items-center text-sm font-bold underline hover:text-blue-900 text-blue-600" href="">beli sekarang
                        <svg aria-hidden="true" class="w-3 h-3 ml-2 -mr-1 mt-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>

                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover" src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80" alt="">
                    <h3 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#" class="hover:underline">Cookie Yahuttt</a>
                    </h3>
                    <p class="text-base">Cookie lejatt dengan cokelat meleleh di dalamnya</p>
                    <a class="inline-flex items-center text-sm font-bold underline hover:text-blue-900 text-blue-600" href="">beli sekarang
                        <svg aria-hidden="true" class="w-3 h-3 ml-2 -mr-1 mt-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full object-cover" src="https://images.unsplash.com/photo-1590991444073-477dac7ece63?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="">
                    <h3 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#" class="hover:underline">Kui Cakes</a>
                    </h3>
                    <p class="text-base">Aneka kue kering untuk hari raya eid</p>
                    <a class="inline-flex items-center text-sm font-bold underline hover:text-blue-900 text-blue-600" href="">beli sekarang
                        <svg aria-hidden="true" class="w-3 h-3 ml-2 -mr-1 mt-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>

    <section class="text-gray-600 body-font">
        <section class="text-gray-600 body-font">
            {{-- <div class="container px-5 py-10 mx-auto">
                <div class="flex flex-wrap -m-4 text-center">
                    <div class="p-4 sm:w-1/3 w-1/2">
                        <h2 class="title-font font-medium sm:text-5xl text-3xl text-white">
                            <CountUp end={940} redraw={true}>
                                {({ countUpRef, start }) => (
                                <VisibilitySensor onChange={start} delayedCall>
                                    <span ref={countUpRef} />
                                </VisibilitySensor>
                                )}
                            </CountUp>
                        </h2>
                        <p class="leading-relaxed">Users</p>
                    </div>
                    <div class="p-4 sm:w-1/3 w-1/2">
                        <h2 class="title-font font-medium sm:text-5xl text-3xl text-white">
                            <CountUp end={740} redraw={true}>
                                {({ countUpRef, start }) => (
                                <VisibilitySensor onChange={start} delayedCall>
                                    <span ref={countUpRef} />
                                </VisibilitySensor>
                                )}
                            </CountUp>
                        </h2>
                        <p class="leading-relaxed">Subscribes</p>
                    </div>
                    <div class="p-4 sm:w-1/3 w-1/2">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">
                            <CountUp end={315} redraw={true}>
                                {({ countUpRef, start }) => (
                                <VisibilitySensor onChange={start} delayedCall>
                                    <span ref={countUpRef} />
                                </VisibilitySensor>
                                )}
                            </CountUp>
                        </h2>
                        <p class="leading-relaxed">Downloads</p>
                    </div>
                </div>
            </div> --}}
            

              <div class="row g-3 pb-4">
                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border rounded p-1">
                        <div class="border rounded text-center p-4">
                            <i class="fa fa-mobile-screen fa-2x text-primary mb-2"></i>
                            <h2 class="mb-1" data-val="10" id="num">00</h2>
                            <p class="mb-0 fw-bolder">Million</p>
                            <p class="mb-0">User</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="border rounded p-1">
                        <div class="border rounded text-center p-4">
                            <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                            <h2 class="mb-1" data-val="80" id="num">00</h2>
                            <br>
                            <p class="mb-0">Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="border rounded p-1">
                        <div class="border rounded text-center p-4">
                            <i class="fa fa-users fa-2x text-primary mb-2"></i>
                            <h2 class="mb-1" data-val="500" id="num">000</h2>
                            <br>
                            <p class="mb-0">Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @section('product-content')
        <section class="bg-white py-8">

            <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

                <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3 ">

                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                            href="#">
                            Store
                        </a>

                        <div class="flex items-center" id="store-nav-content">

                            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                                </svg>
                            </a>

                            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </nav>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg"
                            src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg"
                            src="https://images.unsplash.com/photo-1508423134147-addf71308178?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg"
                            src="https://images.unsplash.com/photo-1449247709967-d4461a6a6103?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg"
                            src="https://images.unsplash.com/reserve/LJIZlzHgQ7WPSh5KVTCB_Typewriter.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg"
                            src="https://images.unsplash.com/photo-1467949576168-6ce8e2df4e13?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg"
                            src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg"
                            src="https://images.unsplash.com/photo-1550837368-6594235de85c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg"
                            src="https://images.unsplash.com/photo-1551431009-a802eeec77b1?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>
            </div>
            <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-10 px-2 pt-3">
                <button href="#" class="block items-center justify-center mt-0 px-5 py-2 rounded-md text-white hover:underline" id="blue-color">Lihat Lagi</button>
            </div>
        </div>
      </section>

    <section class="bg-white py-10"  id="galeri">
        <div class="grid grid-cols-3 md:grid-cols-4 gap-5 p-10">
        <div class="">
            <img class="h-28 w-72 md:h-48 sm:h-40 rounded-lg object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
        </div>
        <div>
            <img class="h-28 w-72 md:h-48 sm:h-40 rounded-lg object-cover" src="https://images.unsplash.com/photo-1625630529864-51328a9a25a7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
        </div>
        <div>
            <img class="h-28 w-72 md:h-48 sm:h-40 rounded-lg object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
        </div>
        <div>
            <img class="h-28 w-72 md:h-48 sm:h-40 rounded-lg object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
        </div>
        <div>
            <img class="h-28 w-72 md:h-48 sm:h-40 rounded-lg object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
        </div>
        <div>
            <img class="h-28 w-72 md:h-48 sm:h-40 rounded-lg object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
        </div>
        <div>
            <img class="h-28 w-72 md:h-48 sm:h-40 rounded-lg object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
        </div>
        <div>
            <img class="h-28 w-72 md:h-48 sm:h-40 rounded-lg object-cover" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
        </div>
    </div>
    </section>

@endsection



{{-- <section class="bg-white py-8">
        </section>
    @endsection

    {{-- <section class="bg-white py-8">

    <div class="container py-8 px-6 mx-auto">

        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
        About
    </a>

        <p class="mt-8 mb-8">This template is inspired by the stunning nordic minamalist design - in particular:
            <br>
            <a class="text-gray-800 underline hover:text-gray-900" href="http://savoy.nordicmade.com/" target="_blank">Savoy Theme</a> created by <a class="text-gray-800 underline hover:text-gray-900" href="https://nordicmade.com/">https://nordicmade.com/</a> and <a class="text-gray-800 underline hover:text-gray-900" href="https://www.metricdesign.no/" target="_blank">https://www.metricdesign.no/</a></p>

        <p class="mb-8">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget nunc lobortis mattis aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in. Facilisi nullam vehicula ipsum a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed libero enim sed faucibus turpis in. Hac habitasse platea dictumst quisque. In aliquam sem fringilla ut. Gravida rutrum quisque non tellus orci ac auctor augue mauris. Accumsan lacus vel facilisis volutpat est velit egestas dui id. At tempor commodo ullamcorper a. Volutpat commodo sed egestas egestas fringilla. Vitae congue eu consequat ac.</p>

    </div>
</section> --}}

  <!-- JavaScript Libraries -->


    </body>

    </html>
