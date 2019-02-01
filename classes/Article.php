<?php
class Article{
    private $id;
    private $title;
    private $picture;
    private $content;
    private $publicationDate;
    private $dogId;
    private $listComments;

    function getId() { 
        return $this->id; 
    }

    function setTitle($title) { 
        $this->title = $title; 
    }
    function getTitle() { 
        return $this->title; 
    }

    function setPicture($picture) { 
        $this->picture = $picture; 
    }
    function getPicture() { 
        return $this->picture; 
    }

    function setContent($content) { 
        $this->content = $content; 
    }
    function getContent() { 
        return $this->content; 
    }

    function setPublicationDate($publicationDate) { 
        $this->publicationDate = $publicationDate; 
    }
    function getPublicationDate() { 
        return $this->publicationDate; 
    }

    function setDogId($dogId) { 
        $this->dogId = $dogId; 
    }
    function getDogId() { 
        return $this->dogId; 
    }

    function setListComments($listComments) { 
        $this->listComments = $listComments; 
    }
    function getListComments() { 
        return $this->listComments; 
    }

}

?>