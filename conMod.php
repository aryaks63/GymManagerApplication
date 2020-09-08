<?php

class DB{
    var $con;
    
    
    public function __construct() {
      $this->con = mysqli_connect("us-cdbr-east-02.cleardb.com", "b174b16fa4e6a7","c752f2e0","heroku_38be36a14111d56") or die(mysqli_error($this->con));
    }
    
    public function getConnection(){
        return $this->con;
    }
    
    public function __destruct() {
        mysqli_close($this->con);
    }
}




