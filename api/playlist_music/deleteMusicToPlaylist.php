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

    if($_SERVER['REQUEST_METHOD'] == 'GET') {

        //On inclu les fichiers de configuration et d'acces aux donnees
        include_once '../../configurations/config.php';
        include_once '../../models/Playlist_music.php';

        $id_music_get = htmlspecialchars(strip_tags($_GET['id_music']));
        $id_playlist_get = htmlspecialchars(strip_tags($_GET['id_playlist']));

        $response = Playlist_music::deleteMusicToPlaylist($id_album_get);

        if($response){
            $render_array = [
                'message'=>'success'
            ];           
        } else {
            $render_array = [
                'message'=>'error'
            ];
        }

        echo json_encode($render_array);

    } else {
        //On gere l'erreur
        http_response_code(405);
        header("HTTP/1.0 405 Method Not Allowed");
        echo json_encode(["erreur" => "La methode n'est pas admise"]);
    }