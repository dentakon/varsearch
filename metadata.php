<?php
/**
 * @TODO LICENCE HERE
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'VarSearch',
    'title'       => array(
        'de' => 'Variantensuche',
        'en' => 'Varsearch',
    ),
    'description' => array(
        'de' => '<h2>Modul zum Anzeigen von Variantenartikeln bei der Suche</h2>',
        'en' => '<h2>Module to show variants by article search</h2>',
    ),
    'thumbnail'   => 'out/pictures/',
    'version'     => '1.0.0',
    'author'      => 'David Hennig | Dentakon dentale Konzepte',
    'url'         => 'https://www.dentakon.de',
    'email'       => 'davidhennig@dentakon.de',
    'extend'      => array(
	    \OxidEsales\Eshop\Application\Controller\SearchController::class => \dentakon\VarSearch\Application\Controller\VarSearchController::class,
	    \OxidEsales\Eshop\Application\Model\Search::class => \dentakon\VarSearch\Application\Model\Varsearch::class,
    ),

    'controllers' => array(
    ),

    'templates'   => array(
    ),
    'blocks'      => array(
    ),
    'settings'    => array(),
    'events' => array(),
);
