<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Nordic Shop: Tailwind Toolbox</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    @include('landingPage.layouts.header')
    @include('landingPage.layouts.caraousel')

    <section>
        @yield('speech-content')
        @yield('counting-content')
        @yield('product-content')
    </section>

    <footer>
        @include('landingPage.layouts.footer')
    </footer>

    <script>
        //toggle between hiding and showing the dropdown content */
        function myFunction(elementId) {
        // document.getElementById(elementId).classList.toggle("show");
        document.getElementById(elementId).classList.toggle("hidden");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }

        //counting
        let valueDisplays = document.querySelectorAll("#num");
    let interval=5000;

    valueDisplays.forEach((valueDisplays)=>{
        let startValue = 0;
        let endValue = parseInt(valueDisplays.getAttribute("data-val"));
        let duration = Math.floor(interval / endValue);
        let counter = setInterval(function(){
            startValue += 1;
            valueDisplays.textContent=startValue;
            if (startValue == endValue) {
                clearInterval(counter);
            }
        }, duration);
    })

        // ormas slider
        // let sliderContainer = document.getElementById('sliderContainer');
        // let slider = document.getElementById('slider');
        let cards = document.getElementById('ormas-card');
        // let elementsToShow = 3;
        // let sliderContainerWidth = sliderContainer.clientWidth;

        // let cardWidth = sliderContainerWidth/elementsToShow;

        // slider.style.width = cards.length*cardWidth+'px';

        for(let i = 0; i<cards.length; i++){
            const element = cards[i];
        }

        function next(){
            // console.log(+slider.style.marginLeft.slice(0,-2)-cardWidth);
            // if(+slider.style.marginLeft.slice(0, -2) != (-cardWidth*(cards.length-elementsToShow))){
            //     slider.style.marginLeft = ((+slider.style.marginLeft.slice(0,-2))-cardWidth)+'px';
            // }
            const widthItem = document.querySelector('#ormas-card').offsetWidth;
            document.getElementById('sliderContainer').scrollLeft += widthItem;
        }

        function prev(){
            // console.log(+slider.style.marginLeft.slice(0,-2)-cardWidth);
            // if(+slider.style.marginLeft.slice(0, -2) != 0){
            //     slider.style.marginLeft = ((+slider.style.marginLeft.slice(0,-2))+cardWidth)+'px';
            // }
            const widthItem = document.querySelector('#ormas-card').offsetWidth;
            document.getElementById('sliderContainer').scrollLeft -= widthItem;
        }

    </script>
</body>
</html>
