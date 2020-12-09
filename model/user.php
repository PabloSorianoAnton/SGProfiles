<?php 
    class User {
        private $id;
        private $nombre;
        private $email;
        private $passwd;
        private $status;
        private $profile;

        public function __construct($email, $passwd)
        {
            $this->email=$email;
            $this->passwd=$passwd;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
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
         * Get the value of passwd
         */ 
        public function getPasswd()
        {
                return $this->passwd;
        }

        /**
         * Set the value of passwd
         *
         * @return  self
         */ 
        public function setPasswd($passwd)
        {
                $this->passwd = $passwd;

                return $this;
        }

        /**
         * Get the value of status
         */ 
        public function getStatus()
        {
                return $this->status;
        }

        /**
         * Set the value of status
         *
         * @return  self
         */ 
        public function setStatus($status)
        {
                $this->status = $status;

                return $this;
        }

        /**
         * Get the value of profile
         */ 
        public function getProfile()
        {
                return $this->profile;
        }

        /**
         * Set the value of profile
         *
         * @return  self
         */ 
        public function setProfile($profile)
        {
                $this->profile = $profile;

                return $this;
        }
    }
?>