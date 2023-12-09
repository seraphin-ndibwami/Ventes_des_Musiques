<?php

    class Music{
        
        private $id_music; //PK
        private $id_album; //FK
        private $id_musicien; //FK
        private $music_title;
        private $music_path;
        private $extrac_path;
        private $music_gender;
        private $music_format;
        private $music_type;
        private $back_image;
        private $duration;
        private $music_size;

        public function __construct($id_album, $id_musicien, $music_title, $music_path, $extrac_path, $music_gender,
                                    $music_format, $music_type, $back_image, $duration, $music_size){
            $this->id_album = $id_album;
            $this->id_musicien = $id_musicien;
            $this->music_title = $music_title;
            $this->music_path = $music_path;
            $this->extrac_path = $extrac_path;
            $this->music_gender = $music_gender;
            $this->music_format = $music_format;
            $this->music_type = $music_type;
            $this->back_image = $back_image;
            $this->duration = $duration;
            $this->music_size = $music_size;
        }

        public function getIdMusic() {
            global $db;

            $requete = 'SELECT id_music FROM music WHERE music_title = ? AND id_musicien = ?';
            $statement = $db->prepare($requete);
            $execute = $statement->execute(array($this->getMusic_title(),$this->getId_musicien()));

            if ($execute) {
                if($data = $statement -> fetch()){
                    $id_music = $data['id_music'];
                    $this->setId_music($id_music);
                    return $id_music;
                } else return null;
            } else return null;
        }



        



        /**
         * Get the value of id_album
         */ 
        public function getId_album()
        {
                return $this->id_album;
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
         * Get the value of id_musicien
         */ 
        public function getId_musicien()
        {
                return $this->id_musicien;
        }

        /**
         * Set the value of id_musicien
         *
         * @return  self
         */ 
        public function setId_musicien($id_musicien)
        {
                $this->id_musicien = $id_musicien;

                return $this;
        }

        /**
         * Get the value of music_title
         */ 
        public function getMusic_title()
        {
                return $this->music_title;
        }

        /**
         * Set the value of music_title
         *
         * @return  self
         */ 
        public function setMusic_title($music_title)
        {
                $this->music_title = $music_title;

                return $this;
        }

        

        /**
         * Get the value of music_path
         */ 
        public function getMusic_path()
        {
                return $this->music_path;
        }

        /**
         * Set the value of music_path
         *
         * @return  self
         */ 
        public function setMusic_path($music_path)
        {
                $this->music_path = $music_path;

                return $this;
        }

        

        /**
         * Get the value of extrac_path
         */ 
        public function getExtrac_path()
        {
                return $this->extrac_path;
        }

        /**
         * Set the value of extrac_path
         *
         * @return  self
         */ 
        public function setExtrac_path($extrac_path)
        {
                $this->extrac_path = $extrac_path;

                return $this;
        }

        

        /**
         * Get the value of music_gender
         */ 
        public function getMusic_gender()
        {
                return $this->music_gender;
        }

        /**
         * Set the value of music_gender
         *
         * @return  self
         */ 
        public function setMusic_gender($music_gender)
        {
                $this->music_gender = $music_gender;

                return $this;
        }

        

        /**
         * Get the value of music_format
         */ 
        public function getMusic_format()
        {
                return $this->music_format;
        }

        /**
         * Set the value of music_format
         *
         * @return  self
         */ 
        public function setMusic_format($music_format)
        {
                $this->music_format = $music_format;

                return $this;
        }

        /**
         * Get the value of music_type
         */ 
        public function getMusic_type()
        {
                return $this->music_type;
        }

        /**
         * Set the value of music_type
         *
         * @return  self
         */ 
        public function setMusic_type($music_type)
        {
                $this->music_type = $music_type;

                return $this;
        }

        /**
         * Get the value of back_image
         */ 
        public function getBack_image()
        {
                return $this->back_image;
        }

        /**
         * Set the value of back_image
         *
         * @return  self
         */ 
        public function setBack_image($back_image)
        {
                $this->back_image = $back_image;

                return $this;
        }

        

        /**
         * Get the value of duration
         */ 
        public function getDuration()
        {
                return $this->duration;
        }

        /**
         * Set the value of duration
         *
         * @return  self
         */ 
        public function setDuration($duration)
        {
                $this->duration = $duration;

                return $this;
        }

        

        /**
         * Get the value of music_size
         */ 
        public function getMusic_size()
        {
                return $this->music_size;
        }

        /**
         * Set the value of music_size
         *
         * @return  self
         */ 
        public function setMusic_size($music_size)
        {
                $this->music_size = $music_size;

                return $this;
        }

        /**
         * Set the value of id_music
         *
         * @return  self
         */ 
        public function setId_music($id_music)
        {
                $this->id_music = $id_music;

                return $this;
        }
    }