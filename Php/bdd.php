<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajout Eleve</title>
</head>
<body>
    <?php
    $_POST = array_map('mysql_real_escape_string', $_POST);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sexe = $_POST['sexe'];
    $situation = $_POST['situation'];
    $message = $_POST['message'];

    $mysql_id = mysql_connect('127.0.0.1', 'root', '');
    mysql_select_db('ocb', $mysql_id);
    mysql_query("SET NAMES 'utf8'");

    $reqSQL = 'INSERT INTO contact2 (nom, prenom, email, sexe, situation, message) VALUES ("'.$nom.'","'.$prenom.'","'.$email.'","'.$sexe.'","'.$situation.'","'.$message.'")';
    $result = mysql_query($reqSQL) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
    echo 'Informations Enregistrés !';
    echo '<br>'
    ?>
</body>
</html>