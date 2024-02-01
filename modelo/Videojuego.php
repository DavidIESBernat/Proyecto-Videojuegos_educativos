<?php
    class Videojuego {
        protected $videojuego_id;
        protected $nombre;
        protected $descripcion;
        protected $img;

        /**
         * Get the value of videojuego_id
         */ 
        public function getVideojuego_id()
        {
                return $this->videojuego_id;
        }

        /**
         * Set the value of videojuego_id
         *
         * @return  self
         */ 
        public function setVideojuego_id($videojuego_id)
        {
                $this->videojuego_id = $videojuego_id;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of img
         */ 
        public function getImg()
        {
                return $this->img;
        }

        /**
         * Set the value of img
         *
         * @return  self
         */ 
        public function setImg($img)
        {
                $this->img = $img;

                return $this;
        }
    }
?>