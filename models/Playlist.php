<?php

    class Playlist {

        private $id_playlist;
        private $playlist_name;
        private $id_client;


        public function __construct($playlist_name,$id_client){
            $this->playlist_name = $playlist_name;
            $this->id_client = $id_client;
        }

        public function getIdPlaylist() {
            global $db;

            $requete = 'SELECT id_playlist FROM playlist WHERE playlist_name = ? AND id_client = ?';
            $statement = $db->prepare($requete);
            $execute = $statement->execute(array($this->getPlaylistName(),$this->getIdClient()));

            if ($execute) {
                if($data = $statement -> fetch()){
                    $id_playlist = $data['id_playlist'];
                    $this->setIdPlaylist($id_playlist);
                    return $id_playlist;
                } else return null;
            } else return null;
        }

        static function getPlaylists(){
            global $db;
            $requete = ' SELECT * FROM playlist ';
            $statement = $db->prepare($requete);
            $execute = $statement->execute();

            $playlists=[];

            if ($execute) {
                    while ($data = $statement -> fetch()) {
                        $playlist = new Playlist($data['playlist_name'], $data['id_client']);
                    array_push($playlists,$playlist);
                    }
                    return $playlist;
            } else return [];
        }


        static function getPlaylistById($id){
            global $db;
            $requete = 'SELECT * FROM playlist WHERE id = ? ';
            $statement = $db->prepare($requete);
            $execute = $statement->execute(array($id));
            
            if ($execute) {
                if($data = $statement -> fetch()){
                    $playlist = new Playlist($data['playlist_name'], $data['id_client']);
                    return $playlist;
                } else return null;
            } else return null;
        }










        /**
         * Set the value of id_playlist
         */
        public function setIdPlaylist($id_playlist): self
        {
                $this->id_playlist = $id_playlist;

                return $this;
        }

        /**
         * Get the value of playlist_name
         */
        public function getPlaylistName()
        {
                return $this->playlist_name;
        }

        /**
         * Set the value of playlist_name
         */
        public function setPlaylistName($playlist_name): self
        {
                $this->playlist_name = $playlist_name;

                return $this;
        }

        /**
         * Get the value of id_client
         */
        public function getIdClient()
        {
                return $this->id_client;
        }

        /**
         * Set the value of id_client
         */
        public function setIdClient($id_client): self
        {
                $this->id_client = $id_client;

                return $this;
        }

    }