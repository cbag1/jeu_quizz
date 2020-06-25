<script>
  $(document).ready(function() {
    $("#jouer").click(function() {
      $("#chargement").load("./pages/jouer.php");
    });
    $("#ljoueurs").click(function() {
      $("#chargement").load("./pages/topjoueurs.php");
    });
  });
</script>
<div id="chargement" class=" " style="height:400px;">
  <div class="container  w-75 h-50 mt-5">
    <div class="row h-100 justify-content-center ">

      <div class="w-50 h-100 ">
        <button class="btn btn-success w-75 h-75 " id="jouer">
          <svg class="bi bi-list-task float-left" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
            <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
          </svg>
          <h2> Jouer une partie</h2>
        </button>
      </div>

    </div>
    <div class="row h-100 justify-content-center">

      <div class="w-50 h-100">
        <button class="btn btn-warning w-75 h-75" id="ljoueurs">
          <svg class="bi bi-list-task float-left" width="6em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.25 6.033h1.32c0-.781.458-1.384 1.36-1.384.685 0 1.313.343 1.313 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.007.463h1.307v-.355c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.326 0-2.786.647-2.754 2.533zm1.562 5.516c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
          </svg>

          <h2 > TOP 5 JOUEURS </h2>
        </button>
      </div>

    </div>

  </div>
</div>