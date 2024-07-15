<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" type="image/png" href="imgs/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
</head>

<nav id="header" class="gradient fixed w-full z-30 top-0 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center flex">
            <a class="items-center toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl flex"
                href="index.php">
                <!--Icon from: http://www.potlabicons.com/ -->
                <!-- <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
              <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
              <path
                class="plane-take-off"
                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
              />
            </svg> -->
                <img src="imgs/baloes.png" width="50px" alt="">
                Teo Balões
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                class="flex items-center p-1 text-blue-800  focus:outline-none focus:shadow-outline transform transition  duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 lg:bg-transparent !text-black p-4 lg:p-0 z-20 flex flex-col lg:flex-row justify-center"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3 text-center">
                    <a class="links_pages text-white inline-block py-2 px-4 font-bold no-underline"
                        href="index.php">Home</a>
                </li>
                <li class="mr-3 text-center">
                    <a class="links_pages text-white inline-block no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        href="sobre.php">Sobre</a>
                </li>
                <li class="mr-3 text-center">
                    <a class="links_pages text-white inline-block no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        href="galeria.php">Galeria</a>
                </li>
            </ul>
            <a href="https://www.instagram.com/teobaloes" class="flex justify-center">
                <button id="navAction"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <!-- Contato --> Instagram
                </button>
            </a>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>

<body>
    <a href="https://wa.me/5511970996345" target="_blank" class="whatsapp-button">
        <img src="assets/icons/whatsapp.png" alt="WhatsApp Icon">
    </a>
</body>

