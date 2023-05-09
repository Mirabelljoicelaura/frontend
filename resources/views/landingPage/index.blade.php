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
@section('speech-content')
    <section class="bg-white py-8">

        <div class="container py-8 px-6 mx-auto">
                <div class="md:flex h-full items-stretch">
                    <img src="https://i.pinimg.com/564x/ca/f8/0b/caf80b4d3115be8505a29834d594ea69.jpg" alt="" class="h-[300px]">

                  <div class="p-7 md:flex-grow">
                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8" href="#">
                        SAMBUTAN KETUA RW
                    </a>
                        <p class="mt-5">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget nunc lobortis mattis aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in. Facilisi nullam vehicula ipsum a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed libero enim sed faucibus turpis in. Hac habitasse platea dictumst quisque. In aliquam sem fringilla ut. Gravida rutrum quisque non tellus orci ac auctor augue mauris. Accumsan lacus vel facilisis volutpat est velit egestas dui id. At tempor commodo ullamcorper a. Volutpat commodo sed egestas egestas fringilla. Vitae congue eu consequat ac.</p>
                  </div>
                </div>



            <p class="mt-8 mb-8">Lorem ipsum dolor sit amet, consectetur <a href="#">random link</a> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Vitae aliquet nec ullamcorper sit. Nullam eget felis eget nunc lobortis mattis aliquam. In est ante in nibh mauris. Egestas congue quisque egestas diam in. Facilisi nullam vehicula ipsum a arcu. Nec nam aliquam sem et tortor consequat. Eget mi proin sed libero enim sed faucibus turpis in. Hac habitasse platea dictumst quisque. In aliquam sem fringilla ut. Gravida rutrum quisque non tellus orci ac auctor augue mauris. Accumsan lacus vel facilisis volutpat est velit egestas dui id. At tempor commodo ullamcorper a. Volutpat commodo sed egestas egestas fringilla. Vitae congue eu consequat ac.</p>
        </div>
    </section>
@endsection

@section('counting-content')

    <section class="text-gray-600 body-font">
    <section class="text-gray-600 body-font">
    <div class="container px-5 py-10 mx-auto">
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
    </div>
    </section>
@endsection

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

</body>

</html>
