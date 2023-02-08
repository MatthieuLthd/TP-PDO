<?php include "header.php";
?>


<div class="container mt-5">

    <form action="valideAjoutNationalite.php" method="post">
        <div class="form-group">
            <label for="libelle" > Libellé </label>
            <input type="text" class='form-control' id="libelle" placehoder="Saisir le libellé" name="libelle">
        </div>
        <div class="row">
            <div class="col"> <a href="listeNationalites.php" class="btn btn-warning">Revenir 4 la liste</a> </div>
            <div class="col"><button type="submit" class="btn btn-success"> Ajouter </button> </div>
        </div>
    </form>

    
</div>

<?php include "footer.php";
?>