<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/b/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::affiche'], null, null, null, false, false, null]],
        '/b/bloglist' => [[['_route' => 'bloglist', '_controller' => 'App\\Controller\\BlogController::affichelist'], null, null, null, false, false, null]],
        '/b/blogD' => [[['_route' => 'Topnews', '_controller' => 'App\\Controller\\BlogController::affichenews'], null, null, null, false, false, null]],
        '/b/blogV' => [[['_route' => 'Topvue', '_controller' => 'App\\Controller\\BlogController::affichevue'], null, null, null, false, false, null]],
        '/b/add' => [[['_route' => 'ajouter', '_controller' => 'App\\Controller\\BlogController::addBlog'], null, null, null, false, false, null]],
        '/b/stats' => [[['_route' => 'stats', '_controller' => 'App\\Controller\\BlogController::afficheBlogg'], null, null, null, false, false, null]],
        '/b/search_ajax' => [[['_route' => 'search_ajaxblog', '_controller' => 'App\\Controller\\BlogController::searchAction'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/categorie/back' => [[['_route' => 'categorie_index_back', '_controller' => 'App\\Controller\\CategorieController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/all' => [[['_route' => 'findcategorie', '_controller' => 'App\\Controller\\CategorieController::findcategorie'], null, null, null, false, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/cat/ajax' => [[['_route' => 'rechercheajax', '_controller' => 'App\\Controller\\CategorieController::recherche'], null, null, null, false, false, null]],
        '/categorie/cat/ajaxxx' => [[['_route' => 'rechercheajaxBack', '_controller' => 'App\\Controller\\CategorieController::rechercheBack'], null, null, null, false, false, null]],
        '/commande/payonline' => [[['_route' => 'payonline', '_controller' => 'App\\Controller\\CommandeController::pay'], null, null, null, false, false, null]],
        '/commande/success' => [[['_route' => 'success', '_controller' => 'App\\Controller\\CommandeController::success'], null, null, null, false, false, null]],
        '/commande/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\CommandeController::error'], null, null, null, false, false, null]],
        '/commande/create-checkout-session' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\CommandeController::checkout'], null, null, null, false, false, null]],
        '/commande/test1' => [[['_route' => 'test1', '_controller' => 'App\\Controller\\CommandeController::back'], null, null, null, false, false, null]],
        '/commande/imprimer' => [[['_route' => 'impp', '_controller' => 'App\\Controller\\CommandeController::DownloadCmd'], null, ['GET' => 0], null, false, false, null]],
        '/commande/showback' => [[['_route' => 'commande_showback', '_controller' => 'App\\Controller\\CommandeController::showback'], null, ['GET' => 0], null, false, false, null]],
        '/commande' => [[['_route' => 'commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire' => [[['_route' => 'commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/newcomm' => [[['_route' => 'commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event/search' => [[['_route' => 'searchrdvvv', '_controller' => 'App\\Controller\\EventController::searchrdvvv'], null, null, null, false, false, null]],
        '/event/Recherche' => [[['_route' => 'Recherche', '_controller' => 'App\\Controller\\EventController::home'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/eventback' => [[['_route' => 'event_indexback', '_controller' => 'App\\Controller\\EventController::indexback'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/affiche' => [[['_route' => 'affiche', '_controller' => 'App\\Controller\\ExposeeController::afficheExposee'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => '', '_controller' => 'App\\Controller\\ExposeeController::afficheExp'], null, null, null, false, false, null],
            [['_route' => 'home', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null],
        ],
        '/exposee' => [[['_route' => 'exposee', '_controller' => 'App\\Controller\\ExposeeController::afficheExposee2'], null, null, null, false, false, null]],
        '/afficheE' => [[['_route' => 'afficheE', '_controller' => 'App\\Controller\\ExposeeController::afficheExposee1'], null, null, null, false, false, null]],
        '/trie' => [[['_route' => 'trie', '_controller' => 'App\\Controller\\ExposeeController::TRie'], null, null, null, false, false, null]],
        '/trieex' => [[['_route' => 'trieex', '_controller' => 'App\\Controller\\ExposeeController::Trieex'], null, null, null, false, false, null]],
        '/ajouterExposee' => [[['_route' => 'ajouterEx', '_controller' => 'App\\Controller\\ExposeeController::ajouter'], null, null, null, false, false, null]],
        '/search_ajax' => [[['_route' => 'search_ajax', '_controller' => 'App\\Controller\\ExposeeController::searchAction'], null, null, null, false, false, null]],
        '/gmusee/back' => [[['_route' => 'gmusee_index_back', '_controller' => 'App\\Controller\\GmuseeController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/gmusee' => [[['_route' => 'gmusee_index', '_controller' => 'App\\Controller\\GmuseeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gmusee/new' => [[['_route' => 'gmusee_new', '_controller' => 'App\\Controller\\GmuseeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gmuseesearch' => [[['_route' => 'searchStudentx', '_controller' => 'App\\Controller\\GmuseeController::search'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'showcart', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, null, null, false, false, null]],
        '/liste' => [[['_route' => 'showproduit', '_controller' => 'App\\Controller\\ProduitController::listProduit'], null, null, null, false, false, null]],
        '/produitajaxxx/mahmoud' => [[['_route' => 'searchrdvzz', '_controller' => 'App\\Controller\\ProduitController::searchrdvvv'], null, null, null, false, false, null]],
        '/question/cat/wissem' => [[['_route' => 'rechercheajaxQuestion', '_controller' => 'App\\Controller\\QuestionController::recherchequestion'], null, null, null, false, false, null]],
        '/question/cat/ajaxxxx' => [[['_route' => 'rechercheajaxBackQuestion', '_controller' => 'App\\Controller\\QuestionController::rechercheBack'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\RegistrationController::affichetheUser'], null, null, null, false, false, null]],
        '/afficheU' => [[['_route' => 'afficheU', '_controller' => 'App\\Controller\\RegistrationController::afficheUser'], null, null, null, false, false, null]],
        '/best' => [[['_route' => 'best', '_controller' => 'App\\Controller\\ReponseLikeController::back'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::oubliPass'], null, null, null, false, false, null]],
        '/siteh/back' => [[['_route' => 'siteh_index_back', '_controller' => 'App\\Controller\\SitehController::index'], null, ['GET' => 0], null, false, false, null]],
        '/siteh' => [[['_route' => 'siteh_index', '_controller' => 'App\\Controller\\SitehController::indexback'], null, ['GET' => 0], null, true, false, null]],
        '/siteh/new' => [[['_route' => 'siteh_new', '_controller' => 'App\\Controller\\SitehController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|ddComment/([^/]++)(*:192)'
                    .'|fficheEX/([^/]++)(*:217)'
                    .'|ctivation/([^/]++)(*:243)'
                .')'
                .'|/b/(?'
                    .'|blog(?'
                        .'|T/([^/]++)(*:275)'
                        .'|/([^/]++)(*:292)'
                    .')'
                    .'|update/([^/]++)(*:316)'
                    .'|d/([^/]++)(*:334)'
                .')'
                .'|/c(?'
                    .'|ategorie/(?'
                        .'|([^/]++)(?'
                            .'|(*:371)'
                            .'|/(?'
                                .'|edit(?'
                                    .'|(*:390)'
                                    .'|Back(*:402)'
                                .')'
                                .'|back(*:415)'
                            .')'
                            .'|(*:424)'
                        .')'
                        .'|triH(*:437)'
                    .')'
                    .'|omm(?'
                        .'|ande/(?'
                            .'|new(?'
                                .'|([^/]++)(*:474)'
                                .'|back(*:486)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:506)'
                                .'|/edit(?'
                                    .'|(*:522)'
                                    .'|back(*:534)'
                                .')'
                                .'|(*:543)'
                            .')'
                            .'|test(*:556)'
                        .')'
                        .'|entaire/([^/]++)(?'
                            .'|(*:584)'
                            .'|/edit(*:597)'
                            .'|(*:605)'
                        .')'
                    .')'
                .')'
                .'|/event/(?'
                    .'|participer([^/]++)(*:644)'
                    .'|annuler([^/]++)(*:667)'
                    .'|([^/]++)(*:683)'
                    .'|back/([^/]++)(*:704)'
                    .'|([^/]++)(?'
                        .'|/edit(*:728)'
                        .'|(*:736)'
                    .')'
                    .'|back(*:749)'
                    .'|([^/]++)(*:765)'
                .')'
                .'|/s(?'
                    .'|upp(?'
                        .'|e/([^/]++)(*:795)'
                        .'|rime/image/([^/]++)/([^/]++)(*:831)'
                        .'|U/([^/]++)(?'
                            .'|(*:852)'
                        .')'
                    .')'
                    .'|iteh/(?'
                        .'|([^/]++)(?'
                            .'|(*:881)'
                            .'|/edit(*:894)'
                            .'|(*:902)'
                        .')'
                        .'|blog/([^/]++)(*:924)'
                        .'|searchSiteh(*:943)'
                    .')'
                .')'
                .'|/u(?'
                    .'|pdate\\.twig\\.html/([^/]++)(*:984)'
                    .'|ser/update(?'
                        .'|User\\.twig\\.html/([^/]++)(*:1030)'
                        .'|\\.twig\\.html/([^/]++)(*:1060)'
                    .')'
                .')'
                .'|/gmusee/(?'
                    .'|([^/]++)(?'
                        .'|(*:1093)'
                        .'|/edit(*:1107)'
                        .'|(*:1116)'
                    .')'
                    .'|blog/([^/]++)(*:1139)'
                    .'|supprime/image/([^/]++)(*:1171)'
                .')'
                .'|/panier/(?'
                    .'|add/([^/]++)(*:1204)'
                    .'|remove/([^/]++)(*:1228)'
                .')'
                .'|/question/(?'
                    .'|categorie(?'
                        .'|/([^/]++)(*:1272)'
                        .'|back/([^/]++)(*:1294)'
                    .')'
                    .'|new/([^/]++)/test(*:1321)'
                    .'|([^/]++)(?'
                        .'|(*:1341)'
                        .'|/(?'
                            .'|edit(?'
                                .'|(*:1361)'
                                .'|Back(*:1374)'
                            .')'
                            .'|delete(*:1390)'
                        .')'
                        .'|(*:1400)'
                    .')'
                .')'
                .'|/re(?'
                    .'|ponse/(?'
                        .'|([^/]++)/test(?'
                            .'|(*:1442)'
                            .'|Back(*:1455)'
                        .')'
                        .'|new([^/]++)(*:1476)'
                        .'|([^/]++)(?'
                            .'|(*:1496)'
                            .'|/edit(?'
                                .'|(*:1513)'
                                .'|Back(*:1526)'
                            .')'
                            .'|(*:1536)'
                        .')'
                        .'|like(?'
                            .'|(*:1553)'
                            .'|add([^/]++)/([^/]++)/([^/]++)(*:1591)'
                        .')'
                    .')'
                    .'|set_pass/([^/]++)(*:1619)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'ajouterC', '_controller' => 'App\\Controller\\BlogCommentController::addComment'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'afficheEX', '_controller' => 'App\\Controller\\ExposeeController::afficherEx'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\RegistrationController::activation'], ['code'], null, null, false, true, null]],
        275 => [[['_route' => 'tags', '_controller' => 'App\\Controller\\BlogController::affichebytags'], ['tag'], null, null, false, true, null]],
        292 => [[['_route' => 'aff', '_controller' => 'App\\Controller\\BlogController::afficheBlog'], ['id'], null, null, false, true, null]],
        316 => [[['_route' => 'updateblog', '_controller' => 'App\\Controller\\BlogController::updateBlog'], ['id'], null, null, false, true, null]],
        334 => [[['_route' => 'dblog', '_controller' => 'App\\Controller\\BlogController::supprimerBlog'], ['id'], null, null, false, true, null]],
        371 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        402 => [[['_route' => 'categorie_edit_Back', '_controller' => 'App\\Controller\\CategorieController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        415 => [[['_route' => 'categorie_delete_back', '_controller' => 'App\\Controller\\CategorieController::deleteBack'], ['id'], ['DELETE' => 0], null, false, false, null]],
        424 => [
            [['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'categorieDelete', '_controller' => 'App\\Controller\\CategorieController::deleteC'], ['id'], null, null, false, true, null],
        ],
        437 => [[['_route' => 'trih', '_controller' => 'App\\Controller\\CategorieController::Tri'], [], null, null, false, false, null]],
        474 => [[['_route' => 'commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        486 => [[['_route' => 'commande_newback', '_controller' => 'App\\Controller\\CommandeController::newback'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        506 => [[['_route' => 'commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        534 => [[['_route' => 'commande_editback', '_controller' => 'App\\Controller\\CommandeController::editback'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        543 => [[['_route' => 'commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        556 => [[['_route' => 'test', '_controller' => 'App\\Controller\\CommandeController::test'], [], null, null, false, false, null]],
        584 => [[['_route' => 'commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        597 => [[['_route' => 'commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        605 => [[['_route' => 'commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        644 => [[['_route' => 'event_participer', '_controller' => 'App\\Controller\\EventController::participerAction'], ['id'], ['GET' => 0], null, false, true, null]],
        667 => [[['_route' => 'event_annuler', '_controller' => 'App\\Controller\\EventController::annulerParticipationAction'], ['id'], ['GET' => 0], null, false, true, null]],
        683 => [[['_route' => 'event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], null, null, false, true, null]],
        704 => [[['_route' => 'event_showback', '_controller' => 'App\\Controller\\EventController::showback'], ['id'], null, null, false, true, null]],
        728 => [[['_route' => 'event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        736 => [[['_route' => 'event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        749 => [[['_route' => 'back', '_controller' => 'App\\Controller\\EventController::affiche'], [], null, null, false, false, null]],
        765 => [[['_route' => 'event_signal', '_controller' => 'App\\Controller\\EventController::signalAction'], ['id'], null, null, false, true, null]],
        795 => [[['_route' => 'd', '_controller' => 'App\\Controller\\ExposeeController::supprimer'], ['id'], null, null, false, true, null]],
        831 => [[['_route' => 'annonces_delete_image', '_controller' => 'App\\Controller\\ExposeeController::deleteImage'], ['id', 'idPhotos'], null, null, false, true, null]],
        852 => [
            [['_route' => 'dprofile', '_controller' => 'App\\Controller\\RegistrationController::deleteProfile'], ['id'], null, null, false, true, null],
            [['_route' => 'dU', '_controller' => 'App\\Controller\\RegistrationController::deleteEvent'], ['id'], null, null, false, true, null],
        ],
        881 => [[['_route' => 'siteh_show', '_controller' => 'App\\Controller\\SitehController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        894 => [[['_route' => 'siteh_edit', '_controller' => 'App\\Controller\\SitehController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        902 => [[['_route' => 'siteh_delete', '_controller' => 'App\\Controller\\SitehController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        924 => [[['_route' => 'siteh_index1', '_controller' => 'App\\Controller\\SitehController::index1'], ['index1'], null, null, false, true, null]],
        943 => [[['_route' => 'searchSiteh', '_controller' => 'App\\Controller\\SitehController::searchSiteh'], [], null, null, false, false, null]],
        984 => [[['_route' => 'update', '_controller' => 'App\\Controller\\ExposeeController::modifier'], ['id'], null, null, false, true, null]],
        1030 => [[['_route' => 'updateU', '_controller' => 'App\\Controller\\RegistrationController::modifier'], ['id'], null, null, false, true, null]],
        1060 => [[['_route' => 'updateprofile', '_controller' => 'App\\Controller\\RegistrationController::modifierProfil'], ['id'], null, null, false, true, null]],
        1093 => [[['_route' => 'gmusee_show', '_controller' => 'App\\Controller\\GmuseeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1107 => [[['_route' => 'gmusee_edit', '_controller' => 'App\\Controller\\GmuseeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1116 => [[['_route' => 'gmusee_delete', '_controller' => 'App\\Controller\\GmuseeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1139 => [[['_route' => 'gmusee_index1', '_controller' => 'App\\Controller\\GmuseeController::index1'], ['index1'], null, null, false, true, null]],
        1171 => [[['_route' => 'gmusee_delete_image', '_controller' => 'App\\Controller\\GmuseeController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1204 => [[['_route' => 'Paniers', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        1228 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\PanierController::removeP'], ['id'], null, null, false, true, null]],
        1272 => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::index'], ['idcategorie'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1294 => [[['_route' => 'question_index_back', '_controller' => 'App\\Controller\\QuestionController::indexBack'], ['idcategorie'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1321 => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], ['idcategorie'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1341 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1361 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1374 => [[['_route' => 'question_edit_back', '_controller' => 'App\\Controller\\QuestionController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1390 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1400 => [[['_route' => 'question_delete_back', '_controller' => 'App\\Controller\\QuestionController::deleteBack'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1442 => [[['_route' => 'reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], ['idquestion'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1455 => [[['_route' => 'reponse_index_back', '_controller' => 'App\\Controller\\ReponseController::indexBack'], ['idquestion'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1476 => [[['_route' => 'reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['idquestion'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1496 => [[['_route' => 'reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1513 => [[['_route' => 'reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1526 => [[['_route' => 'reponse_edit_back', '_controller' => 'App\\Controller\\ReponseController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1536 => [
            [['_route' => 'reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'reponse_delete_back', '_controller' => 'App\\Controller\\ReponseController::deleteBack'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1553 => [[['_route' => 'reponse_like', '_controller' => 'App\\Controller\\ReponseLikeController::index'], [], null, null, false, false, null]],
        1591 => [[['_route' => 'addreaction', '_controller' => 'App\\Controller\\ReponseLikeController::addreaction'], ['idquestion', 'idreponse', 'reaction'], null, null, false, true, null]],
        1619 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
