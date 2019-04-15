<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LDAP tool</title>
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

            echo "ldap connected";
        
        } 
        else {
            echo "ERROR -> ldap NOT connected";
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
<!--PHP END-->
</body>
</html>

