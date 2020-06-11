<div class="container-fluid r-head">
    <div class="row justify-content-center">
        <!-- col-3 col-md-5 col-lg-3  -->
        <div class="col-sm-3">
            <img src="../public/images/logo-QuizzSA.png" alt="" class="img-logo">
        </div>
        <!-- col-9 col-sm-6 col-md-7 col-lg-9 -->
        <div class=" col-sm-9 text-desc">
            JOUEZ ET DEVENEZ INTELLIGENT !
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 bg-success p-user">
            <img src="../public/images/cbag.png" alt="" class="img-user">
        </div>
        <div class="col-sm-9 " >
            <!-- <div class="row bg-success" style="height:50%;">aa</div>
                    <div class="row bg-active"  style="height:50%;">fff</div> -->
            <?php
            if (isset($_GET['menu'])) {
                switch ($_GET['menu*']) {
                    case 'ajoutquest':
                        require_once("./pages/AjoutQuest.php");
                        break;

                    case 'listejoueurs':
                        require_once("./pages/admin.php");
                        break;

                    case 'ajoutadmin':
                        require_once("./pages/inscription.php");
                        break;
                    case 'listequest':
                        require_once("./pages/inscription.php");
                        break;
                }
            } else {
                // if (isset($_GET['statut']) && $_GET['statut']==="logout") {
                //     deconnexion();
                // }
                require_once("./pages/menu.php");
            }
            ?>


        </div>
    </div>
</div>