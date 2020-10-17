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
        '/admin' => [[['_route' => 'admin_main_page', '_controller' => 'App\\Controller\\Admin\\MainController::index'], null, null, null, true, false, null]],
        '/admin/videos' => [[['_route' => 'videos', '_controller' => 'App\\Controller\\Admin\\MainController::videos'], null, null, null, false, false, null]],
        '/admin/cancel-plan' => [[['_route' => 'cancel_plan', '_controller' => 'App\\Controller\\Admin\\MainController::cancelPlan'], null, null, null, false, false, null]],
        '/admin/delete-account' => [[['_route' => 'delete_account', '_controller' => 'App\\Controller\\Admin\\MainController::deleteAccount'], null, null, null, false, false, null]],
        '/admin/su/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::categories'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/su/upload-video' => [[['_route' => 'upload_video', '_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::uploadVideo'], null, null, null, false, false, null]],
        '/admin/su/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::users'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main_page', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/pricing' => [[['_route' => 'pricing', '_controller' => 'App\\Controller\\SubscriptionController::pricing'], null, null, null, false, false, null]],
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
                .'|/admin/su/(?'
                    .'|edit\\-category/([^/]++)(*:205)'
                    .'|delete\\-category/([^/]++)(*:238)'
                .')'
                .'|/video\\-(?'
                    .'|list/(?'
                        .'|category/([^/,]++),([^/]++)(?:/([^/]++))?(*:307)'
                        .'|([^/]++)/(?'
                            .'|like(*:331)'
                            .'|dislike(*:346)'
                            .'|un(?'
                                .'|like(*:363)'
                                .'|dodislike(*:380)'
                            .')'
                        .')'
                    .')'
                    .'|details/([^/]++)(*:407)'
                .')'
                .'|/new\\-comment/([^/]++)(*:438)'
                .'|/search\\-results(?:/([^/]++))?(*:476)'
                .'|/register/([^/]++)(*:502)'
                .'|/payment(?:/([^/]++))?(*:532)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        205 => [[['_route' => 'edit_category', '_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::editCategory'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        238 => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'video_list', 'page' => '1', '_controller' => 'App\\Controller\\FrontController::videoList'], ['categoryname', 'id', 'page'], null, null, false, true, null]],
        331 => [[['_route' => 'like_video', '_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], ['video'], ['POST' => 0], null, false, false, null]],
        346 => [[['_route' => 'dislike_video', '_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], ['video'], ['POST' => 0], null, false, false, null]],
        363 => [[['_route' => 'undo_like_video', '_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], ['video'], ['POST' => 0], null, false, false, null]],
        380 => [[['_route' => 'undo_dislike_video', '_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], ['video'], ['POST' => 0], null, false, false, null]],
        407 => [[['_route' => 'video_details', '_controller' => 'App\\Controller\\FrontController::videoDetails'], ['video'], null, null, false, true, null]],
        438 => [[['_route' => 'new_comment', '_controller' => 'App\\Controller\\FrontController::newComment'], ['video'], ['POST' => 0], null, false, true, null]],
        476 => [[['_route' => 'search_results', 'page' => '1', '_controller' => 'App\\Controller\\FrontController::searchResults'], ['page'], ['GET' => 0], null, false, true, null]],
        502 => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], ['plan'], null, null, false, true, null]],
        532 => [
            [['_route' => 'payment', 'paypal' => false, '_controller' => 'App\\Controller\\SubscriptionController::payment'], ['paypal'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
