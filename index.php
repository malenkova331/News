<?php 
    include "config.php"; 
    include "database.php";
?>

<?php

$page = $_GET['page'] ?? 'home';

// switch ($page) {
//     case str_starts_with($page, 'news-'):
//         include "pages/newsPage/index.php";
//         break;
//     default:
//         include "pages/mainPage/index.php";;
// }

if (strpos($page, 'news-') === 0) {
    include "pages/newsPage/index.php";
} else {
    switch ($page) {
        case 'home':
            include "pages/mainPage/index.php";
            break;
        default:
            echo "404 Not Found";
            break;
    }
}
?>