<?php

    class Playlist_music {

        private $id_playlist_music;
        private $id_playlist;
        private $id_music;


        public function __construct($id_playlist,$id_music){
            $this->id_playlist = $id_playlist;
            $this->id_music = $id_music;
        }


        static function addMusicToPlaylist($id_music_, $id_playlist_){
            global $db;

            $requete = "INSERT INTO playlist_music(id_playlist, id_music) VALUE(?, ?) ";
            $statement = $db->prepare($requete);
            $execute=$statement->execute(array($id_playlist_, $id_music_));

            return $resultat = $execute ? true : false;

        }

        static function deleteMusicToPlaylist($id_playlist_){
            global $db;

            // $requete = "UPDATE music set id_album = ? where id_music = ?";
            $requete = "DELETE FROM `playlist_music` WHERE id_playlist = ?";
            $statement = $db->prepare($requete);
            $execute=$statement->execute($id_playlist_);

            return $resultat = $execute ? true : false;

        }
















        /**
         * Set the value of id_playlist_music
         */
        public function setIdPlaylistMusic($id_playlist_music): self
        {
                $this->id_playlist_music = $id_playlist_music;

                return $this;
        }

        

        /**
         * Get the value of id_playlist
         */
        public function getIdPlaylist()
        {
                return $this->id_playlist;
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
         * Get the value of id_music
         */
        public function getIdMusic()
        {
                return $this->id_music;
        }

        /**
         * Set the value of id_music
         */
        public function setIdMusic($id_music): self
        {
                $this->id_music = $id_music;

                return $this;
        }
    }