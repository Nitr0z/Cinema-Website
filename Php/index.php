<?php include('usernbr.php'); ?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      Page 1 - Actuellement <?php echo $user_nbr; ?> utilisateur<?php if($user_nbr != 1) { echo "s"; } ?> en ligne<br />
   </body>
</html>