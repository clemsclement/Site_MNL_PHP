<?php 
function renderLacarte(){
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
<section class="prix">
            <h2>Nos Limonades</h2>
            <p>Petite : 3€ / Grande : 4€</p>
            <p class="transparent">transparent</p>
            <p class="transparent">transparent</p>
</section>
<section class="prix">
            <h2>Nos Desserts</h2>
            <p>Desserts : 3€ / Tiramisu : 4€</p>
            <p class="transparent">transparent</p>
            <p class="transparent">transparent</p>
</section>
</main>

<?php
    return ob_get_clean();
}
?>