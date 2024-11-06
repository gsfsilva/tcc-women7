<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="view/css/style.css">
    <title>Women's Forum</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="#" class="logo">W<span>omen'</span>S F<span>oru</span>M</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="view/../index.php">Home</a></li>
                <li class="nav-item"><a href="view/../violencia.php">Violências</a></li>
                <li class="nav-item"><a href="view/../leis.php">Leis e Direitos</a></li>
                <li class="nav-item"><a href="view/../sobre.php">Sobre e Apps</a></li>
            </ul>
            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <script>
    const menuToggle = document.querySelector('.menu');
    const navMenu = document.querySelector('.nav-menu');

    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });
</script>
