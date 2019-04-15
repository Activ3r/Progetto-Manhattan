<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LDAP tool</title>

    <!--include-->
    <link rel="stylesheet" type="text/css" href="all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--/include-->
</head>
<body>

<!--PHP START-->
    <?php

    function ldap_connection(){
        $ldap_dn = "domain\user";
        $ldap_password = "Abc123";
        
        $ldap_con = ldap_connect("ldap.forumsys.com");
        
        ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
        
        if (ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {

           return TRUE;
        
        } 
        else {
            return FALSE;
        }

    }

    function login_form(){
        ?>
        <div class="login-form">
            <form action="index.php" method="POST">
                <h2 class="text-center">Log in</h2>    
                <div class="form-group">
                    <input type="text" id = "user_name" name="user_name" class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" id = "password" name="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>    
            </form>
        </div>

        <?php
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];

        login_validate($user_name,$password);
    }

    function login_validate($user_name,$password){
        echo("user_name: " . $_POST['user_name'] . "<br />\n");
        echo("password: " . $_POST['password'] . "<br />\n");
        #TODO: verificare con autenticazione tramite LDAP
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

    
    login_form()
?>

<!--PHP END-->

</body>
</html>

