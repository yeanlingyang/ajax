<?php

  $result = array(
    'username' => $_GET['username'],
    'password' => $_GET['password']
  );

  echo json_encode($result);

  // sleep(5);

?>