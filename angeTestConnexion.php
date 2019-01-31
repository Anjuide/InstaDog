<?php
require_once 'angeConnect.php';
$appliBD = new Connexion();

// $appliBD->setRace("Rodweiller");
// $appliBD->setUserDog('ange.gnamba@gmail.com', 'word', '2019-01-08 05:21:24', 'Ange', 'Gnamba', 'Suisse', 'Genève');
// $dogId = $appliBD->Dog('anjuide', '2019-01-08', 'anjuide.jpg', '1');
// echo $dogId;
// $appliBD->setDogRace(1,4);
// $appliBD->setArticle('Mon Titre', 'anjuide.jpg', 'Mon premier texte pour mettre dans ma BDD','2019-01-08 05:21:24', '2');
// $appliBD->setComment('Mon premier titre', '2019-01-08 05:21:24', '1', '1');

/* $allRaces = $appliBD->getAllRaces ();
echo "<ul>";
foreach ($allRaces as $race){  
    echo "<li>" . $race->nameRace . "</li>";
}
echo "</ul>"; */

/* $allUsersDog = $appliBD->getAllUsersDog ();
echo "<ul>";
foreach ($allUsersDog as $userDog){  
    echo "<li>" . $userDog->email . "</li>";
    echo "<li>" . $userDog->pwd . "</li>";
    echo "<li>" . $userDog->lastConnectionDate . "</li>";
    echo "<li>" . $userDog->lastName . "</li>";
    echo "<li>" . $userDog->firstName . "</li>";
    echo "<li>" . $userDog->country . "</li>";
    echo "<li>" . $userDog->city . "</li>";
}
echo "</ul>"; */

/* $UserDog = $appliBD->getUserDog (38);
echo "<ul>";
foreach ($UserDog as $userDog){  
    echo "<li>" . $userDog->email . "</li>";
    echo "<li>" . $userDog->pwd . "</li>";
    echo "<li>" . $userDog->lastConnectionDate . "</li>";
    echo "<li>" . $userDog->lastName . "</li>";
    echo "<li>" . $userDog->firstName . "</li>";
    echo "<li>" . $userDog->country . "</li>";
    echo "<li>" . $userDog->city . "</li>";
}
echo "</ul>"; */

/* $allUsersDogs = $appliBD->getAllDog ();
echo "<ul>";
foreach ($allUsersDog as $dog){  
    echo "<li>" . $dog->nickName . "</li>";
    echo "<li>" . $dog->birthday . "</li>";
    echo "<li>" . $dog->picture . "</li>";
    echo "<li>" . $dog->userId . "</li>";
}
echo "</ul>"; */
/* 
$allUsersDog = $appliBD->getDog (1);
echo "<ul>";
foreach ($allUsersDog as $dog){  
    echo "<li>" . $dog->nickName . "</li>";
    echo "<li>" . $dog->birthday . "</li>";
    echo "<li>" . $dog->picture . "</li>";
    echo "<li>" . $dog->userId . "</li>";
}
echo "</ul>"; */ 

/* $allArticles = $appliBD->getAllArticles ();
echo "<ul>";
foreach ($allArticles as $article){  
    echo "<li>" . $article->title . "</li>";
    echo "<li>" . $article->picture . "</li>";
    echo "<li>" . $article->content . "</li>";
    echo "<li>" . $article->publicationDate . "</li>";
    echo "<li>" . $article->dogId . "</li>";
}
echo "</ul>"; */

/* $allArticles = $appliBD->getDogArticle (1);
echo "<ul>";
foreach ($allArticles as $article){  
    echo "<li>" . $article->title . "</li>";
    echo "<li>" . $article->picture . "</li>";
    echo "<li>" . $article->content . "</li>";
    echo "<li>" . $article->publicationDate . "</li>";
    echo "<li>" . $article->dogId . "</li>";
}
echo "</ul>"; */


/* $allComments = $appliBD->getAllComments ();
echo "<ul>";
foreach ($allComments as $comment){  
    echo "<li>" . $comment->comment . "</li>";
    echo "<li>" . $comment->publicationDate . "</li>";
    echo "<li>" . $comment->articleId . "</li>";
    echo "<li>" . $comment->userId . "</li>";
}
echo "</ul>"; */
/* $ArticleComment = $appliBD->getArticleComment (1);
echo "<ul>";
foreach ($ArticleComment as $comment){  
    echo "<li>" . $comment->comment . "</li>";
    echo "<li>" . $comment->publicationDate . "</li>";
    echo "<li>" . $comment->articleId . "</li>";
    echo "<li>" . $comment->userId . "</li>";
}
echo "</ul>"; */

/* $races = $appliBD->getDogRace (1);
echo "<ul>";
foreach ($races as $race){  
    echo "<li>" . $race->nameRace . "</li>";
}
echo "</ul>"; */

?>