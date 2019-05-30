<?php

  $result = array(
    'username' => $_POST['username'],
    'password' => $_POST['password']
  );

  echo json_encode($result);

?>