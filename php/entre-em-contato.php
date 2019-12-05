<head>
  <title>Entre em contato</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'navbar.php';?>
<section class="container" style="margin-top:100px; ">
    <h2>Contato</h2>
    <p>Entre em contato conosco</p>

    <form>
        <div class="form-group">
            <label for="Nome" >Nome:</label>
            <input class="form-control" id="Nome" type="text" placeholder="Seu nome" required autofocus>
        </div>
        <div class="form-group">
            <label for="Email" >E-mail:</label>
            <input class="form-control" id="Email" type="email" placeholder="Seu e-mail" required autofocus>
        </div>
        <div class="form-group">
            <label for="comment">Descreva seu problema:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
    <button type="button" class="btn btn-primary" type="submit">Enviar</button>

    </form>

</section>
</body>