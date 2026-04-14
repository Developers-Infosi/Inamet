<header id="header" role="banner">
                    <section id="header_top">
                        <div class="container">
                            <div class="row">
                                <div id="header_top_left">
                                    <figure class="marianne">
                                        <a rel="noopener noreferrer" href="{{ route("site.home") }}">
                                            <img
                                                src="/assets/images/logo/logo.png"
                                                alt="Logo do INAMET"
                                                title="Logo do INAMET"
                                            />
                                        </a>
                                    </figure>
                                    
                                </div>
                                <div id="header_top_middle">
                                    <div class="region region-header-middle">
                                        <div id="block-mfsearchform" class="block block-mf-search-form">
                                            <style></style>
                                            <form class="block_search_form">
                                                <label class="visually-hidden">Pesquise uma Província...</label>
                                                <input
                                                    type="text"
                                                    id="search_form_input"
                                                    placeholder="Pesquise uma Província..."
                                                    autocomplete="off"
                                                />
                                                <button
                                                    type="submit"
                                                    title="Lancer la recherche"
                                                    aria-label="Lancer la recherche"
                                                ></button>
                                            </form>

                                            <div id="search_results">
                                                <div class="container">
                                                    <div id="search_loader">
                                                        <div class="lds-ellipsis">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                    <div id="results_forecast">
                                                        <span class="h3">
                                                            <i class="fa fa-cloud-sun"></i>
                                                            Prévisions
                                                        </span>
                                                        <ul></ul>
                                                        <a class="all_results" id="all_results">Tous les résultats</a>
                                                    </div>
       
                                                    <div id="results_articles">
                                                        <span class="h3">
                                                            <i class="fa fa-newspaper"></i>
                                                            Articles
                                                        </span>
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav
                                            role="navigation"
                                            aria-labelledby="block-publicmenusocialheader-menu"
                                            id="block-publicmenusocialheader"
                                            class="block block-menu navigation menu--public---menu-social-header"
                                        >
                                            <span class="visually-hidden" id="block-publicmenusocialheader-menu"
                                                >Menu Réseaux sociaux</span
                                            >

                                      
                                        </nav>
                                    </div>
                                </div>
                                <div id="header_top_right">
                                    <button
                                        class="mobile_button search"
                                        aria-label="Rechercher une ville, un pays..."
                                    ></button>
                                    <button
                                        class="mobile_button bookmarks"
                                        id="open_bookmarks"
                                        aria-label="Ouvrir les favoris"
                                    ></button>

                                    <div class="region region-header-right">
                                        <div id="block-mfnotifications" class="block block-mf-notifications">
                                            <div
                                                class="block_notifications"
                                                id="notifications"
                                                v-cloak
                                                v-if="notificationsStorage"
                                            >
                                                <transition name="fade">
                                                    <button
                                                        aria-label="Ouvrir les notifications"
                                                        title="Ouvrir les notifications"
                                                        :class="{'has_notifications': getNbUnviewedNotifications() > 0 }"
                                                        v-on:click="updateNotificationsDisplayed(); updateView();"
                                                    >
                                                        <span
                                                            v-if="getNbUnviewedNotifications() > 0"
                                                            :aria-label="getNbUnviewedNotifications()+' Notifications'"
                                                            :class="{'new': getNbUnviewedNotifications() > 0 }"
                                                            >${getNbUnviewedNotifications()}</span
                                                        >
                                                    </button>
                                                </transition>
                                                <transition name="fade">
                                                    <div class="notifications-container" v-if="notificationsDisplayed">
                                                        <ul>
                                                            <li
                                                                v-for="(notification, index) in getUnviewedNotifications()"
                                                                v-if="notification.message != ''"
                                                            >
                                                                <a
                                                                    title="Ouvrir le lien de la notification"
                                                                    target="_blank"
                                                                    v-bind:href="notification.link"
                                                                    v-if="notification.link	&& notification.link != '' && notification.link_type != 'No Follow'"
                                                                >
                                                                    <span v-if="notification.start_date_enable == 1"
                                                                        >${formatDate(notification.start_date)}</span
                                                                    ><span v-if="notification.start_date_enable == 0"
                                                                        >${formatDate(notification.date_created)}</span
                                                                    >
                                                                    ${notification.message}
                                                                </a>
                                                                <a
                                                                    title="Ouvrir le lien de la notification"
                                                                    rel="nofollow"
                                                                    target="_blank"
                                                                    v-bind:href="notification.link"
                                                                    v-if="notification.link && notification.link != ''	&& notification.link_type 	&& notification.link_type == 'No Follow'"
                                                                >
                                                                    <span v-if="notification.start_date_enable == 1"
                                                                        >${formatDate(notification.start_date)}</span
                                                                    ><span v-if="notification.start_date_enable == 0"
                                                                        >${formatDate(notification.date_created)}</span
                                                                    >
                                                                    ${notification.message}
                                                                </a>
                                                                <p
                                                                    v-if="(!notification.link || notification.link == '')"
                                                                >
                                                                    <span v-if="notification.start_date_enable == 1"
                                                                        >${formatDate(notification.start_date)}</span
                                                                    ><span v-if="notification.start_date_enable == 0"
                                                                        >${formatDate(notification.date_created)}</span
                                                                    >
                                                                    ${notification.message}
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </transition>
                                            </div>
                                        </div>
                                        <div id="block-mfvigilanceheader" class="block block-mf-vigilance-header">
                                            <style>
                                                [v-cloak] {
                                                    display: none;
                                                }

                                                /*#vigilance_header{
    flex-direction: column;
}*/

                                                .miniatures {
                                                    display: flex;
                                                }

                                                .vigilance-header-title,
                                                .miniature-date {
                                                    font-family: "Quicksand", sans-serif;
                                                    font-weight: bold;
                                                    color: #145e9a;

                                                    margin: 0;
                                                    padding: 0;
                                                }
                                                .block_vigilance_alert {
                                                    position: relative !important;
                                                    top: auto !important;
                                                    right: auto !important;
                                                }
                                                .block_vigilance_header
                                                    .block_vigilance_alert.vigilance-jaune
                                                    p.label:before {
                                                    font-size: 30px !important;
                                                }
                                            </style>

                                            <div v-cloak class="block_vigilance_header" id="vigilance_header">
                                                <div class="miniatures" v-if="device !== 'small'">
                                                    <a
                                                        v-if="miniatureToday"
                                                        href="http://vigilance.meteofrance.fr/fr"
                                                        target="_blank"
                                                        rel="nofollow noopener"
                                                        title="Vigilance Météo-France"
                                                    >
                                                        <div class="block_map_vigilance" v-if="miniatureToday">
                                                            <img
                                                                :src="miniatureToday"
                                                                alt="Carte vigilance "
                                                                title="Carte vigilance "
                                                            />

                                                            <span class="miniature-date">Aujourd'hui</span>
                                                        </div>
                                                    </a>

                                                </div>

                                               

                                    <button
                                        aria-label="Ouvrir le menu"
                                        title="Ouvrir le menu"
                                        class="toggle_sidebar_menu"
                                        role="button"
                                    ></button>
                                </div>
                            </div>
                        </div>
                    </section>




                    <section id="header_middle">
                        <div class="container">
                            <div class="row">
                                <nav
                                    role="navigation"
                                    aria-labelledby="block-publicmenuprincipal-menu"
                                    id="block-publicmenuprincipal"
                                    class="block block-menu navigation menu--public---menu-main"
                                >
                                 

                                    <ul class="menu">
                                         <li class="menu-icon-3 menu-item menu-item--expanded">
                                            <a
                                                href="#"
                                                class="fas fa-globe-europe"
                                                title="Climat et Changement climatique"
                                                >Sobre</a
                                            >
                                            <ul class="menu">
                                               
                                              
                                           
                                                <li class="menu-icon-190 menu-item menu-item--expanded">
                                              
                                                    <ul class="menu">
                                                        <li class="menu-icon-193 menu-item">
                                                            <a
                                                                href="#"
                                                                title="Sobre o INAMET"
                                                                
                                                                >Sobre o INAMET</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-196 menu-item">
                                                            <a
                                                                href="#"
                                                                title="Director do INAMET"
                                                               
                                                                >Director do INAMET</a
                                                            >
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                               
                                            </ul>
                                        </li>

                                    



                                        <li class="menu-icon-3 menu-item menu-item--expanded">
                                            <a
                                                href="climat.html"
                                                class="fa fa-sun-o"
                                                title="Climat et Changement climatique"
                                                data-drupal-link-system-path="node/42497"
                                                >Clima</a
                                            >
                                            <ul class="menu">
                                               
                                              
                                           
                                                <li class="menu-icon-190 menu-item menu-item--expanded">
                                              
                                                    <ul class="menu">
                                                        <li class="menu-icon-193 menu-item">
                                                            <a
                                                                href="#"
                                                                title="Previsão Climática"
                                                                
                                                                >Previsão Climática</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-196 menu-item">
                                                            <a
                                                                href="#"
                                                                title="Monitoramento"
                                                               
                                                                >Monitoramento</a
                                                            >
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        <li class="menu-icon-5 menu-item menu-item--expanded">
                                            <a
                                                href="actualites-et-dossiers.html"
                                                class="fas fa-file"
                                             
                                                >Informações</a
                                            >
                                            <ul class="menu">
                                                <li class="menu-icon-57 menu-item menu-item--expanded">
                                                  
                                                    <ul class="menu">
                                                        <li class="menu-icon-45 menu-item">
                                                            <a
                                                                href="actualites/a-la-une.html"
                                                                data-drupal-link-system-path="node/42503"
                                                                >Publicações</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-43 menu-item">
                                                            <a
                                                                href="actualites/previsions.html"
                                                                data-drupal-link-system-path="node/42501"
                                                                >Notícias</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-49 menu-item">
                                                            <a
                                                                href="actualites/climat.html"
                                                                data-drupal-link-system-path="node/87031"
                                                                >Projectos</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-50 menu-item">
                                                            <a
                                                                href="actualites/planete.html"
                                                                data-drupal-link-system-path="node/87085"
                                                                >Galeria</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-51 menu-item">
                                                            <a
                                                                href="actualites/entretiens.html"
                                                                data-drupal-link-system-path="node/87106"
                                                                >Vídeos</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-80 menu-item">
                                                            <a
                                                                href="meteo-et-histoire.html"
                                                                data-drupal-link-system-path="node/87227"
                                                                >Contacto</a
                                                            >
                                                        </li>
                                                     
                                                    </ul>
                                                </li>
                                                
                                           
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </nav>

                                <button
                                    id="menu_burger"
                                    aria-label="Ouvrir le menu"
                                    title="Ouvrir le menu"
                                    class="toggle_sidebar_menu"
                                    role="button"
                                ></button>
                            </div>
                        </div>
                    </section>
                    <section id="header_bottom" class="bg-color">
                        <div class="container">
                            <div class="row">
                                <div id="block-mfbarrefavoris" class="block block-mf-barre-favoris">
                                    <div id="barre-favoris" v-cloak>
                                        <ul id="barre-favoris-list">
                                            <li v-for="(favori, index) in favoris.getFavoris()">
                                                <p></p>
                                                <a class="favori-link" :href="favori.getPoi().path">
                                                    <span
                                                        class="icon-type-favoris"
                                                        :class="favori.getPoi().type"
                                                    ></span>
                                                    <i
                                                        v-if="favori.getPoi().icon_poi"
                                                        :aria-label="'Icone ' + favori.getPoi().name"
                                                        v-bind:class="favori.getPoi().icon_poi"
                                                    ></i>

                                                    <p aria-label="Ville">
                                                        <span
                                                            >${favori.getPoi().name.slice(0, maxlength)}<span
                                                                v-if="favori.getPoi().name.length >= maxlength"
                                                                >...</span
                                                            ></span
                                                        >
                                                        <span
                                                            v-if="favori.getPoi().country != null && favori.getPoi().country != '' && favori.getPoi().country.substring(0, 2) != 'FR'"
                                                            >(${favori.getPoi().country.substring(0, 2)})</span
                                                        >
                                                        <span
                                                            v-if="favori.getPoi().country == null && favori.getPoi().dpt != null && favori.getPoi().dpt != ''"
                                                            >(${favori.getPoi().dpt})</span
                                                        >
                                                    </p>

                                                    <i
                                                        v-if="favori.warningColor == 2"
                                                        alt="VIGILANCE JAUNE"
                                                        title="VIGILANCE JAUNE"
                                                        aria-label="vigilance jaune"
                                                        class="fa fa-exclamation-triangle vigilance jaune"
                                                    ></i>
                                                    <i
                                                        v-if="favori.warningColor == 3"
                                                        alt="VIGILANCE ORANGE"
                                                        title="VIGILANCE ORANGE"
                                                        aria-label="vigilance orange"
                                                        class="fa fa-exclamation-triangle vigilance orange"
                                                    ></i>
                                                    <i
                                                        v-if="favori.warningColor == 4"
                                                        alt="VIGILANCE ROUGE"
                                                        title="VIGILANCE ROUGE"
                                                        aria-label="vigilance rouge"
                                                        class="fa fa-exclamation-triangle vigilance rouge"
                                                    ></i>
                                                    <i
                                                        v-if="favori.warningColor == 5"
                                                        alt="VIGILANCE VIOLETTE"
                                                        title="VIGILANCE VIOLETTE"
                                                        aria-label="vigilance violette"
                                                        class="fa fa-exclamation-triangle vigilance violette"
                                                    ></i>
                                                    <i
                                                        v-if="favori.warningColor == 1.5"
                                                        alt="VIGILANCE GRISE"
                                                        title="VIGILANCE GRISE"
                                                        aria-label="vigilance grise"
                                                        class="fa fa-exclamation-triangle vigilance grise"
                                                    ></i>

                                                    <i
                                                        v-if="favori.warningColor == 6"
                                                        alt="VIGILANCE BLEU-GRIS CYCLONE"
                                                        title="VIGILANCE BLEU-GRIS CYCLONE"
                                                        aria-label="vigilance bleu-gris cyclone"
                                                        class="fa fa-exclamation-triangle vigilance bleu-gris-cyclone"
                                                    ></i>
                                                    <i
                                                        v-if="favori.warningColor == 7 && favori.getPoi().dpt == '976'"
                                                        alt="VIGILANCE BLANCHE CYCLONE"
                                                        title="VIGILANCE BLANCHE CYCLONE"
                                                        aria-label="vigilance blanche cyclone"
                                                        class="fa fa-exclamation-triangle vigilance blanc-cyclone"
                                                    ></i>
                                                    <i
                                                        v-if="favori.warningColor == 7 && favori.getPoi().dpt != '976'"
                                                        alt="VIGILANCE JAUNE CYCLONE"
                                                        title="VIGILANCE JAUNE CYCLONE"
                                                        aria-label="vigilance jaune cyclone"
                                                        class="fa fa-exclamation-triangle vigilance jaune-cyclone"
                                                    ></i>
                                                    <i
                                                        v-if="favori.warningColor == 8"
                                                        alt="VIGILANCE ORANGE CYCLONE"
                                                        title="VIGILANCE ORANGE CYCLONE"
                                                        aria-label="vigilance orange cyclone"
                                                        class="fa fa-exclamation-triangle vigilance orange-cyclone"
                                                    ></i>
                                                    <i
                                                        v-if="favori.warningColor == 9"
                                                        alt="VIGILANCE ROUGE CYCLONE"
                                                        title="VIGILANCE ROUGE CYCLONE"
                                                        aria-label="vigilance rouge cyclone"
                                                        class="fa fa-exclamation-triangle vigilance rouge-cyclone"
                                                    ></i>
                                                    <i
                                                        v-if="favori.warningColor == 10"
                                                        alt="VIGILANCE VIOLETTE CYCLONE"
                                                        title="VIGILANCE VIOLETTE CYCLONE"
                                                        aria-label="vigilance violette cyclone"
                                                        class="fa fa-exclamation-triangle vigilance violette-cyclone"
                                                    ></i>

                                                    <img
                                                        v-if="favori.getForecastNow() != null && favori.getForecastNow().weather_icon != null"
                                                        :src="'/modules/custom/mf_tools_common_theme_public/svg/weather/' + favori.getForecastNow().weather_icon + '.svg'"
                                                        :alt="'METEO '+favori.getPoi().name"
                                                        class="icon shape-weather"
                                                        style="width: 35px"
                                                        :title="'METEO '+favori.getPoi().name"
                                                    />

                                                    <strong
                                                        v-if="favori.getForecastNow() != null && favori.getForecastNow().T != null"
                                                        :aria-label="'Température à '+favori.getPoi().name"
                                                        >${Math.round(favori.getForecastNow().T)}°</strong
                                                    >
                                                </a>
                                                <div class="dot-menu" v-on:click="displayMenu(index)">
                                                    <ul class="dot-menu-content" v-if="menuCurrentlyDisplayed == index">
                                                        <li v-on:click="placeItemFirstPosition(index)">
                                                            Placer à la 1<sup>ere</sup> place
                                                        </li>
                                                        <li v-on:click="removeItemFromFavoris(favori)">
                                                            Effacer le favori
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="last">
                                                <div id="add-favorite">
                                                    <div class="autocomplete">
                                                   
                                                        <button
                                                            class="close"
                                                            aria-label="Fermer"
                                                            title="Fermer"
                                                            v-if="stateSearch == true"
                                                            v-on:click="showSearch(false)"
                                                        ></button>
                                                        <div class="add-favorite-list" v-if="stateSearch">
                                                            <input
                                                                @blur="setFocus(false)"
                                                                @focus="setFocus(true)"
                                                                id="myInput"
                                                                name="newPOI"
                                                                placeholder="Ajouter une ville"
                                                                type="text"
                                                                v-model="inputPoi"
                                                                autocomplete="off"
                                                                v-on:input="searchTest()"
                                                            />
                                                            <ul
                                                                class="favorite-items"
                                                                v-if="inputPoi != '' && magic_flag"
                                                            >
                                                                <li
                                                                    class="favorite-item"
                                                                    v-for="(poi, index) in getPoisList()"
                                                                    v-on:click="addFavoriteFromInput(poi)"
                                                                >
                                                                    ${poi.name.slice(0, 50)}
                                                                </li>
                                                                <li
                                                                    class="favorite-item"
                                                                    v-if="getPoisList().length == 0"
                                                                >
                                                                    Aucun résultat
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </header>

                <aside aria-hidden="true" id="sidebar_page">
                    <div class="inner">
                        <button
                            aria-label="Fermer le menu"
                            title="Fermer le menu"
                            id="sidebar_close_mobile"
                            class="fa fa-times"
                        ></button>

                        <div id="sidebar_header">
                            <figure class="marianne">
                                <img
                                    src="themes/custom/theme_public/dist/img/marianne.svg"
                                    onerror="/themes/custom/theme_public/dist/img//marianne.svg"
                                    alt="République française"
                                    title="République française"
                                />
                            </figure>
                            <a
                                id="logo_sidebar"
                                rel="noopener noreferrer"
                                href="index.html"
                                target="_blank"
                                title="Météo-France - page d'accueil"
                                aria-label="Météo-France - page d'accueil"
                            >
                                <img
                                    src="themes/custom/theme_public/dist/img/logo_fond_bleu.svg"
                                    width="70"
                                    class="Logo"
                                    title="Météo-France : à vos côtés, dans un climat qui change"
                                    alt="Météo-France : à vos côtés, dans un climat qui change"
                                />
                            </a>
                        </div>

                        <div class="region region-burger">
                          
                            <nav
                                role="navigation"
                                aria-labelledby="block-publicmenuburger-menu"
                                id="block-publicmenuburger"
                                class="block block-menu navigation menu--public---menu-burger"
                            >
                                <span class="visually-hidden" id="block-publicmenuburger-menu"
                                    >PUBLIC - Menu burger</span
                                >

                                <ul class="menu">
                                    <li class="menu-icon-12 menu-item">
                                        <a
                                            href="index.html"
                                            class="fas fa-home is-active"
                                            data-drupal-link-system-path="&lt;front&gt;"
                                            aria-current="page"
                                            >Accueil</a
                                        >
                                    </li>
                                    <li class="menu-icon-69 menu-item">
                                        <a
                                            href="https://meteofrance.fr/"
                                            class="fas fa-newspaper"
                                            rel="nofollow noopener"
                                            target="_blank"
                                            title="Site institutionnel Météo-France"
                                            >Site Institutionnel</a
                                        >
                                    </li>
                                    <li class="menu-icon-27 menu-item menu-item--expanded">
                                        <a
                                            href="climat.html"
                                            class="fas fa-globe-americas no-clickable"
                                            title="Météo-France et le Climat"
                                            data-drupal-link-system-path="node/42497"
                                            >Climat</a
                                        >
                                        <ul class="menu">
                                            <li class="menu-icon-146 menu-item">
                                                <a
                                                    href="https://meteofrance.fr/actualite/publications/les-publications-de-meteo-france/les-dernieres-previsions-saisonnieres"
                                                    class="fas fa-globe-americas"
                                                    rel="nofollow"
                                                    target="_blank"
                                                    title="Tendances climatiques à trois mois"
                                                    >Tendances à 3 Mois</a
                                                >
                                            </li>
                                            <li class="menu-icon-93 menu-item">
                                                <a
                                                    href="changement-climatique/nos-services-climatiques.html"
                                                    class="fas fa-globe-americas"
                                                    title="Services Climatiques"
                                                    data-drupal-link-system-path="node/576706"
                                                    >Nos services climatiques</a
                                                >
                                            </li>
                                            <li class="menu-icon-95 menu-item menu-item--expanded">
                                                <a
                                                    href="changement-climatique.html"
                                                    class="fas fa-globe-americas no-clickable"
                                                    title="Le Changement Climatique"
                                                    data-drupal-link-system-path="node/42500"
                                                    >Le changement climatique</a
                                                >
                                                <ul class="menu">
                                                    <li class="menu-icon-108 menu-item">
                                                        <a
                                                            href="le-changement-climatique/observer.html"
                                                            title="Observer le Changement Climatique"
                                                            data-drupal-link-system-path="node/87260"
                                                            >Les bases du changement climatique</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-109 menu-item">
                                                        <a
                                                            href="changement-climatique/quel-climat-futur.html"
                                                            title="Quel climat futur ?"
                                                            data-drupal-link-system-path="node/87265"
                                                            >Quel climat futur ?</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-496 menu-item">
                                                        <a
                                                            href="le-changement-climatique/ressources-utiles-sur-le-changement-climatique.html"
                                                            >Ressources utiles</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-icon-94 menu-item menu-item--expanded">
                                                <a
                                                    href="comprendre-climat.html"
                                                    class="fas fa-globe-americas no-clickable"
                                                    title="Comprendre le Climat"
                                                    data-drupal-link-system-path="node/42499"
                                                    >Comprendre le climat</a
                                                >
                                                <ul class="menu">
                                                    <li class="menu-icon-105 menu-item">
                                                        <a
                                                            href="comprendre-climat/monde.html"
                                                            title="Le Climat Mondial"
                                                            data-drupal-link-system-path="node/87256"
                                                            >Le climat mondial</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-106 menu-item">
                                                        <a
                                                            href="comprendre-climat/france.html"
                                                            title="Le Climat en France"
                                                            data-drupal-link-system-path="node/87257"
                                                            >Le climat en France</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-icon-199 menu-item menu-item--expanded">
                                                <span
                                                    class="fas fa-globe-americas no-clickable"
                                                    title="Normales et Relevés Météorologiques"
                                                    >Normales et relevés</span
                                                >
                                                <ul class="menu">
                                                    <li class="menu-icon-202 menu-item">
                                                        <a
                                                            href="climat/normales/france.html"
                                                            title="Climat : Normales et Records"
                                                            data-drupal-link-system-path="climat/normales/france"
                                                            >Normales et Records</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-205 menu-item">
                                                        <a
                                                            href="climat/releves/france.html"
                                                            title="Climat Relevés"
                                                            data-drupal-link-system-path="climat/releves/france"
                                                            >Relevés Météorologiques</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-211 menu-item">
                                                        <a
                                                            href="https://donneespubliques.meteofrance.fr/?fond=produit&amp;id_produit=129&amp;id_rubrique=29"
                                                            rel="nofollow"
                                                            target="_blank"
                                                            title="Bulletins Climatologiques"
                                                            >Bulletins Climatologiques</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-icon-26 menu-item menu-item--expanded">
                                        <a
                                            href="actualites-et-dossiers.html"
                                            class="fas fa-newspaper no-clickable"
                                            title="Actualités Météo-France"
                                            data-drupal-link-system-path="node/87141"
                                            >Actus &amp; dossiers</a
                                        >
                                        <ul class="menu">
                                            <li class="menu-icon-111 menu-item menu-item--expanded">
                                                <a
                                                    href="actualites.html"
                                                    class="fa fa-newspaper no-clickable"
                                                    title="Actualités Météo-France"
                                                    data-drupal-link-system-path="node/42494"
                                                    >Actualités</a
                                                >
                                                <ul class="menu">
                                                    <li class="menu-icon-110 menu-item">
                                                        <a
                                                            href="actualites/a-la-une.html"
                                                            data-drupal-link-system-path="node/42503"
                                                            >A la une</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-115 menu-item">
                                                        <a
                                                            href="actualites/previsions.html"
                                                            data-drupal-link-system-path="node/42501"
                                                            >Infos prévisions</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-116 menu-item">
                                                        <a
                                                            href="actualites/climat.html"
                                                            data-drupal-link-system-path="node/87031"
                                                            >Infos climat</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-118 menu-item">
                                                        <a
                                                            href="actualites/planete.html"
                                                            data-drupal-link-system-path="node/87085"
                                                            >Planète</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-119 menu-item">
                                                        <a
                                                            href="actualites/entretiens.html"
                                                            data-drupal-link-system-path="node/87106"
                                                            >Entretiens</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-133 menu-item menu-item--collapsed">
                                                        <a
                                                            href="meteo-et-histoire.html"
                                                            data-drupal-link-system-path="node/87227"
                                                            >Météo et histoire</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-134 menu-item">
                                                        <a
                                                            href="magazine/meteo-questions.html"
                                                            data-drupal-link-system-path="node/87333"
                                                            >La météo en questions</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-icon-113 menu-item menu-item--expanded">
                                                <a
                                                    href="comprendre-la-meteo.html"
                                                    class="fa fa-newspaper no-clickable"
                                                    title="Comprendre la météo"
                                                    data-drupal-link-system-path="node/87143"
                                                    >Comprendre la météo</a
                                                >
                                                <ul class="menu">
                                                    <li class="menu-icon-124 menu-item">
                                                        <a
                                                            href="comprendre-la-meteo/saisons.html"
                                                            data-drupal-link-system-path="node/87197"
                                                            >Les saisons</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-126 menu-item">
                                                        <a
                                                            href="comprendre-la-meteo/temperatures.html"
                                                            data-drupal-link-system-path="node/87200"
                                                            >La température</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-125 menu-item">
                                                        <a
                                                            href="comprendre-la-meteo/le-vent.html"
                                                            data-drupal-link-system-path="node/87198"
                                                            >Le vent</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-127 menu-item">
                                                        <a
                                                            href="comprendre-la-meteo/atmosphere.html"
                                                            data-drupal-link-system-path="node/87202"
                                                            >L&#039;atmosphère</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-128 menu-item">
                                                        <a
                                                            href="comprendre-la-meteo/precipitations.html"
                                                            data-drupal-link-system-path="node/87204"
                                                            >Les précipitations</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-129 menu-item">
                                                        <a
                                                            href="comprendre-la-meteo/orages.html"
                                                            data-drupal-link-system-path="node/87208"
                                                            >Les orages</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-130 menu-item">
                                                        <a
                                                            href="comprendre-la-meteo/nuages.html"
                                                            data-drupal-link-system-path="node/87209"
                                                            >Les nuages</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-131 menu-item">
                                                        <a
                                                            href="comprendre-la-meteo/arc-en-ciel.html"
                                                            data-drupal-link-system-path="node/87212"
                                                            >Arc-en-ciel et mirage</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-132 menu-item">
                                                        <a
                                                            href="comprendre-la-meteo/oceans.html"
                                                            data-drupal-link-system-path="node/87213"
                                                            >Les océans</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-icon-313 menu-item">
                                                <a
                                                    href="comprendre-la-vigilance.html"
                                                    class="fa fa-newspaper"
                                                    title="Comprendre la Vigilance"
                                                    data-drupal-link-system-path="node/575302"
                                                    >Comprendre la vigilance météo</a
                                                >
                                            </li>
                                            <li class="menu-icon-250 menu-item menu-item--expanded">
                                                <a
                                                    href="education.html"
                                                    class="fa fa-newspaper"
                                                    title="Education"
                                                    data-drupal-link-system-path="node/575014"
                                                    >Éducation
                                                </a>
                                                <ul class="menu">
                                                    <li class="menu-icon-325 menu-item">
                                                        <a
                                                            href="education/nos-actualites-pour-leducation.html"
                                                            data-drupal-link-system-path="node/575758"
                                                            >Nos actualités pour l&#039;Éducation</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-271 menu-item">
                                                        <a
                                                            href="education/comprendre-la-meteo.html"
                                                            data-drupal-link-system-path="node/574999"
                                                            >Comprendre la météo</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-274 menu-item">
                                                        <a
                                                            href="education/comprendre-le-climat.html"
                                                            data-drupal-link-system-path="node/575002"
                                                            >Comprendre le climat</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-277 menu-item">
                                                        <a
                                                            href="education/comprendre-la-vigilance-meteorologique.html"
                                                            data-drupal-link-system-path="node/575005"
                                                            >La Vigilance météorologique</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-268 menu-item">
                                                        <a
                                                            href="education/partenariats-educatifs.html"
                                                            data-drupal-link-system-path="node/575752"
                                                            >Partenariats éducatifs</a
                                                        >
                                                    </li>
                                                    <li class="menu-icon-280 menu-item">
                                                        <a
                                                            href="education/formation-et-metiers.html"
                                                            data-drupal-link-system-path="node/575011"
                                                            >Formation et métiers</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-icon-14 menu-item menu-item--expanded">
                                        <span class="fas fa-globe-asia" title="Météo Outre-mer">Meteo Outre Mer</span>
                                        <ul class="menu">
                                            <li class="menu-icon-16 menu-item">
                                                <a
                                                    href="https://meteofrance.re/"
                                                    rel="nofollow noopener"
                                                    target="_blank"
                                                    title="Météo-France La Réunion"
                                                    >La Réunion</a
                                                >
                                            </li>
                                            <li class="menu-icon-17 menu-item">
                                                <a
                                                    href="https://meteofrance.yt/"
                                                    rel="nofollow noopener"
                                                    target="_blank"
                                                    title="Météo-France Mayotte"
                                                    >Mayotte</a
                                                >
                                            </li>
                                            <li class="menu-icon-18 menu-item">
                                                <a
                                                    href="https://www.meteo.nc/"
                                                    rel="nofollow noopener"
                                                    target="_blank"
                                                    title="Météo-France Nouvelle Calédonie"
                                                    >Nouvelle Calédonie</a
                                                >
                                            </li>
                                            <li class="menu-icon-54 menu-item">
                                                <a
                                                    href="https://meteofrance.gp/fr"
                                                    rel="nofollow noopener"
                                                    target="_blank"
                                                    title="Météo-France Guadeloupe, Saint Martin, Saint Barthélemy"
                                                    >Guadeloupe, Saint Martin, Saint Barthélemy</a
                                                >
                                            </li>
                                            <li class="menu-icon-163 menu-item">
                                                <a
                                                    href="https://meteofrance.gf/fr"
                                                    rel="nofollow"
                                                    target="_blank"
                                                    title="Météo-France Guyane"
                                                    >Guyane</a
                                                >
                                            </li>
                                            <li class="menu-icon-160 menu-item">
                                                <a
                                                    href="https://meteofrance.mq/fr"
                                                    rel="nofollow"
                                                    target="_blank"
                                                    title="Météo-France Martinique"
                                                    >Martinique</a
                                                >
                                            </li>
                                            <li class="menu-icon-53 menu-item">
                                                <a
                                                    href="https://meteo.pf/"
                                                    rel="nofollow noopener"
                                                    target="_blank"
                                                    title="Météo-France Polynésie Française"
                                                    >Polynésie Française</a
                                                >
                                            </li>
                                            <li class="menu-icon-55 menu-item">
                                                <a
                                                    href="https://meteofrance.pm/"
                                                    rel="nofollow noopener"
                                                    target="_blank"
                                                    title="Météo-France Saint-Pierre-et-Miquelon"
                                                    >Saint-Pierre-et-Miquelon</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-icon-476 menu-item">
                                        <a
                                            href="meteo-marine.html"
                                            class="fas fa-water is-active"
                                            title="Météo Marine"
                                            data-drupal-link-system-path="node/574681"
                                            >Meteo Marine</a
                                        >
                                    </li>
                                    <li class="menu-icon-477 menu-item">
                                        <a
                                            href="meteo-des-forets.html"
                                            class="fa-tree"
                                            title="Météo des Forêts"
                                            data-drupal-link-system-path="node/576859"
                                            >Météo des Forêts</a
                                        >
                                    </li>
                                    <li class="menu-icon-478 menu-item">
                                        <a
                                            href="meteo-montagne.html"
                                            class="fas fa-mountain"
                                            title="Météo Montagne"
                                            data-drupal-link-system-path="node/5"
                                            >Meteo Montagne</a
                                        >
                                    </li>
                                    <li class="menu-icon-479 menu-item">
                                        <a
                                            href="meteo-plages.html"
                                            class="fas fa-umbrella-beach"
                                            title="Météo des Plages"
                                            data-drupal-link-system-path="node/42085"
                                            >Meteo des plages</a
                                        >
                                    </li>
                                    <li class="menu-icon-316 menu-item">
                                        <a
                                            href="https://vigieau.gouv.fr/"
                                            class="fas fa-newspaper"
                                            rel="nofollow"
                                            target="_blank"
                                            title="VigiEau, les restrictions d&#039;eau me concernent-elles ?"
                                            >VigiEau</a
                                        >
                                    </li>
                                    <li class="menu-icon-480 menu-item menu-item--expanded">
                                        <a
                                            href="images-radar.html"
                                            class="fas fa-globe-africa no-clickable"
                                            title="Animations Météo-France"
                                            data-drupal-link-system-path="node/568457"
                                            >ANIMATIONS</a
                                        >
                                        <ul class="menu">
                                            <li class="menu-icon-481 menu-item">
                                                <a
                                                    href="images-radar.html"
                                                    title="Animations RADAR"
                                                    data-drupal-link-system-path="node/568457"
                                                    >Images RADAR</a
                                                >
                                            </li>
                                            <li class="menu-icon-482 menu-item">
                                                <a
                                                    href="images-satellites.html"
                                                    title="Animations Satellites"
                                                    data-drupal-link-system-path="node/568461"
                                                    >Images Satellites</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-icon-487 menu-item menu-item--expanded">
                                        <a
                                            href="https://meteofrance.fr/"
                                            class="fas fa-question-circle no-clickable"
                                            rel="nofollow noopener"
                                            target="_blank"
                                            title="Site institutionnel de Météo-France"
                                            >A propos de Météo-France</a
                                        >
                                        <ul class="menu">
                                            <li class="menu-icon-488 menu-item">
                                                <a
                                                    href="carte-didentite-de-meteo-france.html"
                                                    title="Carte d&#039;identité de Météo-France"
                                                    data-drupal-link-system-path="node/575359"
                                                    >Notre carte d&#039;identité</a
                                                >
                                            </li>
                                            <li class="menu-icon-489 menu-item">
                                                <a
                                                    href="https://careers.flatchr.io/fr/company/meteofrance/"
                                                    title="Nous rejoindre"
                                                    >Nous rejoindre</a
                                                >
                                            </li>
                                            <li class="menu-icon-490 menu-item">
                                                <a
                                                    href="index.html"
                                                    rel="nofollow noopener"
                                                    target="_blank"
                                                    title="Service Presse de Météo-France"
                                                    >Espace Presse</a
                                                >
                                            </li>
                                            <li class="menu-icon-491 menu-item">
                                                <a
                                                    href="informations-environnementales.html"
                                                    title="Informations Environnementales"
                                                    data-drupal-link-system-path="node/87150"
                                                    >Informations Environnementales</a
                                                >
                                            </li>
                                            <li class="menu-icon-492 menu-item">
                                                <a
                                                    href="marches-publics.html"
                                                    title="Marchés Publics"
                                                    data-drupal-link-system-path="node/87151"
                                                    >Marchés Publics</a
                                                >
                                            </li>
                                            <li class="menu-icon-493 menu-item">
                                                <a
                                                    href="autres-sites.html"
                                                    title="Sites Météo-France"
                                                    data-drupal-link-system-path="node/87153"
                                                    >Autres sites</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-icon-139 menu-item">
                                        <a
                                            href="https://donneespubliques.meteofrance.fr/"
                                            class="fas fa-user-plus"
                                            rel="nofollow"
                                            target="_blank"
                                            title="Données Publiques de Météo-France"
                                            >DONNEES PUBLIQUES</a
                                        >
                                    </li>
                                    <li class="menu-icon-483 menu-item">
                                        <a
                                            href="https://services.meteofrance.com/"
                                            class="fas fa-user-plus"
                                            title="Offres et Services de Météo-France"
                                            >Nos Services</a
                                        >
                                    </li>
                                    <li class="menu-icon-138 menu-item">
                                        <a
                                            href="applications-mobiles.html"
                                            class="fas fa-newspaper"
                                            title="Applications mobiles"
                                            data-drupal-link-system-path="node/87147"
                                            >Applications mobiles</a
                                        >
                                    </li>
                                    <li class="menu-icon-484 menu-item">
                                        <a
                                            href="widgets.html"
                                            class="fas fa-newspaper"
                                            title="Widgets Météo-France"
                                            data-drupal-link-system-path="node/568453"
                                            >Widgets</a
                                        >
                                    </li>
                                    <li class="menu-icon-346 menu-item menu-item--expanded">
                                        <a
                                            href="la-fabrique-prototypes.html"
                                            class="fas fa-z02-lab"
                                            data-drupal-link-system-path="node/576304"
                                            >Testez nos prototypes</a
                                        >
                                        <ul class="menu">
                                            <li class="menu-icon-486 menu-item">
                                                <a
                                                    href="la-fabrique-prototypes/risque-orage-tourbillonnaire.html"
                                                    title="Risque d&#039;orage tourbillonnaire"
                                                    data-drupal-link-system-path="node/576922"
                                                    >Risque d&#039;orage tourbillonnaire</a
                                                >
                                            </li>
                                            <li class="menu-icon-485 menu-item">
                                                <a
                                                    href="la-fabrique-prototypes/risque-de-vagues-scelerates.html"
                                                    title="Risque de vagues scélérates"
                                                    data-drupal-link-system-path="node/576313"
                                                    >Risque de vagues scélérates</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <nav
                                role="navigation"
                                aria-labelledby="block-publicmenusocial-menu"
                                id="block-publicmenusocial"
                                class="block block-menu navigation menu--public---menu-reseaux-socia"
                            >
                                <span id="block-publicmenusocial-menu">Suivez-nous</span>

                                <ul class="menu">
                                    <li class="menu-icon-7 menu-item">
                                        <a
                                            href="https://www.facebook.com/MeteoFrance/"
                                            class="fa fa-facebook-f-brands"
                                            rel="nofollow noopener"
                                            target="_blank"
                                            title="Nous suivre sur Facebook"
                                            >Facebook</a
                                        >
                                    </li>
                                    <li class="menu-icon-8 menu-item">
                                        <a
                                            href="https://twitter.com/meteofrance"
                                            class="fa fa-twitter-brands"
                                            rel="nofollow noopener"
                                            target="_blank"
                                            title="Nous suivre sur Twitter"
                                            >Twitter</a
                                        >
                                    </li>
                                    <li class="menu-icon-9 menu-item">
                                        <a
                                            href="https://fr.linkedin.com/company/meteo-france"
                                            class="fa fa-linkedin-brands"
                                            rel="nofollow noopener"
                                            target="_blank"
                                            title="Nous suivre sur Linked In"
                                            >Linkedin</a
                                        >
                                    </li>
                                    <li class="menu-icon-52 menu-item">
                                        <a
                                            href="https://www.instagram.com/meteofrance/"
                                            class="fa fa-instagram-brands"
                                            rel="nofollow noopener"
                                            target="_blank"
                                            title="Nous suivre sur Instagram"
                                            >Instagram</a
                                        >
                                    </li>
                                    <li class="menu-icon-10 menu-item">
                                        <a
                                            href="https://www.youtube.com/channel/UCnBToLuuyq7Qn5j7e5BRhaw"
                                            class="fa fa-youtube-brands"
                                            rel="nofollow noopener"
                                            target="_blank"
                                            title="Nous suivre sur YouTube"
                                            >YouTube</a
                                        >
                                    </li>
                                    <li class="menu-icon-348 menu-item">
                                        <a
                                            href="https://bsky.app/profile/meteofrance.com"
                                            class="fa fa-bluesky-brands"
                                            rel="nofollow noopener"
                                            target="_blank"
                                            >Bluesky</a
                                        >
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>
                <button aria-label="Fermer le menu" title="Fermer le menu" id="sidebar_overlay"></button>