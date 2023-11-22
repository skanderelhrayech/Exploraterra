<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/billet' => [[['_route' => 'app_billet_index', '_controller' => 'App\\Controller\\BilletController::index'], null, ['GET' => 0], null, true, false, null]],
        '/billet/new' => [[['_route' => 'app_billet_new', '_controller' => 'App\\Controller\\BilletController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_vol_index_front', '_controller' => 'App\\Controller\\FrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/hotel' => [[['_route' => 'app_hotel_index', '_controller' => 'App\\Controller\\HotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hotel/new' => [[['_route' => 'app_hotel_new', '_controller' => 'App\\Controller\\HotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restaurant' => [[['_route' => 'app_restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/restaurant/new' => [[['_route' => 'app_restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type/reclamation' => [[['_route' => 'app_type_reclamation_index', '_controller' => 'App\\Controller\\TypeReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/reclamation/new' => [[['_route' => 'app_type_reclamation_new', '_controller' => 'App\\Controller\\TypeReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vol' => [[['_route' => 'app_vol_index', '_controller' => 'App\\Controller\\VolController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vol/new' => [[['_route' => 'app_vol_new', '_controller' => 'App\\Controller\\VolController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/billet/([^/]++)(?'
                    .'|(*:26)'
                    .'|/edit(*:38)'
                    .'|(*:45)'
                .')'
                .'|/categorie/([^/]++)(?'
                    .'|(*:75)'
                    .'|/edit(*:87)'
                    .'|(*:94)'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|(*:124)'
                    .'|/edit(*:137)'
                    .'|(*:145)'
                .')'
                .'|/hotel/([^/]++)(?'
                    .'|(*:172)'
                    .'|/edit(*:185)'
                    .'|(*:193)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:229)'
                        .'|/edit(*:242)'
                        .'|(*:250)'
                    .')'
                    .'|staurant/([^/]++)(?'
                        .'|(*:279)'
                        .'|/edit(*:292)'
                        .'|(*:300)'
                    .')'
                .')'
                .'|/type/reclamation/([^/]++)(?'
                    .'|(*:339)'
                    .'|/edit(*:352)'
                    .'|(*:360)'
                .')'
                .'|/vol/([^/]++)(?'
                    .'|(*:385)'
                    .'|/edit(*:398)'
                    .'|(*:406)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:446)'
                    .'|wdt/([^/]++)(*:466)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:512)'
                            .'|router(*:526)'
                            .'|exception(?'
                                .'|(*:546)'
                                .'|\\.css(*:559)'
                            .')'
                        .')'
                        .'|(*:569)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_billet_show', '_controller' => 'App\\Controller\\BilletController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        38 => [[['_route' => 'app_billet_edit', '_controller' => 'App\\Controller\\BilletController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        45 => [[['_route' => 'app_billet_delete', '_controller' => 'App\\Controller\\BilletController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        75 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        87 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        94 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        124 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        137 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        145 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        172 => [[['_route' => 'app_hotel_show', '_controller' => 'App\\Controller\\HotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        185 => [[['_route' => 'app_hotel_edit', '_controller' => 'App\\Controller\\HotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        193 => [[['_route' => 'app_hotel_delete', '_controller' => 'App\\Controller\\HotelController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        229 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        250 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [[['_route' => 'app_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        339 => [[['_route' => 'app_type_reclamation_show', '_controller' => 'App\\Controller\\TypeReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        352 => [[['_route' => 'app_type_reclamation_edit', '_controller' => 'App\\Controller\\TypeReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        360 => [[['_route' => 'app_type_reclamation_delete', '_controller' => 'App\\Controller\\TypeReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        385 => [[['_route' => 'app_vol_show', '_controller' => 'App\\Controller\\VolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'app_vol_edit', '_controller' => 'App\\Controller\\VolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [[['_route' => 'app_vol_delete', '_controller' => 'App\\Controller\\VolController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        446 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        466 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        512 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        526 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        546 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        559 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        569 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
