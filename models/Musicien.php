<?php

    require_once 'Utilisateur.php';

    class Musicien extends Utilisateur {

        //Propre au musicien
        private $id_musician;
        private $musician_pseudo;
        private $musician_facebook;
        private $musician_instagram;
        private $musician_twitter;
        private $musician_official;
        private $musician_gender_music;


        //commun
        private $musician_nom;
        private $musician_prenom;
        private $musician_postnom;
        private $musician_email;
        private $musician_profile;
        private $musician_phone;
        private $musician_pays;
        private $musician_password;

        public function __construct($musician_pseudo, $musician_facebook, $musician_instagram, $musician_twitter, $musician_official, $musician_gender_music) {
            parent::__construct($this->nom, $this->prenom, $this->postnom, $this->email, $this->imageTitle, $this->phone, $this->pays, $this->password);

            $this->musician_pseudo = $musician_pseudo;
            $this->musician_facebook = $musician_facebook;
            $this->musician_instagram = $musician_instagram;
            $this->musician_twitter = $musician_twitter;
            $this->musician_official = $musician_official;
            $this->musician_gender_music = $musician_gender_music;

            $this->musician_nom = $this->nom;
            $this->musician_prenom = $this->prenom;
            $this->musician_postnom = $this->postnom;
            $this->musician_email = $this->email;
            $this->musician_profile = $this->imageTitle;
            $this->musician_phone = $this->phone;
            $this->musician_pays = $this->pays;
            $this->musician_password = $this->password;
        }

        public function getIdMusicien() {
            global $db;

            $requete = 'SELECT id_musicien FROM musicien WHERE musician_pseudo = ? AND musician_phone = ?';
            $statement = $db->prepare($requete);
            $execute = $statement->execute(array($this->getMusician_pseudo(),$this->getMusician_phone()));

            if ($execute) {
                if($data = $statement -> fetch()){
                    $id_musicien = $data['id_musicien'];
                    $this->setId_musician($id_musicien);
                    return $id_musicien;
                } else return null;
            } else return null;
        }
             

        

        // Getter et Setter pour id_musician

        // Getter et Setter pour id_musician
    public function setId_musician($id_musician) {
        $this->id_musician = $id_musician;
    }

    // Getter et Setter pour musician_pseudo
    public function getMusician_pseudo() {
        return $this->musician_pseudo;
    }

    public function setMusician_pseudo($musician_pseudo) {
        $this->musician_pseudo = $musician_pseudo;
    }

    // Getter et Setter pour musician_facebook
    public function getMusician_facebook() {
        return $this->musician_facebook;
    }

    public function setMusician_facebook($musician_facebook) {
        $this->musician_facebook = $musician_facebook;
    }

    // Getter et Setter pour musician_instagram
    public function getMusician_instagram() {
        return $this->musician_instagram;
    }

    public function setMusician_instagram($musician_instagram) {
        $this->musician_instagram = $musician_instagram;
    }

    // Getter et Setter pour musician_twitter
    public function getMusician_twitter() {
        return $this->musician_twitter;
    }

    public function setMusician_twitter($musician_twitter) {
        $this->musician_twitter = $musician_twitter;
    }

    // Getter et Setter pour musician_official
    public function getMusician_official() {
        return $this->musician_official;
    }

    public function setMusician_official($musician_official) {
        $this->musician_official = $musician_official;
    }

    // Getter et Setter pour musician_gender_music
    public function getMusician_gender_music() {
        return $this->musician_gender_music;
    }

    public function setMusician_gender_music($musician_gender_music) {
        $this->musician_gender_music = $musician_gender_music;
    }

    // Getter et Setter pour musician_nom
    public function getMusician_nom() {
        return $this->musician_nom;
    }

    public function setMusician_nom($musician_nom) {
        $this->musician_nom = $musician_nom;
    }

    // Getter et Setter pour musician_prenom
    public function getMusician_prenom() {
        return $this->musician_prenom;
    }

    public function setMusician_prenom($musician_prenom) {
        $this->musician_prenom = $musician_prenom;
    }

    // Getter et Setter pour musician_postnom
    public function getMusician_postnom() {
        return $this->musician_postnom;
    }

    public function setMusician_postnom($musician_postnom) {
        $this->musician_postnom = $musician_postnom;
    }

    // Getter et Setter pour musician_email
    public function getMusician_email() {
        return $this->musician_email;
    }

    public function setMusician_email($musician_email) {
        $this->musician_email = $musician_email;
    }

    // Getter et Setter pour musician_profile
    public function getMusician_profile() {
        return $this->musician_profile;
    }

    public function setMusician_profile($musician_profile) {
        $this->musician_profile = $musician_profile;
    }

    // Getter et Setter pour musician_phone
    public function getMusician_phone() {
        return $this->musician_phone;
    }

    public function setMusician_phone($musician_phone) {
        $this->musician_phone = $musician_phone;
    }

    // Getter et Setter pour musician_pays
    public function getMusician_pays() {
        return $this->musician_pays;
    }

    public function setMusician_pays($musician_pays) {
        $this->musician_pays = $musician_pays;
    }

    // Getter et Setter pour musician_password
    public function getMusician_password() {
        return $this->musician_password;
    }

    public function setMusician_password($musician_password) {
        $this->musician_password = $musician_password;
    }

}

    