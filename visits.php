<?php 
session_start();

  // Update a `visits` field in your database:
  // Using $_SESSIONS each time someone logs in
  // During login get the value of `visits`.

   if( isset( $_SESSION['visits'] ) ) {
      $_SESSION['visits'] += 1;
   }else {
      $_SESSION['visits'] = 1;
   }
  // Code to update the `visits` field goes here

   $msg = "You have visited this page ".  $_SESSION['visits'];
   $msg .= "in this session.";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using PHP sessions to count visits</title>
  </head>
  <body>
    <div class="visits">
  <?php  echo ( $msg ); ?>
    </div>
  </body>
</html>



