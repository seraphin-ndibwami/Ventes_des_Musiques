<?php

    class Album{

        private $id_album;
        private $album_name;
        private $album_date;
        private $album_image;

        public function __construct($album_name, $album_date, $album_image){

            $this->album_name = $album_name;
            $this->album_date = $album_date;
            $this->album_image = $album_image;

        }


        public function getIdAlbum() {
            global $db;

            $requete = 'SELECT id_album FROM album WHERE album_name = ? AND album_date = ?';
            $statement = $db->prepare($requete);
            $execute = $statement->execute(array($this->getAlbum_name(),$this->getAlbum_date()));

            if ($execute) {
                if($data = $statement -> fetch()){
                    $id_album = $data['id_album'];
                    $this->setId_album($id_album);
                    return $id_album;
                } else return null;
            } else return null;
        }



        /**
         * Set the value of id_album
         *
         * @return  self
         */ 
        public function setId_album($id_album)
        {
                $this->id_album = $id_album;

                return $this;
        }

        

        /**
         * Get the value of album_name
         */ 
        public function getAlbum_name()
        {
                return $this->album_name;
        }

        /**
         * Set the value of album_name
         *
         * @return  self
         */ 
        public function setAlbum_name($album_name)
        {
                $this->album_name = $album_name;

                return $this;
        }

        

        /**
         * Get the value of album_date
         */ 
        public function getAlbum_date()
        {
                return $this->album_date;
        }

        /**
         * Set the value of album_date
         *
         * @return  self
         */ 
        public function setAlbum_date($album_date)
        {
                $this->album_date = $album_date;

                return $this;
        }

        

        /**
         * Get the value of album_image
         */ 
        public function getAlbum_image()
        {
                return $this->album_image;
        }

        /**
         * Set the value of album_image
         *
         * @return  self
         */ 
        public function setAlbum_image($album_image)
        {
                $this->album_image = $album_image;

                return $this;
        }

    }
    