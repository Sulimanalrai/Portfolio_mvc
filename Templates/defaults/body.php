<body>
   
    <!-- home section start -->
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Suliman Alrai</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <img src="images/ik.jpg" width="25%" alt="ik">
            </div>
          </div>
      </div>
    </section>
    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Suliman Alrai <span class="typing-2"></span></div>
                    <p>Ik ben Suliman Alrai en ik ben 18 jaar oud. Ik volg nu Software Developer Niveau 4 opleiding op het ROC Mondriaan. Mijn hobbies zijn Lezen, Gamen, sporten en films kijken.  </p>
                </div>
            </div>
        </div>
    </section>
 
     <!-- projecten section start -->

    <section class="proj" id="proj">
        <div class="max-width">
            <div id='proj' class='project-img text-center'>
            <h2 class="title" id= "titleCv">PROJECTEN</h2>
            <div class="about-content">
    <?php


$r = getProject1();
// var_dump($r);

echo "<div class='projecten-con'>";

foreach ($r as $data) {

  ///////////////////////
  echo "<div class='projects_section'>";
  echo "<div class='all_projects'>";
  echo "<div class='project'>";
  echo "<img src=" . $data->image . " width='300px'>";
  echo "<div class='project_01_presentation'>";
  echo "<h3>" . $data->name . "</h3>";
  echo "<p>" . $data->discription . "</p>";
  echo "<a href=" . $data->link . "> <input id='btn'  type='button' value='See'> </a>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}

echo "</div>";

?>
</div>
</div>
</section>
   
                 <!-- Vaardigheden section start -->
     <section class="skills" id="skills">
        <div class="container">
            <div class="row">
            <div class="max-width">
                <h2 class="title">Mijn Vaardigheden</h2>
                <div class="skills-content">
                    <div class="column left">
                        <div class="text">Mijn creatieve vaardigheden en ervaringen.</div>
                        <p>Momenteel heb ik niet genoeg programmeer ervaring, de reden is dat ik in mijn tweede jaar programmeertalen gebruik zoals HTML, Css, C#, Js, Bootstrap, etc.</p>
                    </div>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>HTML</span>
                            </div>
                            <div class="line html"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>CSS</span>
                            </div>
                            <div class="line Bootstrap"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JavaScript</span>
                            </div>
                            <div class="line js"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>C#</span>
                            </div>
                            <div class="line Bootstrap"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Bootstrap</span>
                            </div>
                            <div class="line Bootstrap"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>PHP</span>
                            </div>
                            <div class="line Bootstrap"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Database</span>
                            </div>
                            <div class="line Bootstrap"></div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </section>
    <!-- CV section start -->
    <section class="CV" id="CV">
        <div class="max-width">
            <h2 class="title" id= "titleCv">CV</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/suliman.jpg" width="30%" alt="ik">
                    <img src="images/suli.jpg" width="30%" alt="ik">
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </section>


    


   
