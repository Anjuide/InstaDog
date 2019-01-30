<?php 
$title = "Profil de l'utilisateur";
include "header.php"
?>
<div class="container">
<aside>
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 ">
            <div class="card card-signin my-5">
                <div class="card-body">
                <h5 class="card-title text-center">Mon profil</h5>
                <form class="form-signin">
                <div class="form-label-group">
                <label for="inputPrenom">Prénom</label>
                <input type="text" id="inputPrenom" class="form-control" placeholder="Prénom" required autofocus> 
                </div>
                <div class="form-label-group">
                <label for="inputNom">Nom</label>
                <input type="text" id="inputNom" class="form-control" placeholder="Nom" required> 
                </div>
                <div class="form-label-group">
                <label for="inputPays">Pays</label>
                <input type="text" id="inputPays" class="form-control" placeholder="Pays" required>
                </div>
                <div class="form-label-group">
                <label for="inputVille">Ville</label>
                <input type="text" id="inputVille" class="form-control" placeholder="Ville" required>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Mofifier</button>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enregistrer</button>
                </div>
            </div>      
        </div>
</aside>
        <div class="card" style="width: 20rem; col-lg-3">
            <img src="images/D1.jpeg" class="card-img-top" alt="...">
        </div>
        <div class="card" style="width: 20rem; col-lg-3">
            <img src="images/D2.jpeg" class="card-img-top" alt="...">
        </div>
        <div class="card" style="width: 20rem; col-lg-3">
            <img src="images/D3.jpeg" class="card-img-top" alt="...">
        </div>
        <div class="card" style="width: 20rem; col-lg-3">
            <img src="images/D4.jpeg" class="card-img-top" alt="...">
        </div>

    </div>
</div>


<?php 
include "footer.php"
?>
