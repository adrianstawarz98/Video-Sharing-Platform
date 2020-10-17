<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_main_page' => [[], ['_controller' => 'App\\Controller\\Admin\\MainController::index'], [], [['text', '/admin/']], [], []],
    'videos' => [[], ['_controller' => 'App\\Controller\\Admin\\MainController::videos'], [], [['text', '/admin/videos']], [], []],
    'cancel_plan' => [[], ['_controller' => 'App\\Controller\\Admin\\MainController::cancelPlan'], [], [['text', '/admin/cancel-plan']], [], []],
    'delete_account' => [[], ['_controller' => 'App\\Controller\\Admin\\MainController::deleteAccount'], [], [['text', '/admin/delete-account']], [], []],
    'categories' => [[], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::categories'], [], [['text', '/admin/su/categories']], [], []],
    'edit_category' => [['id'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::editCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/su/edit-category']], [], []],
    'delete_category' => [['id'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::deleteCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/su/delete-category']], [], []],
    'upload_video' => [[], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::uploadVideo'], [], [['text', '/admin/su/upload-video']], [], []],
    'users' => [[], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::users'], [], [['text', '/admin/su/users']], [], []],
    'main_page' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], []],
    'video_list' => [['categoryname', 'id', 'page'], ['page' => '1', '_controller' => 'App\\Controller\\FrontController::videoList'], [], [['variable', '/', '[^/]++', 'page', true], ['variable', ',', '[^/]++', 'id', true], ['variable', '/', '[^/,]++', 'categoryname', true], ['text', '/video-list/category']], [], []],
    'video_details' => [['video'], ['_controller' => 'App\\Controller\\FrontController::videoDetails'], [], [['variable', '/', '[^/]++', 'video', true], ['text', '/video-details']], [], []],
    'new_comment' => [['video'], ['_controller' => 'App\\Controller\\FrontController::newComment'], [], [['variable', '/', '[^/]++', 'video', true], ['text', '/new-comment']], [], []],
    'search_results' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\FrontController::searchResults'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/search-results']], [], []],
    'like_video' => [['video'], ['_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], [], [['text', '/like'], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-list']], [], []],
    'dislike_video' => [['video'], ['_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], [], [['text', '/dislike'], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-list']], [], []],
    'undo_like_video' => [['video'], ['_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], [], [['text', '/unlike'], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-list']], [], []],
    'undo_dislike_video' => [['video'], ['_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], [], [['text', '/undodislike'], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-list']], [], []],
    'register' => [['plan'], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['variable', '/', '[^/]++', 'plan', true], ['text', '/register']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'pricing' => [[], ['_controller' => 'App\\Controller\\SubscriptionController::pricing'], [], [['text', '/pricing']], [], []],
    'payment' => [['paypal'], ['paypal' => false, '_controller' => 'App\\Controller\\SubscriptionController::payment'], [], [['variable', '/', '[^/]++', 'paypal', true], ['text', '/payment']], [], []],
];
