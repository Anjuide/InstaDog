<?php

class Dog{
    private $id;
    private $nickname;
    private $birthday;
    private $picture;
    private $listRaces;
    private $userId;
    private $listArticles;

    function getId() { 
        return $this->id; 
    }

    function setNickname($nickname) { 
        $this->nickname = $nickname; 
    }
    function getNickname() { 
        return $this->nickname; 
    }

    function setBirthday($birthday) { 
        $this->birthday = $birthday; 
    }
    function getBirthday() { 
        return $this->birthday; 
    }

    function setPicture($picture) { 
        $this->picture = $picture; 
    }
    function getPicture() { 
        return $this->picture; 
    }

    function setListRaces($listRaces) { 
        $this->listRaces = $listRaces; 
    }
    function getListRaces() { 
        return $this->listRaces; 
    }

    function setUserId($userId) { 
        $this->userId = $userId; 
    }
    function getUserId() { 
        return $this->userId; 
    }

    function setListArticles($listArticles) { 
        $this->listArticles = $listArticles; 
    }
    function getListArticles() { 
        return $this->listArticles; 
    }
}


?>