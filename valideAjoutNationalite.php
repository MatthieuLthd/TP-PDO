<?php include "header.php";
include "connexionPdo.php";
$libelle = $_POST['libelle'];

$req=$monPdo->prepare("INSERT INTO nationalite(libelle) VALUES(:libelle)");
$req = $monPdo->prepare("SELECT * FROM nationalite");
$req->bindParam(':libelle', $libelle);
$nb = $req->execute();


echo '<div class="container mt-5">';
echo '<div class="row">
    <div class="col mt-5">';

if($nb == 1) {
    echo '<div class="alert alert-success" role="alert">
    La nationalité a bien été ajoutée
    </div> ';

}else{
    echo ' <div class="alert alert-warning" role="alert">
    La nationalité n\'a pas été ajoutée !
    </div> ';

}
?>
</div>
</div>
    <a href="listeNationalites.php" class="btn btn-primary">Revenir à la liste des nationalités</a>
    </div>



</div>


<?php include "footer.php";
?>