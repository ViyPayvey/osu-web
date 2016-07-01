<?php

/**
 *    Copyright 2016 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed in the hopes of
 *    attracting more community contributions to the core ecosystem of osu!
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'defaults' => [
        'page_description' => 'osu! - Ritme is slechts een *klik* weg!  Met Ouendan/EBA, Taiko en originals gameplay modi, en zelfs een volledig werkend level bewerker.',
    ],

    'menu' => [
        'home' => [
            '_' => 'thuis',
            'getNews' => 'nieuws',
            'getChangelog' => 'changelog',
            'getDownload' => 'downloaden',
            'getIcons' => 'iconen',
            'supportTheGame' => 'ondersteun het spel',
        ],
        'help' => [
            '_' => 'hulp',
            'getWiki' => 'wiki',
            'getFaq' => 'faq',
            'getSupport' => 'ondersteuning',
        ],
        'beatmaps' => [
            '_' => 'beatmaps',
            'show' => 'info',
            'index' => 'index',
            // 'getPacks' => 'pakketten',
            // 'getCharts' => 'grafieken',
        ],
        'beatmapsets' => [
            '_' => 'beatmapsets',
            'discussion' => 'modden',
        ],
        'ranking' => [
            '_' => 'ranking',
            'getOverall' => 'globaal',
            'getCountry' => 'land',
            'getCharts' => 'grafieken',
            'getMapper' => 'mapper',
            'index' => 'globaal',
        ],
        'community' => [
            '_' => 'community',
            'getForum' => 'forum',
            'getChat' => 'chat',
            'getSupport' => 'ondersteuning',
            'getLive' => 'live',
            'getSlack' => 'osu!dev',
            'profile' => 'profiel',
            'tournaments' => 'toernooien',
            'tournaments-index' => 'toernooien',
            'tournaments-show' => 'toernooi info',
            'forum-topics-create' => 'forum',
            'forum-topics-show' => 'forum',
            'forum-forums-index' => 'forum',
            'forum-forums-show' => 'forum',
        ],
        'error' => [
            '_' => 'fout',
            '404' => 'ontbreekt',
            '403' => 'verboden',
            '401' => 'onbevoegd',
            '405' => 'ontbreekt',
            '500' => 'iets brak',
            '503' => 'onderhoud',
        ],
        'user' => [
            '_' => 'gebruiker',
            'getLogin' => 'inloggen',
            'disabled' => 'inactief',

            'register' => 'registreren',
            'reset' => 'herstellen',
            'new' => 'nieuw',

            'messages' => 'Berichten',
            'settings' => 'Instellingen',
            'logout' => 'Uitloggen',
            'help' => 'Hulp',
        ],
        'store' => [
            '_' => 'winkel',
            'getListing' => 'index',
            'getCart' => 'winkelmand',

            'getCheckout' => 'afrekenen',
            'getInvoice' => 'factuur',
            'getProduct' => 'artikel',

            'new' => 'nieuw',
            'home' => 'thuis',
            'index' => 'thuis',
            'thanks' => 'bedankt',
        ],
        'admin-forum' => [
            '_' => 'admin::forum',
            'forum-covers-index' => 'forum covers',
        ],
        'admin-store' => [
            '_' => 'admin::store',
            'orders-index' => 'bestellingen',
            'orders-show' => 'bestelling',
        ],
        'admin' => [
            '_' => 'admin',
            'logs-index' => 'log',
            'beatmapsets' => [
                '_' => 'beatmapsets',
                'covers' => 'covers',
                'show' => 'detail',
            ],
        ],
    ],
    'errors' => [
        '404' => [
            'error' => 'Pagina Mist',
            'description' => 'Sorry, de pagina die je opvroeg is hier niet!',
            'link' => false,
        ],
        '403' => [
            'error' => 'Jij hoort hier niet.',
            'description' => 'Je zou terug kunnen gaan.',
            'link' => false,
        ],
        '401' => [
            'error' => 'Jij hoort hier niet.',
            'description' => 'Je zou terug kunnen gaan. Of misschien zou je kunnen inloggen.',
            'link' => false,
        ],
        '405' => [
            'error' => 'Pagina Mist',
            'description' => 'Sorry, de pagina die je opvroeg is hier niet!',
            'link' => false,
        ],
        '500' => [
            'error' => 'Oh nee! Iets brak! ;_;',
            'description' => 'We worden automatisch op de hoogte gesteld van alle fouten.',
            'link' => false,
        ],
        'fatal' => [
            'error' => 'Oh nee! Iets brak (heel erg)! ;_;',
            'description' => 'We worden automatisch op de hoogte gesteld van alle fouten.',
            'link' => false,
        ],
        '503' => [
            'error' => 'Offline voor onderhoud!',
            'description' => 'Onderhoud duurt meestal van ongeveer 5 seconden tot 10 minuten. Als we langer offline zijn, check :link voor meer informatie.',
            'link' => [
                'text' => '@osustatus',
                'href' => 'https://twitter.com/osustatus',
            ],
        ],
        // used by sentry if it returns an error
        'reference' => 'Hier is een code die je aan de helpdesk kan geven, voor de zekerheid!',
    ],
];
