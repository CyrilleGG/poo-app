<?php


// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));

require APPLICATION_PATH . '/lib/autoload.php';
require APPLICATION_PATH . '/config.php';
// require APPLICATION_PATH . '/vendor/autoload.php';

use Lib\Client;

//Démarrage de la session en PHP
session_start();

// Initialisation du Router afin de capter les URLs disponibles
$router = new Router();

// ================ ACCUEIL ==================
$router->addRoute(array(
    'route' => '^/$',
    'GET'   => array('IndexController', 'index')
));







// ================ LIVRAISON ==================
$router->addRoute(array(
    'route' => '^/livraison$',
    'GET'   => array('LivraisonController', 'livrer')
));

$router->addRoute(array(
    'route' => '^/livraison$',
    'POST'   => array('LivraisonController', 'livrer')
));


// ================ PAIEMENT ==================
$router->addRoute(array(
    'route' => '^/paiement$',
    'POST'   => array('LivraisonController', 'confirmation')
));

$router->addRoute(array(
    'route' => '^/paiement$',
    'GET'   => array('PaiementController', 'payer')
));

$router->addRoute(array(
    'route' => '^/paiement$',
    'POST'   => array('PaiementController', 'payer')
));

$router->addRoute(array(
    'route' => '^/paiement-confirmation$',
    'POST'   => array('PaiementController', 'confirmation')
));
// =======================================================

// ================ PLATS ==================
$router->addRoute(array(
    'route' => '^/plat$',
    'ALL'   => array('PlatController', 'get') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route' => '^/checkout',
    'ALL'   => array('PlatController', 'checkout') // Classe IndexController, Méthode index
));
// =======================================================

// ================ INSCRIPTION NEWSLETTER ==================
$router->addRoute(array(
    'route' => '^/newsletter$',
    'GET'   => array('NewsletterController', 'inscription')
));

$router->addRoute(array(
    'route' => '^/newsletter$',
    'POST'   => array('NewsletterController', 'inscription')
));

$router->addRoute(array(
    'route' => '^/newsletter-inscrit$',
    'POST'   => array('NewsletterController', 'inscrit')
));
// =======================================================










// ======================= ADMINISTRATION =====================
$router->addRoute(array(
    'route' => '^/admin$',
    'GET'   => array('AdminController', 'index')
));

// ======== AUTHENTIFICATION MEMBRES ADMINISTRATION ===========
$router->addRoute(array(
    'route' => '^/admin/login$',
    'GET'   => array('AdminController', 'login')
));
// Authentification des membres - envoie des données en POST
$router->addRoute(array(
    'route'  => '^/admin/login$',
    'POST'   => array('AdminController', 'loginPost') // Classe MembreController, Méthode loginPost
));
// Déconnexion de l'espace membre
$router->addRoute(array(
    'route' => '^/admin/logout$',
    'GET'   => array('AdminController', 'logout')
));
// =======================================================



// ================ ADMINISTRATION : USERS ==================
$router->addRoute(array(
    'route' => '^/admin/users$',
    'GET'   => array('AdminUserController', 'index')
));
// Ajout / Update / Delete d'un user
$router->addRoute(array(
    'route' => '^/admin/users/add$',
    'ALL'   => array('AdminUserController', 'add') // Classe IndexController, Méthode index
));
$router->addRoute(array(
    'route' => '^/admin/users/update$',
    'ALL'   => array('AdminUserController', 'update') // Classe IndexController, Méthode index
));

// ================ ADMIN PLATS ==================
$router->addRoute(array(
    'route' => '^/admin/plats$',
    'GET'   => array('AdminPlatController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route' => '^/admin/plats/add$',
    'ALL'   => array('AdminPlatController', 'add') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route' => '^/admin/plats/update$',
    'ALL'   => array('AdminPlatController', 'update') // Classe IndexController, Méthode index
));
// =======================================================



// ================ COMMANDES ADMIN ==================
$router->addRoute(array(
    'route' => '^/admin/commandes$',
    'GET'   => array('AdminCommandeController', 'index') // Classe IndexController, Méthode index
));

// ================ NEWSLETTER ADMIN ==================
$router->addRoute(array(
    'route' => '^/admin/newsletters$',
    'GET'   => array('NewsletterController', 'list') // Classe IndexController, Méthode index
));
$router->addRoute(array(
    'route' => '^/admin/newsletters/update$',
    'ALL'   => array('NewsletterController', 'update') // Classe IndexController, Méthode index
));
$router->addRoute(array(
    'route' => '^/admin/newsletters/delete$',
    'ALL'   => array('NewsletterController', 'delete') // Classe IndexController, Méthode index
));
// =======================================================


// ================ ADMIN LIVRAISON ==================
$router->addRoute(array(
    'route' => '^/admin/livraisons$',
    'GET'   => array('LivraisonController', 'list') // Classe IndexController, Méthode index
));
$router->addRoute(array(
    'route' => '^/admin/livraisons/update$',
    'ALL'   => array('LivraisonController', 'update') // Classe IndexController, Méthode index
));
// =======================================================


// ================ ADMIN PAIEMENT ==================
$router->addRoute(array(
    'route' => '^/admin/paiements$',
    'GET'   => array('PaiementController', 'list') // Classe IndexController, Méthode index
));
$router->addRoute(array(
    'route' => '^/admin/paiements/update$',
    'ALL'   => array('PaiementController', 'update') // Classe IndexController, Méthode index
));
// =======================================================











// ======================= CLIENTS =====================
$router->addRoute(array(
    'route' => '^/client$',
    'GET'   => array('ClientController', 'index') 
));
$router->addRoute(array(
    'route' => '^/client$',
    'POST'   => array('ClientController', 'adresse') 
));
// $router->addRoute(array(
//     'route' => '^/client_livraison$',
//     'POST'   => array('ClientController', 'adresse') 
// ));

$router->addRoute(array(
    'route' => '^/client/livraison$',
    'POST'   => array('ClientController', 'adresse') 
));

// ======================= AUTHENTIFICATION DES CLIENTS =====================
$router->addRoute(array(
    'route' => '^/client/login$',
    'GET'   => array('ClientController', 'login') 
));
$router->addRoute(array(
    'route'  => '^/client/login$',
    'POST'   => array('ClientController', 'loginPost') 
));
$router->addRoute(array(
    'route' => '^/client/logout$',
    'GET'   => array('ClientController', 'logout')
));
// =======================================================

// ======================= INSCRIPTION DES CLIENTS =====================
$router->addRoute(array(
    'route' => '^/client/inscription$',
    'GET'   => array('ClientController', 'add') 
));
$router->addRoute(array(
    'route'  => '^/client/inscription$',
    'POST'   => array('ClientController', 'addPost') 
));
// =======================================================



$router->run();