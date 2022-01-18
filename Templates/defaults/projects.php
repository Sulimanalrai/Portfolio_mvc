<?php include_once "defaults/menu.php";  ?>
<!-- Projecten section start -->
 <section class="Projecten" id="Projecten">
        <div class="max-width">
            <h2 class="title" id="titleprojecten">Projecten</h2>
            <div class="serv-content">
                <!--Rij 1 van projecten-->
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="images/c.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Project C#: Hoger Lager</h5>
                              <p class="card-text">In de programmeertaal C# heb ik een applicatie gemaakt genaamd Hoger, Lager. <br>
                                De applicatie doet is een kaart spel<br>
                              <a href="https://github.com/Sulimanalrai/Hoger-lager" class="btn btn-dark">Ga naar GITHUB account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="images/html.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Project Html </h5>
                              <br>
                              In de programmeertaal Html heb ik mijn portfolio gemaakt  <br>
                              <p class="card-text"> <br>
                              <a href="https://github.com/ROCMondriaanTIN/project-portfolio-Sulimanalrai" class="btn btn-dark">Ga naar GITHUB account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="images/css.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Project Css: </h5>
                              In de programmeertaal Css heb ik mijn portfolio gemaakt <br>
                              <br>
                              <p class="card-text"> <br>
                              <a href="https://github.com/ROCMondriaanTIN/project-portfolio-Sulimanalrai" class="btn btn-dark">Ga naar GITHUB account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Rij 2 met projecten-->
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="images/js.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Project JavaScript:  Rekentool </h5>
                              <p class="card-text"> In de programmeertaal JavaScript heb ik een applicatie gemaakt genaamd Rekentool <br>
                                De applicatie doet rekent voeten naar meters met thema switcher <br>
                              <a href="https://github.com/ROCMondriaanTIN/sd20-js-periode3-eindopdrachten-s1-s4-Sulimanalrai/tree/sprint8" class="btn btn-dark">Ga naar GITHUB account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="images/bootstrap.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Project Bootstrap: </h5>
                              In de programmeertaal Bootstrap heb ik mijn portfolio gemaakt <br>
                              <br>
                              <p class="card-text"> <br>
                              <a href="https://github.com/ROCMondriaanTIN/project-portfolio-Sulimanalrai" class="btn btn-dark">Ga naar GITHUB account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="images/inter1.png" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Project interacion desigen: </h5>
                              In de project heb ik met mijn groep oplossing gemaakt voor MBO leerlingen. <br>
                              <br>
                              <p class="card-text"> <br>
                              <a href="https://github.com/ROCMondriaanTIN/sd20-kd5029-interactiondesign-code-wizards" class="btn btn-dark">Ga naar GITHUB account</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/reset.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <title><?= getTitle() ?></title>
</head>

                <?php
    foreach ($project as $data): ?>
   <div class='projects_section'>
   <div class='all_projects'>
   <div class='project'>
   <img src=" <?= $data->image ?> " width='300px'>
   <div class='project_01_presentation'>
   <h3><?= $data->name ?></h3>
   <p><?= $data->discription ?></p>
   <a href=" <?= $data->link ?> "> <input id='btn'  type='button' value='See'> </a>
   </div>
   </div>
   </div>
   </div>
   <?php endforeach; ?>

  <!-- Footer -->
  <?php include_once "defaults/footer.php";  ?>
