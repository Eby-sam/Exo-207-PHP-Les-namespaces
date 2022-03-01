<?php

/**
 * 1. Créez un dossier Entity
 * 2. Créez un dossier Repository ou mieux Repository
 * 3. Dans le dossier Entity, créez trois classes User, Role et Article, ces classes doivent avoir un constructeur vide
 * 4. Dans le dossier Repository ( ou Repository ), créez les classes User, Role et Article.
 * 5. Les trois classes doivent avoir une méthode save qui prendra en paramètre l'objet qui est géré par la classe
 *    p.ex : User $user ( Entity ) pour la class User ( Repository )
 *    Aucun code ne vous est demandé mis à part la déclaration des namespaces et les use, les méthodes peuvent donc être vides.
 * 6. Utilisez au maximum les namespaces et les Use !!!
 *
 * Poussez votre code sur Github et envoyez moi le lien !
 */

require_once 'Entity/Article.php';
require_once 'Entity/Role.php';
require_once 'Entity/User.php';

require_once 'Repository/ArticleM.php';
require_once 'Repository/RoleM.php';
require_once 'Repository/UserM.php';