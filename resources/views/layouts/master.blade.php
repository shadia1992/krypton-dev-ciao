<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>Ciao</title>
    <meta charset="utf-8">
    <script src="js/packJs.php"></script>
        <link rel="stylesheet" type="text/css" href="../assets/css/ciao.css" >
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700italic,700,500italic,500,400italic,300,300italic,100,100italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="wrapper">
            <header class="main col-xs-12">
                
                <!-- responsif -->
                <div id="hamburger" class="out">
                    <a href="#" id="hamburger-menu"><i class="icon icon-burger-menu"></i>
                    <span id="head-buzz"></span></a>
                </div>

                <!-- Pour le logo -->
                <div id="logo" class="text-center image col-xs-9">
                    <a href="#">
                        <img src="../assets/img/logo_ciao.png">
                    </a>
                </div>
                
                <!-- A droite du header -->
              
                <div id="top-right" class='top-right col-xs-3'>
                    <!-- Pour le bouton search -->
                    <div id="header-search" class='col-xs-4'>
                        <a href="#" id="search-open-buton" class="open-buton">
                            <span class="icon icon-search"></span>
                        </a>
                    </div>
                    <div class="separator"></div>
                      
                    <!-- Pour facebook-->
                    <div id="header-facebook" class='col-xs-4'>
                        <a href="http://www.facebook.com/ciao.ch">
                            <span class="icon icon-facebook"></span>
                        </a>
                    </div>
                    <div class="separator"></div>
                    <!-- Pour l'identification -->
                    <div id="header-identification" class='col-xs-4'>
                        <a href="#">
                            S'identifier
                        </a>
                    </div>
                </div>  
      
                
            </header>
            
            <nav class="main col-xs-12" id="ciao-header">
                <ul>
                    <li class='home'>
                        <a href="index.html"></a>
                    </li>
                    @foreach(App\Models\Theme::all() as $theme)
                        <li>
                            <a href="{{$theme->name}}">{{$theme->name}}</a>
                        </li>
                    @endforeach
                    <li>
                        <a href="aPropos">A propos</a>
                    </li>
                    <li id="btnplus">
                        <a href="Plus">+</a>
                    </li>
                </ul>
            </nav>

            <!-- CONTENU DE LA PAGE -->
            <div id="container" class="col-xs-12">
                @yield('content')      
            </div>

            <!-- FOOTER DE LA PAGE -->
            <footer class="col-xs-12">
                <h1>Ciao</h1>
                <h2>Plateforme d’information, d’aide et d’échanges pour les 11-20 ans.</h2>
                
                <h3>Avec le soutien de</h3>
                <a href="http://www.oakfnd.org/">
                    <img src="../assets/img/mecenes_logo_oakfoundation.jpg">
                </a>
                <a href="https://www.loro.ch/fr">
                    <img src="../assets/img/mecenes_logo_loro.jpg">
                </a>
                
                <h3>Parrains</h3>
                <div class="parrain">
                    <h4>Fondation Otto Beishein</h4>
                    <a href="http://www.vaudoise.ch/fr/">Vaudoise Assurances</a>
                </div>
                
                <div class="acces">
                    <a href="https://www.healthonnet.org/HONcode/Conduct_f.html?HONConduct446584">
                        <img src="https://www.honcode.ch/HONcode/Seal/French/HONConduct446584_s2.gif">
                    </a>
                    <a href="http://www.access-for-all.ch">
                        <img src="../assets/img/afa2-10-aaplus.jpg">
                    </a>
                </div>
                
                <nav class="menuFooter">
                    <ul>
                        <li>
                            <a href="planDuSite">Plan du site</a>
                        </li>
                        <li>
                            <a href="accessibilité">Accessibilité</a>
                        </li>
                        <li>
                            <a href="condition">Conditions d'utilisation</a>
                        </li>
                        <li>
                            <a href="dictionnaire">Dictionnaire</a>
                        </li>
                        <li>
                            <a href="avis">Ton avis sur Ciao.ch</a>
                        </li>
                    </ul>
                </nav>
            </footer>
        </div>
    </body>
</html>
