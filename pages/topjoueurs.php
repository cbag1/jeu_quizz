<script>
    $(document).ready(function() {
        $("#ret").click(function() {
            $("#chargement").load("./pages/jeux.php");
        });
    });
</script>
<div id="affichage">
    <div><a role="button" id="ret">Retour</a></div>
    <?php
    require_once('../data/connexion.php'); // Connexion à la base de données
    $req = $conn->query("SELECT id,nom,login,valeur FROM users,score where role='joueur' and users.id=score.id_joueur ORDER BY score.valeur DESC LIMIT 5 ");
    $req->execute();
    echo "<table class='table table-hover table-bordered'>";
    echo ' <thead>
         <tr>
        <th>Login</th>
        <th>Nom</th>
        <th>Score</th>
      </tr>
    </thead>
    <tbody>';
    while ($data = $req->fetch()) {
        echo '<tr>';
        echo "<td>" . $data['login'] . "</td>";
        echo "<td>" . $data['nom'] . "</td>";
        echo "<td>" . $data['valeur'] . "</td>";

        echo '</tr>';
    }
    echo '</tbody></table>';
    ?>


</div>

<!-- <script>
    $(".modif").click(function(e){
        e.preventDefault();
        // alert($(this).val());
        // $("#chargement").load("./pages/menu.php");
        
    })
</script> -->