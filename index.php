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

require('header.php');

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

