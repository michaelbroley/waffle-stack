<?php

  if ($_POST) {
    $toEmail = 'masterov.mixail@gmail.com';
    $values = [];
    
    if ($_POST['name']) {
      $subject = 'Contact Request From ' . htmlspecialchars($_POST['name']);
    } else {
      $subject = 'Contact Request';
    }

    foreach ($_POST as $propName => $propValue) {
      if ($propName !== 'message') {
        $values[] = 'Visitor ' . htmlspecialchars($propName) . ': ' . htmlspecialchars($propValue);
      }
    }

    if ($_POST['message']) {
      $values[] = '<br>Visitor message:<br><br>' . htmlspecialchars($_POST['message']);
    }

    $body = implode('<br>', $values);
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
    
    if ($_POST['name'] || $_POST['email']) {
      $headers .= "From: ";
    }

    if ($_POST['name']) {
      $headers .= htmlspecialchars($_POST['name']);
    }

    if ($_POST['email']) {
      $headers .= "<" .htmlspecialchars($_POST['email']). ">";
    }

    $headers .= "\r\n";

    mail($toEmail, $subject, $body, $headers);
  }

?>