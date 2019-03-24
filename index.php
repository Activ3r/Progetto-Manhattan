<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LDAP tool</title>
</head>
<body>
    <h1>Ldap tool </h1>

    <?php
	
	$ldap_dn = "cn=read-only-admin,dc=example,dc=com";
	$ldap_password = "password";
	
	$ldap_con = ldap_connect("ldap.forumsys.com");
	
	ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
	
	if (ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {

        echo "ldap connected";
	  
    } 
    else {
		echo "ERROR -> ldap NOT connected";
    }
    
    function get_users_list() {  
        $filter = "(&(objectCategory=person)(objectClass=user)(distinguishedname=*OU=Users*)(sn=$search*))";
        
    }

    function get_grups_list() {
	    #TODO:  ottenere lista di tutti i gruppi con i permessi e i dati
    }

    function create_user() {  
	    
    }

    function create_group() {  
    }

    function edit_user() {   
        $filter = "(cn=Albert Einstein)";
		$result = ldap_search($ldap_con,"dc=example,dc=com",$filter) or exit("Unable to search");
		$entries = ldap_get_entries($ldap_con, $result);
		
		print "<pre>";
		print_r ($entries);
        print "</pre>";
    }
	
	
?>
</body>
</html>

