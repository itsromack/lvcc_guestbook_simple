<?php
require_once('config.php');

$config = array(
     'id' => 1,
     'name' => 'Darene',
     'message' => 'Hi',
     'email' => 'juan@mail.com',
     'date_posted' => 'January 1, 2013',
     'is_approved' => 'N'
     );
$message = new Message($config);
$messages = MessageDAO::getAllMessages();
?>