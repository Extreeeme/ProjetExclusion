<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Contre l'exclusion</a>
    </div>

    <ul class="nav navbar-nav navbar-left">
      <li><a href="index.php?p=posts.blog">Blog</a></li>
      <li><a href="index.php?p=associations.index">Assoc</a></li>
      <li><a href="">Aide</a></li>
      <li><a href="?p=campagnes.index">Campagne</a></li>
      <li><a href="index.php?p=posts.allTestimonies">Témoignage</a></li>
      <li><a href="index.php?p=admin.posts.adminTestimony">Validation Témoignage ADMIN</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li><a href="index.php?p=users.login">Connexion</a></li>
    </ul>
  </div>
</nav>

<div class="container">

    <div class="starter-template" style="padding-top: 100px;">
        <?= $content; ?>
    </div>

</div><!-- /.container -->


</body>
</html>
