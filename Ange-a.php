<?php
    include "header.php";
?>
<div class="container">

<div class="row" style=" background-color:blue;" >

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

  <!--  <div class="col" style="width: 40rem;background-color:blue;">
        <span>Profil</span>
    </div> -->


    <div class="col">

        <div class="row">
            <div class="col">
                <a href="index.php">
                <div class="card" style="width: 18rem;margin-top:52px;">
                <img class="card-img-top" src="images/D1.jpeg" alt="Card image">
                    <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scopy Dooo</h4>
                  
                    </div>
                    </a>
                </div>
            </div>


            <div class="col">
                <div class="card" style="width: 18rem;margin-top:52px;">
                    <img class="card-img-top" src="images/D2.jpeg" alt="Card image">
                        <div class="card-img-overlay">
                        <h4 class="card-title dogyy">Scopy Dooo</h4>
                        <a href="#"></a>
                        </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col">
                <div class="card" style="width: 18rem;margin-top:52px;">
                <img class="card-img-top" src="images/D3.jpeg" alt="Card image">
                    <div class="card-img-overlay">
                    <h4 class="card-title dogyy">Scopy Dooo</h4>
                    <a href="#"></a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card" style="width: 18rem;margin-top:52px;">
                    <img class="card-img-top" src="images/D4.jpeg" alt="Card image">
                        <div class="card-img-overlay">
                        <h4 class="card-title dogyy">Scopy Dooo</h4>
                        <a href="#"></a>
                        </div>
                </div>
            </div>
             
        </div>



        <div class="row">
            <div class="col">
                <h1>Image 1</h1>
            </div>
            <div class="col">
                <h1>Image 2</h1>
            </div>
        </div>

      

    </div>
</div>
</div>>

<?php
    include "footer.php";
?>