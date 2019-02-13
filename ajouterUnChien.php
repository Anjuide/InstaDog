<?php 
$title = "Ajouter Un Chien";
session_start();
include "header.php";
require('config.php');
$appli       = new Connexion();

$userId = $_SESSION['userId'];

?>
<div class="container">
     <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Ajouter Un Chien</h5>
                    <form method="post" enctype="multipart/form-data" class="form-signin" >
                        <div class="form-label-group">
                            <label for="inputPrenom">Nickenom</label>
                            <input type="text" id="inputPrenom" name="nickName" class="form-control" placeholder="NickeNom" required autofocus> 
                        </div>
                        <div class="form-label-group">
                            <label for="inputNom"></label>
                            <input type="Date" id="inputNom"  name="birthday" class="form-control" placeholder="Naissance" required> 
                        </div>
                        <div class="form-label-group">
                            <label for="inputPhoto">Entrez Le Ligne De Photo</label>
                            <input type="file" id="inputPhoto" name="file" class="form-control" placeholder="Photo" required>
                        </div>
  
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Race(s)</label>
                       </div>
                          <select class="custom-select" name = 'subject[]' id="inputGroupSelect01">
                          <option selected>Choisir...</option>
                          <?php $races = $appli->getAllRaces();
                          foreach  ($races  as  $race) {
                          $dogRace = $race->nameRace;

                          echo "<option value = '$dogRace' >$dogRace</option>";  
                          }  ?>
                           </select>
                       </div>
 

<!--

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" ffile
  </div>
  <select class="custom-select" id="ifile
    <option selected>Choisir...</optifile
    <option value="1">Race 1</option>file
    <option value="2">Race 2</option>file
    <option value="3">Race 3</option>
    <option value="3">Race 4</option>
    <option value="3">Race 5</option>
    <option value="3">Race 6</option>
    <option value="3">Race 7</option>
    <option value="3">Race 8</option>
  </select>
</div>  -->

 
                    <button class="btn btn-lg btn-primary btn-block text-uppercase btn-aj-ch"  type="submit" name="submit">Enregistrer</button>
                    </form>
                </div> 
            </div>
        </div>      
    </div>
</div>



<?php  

  if (isset($_POST['submit'])) {
	  $file = $_FILES['file'];
	
	  print_r($file);
	
	  $fileName    = $_FILES['file']['name'];
	  $fileTmpName = $_FILES['file']['tmp_name'];
	  $fileSize    = $_FILES['file']['size'];
	  $fileError   = $_FILES['file']['error'];
	  $fileType    = $_FILES['file']['type'];

	  $fileExt = explode('.',$fileName);
	  $fileActualExt = strtolower(end($fileExt));

	  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

	    if (in_array($fileActualExt, $allowed )) { 

		    if ($fileError === 0){

			    if ($fileSize < 1000000) {
				  $fileNameNew = uniqid('', true).".".$fileActualExt;
				  $fileDestination = 'images/'.$fileNameNew;
				  move_uploaded_file($fileTmpName, $fileDestination);
			  } else {
				  echo "Your File is Too big!";
			    }
		    } else {
			echo "There Was An Error Uploading your file!!!!";	
		    }

	    } else {

		echo "You Cannot Upload Files Of This Type";
	      }

          $nickName = $_POST['nickName'];
          $birthday = $_POST['birthday'];
          $picture  = $fileDestination;

          $appli->insertDog($nickName, $birthday, $picture, $userId);

          $dogId = $appli->getLastId();
      
          foreach ($_POST['subject'] as $subject){

        

?>






<?php 

?>






<?php raceDog = $subject;

?>






<?php  $subject;

?>






<?php 

?>






<?php 

?>






<?php 

?>






<?php 

?>






<?php 

?>






<?php 

?>






<?php 
include "footer.php"
?>