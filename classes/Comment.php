<?php
class Comment{
    private $id;
    private $comment;
    private $publicationDate;
    private $articleId;
    private $userId;

    // function __set($name,$value){ };

    function getId() {
        return $this->id; 
    }

    function setComment($comment) { 
        $this->comment = $comment; 
    }
    function getComment() { 
        return $this->comment; 
    }

    function setPublicationDate($publicationDate) { 
        $this->publicationDate = $publicationDate; 
    }
    function getPublicationDate() { 
        return $this->publicationDate; 
    }

    function setArticleId($articleId) { 
        $this->articleId = $articleId; 
    }
    function getArticleId() { 
        return $this->articleId; 
    }

    function setUserId($userId) { 
        $this->userId = $userId; 
    }
    function getUserId() { 
        return $this->userId; 
    }

}


?>