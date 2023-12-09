<?php

    abstract class Utilisateur {

        protected $nom;
        protected $prenom;
        protected $postnom;
        protected $email;
        protected $imageTitle;
        protected $phone;
        protected $pays;
        protected $password;


        public function __construct($nom, $prenom, $postnom, $email, $imageTitle, $phone, $pays, $password){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->postnom = $postnom;
            $this->email = $email;
            $this->imageTitle = $imageTitle;
            $this->phone = $phone;
            $this->pays = $pays;
            $this->password = $password;
        }


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

        }


        // abstract function creeCompte();
        // abstract function sourceAUnAbonnement();
        // abstract function changerAbonnement();
        // abstract function modifierIdentifiants();
        // abstract function receVoirNotifications();
        // abstract function recupererMotDePasse();
        // abstract function faireDesRecherches();
        // abstract function signalerMusique();
        // abstract function suivreMusicien();
        // abstract function creerUnePlayList();
        // abstract function noterDesMusiques();
        // abstract function streamerDesMusiques();
        // abstract function avoirListeFavorie();
        // abstract function chargerDesMusiques(); //only for musicien
        // abstract function creeUnAlbum(); //only for musicien

        
 

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        

        /**
         * Get the value of postnom
         */ 
        public function getPostnom()
        {
                return $this->postnom;
        }

        /**
         * Set the value of postnom
         *
         * @return  self
         */ 
        public function setPostnom($postnom)
        {
                $this->postnom = $postnom;

                return $this;
        }

        

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        

        /**
         * Get the value of imageTitle
         */ 
        public function getImageTitle()
        {
                return $this->imageTitle;
        }

        /**
         * Set the value of imageTitle
         *
         * @return  self
         */ 
        public function setImageTitle($imageTitle)
        {
                $this->imageTitle = $imageTitle;

                return $this;
        }

        

        /**
         * Get the value of phone
         */ 
        public function getPhone()
        {
                return $this->phone;
        }

        /**
         * Set the value of phone
         *
         * @return  self
         */ 
        public function setPhone($phone)
        {
                $this->phone = $phone;

                return $this;
        }

        

        /**
         * Get the value of pays
         */ 
        public function getPays()
        {
                return $this->pays;
        }

        /**
         * Set the value of pays
         *
         * @return  self
         */ 
        public function setPays($pays)
        {
                $this->pays = $pays;

                return $this;
        }

        

        /**
         * Get the value of passWord
         */ 
        public function getPassWord()
        {
                return $this->passWord;
        }

        /**
         * Set the value of passWord
         *
         * @return  self
         */ 
        public function setPassWord($passWord)
        {
                $this->passWord = $passWord;

                return $this;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }