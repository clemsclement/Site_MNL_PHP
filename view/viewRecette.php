<?php
function renderRecette(){
    ob_start();
?>

    <main>
        <h1>Idées Recettes</h1>
        <section class="containerCartes">
            <article class="carte">
                <h2 id="titreRecetteUn"></h2>
                <img src="./images/saumonGravlax.jpg" alt="Photo saumon Gravlax">
                <div class="bouton">
                    <p id="moinsRecetteUn"></p>
                    <p id="personneRecetteUn"></p>
                    <p id="plusRecetteUn"></p>
                </div>
                <div class="recette">
                    <ul id="listeRecetteUn">    
                    </ul>
                </div>
            </article>
            <article class="carte">
                <h2 id="titreRecetteDeux"></h2>
                <img src="./images/pickles.jpg" alt="Photo pickles d'oignons rouges">
                <div class="bouton">
                    <p id="moinsRecetteDeux"></p>
                    <p id="personneRecetteDeux"></p>
                    <p id="plusRecetteDeux"></p>
                </div>
                <div class="recette">
                    <ul id="listeRecetteDeux">
                    </ul>
                </div>
            </article>
        </section>
        <section class="containerCartes">
            <article class="carte">
                <h2 id="titreRecetteTrois"></h2>
                <img src="./images/rizVinaigre.jpg" alt="Photo d'un bol de riz vinaigré">
                <div class="bouton">
                    <p id="moinsRecetteTrois"></p>
                    <p id="personneRecetteTrois"></p>
                    <p id="plusRecetteTrois"></p>
                </div>
                <div class="recette">
                    <ul id="listeRecetteTrois">
                    </ul>
                </div>
            </article>
            <article class="carte">
                <h2 id="titreRecetteQuatre"></h2>
                <img src="./images/teriyaki.jpg" alt="Photo d'un bol de sauce tériyaki">
                <div class="bouton">
                    <p id="moinsRecetteQuatre"></p>
                    <p id="personneRecetteQuatre"></p>
                    <p id="plusRecetteQuatre"></p>
                </div>
                <div class="recette">
                  <ul id="listeRecetteQuatre">
                  </ul>
            </article>
        </section>
    </main> 

<?php
    return ob_get_clean();
}
?>