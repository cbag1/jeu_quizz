<script>
  $(document).ready(function() {
    $("#ret").click(function() {
      $("#chargement").load("./pages/menu.php");
    });
  });
</script>
<div id="chargement">
  <div><a role="button" id="ret">Retour</a></div>
  <div>
    <form method="post">
      <label for="val_quest"> Question</label>
      <textarea name="val_quest" id="val_quest" cols="30" rows="2"></textarea>
      <label for="point_quest">Nbre de Points </label>
      <br>
      <input type="number" name="point_quest" id="point_quest">
      <br>
      <br>
      <select name="type_quest" id="type_quest">
        <option value="quest_simple">Question Simple</option>
        <option value="quest_multiple">Question Multiple</option>
        <option value="quest_texte">Question Texte</option>
      </select>

      <input type="button" id="ajout" value="+">
      <br>
      <div id="reponses"></div>
      <input type="submit" id="but_submit" value="Enregistrer"/>
    </form>
  </div>
</div>

<script>
  $(document).ready(function() {

    var nbRep = 0;
    var choix = "";
    $("#type_quest").change(function(e) {
      choix = $(this).children("option:selected").val();
      // nbRep = 0;
      $("#reponses").html("");
    });

    $("#ajout").click(function(e) {
      nbRep++;
      if (choix == "quest_simple") {
        $("#reponses").append(`<div id='row_${nbRep}'>
          <input type="text" id='rep_${nbRep}' />
          <input type="radio" id='${nbRep}' />
          </div>`);
      } else if (choix == "quest_multiple") {
        $("#reponses").append(`<div id='row_${nbRep}'>
          <input type="text" name='rep_${nbRep}' id='rep_${nbRep}' />
          <input type="checkbox" id='check[]' name='check' value='${nbRep}' />
          </div>`);
      } else if (choix == "quest_texte") {
        $("#reponses").append(`<div id='row_${nbRep}'>
          <input type="text" id='rep_${nbRep}'>
          </div>`);

      }
      // $("#reponses").append(`<div id='test'>
      //     <input type="text" id='rep_${test}'>

      //     </div>`);
    });

    $("#but_submit").click(function(e) {
      e.preventDefault();
      // var username = $("#user").val().trim();
      // var password = $("#pwd").val().trim();
      //alert(" Coole boy");
      var val=$("form").serialize();
      alert(val);
      
      // alert("Votre langage de programmation préféré est: " + langPref.join(", "));

      // if (username != "" && password != "") {
      //   $.ajax({
      //     url: './data/insertQuestion.php',
      //     type: 'POST',
      //     data: {
      //       username: username,
      //       password: password
      //     },
      //     success: function(response) {
      //       var msg = "";
      //       if (response == "error") {
      //         msg = "Invalid username and password!";
      //       } else {
      //         window.location = "index.php?lien=" + response;
      //       }
      //       $("#message").html(msg);
      //     }
      //   });
      // } else {
      //   alert('Champ Vide');
      // }
    });
  });
</script>