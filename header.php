<?php
function login_form(){
      ?>
      <button id = "login_button" type="button" class="btn btn-warning" data-toggle="modal" data-target="#login_modal">Log in</button>

      <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">Log in</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="index.php" method="POST">
                <div class="form-group">
                    <input type="text" id = "user_name" name="user_name" class="form-control" placeholder="username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" id = "password" name="password" class="form-control" placeholder="password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>    
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <?php
      if ( (!empty($_POST["user_name"])) && (!empty($_POST["password"])) ) {
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];
        login_validate($user_name,$password);
      } 

  }

  function login_validate($user_name,$password){
    #TODO: verificare con autenticazione tramite LDAP
    #TODO. utilizzare la funzione ldap_connection() per verificare prima del login
    $ldap_dn = "uid=".$user_name.",dc=example,dc=com";
    $ldap_password = $password;
    
    $ldap_con = ldap_connect("ldap.forumsys.com");
    ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

    if(@ldap_bind($ldap_con,$ldap_dn,$ldap_password)) {
      ?>
        <script>
          document.getElementById("login_button").innerHTML = $user_name;
        </script> 
      <?php
      return True;

    }    
    else {
      return False;
    }
   
  }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">LDAP tool</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> visualizza
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="visualizza_utenti.php">utenti</a>
          <a class="dropdown-item" href="visualizza_gruppi.php">gruppi</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> crea
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">utenti</a>
          <a class="dropdown-item" href="#">gruppi</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">modifica utente</a>
      </li>
    </ul>
  </div>
  <?php login_form()?> 
</nav>