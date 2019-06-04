<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crea utente</title>

    <!--include-->
    <link rel="stylesheet" type="text/css" href="all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--/include-->
</head>
<body>
<?php
function create_user_form(){   
    ?>
    <div id='user_form'>
        <form>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="nome" class="form-control" id="nome" placeholder="inserisci nome">
            </div>
            <div class="form-group">
                <label for="cognome">Cognome</label>
                <input type="cognome" class="form-control" id="cognome" placeholder="inserisci cognome">
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>

      
      <?php
      if ( (!empty($_POST["user_name"])) && (!empty($_POST["password"])) ) {
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];
      } 

  }
?>

<?php include 'header.php';?>

<h1 class='page_titile'> Crea utente</h1>
<?php create_user_form(); ?>



<?php include 'footer.php';?>

</body>
</html>