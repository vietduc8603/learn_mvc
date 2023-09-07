<?php
    class ServiceModel extends DB{
        public function getAllService(){
            $q = "SELECT * FROM service";
            return mysqli_query($this->connection, $q);
        }
    }
