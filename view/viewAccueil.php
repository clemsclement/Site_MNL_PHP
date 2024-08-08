<?php
function renderAccueil(){
    ob_start();
?>

<main>
    <section class="entete">
        <img src="./images/entreeRestaurant.jpg" alt="Photo de l'entrée du restaurant marinade et limonade">
        <section class="texteEntete">
            <h1>Bienvenue chez Marinade et Limonade !</h1>
            <h2>Votre nouveau restaurant de PokéBowls à Toulouse</h2>
            <h3>Nous vous accueillons du lundu au vendredi</h3>
            <h3>de 11h45 à 14h00 et de 19h00 à 22h00</h3>
            <h3>A tout à l'heure !</h3>
        </section>
    </section>
    <section class="carteAccueil">
        <article class="carteA">
            <img src="./images/poke saumon.png" alt="Poké au saumon">
            <button><a href="/Site_MNL_PHP/lacarte">La carte</a></button>
            <p>Consulter notre carte</p>
        </article>
        <article class="carteA">
            <img src="./images/poke vg.png" alt="Poké Végétarien">
            <button><a href="https://delicity.com/marinade-et-limonade" target="_blank">Livraison</a></button>
            <p>Faites vous livrer et régalez vous !</p>
        </article>
    </section>
    <section class="instagram">
            <h3>Suivez-nous sur Instagram !</h3>
            <button><a href="https://www.instagram.com/marinade_limonade/" target="_blank">S'abonner <img
                        src="./images/instagram.png" alt="IcôneF Instagram"></a></button>
    </section>
    <!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="./images/pokebowl1.jpg" alt="Photo du pokébowl au saumon"></div>
    <div class="swiper-slide"><img src="./images/pokebowl2.jpg" alt="Photo du pokébowl végétarien"></div>
    <div class="swiper-slide"><img src="./images/pokebowl3.jpg" alt="Photo du pokébowl au boeuf"></div>
    <div class="swiper-slide"><img src="./images/dessert3.jpg" alt="Photo de la mousse au chocolat"></div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>

</main>

<?php
    return ob_get_clean();
}
?>