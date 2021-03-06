<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <link href="css_feedback.css" rel="stylesheet">
  <link rel="shortcut icon" href="imagens/eye1.ico">
  <title>Feedback · Daltonismo</title>
  <style>
    .flex-outer,
    .flex-inner {
      list-style-type: none;
      padding: 0;
    }

    .flex-outer {
      max-width: 800px;
      margin: 0 auto;
    }

    .flex-outer li,
    .flex-inner {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    }

    .flex-inner {
      padding: 0 8px;
      justify-content: space-between;
    }

    .flex-outer>li:not(:last-child) {
      margin-bottom: 20px;
    }

    .flex-outer li label,
    .flex-outer li p {
      padding: 8px;
      font-weight: 300;
      letter-spacing: .09em;
      text-transform: uppercase;
    }

    .flex-outer>li>label,
    .flex-outer li p {
      flex: 1 0 120px;
      max-width: 220px;
    }

    .flex-outer>li>label+*,
    .flex-inner {
      flex: 1 0 220px;
    }

    .flex-outer li p {
      margin: 0;
    }

    .flex-outer li input:not([type='checkbox']),
    .flex-outer li textarea {
      padding: 15px;
      border: none;
    }

    .flex-outer li button {
      margin-left: auto;
      padding: 8px 16px;
      border: none;
      background: #333;
      color: #f2f2f2;
      text-transform: uppercase;
      letter-spacing: .09em;
      border-radius: 2px;
    }

    .flex-inner li {
      width: 100px;
    }
  </style>

</head>

<body>
  <header>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
          <path fill-rule="evenodd"
            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
        </svg></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="dicromacia.html">Tipos de daltonismo<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="sobre.html">Nosso Projeto<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="teste.html">Teste<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="feedback.html">Feedback<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <body>
    <main role="main">
      <div style="margin-top: 1rem;" class="container marketing">
        <section class="jumbotron text-center">
          <div class="container">
            <h1><b>Feedback</b></h1><br>
            <p class="lead p_color_dark">Seria de grande ajuda caso pudesse deixar aqui sua mensagem sobre sua
              experiência com o nosso site. Cite suas principais críticas e conselhos sobre o conteúdo, design e
              qualquer outra coisa que lhe caiba como importante. Ficaremos extremamente agradecidos e também será de
              grande ajuda para futuros projetos! <br><label style="font-weight: 600; color: rgb(29, 28, 28);">Agradecemos sua atenção :)</label>
            </p>
          </div>
        </section>
        <div class="container">
          <form method="POST" enctype="multipart/form-data" action="incluir.php">
            <center>
            <div class="wrapper">
              <div class="input-data">
                <input name="nome" type="text" autocomplete="off" required>
                <div class="underline"></div>
                <label>Nome</label>
              </div>
            </div>
            <div style="margin-top: 2rem;" class="wrapper">
              <div class="input-data">
                <input type="text" name="feedback" autocomplete="off" required>
                <div class="underline">
                </div>
                <label>Feedback</label>
              </div>
            </div>
            </center>
            <input class="reponsive" type="submit" value="Enviar">
            <?php
            
            $host = "localhost";
            $user = "id15190864_usuarioprojeto";
            $password = "hugoSP_12345";
            $dbname = "id15190864_projeto";      

            $conect = mysqli_connect("$host", "$user", "$password", "$dbname");

            $nome = $_POST["nome"];
            $feedback = $_POST["feedback"];   

            $in = "INSERT INTO resultados (nome, feedback) values('$nome', '$feedback')";

                $incluir = mysqli_query($conect, $in);
                if($incluir == 1){
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrado com sucesso!";
                }
                else{
                    printf("Errormessage: %s\n", $conect->error);
                }
        ?>
          </form>
        </div>
        <hr style="margin-top: 4rem;" class="featurette-divider">
      </div>
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; Projeto Casa Aberta • Etec Rodrigues de Abreu • 2º Desenvolvimento de Sistemas • HJHJ</p>
      </footer>
    </main>

  </body>

</html>