<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/panier' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/panier/add' => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::addToCart'], null, null, null, false, false, null]],
        '/panier/clear' => [[['_route' => 'cart_clear', '_controller' => 'App\\Controller\\CartController::clearCart'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::homepage'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'product_list', '_controller' => 'App\\Controller\\ProductController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/produits/([^/]++)(*:25)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [
            [['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
