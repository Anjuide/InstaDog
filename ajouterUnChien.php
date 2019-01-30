<?php 
$title = "Ajouter Un Chien";
include "header.php"
?>
<div class="container">
     <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Ajouter Un Chien</h5>
                    <form class="form-signin">
                        <div class="form-label-group">
                            <label for="inputPrenom">Nickenom</label>
                            <input type="text" id="inputPrenom" class="form-control" placeholder="NickeNom" required autofocus> 
                        </div>
                        <div class="form-label-group">
                            <label for="inputNom"></label>
                            <input type="Date" id="inputNom" class="form-control" placeholder="Date" required> 
                        </div>
                        <div class="form-label-group">
                            <label for="inputPays">Entrez Le Ligne De Photo</label>
                            <input type="text" id="inputPays" class="form-control" placeholder="Photo" required>
                        </div>
   
                        <div class="custom-control custom-checkbox ch-aj-ch">
                            <input type="checkbox" class="custom-control-input" id="defaultInline1">
                            <label class="custom-control-label" for="defaultInline1">Race 1</label>
                        </div>

                        <div class="custom-control custom-checkbox ch-aj-ch ">
                            <input type="checkbox" class="custom-control-input" id="defaultInline2">
                            <label class="custom-control-label" for="defaultInline2">Race 2</label>
                        </div>

                        <div class="custom-control custom-checkbox ch-aj-ch ">
                            <input type="checkbox" class="custom-control-input" id="defaultInline3">
                            <label class="custom-control-label" for="defaultInline3">Race 3</label>
                        </div>

                        <div class="custom-control custom-checkbox ch-aj-ch ">
                            <input type="checkbox" class="custom-control-input" id="defaultInline4">
                            <label class="custom-control-label" for="defaultInline4">Race 4</label>
                        </div>

                        <div class="custom-control custom-checkbox ch-aj-ch">
                            <input type="checkbox" class="custom-control-input" id="defaultInline5">
                            <label class="custom-control-label" for="defaultInline5">Race 5</label>
                        </div>

                    <button class="btn btn-lg btn-primary btn-block text-uppercase btn-aj-ch" type="submit">Enregistrer</button>
                </div> 
            </div>
        </div>      
    </div>
</div>






<?php 
include "footer.php"
?>