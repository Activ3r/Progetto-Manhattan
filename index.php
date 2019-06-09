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
// imported only php file
require_once('ldap.php');

//header
require_once('header.php');


$prova = new ldap;

$prova->get_users_list();



  function get_grups_list() {
    #TODO:  ottenere lista di tutti i gruppi e utenti contenuti
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
    <td> <?php $prova->ldap_status() ?> </td>
  </tr>
</table>


<?php require('footer.php');?>


</body>
</html>

