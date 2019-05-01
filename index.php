<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LDAP tool</title>

    <!--include-->
    <link rel="stylesheet" type="text/css" href="all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--/include-->
</head>
<body>

<!--PHP START-->
<?php
  function ldap_connection(){
    $ldap_dn = "cn=read-only-admin,dc=example,dc=com";
    $ldap_password = "password";
    
    $ldap_con = ldap_connect("ldap.forumsys.com");       
    ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
    
    if(ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {
      #return TRUE;
      echo "Connected";
    } 
    else {
      #return FALSE;
      echo "Error";
    }
  }

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

  function get_users_list() {  
    #TODO:  ottenere lista di tutti gli utenti con i permessi e i dati
  }

  function get_grups_list() {
    #TODO:  ottenere lista di tutti i gruppi con i permessi e i dati
  }

  function create_user() {  
    #TODO:  creare utente con tutti i suoi parametri e possibilità di assegnarlo ad un gruppo
  }

  function create_group() {  
      #TODO:  creare gruppo con tutti i parametri e possibilità di aggiungerci utenti
  }

  function edit_user() {   
      #TODO:  possibilità di modificare attributi utente e assegnarlo a gruppi

  }

?>

<?php include 'header.php';?>

<table>
  <tr>
    <th>Object</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>LDAP</td>
    <td><?php ldap_connection()?></td>
  </tr>
</table>


<?php include 'footer.php';?>

</body>
</html>

