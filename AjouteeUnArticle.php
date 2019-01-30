<?php 
$title = "Ajouter Un Article";
include "header.php"
?>


<div class="container">
     <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-6 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Ajouter Un Article</h5>
                    <form class="form-group">

                        <div class="input-group input-group-lg inp-articl">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Le Titre</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
             
                        <div class="card" style="width: 18rem; col-lg-3; margin:auto">
                            <img src="images/D2.jpeg" class="card-img-top" alt="...">
                        </div>
                        <div class="form-group txtara">
                            <label for="exampleFormControlTextarea1">Artile</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
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
