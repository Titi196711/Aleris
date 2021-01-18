<?php
require("header.php");
?>
<div class="container portails">
    <div class="row d-flex flex-row justify-content-around mb-5">
        <div class="col-xl-12 col-sm-12">
            <!--<h1 class="text-center">PORTAILS</h1>-->
            <h2 class="text-center portail">Portail
                <img alt="Logo Silae complet" src="assets/img/prerequis_silae/logo_silae_complet.png"/>
            </h2>
            <p>ALERIS a signé un partenariat stratégique avec l’éditeur de la solution SILAE.</p>
            <p>Silae est l’outil qui nous sert à produire vos bulletins de paye, et tous les états que nous mettons à votre disposition sur le portail collaboratif.</p>
            <p>L’accès à ce portail est inclus dans votre abonnement paie & déclarations. Nous délivrons à la personne en charge de la paye un identifiant et un mot de passe qui lui permettront de se connecter :</p>
            <!--<img class='img-responsive mx-auto col-lg-12' alt="capture de l'ecran silae : dossier paie" src='assets/img/prerequis_silae/silae_dossier_paie.png'/>-->
            <h3>Consulation Aléris</h3>
            <div class="col-lg-12 embed-responsive embed-responsive-16by9 d-block mx-auto">
                <video controls="controls" poster="assets/img/capture_consultation_Aleris.png" preload="auto">
                    <source src="assets/img/Consultation ALERIS_1.mp4" type="video/mp4">
                </video>
            </div>
            <h3>Cycle de Paie Aléris</h3>
            <div class="col-lg-12 embed-responsive embed-responsive-16by9">
                <video controls poster="assets/img/Cycle de paie ALERIS.jpg">
                    <source src="assets/img/Cycle de paie ALERIS_1.mp4" type="video/mp4">
                </video>
            </div>
            <p>A tout instant vous pouvez accéder aux bulletins et à tous vos reportings en toute autonomie.</p>
            <p>Des accès peuvent être ouverts à votre expert-comptable, à vos partenaires, sous-traitants …</p>
            <p>Vous avez également la possibilité d’envoyer par mail les bulletins à vos salariés en toute autonomie.</p>
            <p>De très nombreuses fonctionnalités sont offertes, pouvant vous permettre de disposer d’une autonomie plus ou moins large dans la gestion de la
                paye et des flux sociaux. N’hésitez pas à nous solliciter pour en savoir plus.</p>
            <p>De plus SILAE permet d’assurer une réversibilité totale, si vous souhaitez reprendre la main demain en toute autonomie sur votre paye.</p>

            <h2 class="text-center portail">Portail
                <img alt="Logo Lucca complet" src="assets/img/prerequis_silae/logo_lucca_complet.png"/>
            </h2>
            <p>ALERIS a signé un partenariat stratégique avec l’éditeur de la solution LUCCA.</p>
            <p>Lucca est le service en ligne qui remplace vos fichiers Excel et optimise la gestion de vos processus internes. Le service est constitué de 5
                modules qui peuvent être activés indépendamment les uns des autres afin de vous permettre de composer votre SIRH à la carte :</p>
            <img class='img-responsive mx-auto col-lg-12' alt="capture de l'ecran Lucca fonctions" src='assets/img/prerequis_silae/lucca_fonctions.png'/>
            <p>Vous pouvez découvrir une présentation détaillée des différents modules sur le lien suivant :</p>
            <p class='text-center'>
                <a href='https://www.lucca.fr/suite/startup/'>https://www.lucca.fr/suite/startup/</a>
            </p>
            <p class='tarifs'>TARIFS</p>
            <img class='img-responsive mx-auto col-lg-12' alt="capture de l'ecran Lucca Tarifs" src='assets/img/prerequis_silae/lucca_tarifs.png'/>
            <p>En passant par ALERIS vous bénéficiez d’un accompagnement spécifique grands comptes.</p>

        </div>
    </div>
</div>
<script>
    $("#menu_aleris").toggleClass("menu_aleris");
    $("#menu_portail_collabo").toggleClass("menu_solutions");
</script>

<?php
require("footer.php");
?>