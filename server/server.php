<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_drop_down" />
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/server.css">
    <link rel="stylesheet" href="../css/dev.css">
    <title>Formulário de cadastro</title>
</head>
<body>
    <header>
        <h1>Formulário IFRN</h1>

        <nav>
            <a href="../index.html">Inicio</a>
            <a href="../dev.html">Desenvolvedores</a>
            <a href="../server/server.php">Fórmulário</a>
        </nav>
    </header>


    <main>
        <div class="container">
            <div class="form-image">
                <img src="../img/undraw_shopping_re_hdd9.svg" alt="">
            </div>
            <div class="form">
                <h1>DADOS:</h1>
            <br>
            <?php

            $name = $_POST['name'];
            $email = $_POST['email'];
            $numero = $_POST['numero'];
            $data = $_POST['data'];
            $password = $_POST['password'];
            $perfil = $_POST['perfil'];
            $color = $_POST['color'];
            $ident = $_POST['ident'];

            ?>
            <div class="resposta">
                <h2>Nome: </h2>
                <?php echo $name;?>
                <br>

                <h2>Email: </h2>
                <?php echo $email;?>
                <br>

                <h2>Número: </h2>
                <?php echo $numero;?>
                <br>

                <h2>Data: </h2>
                <?php echo $data;?>
                <br>

                <h2>Senha: </h2>
                <?php echo $password;?>
                <br>

                <h2>Foto: </h2>
                <?php echo $perfil;?>
                <br>

                <h2>Cor Fav.: </h2>
                <?php echo $color;?>
                <br>

                <h2>Identificação: </h2>
                <?php echo $ident;?>
                <br>
                </div>

            </div>
        </div>
    </main>


    <footer>
    <div class="titulo-footer">
        <h3>IFRN campus Santa Cruz - Trabalho de Autoria Web</h3> <span class="material-symbols-outlined"> arrow_drop_down </span>
        </div>
        <h3>Prof. Marcelo Figueiredo Barbosa Júnior</h3>
        <div class="desenvolvedores">
            <h2>Devs</h2> <span class="material-symbols-outlined"> arrow_drop_down </span>
        </div>
        <h3>Arthur Lima Araújo</h3>
        <h3>Felipe Ângelo</h3>
        <h3>Victor Henrrique</h3>
    </footer>
</body>
</html>