<?php
    class JuegosUsuarios {
        protected $juego_id;
        protected $usuario_id;

        /**
         * Get the value of juego_id
         */ 
        public function getJuego_id()
        {
                return $this->juego_id;
        }

        /**
         * Set the value of juego_id
         *
         * @return  self
         */ 
        public function setJuego_id($juego_id)
        {
                $this->juego_id = $juego_id;

                return $this;
        }

        /**
         * Get the value of usuario_id
         */ 
        public function getUsuario_id()
        {
                return $this->usuario_id;
        }

        /**
         * Set the value of usuario_id
         *
         * @return  self
         */ 
        public function setUsuario_id($usuario_id)
        {
                $this->usuario_id = $usuario_id;

                return $this;
        }
    }
?>