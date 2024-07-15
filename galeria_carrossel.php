<?php
require "header.php"
?>
<!DOCTYPE html>

<head>
    <title>Teo Balões | Galeria </title>
</head>

<body>
    <div style="background-color:#0719BF;border-radius: 0px 30px 30px 0px"
        class="text-white w-ful md:flex p-4 h-20 mt-8 flex justify-center">
        <h1 class="text-5xl">Nossa Galeria</h1>
        <img src="assets/icons/baloes.svg" class="w-40" alt="baloes">
    </div>

    <!-- <div class="searchBox">
        <input class="searchInput" type="text" style="--tw-ring-color: none!important;color:black;width:100%" name=""
            placeholder="Procure um Tema">
        <button style="outline: none;" class="searchButton" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                <g clip-path="url(#clip0_2_17)">
                    <g filter="url(#filter0_d_2_17)">
                        <path
                            d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z"
                            stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                            shape-rendering="crispEdges"></path>
                    </g>
                </g>
                <defs>
                    <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha"></feColorMatrix>
                        <feOffset dy="4"></feOffset>
                        <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                        </feColorMatrix>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape">
                        </feBlend>
                    </filter>
                    <clipPath id="clip0_2_17">
                        <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)">
                        </rect>
                    </clipPath>
                </defs>
            </svg>
        </button>
    </div> -->
    <div>
       <!-- Adicione IDs às opções de filtro -->
<div class="filtro container_fotos w-11/12 mx-auto mt-4 flex justify-around">
    <div id="todas">Todas</div>
    <div id="painel">Painel</div>
    <div id="esculturas">Esculturas</div>
    <div id="arcos">Arcos</div>
</div>

<div class="container_fotos w-11/12 mx-auto mt-4">
    <div class="grid grid-cols-3 gap-4 bg-gray-200">
        <?php
        $nomeArquivoAtual = basename(__FILE__, '.php');
        $pastaPai = 'assets/imgs/fts_teobaloes';
        if (is_dir($pastaPai)) {
            $pastas = array_diff(scandir($pastaPai), array('..', '.'));

            foreach ($pastas as $pasta) {
                // Obtém o caminho completo da pasta
                $caminhoPasta = $pastaPai . '/' . $pasta;

                // Verifica se é um diretório
                if (is_dir($caminhoPasta)) {

                    // Obtém todas as imagens dentro da pasta
                    $imagens = glob($caminhoPasta . '/*.{jpg,jpeg,png}', GLOB_BRACE);

                    // Verifica se há imagens na pasta
                    if (!empty($imagens)) {
                        echo '<div class="carousel" id="carousel_' . $pasta . '">'; // Adicionado um ID único para cada carrossel

                        // Título do carrossel é o nome da pasta
                        echo '<div class="carousel-titulo">' . $pasta . '</div>';

                        echo '<div class="carousel-container">';

                        // Exibe as imagens
                        foreach ($imagens as $imagem) {
                            echo '<img style="object-fit: cover;" src="' . $imagem . '" alt="' . $pasta . '">';
                        }

                        echo '</div>'; // Fim do carousel-container

                        // Botões de navegação
                        if (count($imagens) >= 2) {
                            echo '<button class="prevBtn" style="outline: none;" data-carousel-id="carousel_' . $pasta . '">❮</button>'; // Adicionado um atributo de dados para identificar o ID do carrossel
                            echo '<button class="nextBtn" style="outline: none;" style="right: 0" data-carousel-id="carousel_' . $pasta . '">❯</button>'; // Adicionado um atributo de dados para identificar o ID do carrossel
                        }

                        echo '</div>'; // Fim do carousel
                    }
                }
            }
        } else {
            echo json_encode(array('erro' => 'não é um diretório válido.'));
        }
        ?>
    </div>
</div>

<script>
    // Função para mostrar ou ocultar as imagens com base na categoria selecionada
    function filtrarFotos(categoria) {
        const carrosseis = document.querySelectorAll('.carousel');
        carrosseis.forEach(carrossel => {
            const categoriaCarrossel = carrossel.id.split('_')[1]; // Obtém a categoria do carrossel a partir do ID
            if (categoria === 'todas' || categoria === categoriaCarrossel) {
                carrossel.style.display = 'block'; // Mostra o carrossel se for da categoria selecionada ou se "Todas" foi selecionado
            } else {
                carrossel.style.display = 'none'; // Oculta o carrossel se não for da categoria selecionada
            }
        });
    }

    // Adicione listeners de evento às opções de filtro
    document.getElementById('todas').addEventListener('click', () => filtrarFotos('todas'));
    document.getElementById('painel').addEventListener('click', () => filtrarFotos('Painel'));
    document.getElementById('esculturas').addEventListener('click', () => filtrarFotos('Esculturas'));
    document.getElementById('arcos').addEventListener('click', () => filtrarFotos('Arcos'));
</script>

    </div>

    <style>
    .searchBox {
        display: flex;
        max-width: 90%;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
        background: #E0E0E0;
        box-shadow: 10px 10px 10px gray;
        border-radius: 50px;
        position: relative;
        margin: 10px auto;
    }

    .searchButton {
        color: white;
        position: absolute;
        right: 8px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--gradient-2, linear-gradient(90deg, #0719BF 0%, #009EFD 100%));
        border: 0;
        display: flex;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        justify-content: center;
        align-items: center;

    }

    button:hover {
        color: #fff;
        background-color: rgb(221 221 221);
        box-shadow: rgba(0, 0, 0, 0.5) 0 10px 20px;
    }



    .searchInput {
        border: none;
        background: none;
        outline: none;
        color: white;
        font-size: 15px;
        padding: 24px 46px 24px 26px;
    }
    </style>
</body>


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

            </script>
</html>