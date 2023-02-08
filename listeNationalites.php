<?php include "header.php";
include "connexionPdo.php";
$req = $monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites = $req->fetchAll();
?>


<div class="container mt-5">

    <div class="row pt-3">
            <div class="col-9"><h2>Listes des nationalités</h2></div>
            <div class="col-3"><a href="formAjoutNationalite.php" class="btn btn-succes"><i class="fas fa-plus-circle"></i>Créer une nationalité</a></div>
        
    </div>

    <table class="table table-striped">
    <thead>
        <tr class="d-flex">
        <th scope="col" class="col-md-2">Numéro</th>
        <th scope="col" class="col-md-8">Libellé</th>
        <th scope="col" class="col-md-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($lesNationalites as $nationalite){
            echo "<tr class='d-flex'>";
            echo "<td class='col-md-2' >$nationalite->num</td>";
            echo "<td class='col-md-8' >$nationalite->libelle</td>";
            echo "<td class='col-md-2'>
                <a href='' class='btn btn-info'><i class='fas fa-pen'></i></a>
                <a href='' class ='btn btn-warning'><i class ='far fa-trash-alt'></i></a>
            </td>";
            echo "</tr>";
        }
        ?>

        
    </tbody>
    </table>
</div>

<?php include "footer.php";
?>