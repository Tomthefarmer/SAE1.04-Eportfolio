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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/containaire' => [[['_route' => 'app_containaire', '_controller' => 'App\\Controller\\ContainaireController::index'], null, null, null, false, false, null]],
        '/en/accueil' => [[['_route' => 'app_en_accueil', '_controller' => 'App\\Controller\\EnAccueilController::index'], null, null, null, false, false, null]],
        '/en/apropos' => [[['_route' => 'app_en_apropos', '_controller' => 'App\\Controller\\EnAproposController::index'], null, null, null, false, false, null]],
        '/en/competence' => [[['_route' => 'app_en_competence', '_controller' => 'App\\Controller\\EnCompetenceController::index'], null, null, null, false, false, null]],
        '/en/connexion' => [[['_route' => 'app_en_connexion', '_controller' => 'App\\Controller\\EnConnexionController::index'], null, null, null, false, false, null]],
        '/en/cv' => [[['_route' => 'app_en_cv', '_controller' => 'App\\Controller\\EnCvController::index'], null, null, null, false, false, null]],
        '/fr/accueil' => [[['_route' => 'app_fr_accueil', '_controller' => 'App\\Controller\\FrAccueilController::index'], null, null, null, false, false, null]],
        '/fr/apropos' => [[['_route' => 'app_fr_apropos', '_controller' => 'App\\Controller\\FrAproposController::index'], null, null, null, false, false, null]],
        '/fr/competence' => [[['_route' => 'app_fr_competence', '_controller' => 'App\\Controller\\FrCompetenceController::index'], null, null, null, false, false, null]],
        '/fr/connexion' => [[['_route' => 'app_fr_connexion', '_controller' => 'App\\Controller\\FrConnexionController::index'], null, null, null, false, false, null]],
        '/fr/cv' => [[['_route' => 'app_fr_cv', '_controller' => 'App\\Controller\\FrCvController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
