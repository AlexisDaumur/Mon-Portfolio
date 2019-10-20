<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="style.css" rel="stylesheet" media="all" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Arizonia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Portfolio | Alexis Daumur</title>
  </head>
  <body>

    <?php require_once 'menu.php'; ?>     <!--MENU-->

    <section id="menu">
      <div class="mestitres">
        <h1> < Alexis Daumur /> </h1>
        <h2>Développeur Web Junior</h2>
      </div>
    </section>


    <section id="s1">      <!--SECTION 1 BIOGRAPHIE-->
      <div class="divapropostext">
        <p id="apropos">À propos de moi :</p>
        <p>Je suis Alexis Daumur et je suis actuellement en formation dans une fabrique Simplon à
          Clermont-Ferrand pour devenir développeur web fullstack.</p>
          <br>
        <p>Sur ce Portfolio, vous allez trouver mes compétences, mes projets réalisés durant ma formation et mes contacts.</p>
      </div>
      <div class="aproposimg">
        <img class="pdp" src="img/pdp2.jpg" alt="">
      </div>



    </section>

    <section id="s2">      <!--SECTION 2 COMPÉTENCES-->
      <div class="divmescompetences">
        <p id="apropos">Mes compétences :</p>
        <div class="imagesCompétences">
          <img src="./img/html.png" alt="">
          <img src="./img/CSS.png" alt="">
          <img src="./img/js.png" alt="">
          <img src="./img/php.png" alt="">
          <img src="./img/mysql.png" alt="">
          <img src="./img/wp.png" alt="">
        </div>
        <div class="">
          <p>Actuellement encore en formations mon niveau de compétences n'est
            pas évaluable, je les considères donc comme étant "junior"</p>
        </div>
      </div>
    </section>

    <section id="s3">      <!--SECTION 3 PROJETS-->
      <div class="div2">
        <p id="apropos">Mes projets :</p>
        <p></p>
        <div class="imageProjects">
          <a target="_blank" href="https://github.com/Frank-thomas63/Projet2">
            <img class="hoverproject" src="img/landingpage.png" alt="">
          </a>
          <a target="_blank" href="https://github.com/AlexisDaumur/Projet6_Site_Simplon_WordPress">
            <img class="hoverproject" src="img/wordpress.png" alt="">
          </a>
          <a href="#">
            <img class="hoverproject" src="img/menuBurger.png" alt="">
          </a>
          <a href="#">
            <img class="hoverproject" src="img/OneZero.png" alt="">
          </a>


        </div>
      </div>
    </section>

    <section id="s4">      <!--SECTION 4 CONTACT-->
      <div class="div1">
        <p id="apropos">Me contacter :</p>
        <p></p>
      </div>
    </section>



  </body>
  <footer id="s5">salut</footer>
</html>
