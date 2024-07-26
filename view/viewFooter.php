<?php
function renderFooter(){
    ob_start();
?>
<footer>
    <section class="containerGrand">
        <article class="containerPetitDebut">
            <p><img src="./images/adresse.png" alt="IcôneF adresse"> 41 rue de caraman 31000 Toulouse</p>
            <p><img src="./images/tel.png" alt="IcôneF téléphone"> 06 99 83 11 48</p>
            <div class="logoFooter"><a href="https://www.facebook.com/marinadelimonade" target="_blank"><img src="./images/facebook.png" alt="IcôneF Facebook"></a>
            <a href="https://www.instagram.com/marinade_limonade/" target="_blank"><img src="./images/instagram.png" alt="IcôneF Instagram"></a></div>
        </article>
        <article class="containerPetitMilieu">
            <div id="map"></div>
        </article>
        <article class="containerPetitFin">
            <h2>Ouverture</h2>
            <p>Du Lundi au Vendredi</p>
            <p>11h45 à 14h00 - 19h00 à 22h00</p>
            <div class="confi">
                <p>Mentions légales - Politique de confidentialité &nbsp</p>
                <p>2024 - by Clément Derchain</p>
            </div>
        </article>
    </section>
</footer>
</body>
</html>

<?php
    return ob_get_clean();
}
?>