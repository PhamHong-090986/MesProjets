<?php $title = 'Les chapitres'; ?>
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















