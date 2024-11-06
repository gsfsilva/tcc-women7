<?php include("blades/header.php");?>
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css">
<title>Women's Forum</title>
</head>

<div class="container" style="padding-top: 90px;">
    <h1 data-aos="fade-up" class="text-center quicksand-font" id="aplicativo">Aplicativo
        <span>W</span>omen<span>'s</span> <span>F</span>orum
    </h1>
    <p data-aos="fade-up" class="mt-4">
        O aplicatico Women's Forum é uma ferramenta que tem como objetivo auxiliar a população a denunciar casos de
        violência contra a mulher.
        Através do aplicativo, as mulheres podem registrar denúncias de violência, solicitar ajuda e obter informações
        sobre os serviços
        disponíveis para atendimento e apoio. Acreditamos que a informação é uma ferramenta importante para a prevenção
        e o
        combate a essas violências e que a tecnologia pode ser uma aliada nesse processo.
    </p>
    <p data-aos="fade-up" class="mt-4">Para garantir uma melhor usabilidade, o aplicativo Women's Forum tem uma versão
        para as
        <span style="text-decoration: underline #AE0861;">mulheres</span>
    </p>
</div>

<div class="container mt-5">
    <div class="wrapper">
        <div class="card">
            <img src="../img/cell2.png" alt="Mountain">
            <div class="info">
                <h1>Mountain</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typesetting industry</p>
            </div>
        </div>

        <div class="card">
            <img src="../img/cell1.png" alt="Road">
            <div class="info">
                <h1>Road</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typesetting industry</p>
            </div>
        </div>

        <div class="card">
            <img src="../img/cell3.png" alt="Protester">
            <div class="info">
                <h1>Protester</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typesetting industry</p>
            </div>
        </div>
        <section class="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="sobre-box">
                        <h3>Quem somos</h3>
                        <p>Somos uma equipe de profissionais que atuam na área de saúde, educação e assistência social,
                            com
                            experiência no atendimento a mulheres em situação de violência. Nosso objetivo é oferecer
                            informações sobre os tipos de violência contra a mulher, os direitos das mulheres e os
                            serviços
                            disponíveis para atendimento e apoio. Acreditamos que a informação é uma ferramenta
                            importante para
                            a prevenção e o enfrentamento da violência contra a mulher.</p>
                    </div>
                    <!--sobre-box-->
                </div>
                <!--flex-->
            </div>
            <!--interface-->
        </section>
        <!--sobre-->


        <script src="script.js"></script>
        <script>
        // Função para scrollar lentamente até a div com o ID 'destino'
        function scrollToDestinoLento() {
            var targetPosition = document.getElementById("destino").offsetTop -
                110; // Adicionando um deslocamento de 50px para cima
            var startPosition = window.pageYOffset;
            var distance = targetPosition - startPosition;
            var duration = 3000; // Duração do scroll em milissegundos
            var startTime = null;

            function animationScroll(currentTime) {
                if (startTime === null) startTime = currentTime;
                var timeElapsed = currentTime - startTime;
                var run = ease(timeElapsed, startPosition, distance, duration);
                window.scrollTo(0, run);
                if (timeElapsed < duration) requestAnimationFrame(animationScroll);
            }

            function ease(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t + b;
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            }

            requestAnimationFrame(animationScroll);
        }

        // Chama a função após 1 segundo
        setTimeout(scrollToDestinoLento, 1200);
        </script>
        <?php include("blades/footer.php");?>