</html>
<style>
    /* * {
        font-family: "Kalam", cursive;
        font-weight: 500;
        font-style: normal;
    } */

    /* Gradient class */
    .gradient {
        background: linear-gradient(90deg, #00237b 0%, #7cacff 100%);
    }

    /* Background color classes */
    .bg-white {
        background-color: white;
    }

    /* Text color classes */
    .text-gray-800 {
        color: #2d3748;
    }

    .text-white {
        color: white;
    }

    /* Shadow class */
    .shadow {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Additional styling for navbar content background */
    #nav-content.bg-white {
        background-color: white;
    }

    #nav-content.bg-gray-100 {
        background-color: #f7fafc;
    }


    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background-color: #25d366;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 999;
        transition: opacity 0.3s ease;
    }

    .whatsapp-button img {
        width: 50%;
        height: auto;
    }

    @media screen and (max-width: 767px) {
        .whatsapp-button {
            width: 50px;
            height: 50px;
            bottom: 30px;
            right: 15px;
        }

        .whatsapp-button img {
            width: 60%;
        }
    }

    /*carrossel-----------------*/
    .carousel {
        max-width: 600px;
        max-height: 400px;
        margin: auto;
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        margin: 20px;
        border: 1px solid #ccc;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .carousel-container {
        display: flex;
        width: 100%;
        /* Ocupar 100% da largura do container */
        transition: transform 0.5s ease;
        /* Adicionado efeito de transição para suavizar as mudanças de imagem */
    }

    .carousel img {
        width: 100%;
    }

    .prevBtn,
    .nextBtn {
        position: absolute;
        top: 50%;
        font-size: 20px;
        background: none;
        border: none;
        cursor: pointer;
        background-color: white;
        right: 0px;
        width: 40px;
        height: 40px;
        border-radius: 20px;
    }

    .prevBtn:hover,
    .nextBtn:hover {
        background-color: rgb(199 199 199);
    }

    .prevBtn {
        left: 0;

    }

    .carousel-titulo {
        color: white;
        z-index: 99;
        position: absolute;
        bottom: 0;
        width: 100%;
        background: #0000005c;
        padding: 10px;
        font-size: 1.4em;
        font-weight: 600;
    }

    .button {
        position: relative;
        padding: 10px 22px;
        border-radius: 6px;
        border: none;
        color: #fff;
        cursor: pointer;
        background-color: #0719BF;
        transition: all 0.2s ease;
    }

    .button:active {
        transform: scale(0.96);
    }

    .button:before,
    .button:after {
        position: absolute;
        content: "";
        width: 150%;
        left: 50%;
        height: 100%;
        transform: translateX(-50%);
        z-index: -1000;
        background-repeat: no-repeat;
    }

    .button:hover:before {
        top: -70%;
        background-image: radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, transparent 20%, #0719BF 20%, transparent 30%),
            radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, transparent 10%, #0719BF 15%, transparent 20%),
            radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, #0719BF 20%, transparent 20%);
        background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%,
            10% 10%, 18% 18%;
        background-position: 50% 120%;
        animation: greentopBubbles 0.6s ease;
    }

    @keyframes greentopBubbles {
        0% {
            background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%,
                40% 90%, 55% 90%, 70% 90%;
        }

        50% {
            background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%,
                50% 50%, 65% 20%, 90% 30%;
        }

        100% {
            background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%,
                50% 40%, 65% 10%, 90% 20%;
            background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
        }
    }

    .button:hover::after {
        bottom: -70%;
        background-image: radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, transparent 10%, #0719BF 15%, transparent 20%),
            radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, #0719BF 20%, transparent 20%),
            radial-gradient(circle, #0719BF 20%, transparent 20%);
        background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 20% 20%, 18% 18%;
        background-position: 50% 0%;
        animation: greenbottomBubbles 0.6s ease;
    }

    @keyframes greenbottomBubbles {
        0% {
            background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%,
                70% -10%, 70% 0%;
        }

        50% {
            background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%,
                105% 0%;
        }

        100% {
            background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%,
                110% 10%;
            background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
        }
    }
</style>

<script>
    // Adiciona event listeners para os botões de navegação
    document.querySelectorAll('.prevBtn').forEach(btn => {
        btn.addEventListener('click', function () {
            const carouselId = this.getAttribute('data-carousel-id');
            prevSlide(carouselId);
        });
    });

    document.querySelectorAll('.nextBtn').forEach(btn => {
        btn.addEventListener('click', function () {
            const carouselId = this.getAttribute('data-carousel-id');
            nextSlide(carouselId);
        });
    });

    function nextSlide(carouselId) {
        const carousel = document.getElementById(carouselId);
        const slides = carousel.querySelectorAll('.carousel-container img');
        const currentIndex = Array.from(slides).findIndex(slide => slide.style.display === 'block');
        const nextIndex = (currentIndex + 1) % slides.length;
        showSlide(carouselId, nextIndex);
    }

    function prevSlide(carouselId) {
        const carousel = document.getElementById(carouselId);
        const slides = carousel.querySelectorAll('.carousel-container img');
        const currentIndex = Array.from(slides).findIndex(slide => slide.style.display === 'block');
        const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(carouselId, prevIndex);
    }

    function showSlide(carouselId, index) {
        const carousel = document.getElementById(carouselId);
        const slides = carousel.querySelectorAll('.carousel-container img');

        if (slides.length === 0) return;

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = i === index ? 'block' : 'none';
        }
    }

    // Adiciona esta linha para exibir o primeiro slide quando o carrossel é criado
    document.querySelectorAll('.carousel').forEach(carousel => showSlide(carousel.id, 0));

    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");
    var navaction = document.getElementById("navAction");
    var brandname = document.getElementById("brandname");
    var links_pages = document.querySelectorAll(".links_pages");
    var toToggle = document.querySelectorAll(".toggleColour");

    document.addEventListener("scroll", function () {
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var toToggle = document.querySelectorAll(".toggleColour");

        if (scrollpos > 10) {
            header.classList.add("bg-white");
            header.classList.remove("gradient");
            navaction.classList.remove("bg-white");
            navaction.classList.add("gradient");
            navaction.classList.remove("text-gray-800");
            navaction.classList.add("text-white");
            for (var i = 0; i < links_pages.length; i++) {
                links_pages[i].classList.remove("text-white");
                links_pages[i].classList.add("text-black");
            }
            for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-gray-800");
                toToggle[i].classList.remove("text-white");
            }
            header.classList.add("shadow");

        } else {
            header.classList.remove("bg-white");
            header.classList.add("gradient");
            navaction.classList.remove("gradient");
            navaction.classList.add("bg-white");
            navaction.classList.remove("text-white");
            navaction.classList.add("text-gray-800");
            for (var i = 0; i < links_pages.length; i++) {
                links_pages[i].classList.add("text-white");
                links_pages[i].classList.remove("text-black");
            }
            for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-white");
                toToggle[i].classList.remove("text-gray-800");
            }
            header.classList.remove("shadow");

        }
    });


    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;
    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else {
                    navMenuDiv.classList.add("hidden");
                }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }
    }
    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) {
                return true;
            }
            t = t.parentNode;
        }
        return false;
    }
</script>