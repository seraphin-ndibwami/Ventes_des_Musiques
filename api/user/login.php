<?php
    session_start();
    //Headers requis

    //Acces depuis n'importe quel site ou appareil
    header("Access-Control-Allow-Origin: *");
    //Formats des donnes envoyees
    header("Content-Type: application/json; charset=UTF-8");
    //Method autorisee
    header("Access-Control-Allow-Methods: POST");
    //Duree de vie de la requete
    header("Access-Control-Max-Age: 3600");
    //Entete autorisees
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Autorization, X-Requested-Width");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //On inclu les fichiers de configuration et d'acces aux donnees
        include_once '../../configurations/config.php';
        include_once '../../models/Authentification.php';

        $email = htmlspecialchars(strip_tags($_POST['email']));
        $password = htmlspecialchars(strip_tags($_POST['password']));
        $password = md5($password);

        // print_r($email);
        // print_r($password);

        //On recupere les donnees des utilisateurs
        $response = Utilisateur::login($email, $password);
        print_r($response);

        if($response == "donotmuch") {
            header("HTTP/1.0 503");
            echo json_encode(["erreur" => "Utilisateur ou mot de passe incorrect"]);
        } else {
            $type_compte = $response[1];
            $email = $response[0];

            if($type_compte=="client"){
                $_SESSION['user_email'] = $email;
                header("Location: ../../home_client.html");
            } else{
                $_SESSION['user_email'] = $email;
                header("Location: ../../home_music.html");
            }
        }

        
    } else {
        //On gere l'erreur
        http_response_code(405);
        header("HTTP/1.0 405 Method Not Allowed");
        echo json_encode(["erreur" => "La methode n'est pas admise"]);
    }


?>