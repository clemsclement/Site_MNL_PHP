<?php 
function renderLacarte($bdd){

    ob_start();
?>

<main>
<section class="entete">
        <img src="./images/pot.jpg" alt="Photo des différents condiments utilisés pour le restaurant">
        <section class="texteEntete">
            <h1>La carte</h1>
        </section>
</section>
<section class="prix">
            <h2>Nos Pokébowls</h2>
            <p>M : 9€ / L : 11€ / XL : 13€</p>
            <p>*+0.50€ à emporter</p>
            <p>**+2€ Poké du Moment</p>
</section>
<section class="affiche">
    <?php
    $pokebowls = readPlatByCategorie($bdd, 1);
    foreach ($pokebowls as $pokebowl){
        echo "<article>";
        echo "<img src='" . $pokebowl['image_plat'] . "' alt='" . $pokebowl['nom_plat'] . "'>";
        echo "<h3>" . $pokebowl['nom_plat'] . "</h3>";
        echo "<p>" . $pokebowl['description_plat'] . "</p>";
        echo "</article>";
    }
    ?>
</section>
<section class="prix">
            <h2>Nos Limonades</h2>
            <p>Petite : 3€ / Grande : 4€</p>
            <p class="transparent">transparent</p>
            <p class="transparent">transparent</p>
</section>
<section class="affiche">
    <?php
    $limonades = readPlatByCategorie($bdd, 2);
    foreach ($limonades as $limonade){
        echo "<article>";
        echo "<img src='" . $limonade['image_plat'] . "' alt='" . $limonade['nom_plat'] . "'>";
        echo "<h3>" . $limonade['nom_plat'] . "</h3>";
        echo "<p>" . $limonade['description_plat'] . "</p>";
        echo "</article>";
    }
    ?>
</section>
<section class="prix">
            <h2>Nos Desserts</h2>
            <p>Desserts : 3€ / Tiramisu : 4€</p>
            <p class="transparent">transparent</p>
            <p class="transparent">transparent</p>
</section>
<section class="affiche">
    <?php
    $desserts = readPlatByCategorie($bdd, 3);
    foreach ($desserts as $dessert){
        echo "<article>";
        echo "<img src='" . $dessert['image_plat'] . "' alt='" . $dessert['nom_plat'] . "'>";
        echo "<h3>" . $dessert['nom_plat'] . "</h3>";
        echo "<p>" . $dessert['description_plat'] . "</p>";
        echo "</article>";
    }
    ?>
</section>
</main>

<?php
    return ob_get_clean();
}
?>