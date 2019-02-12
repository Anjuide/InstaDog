<?php 
$title = "Ajouter Un Article";
include "header.php";
require('config.php');
$appli = new Connexion();

session_start();

$id = $_SESSION['userId'];
$picture = $_SESSION['picture'];





?>


<div class="container">
     <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-6 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Ajouter Un Article</h5>
                    <form method="post" action="connexion.php" class="form-group" >

                        <div class="input-group input-group-lg inp-articl">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Le Titre</span>

                            </div>
                            <input type="text" name= "titre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
             
                        <div class="card" style="width: 20rem;  margin:auto">
                        <?php echo   "<img src=\"$picture\" class=\"card-img-top\" alt=\"...\">"; ?>
                        </div>
                        <input type="file" name="file" class="form-control "  style="margin-top:20px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        <div class="form-group txtara">
                            <label for="exampleFormControlTextarea1">Artile</label>
                            <textarea class="form-control" name="describ" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>






<?php 
include "footer.php"
?>
