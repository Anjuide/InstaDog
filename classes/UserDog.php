<?php

class UserDog{
    private $id;
    private $email;
    private $pwd;
    private $lastConnectionDate;
    private $lastName;
    private $firstName;
    private $country;
    private $city;
    private $listDogs;

    function getId() { 
        return $this->id; 
    }

    function setEmail($email) { 
        $this->email = $email; 
    }
    function getEmail() { 
        return $this->email; 
    }

    function setPwd($pwd) { 
        $this->pwd = $pwd; 
    }
    function getPwd() { 
        return $this->pwd;
    }

    function setLastConnectionDate($lastConnectionDate) { 
        $this->lastConnectionDate = $lastConnectionDate; 
    }
    function getLastConnectionDate() { 
        return $this->lastConnectionDate; 
    }

    function setLastName($lastName) { 
        $this->lastName = $lastName; 
    }
    function getLastName() { 
        return $this->lastName; 
    }

    function setFirstName($firstName) { 
        $this->firstName = $firstName; 
    }
    function getFirstName() { 
        return $this->firstName; 
    }

    function setCountry($country) { 
        $this->country = $country; 
    }
    function getCountry() { 
        return $this->country; 
    }

    function setCity($city) { 
        $this->city = $city; 
    }
    function getCity() { 
        return $this->city; 
    }

    function setListDogs($listDogs) { 
        $this->listDogs = $listDogs; 
    }
    function getListDogs() { 
        return $this->listDogs; 
    }
}


?>