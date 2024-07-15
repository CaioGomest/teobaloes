<?php
require "header.php";

$filtro_categoria = isset($_REQUEST['filtro'])?$_REQUEST['filtro']:null;
?>
<!DOCTYPE html>

<head>
    <title>Teo Balões | Galeria </title>
</head>

<body>
    <h2 class="mt-20 w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Nossa Galeria
    </h2>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>

    <div class="mx-auto my-8 p-4">
        <div class="filtro flex justify-around">
            <div class="opcoes " id="Todas">Todas</div>
            <?php
            $pastaPai = 'assets/imgs/fts_teobaloes';
            if (is_dir($pastaPai)) {
                $pastas = array_diff(scandir($pastaPai), array('..', '.'));

                foreach ($pastas as $pasta) {
                    $caminhoPasta = $pastaPai . '/' . $pasta;

                    if (is_dir($caminhoPasta)) {
                        $imagens = glob($caminhoPasta . '/*.{jpg,jpeg,png}', GLOB_BRACE);

                        if (!empty($imagens)) {
                            $categoria = basename($caminhoPasta);
                            $idCategoria = str_replace(' ', '_', $categoria); // Substitui espaços por underscores
                            echo '<div class="opcoes ' . ($filtro_categoria === $idCategoria ? 'opcao_selecionada' : '') . '" id="' . $idCategoria . '">' . $categoria . '</div>';

                        }
                    }
                }
            } else {
                echo json_encode(array('erro' => 'não é um diretório válido.'));
            }
            ?>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4"
            style="background-color:#cdcdcd;border-radius:5px;">
            <?php
            if (is_dir($pastaPai)) {
                foreach ($pastas as $pasta) {
                    // Obtém o caminho completo da pasta
                    $caminhoPasta = $pastaPai . '/' . $pasta;

                    // Verifica se é um diretório
                    if (is_dir($caminhoPasta)) {

                        // Obtém todas as imagens dentro da pasta
                        $imagens = glob($caminhoPasta . '/*.{jpg,jpeg,png}', GLOB_BRACE);

                        // Verifica se há imagens na pasta
                        if (!empty($imagens)) {

                            // Exibe as imagens com uma classe que representa a categoria
                            foreach ($imagens as $imagem) {
                                // Obtém o nome da pasta (categoria)
                                $categoria = basename($caminhoPasta);
                                $idCategoria = str_replace(' ', '_', $categoria); // Substitui espaços por underscores

                                echo '<div class="responsive-image ' . $idCategoria . ' h-80">';
                                echo '<img src="' . $imagem . '" class="w-full h-full object-cover" alt="' . $categoria . '">';
                                echo '</div>';
                            }
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


    document.getElementById('Todas').addEventListener('click', () => filtrarFotos('Todas'));
    <?php
        if (is_dir($pastaPai)) {
            foreach ($pastas as $pasta) {
                $categoria = basename($pasta);
                $idCategoria = str_replace(' ', '_', $categoria); // Substitui espaços por underscores
                echo "document.getElementById('$idCategoria').addEventListener('click', () => filtrarFotos('$idCategoria'));\n";
            }
        }
    ?>
    </script>

    <style>
    .fullscreen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .fullscreen img {
        max-width: 90%;
        max-height: 90%;
    }

    .close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        cursor: pointer;
        color: #fff;
        font-size: 24px;
        z-index: 10000;
    }

    .responsive-image {
        width: 100%;
        max-width: 100%;
        height: auto;
        display: block;
        margin-bottom: 10px;
        cursor: pointer;
    }

    #fullscreen-image {
        cursor: pointer;
    }

    .opcoes {
        cursor: pointer;
        width: calc(100% / 4);
        padding: 10px;
        text-align: center;
    }

    .opcao_selecionada {
        background-color: #cdcdcd;
        border-radius: 15px 15px 0px 0px;
    }
    </style>

    <div id="fullscreen-container" class="fullscreen" style="display: none;">
        <span class="close-btn">&times;</span>
        <img id="fullscreen-image" src="" alt="Imagem em tela cheia">
    </div>

    <script>
   document.addEventListener('DOMContentLoaded', (event) => {
    // Função para filtrar fotos com base na categoria
    function filtrarFotos(categoria) {
        const imagens = document.querySelectorAll('.responsive-image');
        imagens.forEach(imagem => {
            if (categoria === 'Todas' || imagem.classList.contains(categoria)) {
                imagem.style.display = 'block';
            } else {
                imagem.style.display = 'none';
            }
        });
    }

    // Captura todas as opções de categoria
    const opcoes = document.querySelectorAll('.opcoes');
    
    // Adiciona evento de clique a cada opção
    opcoes.forEach(opcao => {
        opcao.addEventListener('click', function() {
            // Remove a classe 'opcao_selecionada' de todas as opções
            opcoes.forEach(o => o.classList.remove('opcao_selecionada'));
            // Adiciona a classe 'opcao_selecionada' à opção clicada
            this.classList.add('opcao_selecionada');
            // Filtra as fotos com base na categoria clicada
            filtrarFotos(this.id);
        });
    });

    // Verifica se há um filtro inicial na URL
    const urlParams = new URLSearchParams(window.location.search);
    const filtro_categoria = urlParams.get('filtro');

    // Se houver um filtro na URL, selecione a categoria correspondente
    if (filtro_categoria) {
        // Remove a classe 'opcao_selecionada' de todas as opções
        opcoes.forEach(o => o.classList.remove('opcao_selecionada'));
        
        // Adiciona a classe 'opcao_selecionada' à opção correspondente ao filtro
        const categoriaSelecionada = document.getElementById(filtro_categoria);
        if (categoriaSelecionada) {
            categoriaSelecionada.classList.add('opcao_selecionada');
        }

        // Filtra as fotos com base no filtro da URL
        filtrarFotos(filtro_categoria);
    } else {
        // Se não houver filtro na URL, clique automático em 'Todas'
        document.getElementById('Todas').click();
    }
});


    // Função para abrir uma imagem em tela cheia
    function openFullscreenImage(imageSrc) {
        const fullscreenContainer = document.getElementById('fullscreen-container');
        const fullscreenImage = document.getElementById('fullscreen-image');
        fullscreenImage.src = imageSrc;
        fullscreenContainer.style.display = 'flex';

        // Adiciona um evento de clique ao botão de fechar
        const closeBtn = document.querySelector('.close-btn');
        closeBtn.addEventListener('click', closeFullscreenImage);
        fullscreenContainer.addEventListener('click', closeFullscreenImage);
    }

    // Função para fechar a imagem em tela cheia
    function closeFullscreenImage() {
        const fullscreenContainer = document.getElementById('fullscreen-container');
        fullscreenContainer.style.display = 'none';
    }

    // Adiciona um evento de clique a todas as imagens
    const images = document.querySelectorAll('.responsive-image img');
    images.forEach(image => {
        image.addEventListener('click', function() {
            openFullscreenImage(this.src);
        });
    });
    </script>
</body>

<?php
require "footer.php"
?>

<script>
// Adiciona event listeners para os botões de navegação
document.querySelectorAll('.prevBtn').forEach(btn => {
    btn.addEventListener('click', function() {
        const carouselId = this.getAttribute('data-carousel-id');
        prevSlide(carouselId);
    });
});

document.querySelectorAll('.nextBtn').forEach(btn => {
    btn.addEventListener('click', function() {
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
