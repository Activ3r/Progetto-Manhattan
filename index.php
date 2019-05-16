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

<?php
require_once('ldap_connection.php');

<<<<<<< HEAD
require_once('header.php');
=======
require('header.php');

  function ldap_connection(){
    // $ldap_dn = "cn=dominio-SERVER-PROGETTO-CA,dc=dominio,dc=local";
    // $ldap_password = "Abc123!";
    
    // $ldap_con = ldap_connect("127.0.0.1");       
    // ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
    
    // if(ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {
    //   echo "Connected";
    //   return TRUE;
      
    // } 
    // else {
    //   echo "Error";
    //   return FALSE;
      
    // }

    $ldap_dn = "cn=read-only-admin,dc=example,dc=com";
    $ldap_password = "password";
    
    $ldap_con = ldap_connect("ldap.forumsys.com");       
    ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
    
    if(ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {
      echo "Connected";
      return TRUE;
    } 
    else {
      echo "Error";
      return FALSE;
    }
    
  }
>>>>>>> 32ef7af1c623bf8415269f495e56929663f6e367

 
  

 

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

<!-- Status table-->
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


<?php require('footer.php');?>


</body>
</html>

