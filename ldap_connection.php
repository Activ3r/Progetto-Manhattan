<?php
function ldap_connection(){
  //   $ldap_dn = "cn=dominio-SERVER-PROGETTO-CA,dc=dominio,dc=local";
  //   $ldap_password = "Abc123!";
    
  //   $ldap_con = ldap_connect("127.0.0.1");       
  //   ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
    
  //   if(ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {
  //     #return TRUE;
  //     echo "Connected";
  //   } 
  //   else {
  //     #return FALSE;
  //     echo "Error";
  //   }

    #TEST
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
  ?>