<?php
    class dichvukhachhang extends Controller{
        public function  start(){
            $this->view("defaultLayout", [
                "container"=> "dichvukhachhang"
            ]);
        }
    }
