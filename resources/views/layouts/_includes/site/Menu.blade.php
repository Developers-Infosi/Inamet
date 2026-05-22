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
                                                    color: #0042b1;

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
                                               
                                                title="Sobre"
                                                >Sobre</a
                                            >
                                            <ul class="menu">
                                               
                                              
                                           
                                                <li class="menu-icon-190 menu-item menu-item--expanded">
                                              
                                                    <ul class="menu">
                                                        <li class="menu-icon-193 menu-item">
                                                            <a
                                                                href="{{ route("site.aboutInamet") }}"
                                                                title="Sobre o INAMET"
                                                                
                                                                >Sobre o INAMET</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-196 menu-item">
                                                            <a
                                                                href="{{ route("site.principal") }}"
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
                                                title="Clima"
                                                data-drupal-link-system-path="node/42497"
                                                >Clima</a
                                            >
                                            <ul class="menu">
                                               
                                              
                                           
                                                <li class="menu-icon-190 menu-item menu-item--expanded">
                                              
                                                    <ul class="menu">
                                                        <li class="menu-icon-193 menu-item">
                                                            <a
                                                                href="{{ route("site.weatherForecast") }}"
                                                                title="Previsão Climática"
                                                                
                                                                >Previsão Climática</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-196 menu-item">
                                                            <a
                                                                href="{{ route("site.monitoring") }}"
                                                                title="Monitoramento"
                                                               
                                                                >Monitoramento</a
                                                            >
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                               
                                            </ul>
                                        </li>

                                        <li class="menu-icon-466 menu-item">
                                            <a href="{{ route("site.weather") }}" >Tempo</a>
                                        </li>

                                        <li class="menu-icon-466 menu-item">
                                            <a href="{{ route("site.weatherWarning") }}" >Avisos metereológico</a>
                                        </li>

                                          <li class="menu-icon-466 menu-item">
                                            <a href="{{ route("site.satellite") }}" >Satélites</a>
                                        </li>

                                           <li class="menu-icon-466 menu-item">
                                            <a href="{{ route("site.seasonal") }}" >Previsão sazonal</a>
                                        </li>

                                           <li class="menu-icon-466 menu-item">
                                            <a href="{{ route("site.prediction") }}" >Previsão numérica</a>
                                        </li>

                                           <li class="menu-icon-466 menu-item">
                                            <a href="{{ route("site.waves") }}" >Ondas</a>
                                        </li>

                                           <li class="menu-icon-466 menu-item">
                                            <a href="{{ route("site.earthquake") }}" >Sismos</a>
                                        </li>

                                         

                                        <li class="menu-icon-5 menu-item menu-item--expanded">
                                            <a
                                                href="#"
                                                class="fas fa-file"
                                             
                                                >Informações</a
                                            >
                                            <ul class="menu">
                                                <li class="menu-icon-57 menu-item menu-item--expanded">
                                                  
                                                    <ul class="menu">
                                                        <li class="menu-icon-45 menu-item">
                                                            <a
                                                                href="{{ route("site.publication") }}"
                                                                
                                                                >Publicações</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-43 menu-item">
                                                            <a
                                                                href="{{ route("site.news") }}"
                                                                
                                                                >Notícias</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-49 menu-item">
                                                            <a
                                                                href="{{ route("site.project") }}"
                                                
                                                                >Projectos</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-50 menu-item">
                                                            <a
                                                                href="{{ route("site.gallery") }}"
                                                                >Galeria</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-51 menu-item">
                                                            <a
                                                                href="{{ route("site.videos") }}"
                                                               
                                                                >Vídeos</a
                                                            >
                                                        </li>
                                                        <li class="menu-icon-80 menu-item">
                                                            <a
                                                                href="{{ route("site.contact") }}"
                                                                
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
                                    aria-label="Menu Lateral"
                                    title="Menu Lateral"
                                    class="toggle_sidebar_menu"
                                    role="button"
                                ></button>
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
                                            href="{{ route("site.home") }}"
                                            >Home</a
                                        >
                                    </li>
                                  
                                    <li class="menu-icon-27 menu-item menu-item--expanded">
                                        <a
                                            href="#"
                                            class="no-clickable"
                                            >Sobre</a
                                        >
                                        <ul class="menu">
                                            <li class="menu-icon-146 menu-item">
                                                <a
                                                    href="{{ route("site.aboutInamet") }}"
                                                  
                                                    >Sobre o Inamet</a
                                                >
                                            </li>
                                            <li class="menu-icon-93 menu-item">
                                                <a
                                                    href="{{ route("site.principal") }}"
                                                    
                                                    >Director do Inamet</a
                                                >
                                            </li>
                                            
                                        
                                        </ul>
                                    </li>


                                    <li class="menu-icon-26 menu-item menu-item--expanded">
                                        <a
                                            href="#"
                                            >Clima</a
                                        >
                                        <ul class="menu">
                                            
                                          
                                            <li class="menu-icon-313 menu-item">
                                                <a
                                                    href="{{ route("site.weatherForecast") }}"
                                                    >Previsão Climática</a
                                                >
                                            </li>

                                               <li class="menu-icon-313 menu-item">
                                                <a
                                                    href="{{ route("site.monitoring") }}"
                                                    >Monitoramento</a
                                                >
                                            </li>
                                         
                                        </ul>
                                    </li>
                                 
                                    <li class="menu-icon-476 menu-item">
                                        <a
                                            href="{{ route("site.weather") }}"
                                            >Tempo</a
                                        >
                                    </li>



                                    <li class="menu-icon-478 menu-item">
                                        <a
                                            href="{{ route("site.weatherWarning") }}"
                                            
                                            >Avisos Metereológicos</a
                                        >
                                    </li>


                                    <li class="menu-icon-479 menu-item">
                                        <a
                                            href="{{ route("site.satellite") }}"
                                            
                                            >Satélites</a
                                        >
                                    </li>

                                      <li class="menu-icon-479 menu-item">
                                        <a
                                            href="{{ route("site.seasonal") }}"
                                            
                                            >Previsão Sazonal</a
                                        >
                                    </li>

                                      <li class="menu-icon-479 menu-item">
                                        <a
                                            href="{{ route("site.prediction") }}"
                                            
                                            >Previsão Numérica</a
                                        >
                                    </li>

                                      <li class="menu-icon-479 menu-item">
                                        <a
                                            href="{{ route("site.waves") }}"
                                            
                                            >Ondas</a
                                        >
                                    </li>

                                      <li class="menu-icon-479 menu-item">
                                        <a
                                            href="{{ route("site.earthquake") }}"
                                            
                                            >Sismos</a
                                        >
                                    </li>

                                      <li class="menu-icon-479 menu-item">
                                        <a
                                            href="#"
                                            
                                            >Risco de Incêndio</a
                                        >
                                    </li>


                            
                                    <li class="menu-icon-480 menu-item menu-item--expanded">
                                        <a
                                            href="#"
                                            >Informações</a
                                        >
                                        <ul class="menu">
                                            <li class="menu-icon-481 menu-item">
                                                <a
                                                    href="{{ route("site.publication") }}"
                                                    >Publicações</a
                                                >
                                            </li>
                                            
                                                <li class="menu-icon-481 menu-item">
                                                <a
                                                    href="{{ route("site.news") }}"
                                                    >Notícias</a
                                                >
                                            </li>

                                                <li class="menu-icon-481 menu-item">
                                                <a
                                                    href="{{ route("site.project") }}"
                                                    >Projectos</a
                                                >
                                            </li>

                                                <li class="menu-icon-481 menu-item">
                                                <a
                                                    href="{{ route("site.gallery") }}"
                                                    >Galeria</a
                                                >
                                            </li>

                                                <li class="menu-icon-481 menu-item">
                                                <a
                                                    href="{{ route("site.videos") }}"
                                                    >Vídeos</a
                                                >
                                            </li>

                                                <li class="menu-icon-481 menu-item">
                                                <a
                                                    href="{{ route("site.contact") }}"
                                                    >Contactos</a
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
                                <span id="block-publicmenusocial-menu">Contacte-nos</span>

                                <ul class="menu">
                                    <li class="menu-icon-7 menu-item">
                                        <a
                                            href="{{ $configuration->facebook }}"
                                            class="fa fa-facebook-f-brands"
                                            target="_blank"
                                            title="{{ $configuration->facebook }}"
                                            >Facebook</a
                                        >
                                    </li>
                                    <li class="menu-icon-8 menu-item">
                                        <a
                                            href="{{ $configuration->twitter }}"
                                            class="fa fa-twitter-brands"
                                            target="_blank"
                                            title="{{ $configuration->twitter }}"
                                            >Twitter</a
                                        >
                                    </li>
                                    <li class="menu-icon-9 menu-item">
                                        <a
                                            href="{{ $configuration->linkedin }}"
                                            class="fa fa-linkedin-brands"
                                            target="_blank"
                                            title="{{ $configuration->linkedin }}"
                                            >Linkedin</a
                                        >
                                    </li>
                                    <li class="menu-icon-52 menu-item">
                                        <a
                                            href="{{ $configuration->instagram }}"
                                            class="fa fa-instagram-brands"
                                            target="_blank"
                                            title="{{ $configuration->instagram }}"
                                            >Instagram</a
                                        >
                                    </li>
                                    
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>
                <button aria-label="Fermer le menu" title="Menu Sidebar" id="sidebar_overlay"></button>
