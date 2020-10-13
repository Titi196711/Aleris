<?PHP
require "header.php";
?>

<div id="pageSilae" >
    <div  class="container">

        <div class="section-title">
            <h2>Bienvenue dans votre espace de connexion dédié !</h2>
                <!--		<p>Le portail Silae fonctionne avec le navigateur <img src="assets/img/ie_logo.png" title="internet explorer" alt="logo-ie" style="width: 15px;"></p> <br> 													Test supprimer "p"-->
            <div id="Table2col" class="aos-init">
                <div id="col1" class="col-lg-4 col-md-6">

                    <p>si vous utilisez <img src="assets/img/logo_chrome.jpg" title="chrome" alt="logo-chrome" style="width: 22px;"> ou <img src="assets/img/logo_firefox.jpg" title="firefox" alt="logo-firefox" style="width: 26px;"> ou <img src="assets/img/logo_safari.jpg" title="safari" alt="logo-safari" style="width: 22px;"> par defaut,
                        copiez l'url suivante dans le navigateur Internet Explorer : <a class="connexionsilae" href="http://www.silaexpert08.fr/silae" target="_blank">http://www.silaexpert08.fr/silae</a></p>

                </div>
                <div id="col2" class="col-lg-4 col-md-6">

                    <p>si vous utilisez <img src="assets/img/ie_logo.png" title="internet explorer" alt="logo-ie" style="width: 22px;"> par défaut : <br> <a class="connexionsilae" href="http://www.silaexpert08.fr/silae" target="_blank"><img src="assets/img/logo_silae.png"  title="Portail silae" alt="logo-silae" style="width: 100px;"></a></p>

                </div>
            </div>
            <p><a class="connexionsilae" href="assets/img/SetS/PrerequisSilae.pdf" target="_blank">Prérequis technique</a></p>
        </div>

    </div>
</div>
<script>
//Coloriage du menu en orange     
//            $("#menu_nousrecrutons").css("color", "#06E3CC");
    $("#menu_silae").toggleClass("menu_silae");

</script>

<?PHP
require "footer.php";
?>