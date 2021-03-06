<?php
require_once('view/includes/header.php');

if(!isset($_GET['pages'])){

    require_once('view/articles.php');

}
else{
    switch($_GET['pages'])
    {
        default:
            require_once('view/articles.php');
            break;

        //Page Articles
        case 'articles':
            require_once('view/articles.php');
            break;
        case 'newArticles':
            require_once('view/newArticles.php');
            break;
        case 'listArticles':
            require_once('view/listArticles.php');
            break;
        case 'viewArticles':
            require_once('view/viewArticles.php');
            break;

        //Page Commantaires
        case 'newComments':
            require_once('view/newComments.php');
            break;
        case 'editComments':
            require_once('view/editComments.php');
            break;

        // Page Catégories
        case 'categories':
            require_once('view/categories.php');
            break;
        case 'newCategories':
            require_once('view/newCategories.php');
            break;
        case 'viewCategories':
            require_once('view/viewCategories.php');
            break;
        case 'listCategories':
            require_once('view/listCategories.php');
            break;

        // Page Membres
        case 'register':
            require_once('view/register.php');
            break;
        case 'registerOk':
            require_once('view/registerOk.php');
            break;
        case 'login':
            require_once('view/login.php');
            break;
        case 'loginOk':
            require_once('view/loginOk.php');
            break;
        case 'profile':
            require_once('view/profile.php');
            break;
        case 'logout':
            require_once('view/logout.php');
            break;

        //Page Admin
        case 'admin':
            require_once('view/admin.php');
            break;
        case 'editUsers':
            require_once('view/editUsers.php');
            break;
        case 'updateUser':
            require_once('view/updateUser.php');
            break;
    }
}

require_once('view/includes/footer.php');