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
    <h1>Ldap tool </h1>

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

    function login(){
        ?>
        <div class="wrapper fadeInDown">
            <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            </div>
        </div>
    <?php

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
<!--PHP END-->
</body>
</html>

