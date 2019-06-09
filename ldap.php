<?php

class ldap{

    #Original
    // private $ldap_dn = "cn=dominio-SERVER-PROGETTO-CA,dc=dominio,dc=local";
    // private $ldap_password = "Abc123!";

    #Test
    private $ldap_dn = "cn=read-only-admin,dc=example,dc=com";
    private $ldap_password = "password";

    private $ldap_con;
    private $ldap_status=true;

    function __construct(){
        
        #Original
        // $this->$ldap_con = ldap_connect("127.0.0.1");
        
        #Test
    $this->$ldap_con = ldap_connect("ldap.forumsys.com");

    echo $this->$ldap_con;

        ldap_set_option($this->$ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

        if ($this->$ldap_con === false) {
            die("No LDAP Connection!");
        }

        if(!ldap_bind($this->$ldap_con, $ldap_dn, $ldap_password)){
            die("Error LDAP Connection!");
            $this->$ldap_status = false;
        }

    }

    function get_users_list() {  
        echo $this->$ldap_con;
        #TODO:  ottenere lista di tutti gli utenti  e i dati
        
        

        #original
        // $filter = "(cn=Users)";
        // $result =  ldap_search($ldap_con, "dc=dominio,dc=local",$filter ) or exit ("Unable to search");

        #Test
        $filter = "(&(objectClass=uniquemember)(cn=*))";
        // $filter="(ou=*)";
        $result = ldap_search($this->$ldap_con,"dc=example,dc=com",$filter) or exit("Unable to search");
        
        $entries = ldap_get_entries($this->$ldap_con,$result);

        print "<pre>";
        print_r($entries);
        print "</pre>";
    
    }

    function ldap_status(){
        if($this->$ldap_status){
            echo "Ok";
        }
        else {
            echo "Error";
        }

    }

}
?>