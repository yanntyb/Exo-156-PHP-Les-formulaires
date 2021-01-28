<?php

if(isset($_POST["nom"])){
    $nom = strip_tags($_POST['nom']);
    if($nom === "james" || $nom === "James"){
        echo "Bond, James Bond";
    }
    else{
        echo "Bonjour $nom";
    }
}