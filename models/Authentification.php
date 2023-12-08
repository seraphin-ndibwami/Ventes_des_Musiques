<?php

    class Authentification{



        static function login($email, $password){
            global $db;

            
            if($email !== "" && $password !== ""){

                $queryClient = $db->query("SELECT count(*) as nb1 FROM client where email ='".$email."' and password='".$password."' ");
                $queryMusicien = $db->query("SELECT count(*) as nb2 FROM musicien where email ='".$email."' and password='".$password."' ");
                
                $msg1=$queryClient->fetch();
                $msg2=$queryMusicien->fetch();

                $count1=$msg1['nb1'];
                $count2=$msg2['nb2'];

                if($count1==0 && $count2==1){
                    return array($email, "musicien");

                } else if($count1==1 && $count2==0){
                    return array($email, "client");
                } else {
                    return "donotmatch";
                }

            }
            
            // else {
            //     return false;
            // }

        }

    }

?>