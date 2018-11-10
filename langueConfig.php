<?php

  $default_langue = 'fr';
  if(isset($_REQUEST['lang'])){
    include('Langues/'.$_REQUEST['lang'].'.php');
  }
  else {
    include('Langues/'.$default_langue.'.php');
  }

?>
