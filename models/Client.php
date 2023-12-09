<?php

    require_once 'Utilisateur.php';

    class Client extends Utilisateur {

        private $id_client;
        private $client_pseudo;
        private $client_gender;


        private $client_nom;
        private $client_prenom;
        private $client_postnom;
        private $client_email;
        private $client_profile;
        private $client_phone;
        private $client_pays;
        private $client_password;

        public function __construct($client_pseudo, $client_gender) {
            parent::__construct($this->nom, $this->prenom, $this->postnom, $this->email, $this->imageTitle, $this->phone, $this->pays, $this->password);

            $this->client_pseudo = $client_pseudo;
            $this->client_gender = $client_gender;

            $this->client_nom = $this->nom;
            $this->client_prenom = $this->prenom;
            $this->client_postnom = $this->postnom;
            $this->client_email = $this->email;
            $this->client_profile = $this->imageTitle;
            $this->client_phone = $this->phone;
            $this->client_pays = $this->pays;
            $this->client_password = $this->password;
        }

        public function getIdClient() {
            global $db;

            $requete = 'SELECT id_client FROM client WHERE client_pseudo = ? AND client_phone = ?';
            $statement = $db->prepare($requete);
            $execute = $statement->execute(array($this->getClient_pseudo(),$this->getClient_phone()));

            if ($execute) {
                if($data = $statement -> fetch()){
                    $id_client = $data['id_client'];
                    $this->setId_client($id_client);
                    return $id_client;
                } else return null;
            } else return null;
        }
        

        /**
         * Set the value of id_client
         *
         * @return  self
         */ 
        public function setId_client($id_client)
        {
                $this->id_client = $id_client;

                return $this;
        }

        

        /**
         * Get the value of client_pseudo
         */ 
        public function getClient_pseudo()
        {
                return $this->client_pseudo;
        }

        /**
         * Set the value of client_pseudo
         *
         * @return  self
         */ 
        public function setClient_pseudo($client_pseudo)
        {
                $this->client_pseudo = $client_pseudo;

                return $this;
        }

        

        /**
         * Get the value of client_gender
         */ 
        public function getClient_gender()
        {
                return $this->client_gender;
        }

        /**
         * Set the value of client_gender
         *
         * @return  self
         */ 
        public function setClient_gender($client_gender)
        {
                $this->client_gender = $client_gender;

                return $this;
        }

        

        /**
         * Get the value of client_nom
         */ 
        public function getClient_nom()
        {
                return $this->client_nom;
        }

        /**
         * Set the value of client_nom
         *
         * @return  self
         */ 
        public function setClient_nom($client_nom)
        {
                $this->client_nom = $client_nom;

                return $this;
        }

        

        /**
         * Get the value of client_prenom
         */ 
        public function getClient_prenom()
        {
                return $this->client_prenom;
        }

        /**
         * Set the value of client_prenom
         *
         * @return  self
         */ 
        public function setClient_prenom($client_prenom)
        {
                $this->client_prenom = $client_prenom;

                return $this;
        }

        

        /**
         * Get the value of client_postnom
         */ 
        public function getClient_postnom()
        {
                return $this->client_postnom;
        }

        /**
         * Set the value of client_postnom
         *
         * @return  self
         */ 
        public function setClient_postnom($client_postnom)
        {
                $this->client_postnom = $client_postnom;

                return $this;
        }

        

        /**
         * Get the value of client_email
         */ 
        public function getClient_email()
        {
                return $this->client_email;
        }

        /**
         * Set the value of client_email
         *
         * @return  self
         */ 
        public function setClient_email($client_email)
        {
                $this->client_email = $client_email;

                return $this;
        }

        

        /**
         * Get the value of client_profile
         */ 
        public function getClient_profile()
        {
                return $this->client_profile;
        }

        /**
         * Set the value of client_profile
         *
         * @return  self
         */ 
        public function setClient_profile($client_profile)
        {
                $this->client_profile = $client_profile;

                return $this;
        }

        

        /**
         * Get the value of client_phone
         */ 
        public function getClient_phone()
        {
                return $this->client_phone;
        }

        /**
         * Set the value of client_phone
         *
         * @return  self
         */ 
        public function setClient_phone($client_phone)
        {
                $this->client_phone = $client_phone;

                return $this;
        }

        

        /**
         * Get the value of client_pays
         */ 
        public function getClient_pays()
        {
                return $this->client_pays;
        }

        /**
         * Set the value of client_pays
         *
         * @return  self
         */ 
        public function setClient_pays($client_pays)
        {
                $this->client_pays = $client_pays;

                return $this;
        }

        

        /**
         * Get the value of client_password
         */ 
        public function getClient_password()
        {
                return $this->client_password;
        }

        /**
         * Set the value of client_password
         *
         * @return  self
         */ 
        public function setClient_password($client_password)
        {
                $this->client_password = $client_password;

                return $this;
        }
    }
    