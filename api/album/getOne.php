<?php
    session_start();
    //Headers requis

    //Acces depuis n'importe quel site ou appareil
    header("Access-Control-Allow-Origin: *");
    //Formats des donnes envoyees
    header("Content-Type: application/json; charset=UTF-8");
    //Method autorisee
    header("Access-Control-Allow-Methods: GET");
    //Duree de vie de la requete
    header("Access-Control-Max-Age: 3600");
    //Entete autorisees
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Autorization, X-Requested-Width");

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        //On inclu les fichiers de configuration et d'acces aux donnees
        include_once '../../configurations/config.php';
        include_once '../../models/Album.php';

        $id_album_get = htmlspecialchars(strip_tags($_GET['id_album']));

        // print_r($email);
        // print_r($password);

        //On recupere les donnees des utilisateurs
        $response_array = Album::getAlbumById($id_album_get);
        
        echo json_encode($response_array);

        
    } else {
        //On gere l'erreur
        http_response_code(405);
        header("HTTP/1.0 405 Method Not Allowed");
        echo json_encode(["erreur" => "Method Not Allowed"]);
    }


?>