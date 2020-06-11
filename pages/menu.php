<script>
  $(document).ready(function() {
    $("#cquest").click(function() {
      $("#chargement").load("./pages/CreerQuestions.php");
    });
    $("#lquest").click(function() {
      $("#chargement").load("./pages/test1.php");
    });
    $("#cadmin").click(function() {
      $("#chargement").load("./pages/test1.php");
    });
    $("#ljoueurs").click(function() {
      $("#chargement").load("./pages/test1.php");
    });
  });
</script>
<div id="chargement">
  <button id="cquest">Creer question</button>
  <button id="lquest">Liste questions</button>
  <button id="cadmin">Creer Admin</button>
  <button id="ljoueurs">Lister Joueurs</button>


</div>