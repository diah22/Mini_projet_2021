<?php

    class UserTransaction
    {
        private $_db;

        public function __construct($db){
            $this->setDb($db);
        }

        public function setDb($db){
            $this->_db= $db;
        }

        public function addUser(users $user){
            $req= $this->_db->prepare('INSERT INTO user(username, password, role, image) VALUES (:username, :password, :role, :image)');
            $req->execute(array('username'=> $user->getUsername(),
                                'password' =>$user -> getPassword(),
                                'role' => $user ->getRole(),
                                'image' => $user -> getImage()));
        }

        public function getAllUser(){
            $req= $this->_db->query('SELECT * FROM user');
            return $req;
        }
    }
?>