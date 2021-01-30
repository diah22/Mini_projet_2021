<?php
    class User
    {
        private $_username;
        private $_password;
        private $_role;
        private $_image;

        public function getUsername($username){
            return $this->_username;
        }

        public function getPassword($password){
            return $this->_username;
        }

        public function getRole($role){
            return $this->_role;
        }

        public function getImage($image){
            return $this->_username;
        }

        public function setUsername($username){
            $this->_username= $username;
        }

        public function setPassword($password){
            $this->_password= $password;
        }

        public function setRole($role){
            $this->_role= $role;
        }

        public function setImage($image){
            $this->_image= $image;
        }

    }
?>