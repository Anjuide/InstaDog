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
   
                        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Race(s)</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choisir...</option>
    <option value="1">Race 1</option>
    <option value="2">Race 2</option>
    <option value="3">Race 3</option>
    <option value="3">Race 4</option>
    <option value="3">Race 5</option>
    <option value="3">Race 6</option>
    <option value="3">Race 7</option>
    <option value="3">Race 8</option>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Race(s)</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choisir...</option>
    <option value="1">Race 1</option>
    <option value="2">Race 2</option>
    <option value="3">Race 3</option>
    <option value="3">Race 4</option>
    <option value="3">Race 5</option>
    <option value="3">Race 6</option>
    <option value="3">Race 7</option>
    <option value="3">Race 8</option>
  </select>
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