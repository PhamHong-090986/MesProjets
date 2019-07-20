<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.0/d3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <title><?php $this->titre = 'Billet simple pour l\'Alaska'; ?></title>
</head>
<body>
<div class="row">
    <section class="col-sm-6">
<h1><i>Billet simple pour l'Alaska<i></h1>

<p>
  Afin de vous remercier de ces nombreuses années à me suivre.<br>
  J'ai choisi de publier mon prochain ouvrage en ligne.
  Je vous invite donc à vous installer confortablement, pour partir en voyage et découvrir l'Alaska.<br/> 
  Qui sait peut-être que pour vous aussi ce voyage sera sans retour.<br>
  N'hésitez pas à me laisser des commentaires. Je pourrais les utiliser pour la suite de mon voyage.<br>
</p>
  </section>
  <section class="col-sm-4">
  <img src="<?= HOST;?>assets/photo/photolivre.png"width="330px" height= "400px" id="photolivre"/>
  </section>
</div>
<div id="contenu">
<?php foreach ($billets as $billet):
    ?>
    <article>
        <header>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
                <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            </a>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= substr($billet['contenu'], 0, 500) ?></p>
        <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>"> LIRE LA SUITE </a>
    </article>
    <hr />
<?php endforeach; ?>
</div>
    
</body>
</html>