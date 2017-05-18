<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Le Guide du Bon Homophobe</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Amaranth|Special+Elite" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/4f6a4b08efdad6bb29f9cc801f5c07e263b39907/devicon.min.css">
</head>
<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9&appId=421674024852694";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <div id="header">

    <div  id="navmobile" class="hidden">
      <div class="menu-icon" onclick="navMobile()">
          <span></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php?p=posts.index">Accueil</a></li>
        <li><a href="index.php?p=associations.help">Trouver de l'aide</a></li>
        <li><a href="index.php?p=posts.allTestimonies">Témoignages</a></li>
        <?php if (isset($_SESSION['auth'])): ?>
        <li><a href="index.php?p=admin.posts.adminTestimony">Validation Témoignage ADMIN</a></li>
        <li><a href="index.php?p=admin.posts.blog">Ajout d'article</a></li>
          
        <?php endif ?>
        <li><a href="index.php?p=posts.campagne">La Campagne</a></li>
        <li><a href="index.php?p=posts.blog">Blog</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><?= $_SESSION['connect']?></li>
      </ul>
    </div>

    <img src="img/logo.png" alt="LGBH" id="logo">
  </div>
  <div id="sous-header"></div>
  <div id="content">

        <?= $content; ?>

  </div>
  <div id="footer">
    <div id="plan-site">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php?p=posts.index">Accueil</a></li>
        <li><a href="index.php?p=associations.help">Trouver de l'aide</a></li>
        <li><a href="index.php?p=posts.allTestimonies">Témoignages</a></li>
        <!-- <li><a href="index.php?p=admin.posts.adminTestimony">Validation Témoignage ADMIN</a></li> -->
        <li><a href="index.php?p=posts.campagne">La Campagne</a></li>
        <li><a href="index.php?p=posts.blog">Blog</a></li>
      </ul>
    </div>
    <h5>Crée par LaFabrik du Numérique | Copyright @ 2017 La Fabrik</h5>
    <div id="icone-rs">
      <i class="devicon-facebook-plain"></i>
      <i class="devicon-twitter-plain"></i>
    </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
