<?php
ini_set('include_path', './' . PATH_SEPARATOR . "./php/". PATH_SEPARATOR . ini_get('include_path'));
// https://github.com/ProjectCleverWeb/PHP-URI

function getUserPrefs() {
    foreach ($_GET as $key => $value) {
        $_GET[$key] = urldecode ($value) ;
    }
    
    extract($_GET);
}

function storeUserPrefs() {
    setcookie("fsncolors", $theme, time() + 3600);
}

function get_head() {
    echo get_partial('head.php');
};

function get_progressbar() {
    echo get_partial('progressbar.php');
};

function get_menu() {
    echo get_partial('menu.php');
};

function get_header($path="") {
    echo get_partial($path.'/header.php');
};

function get_footer() {
    echo get_partial('footer.php');
};

function get_partial($path) {
    ob_start();
    include($path);
    $content = ob_get_contents();
    ob_get_clean();
    return $content;
}

// function get_rel_path($from, $to) {
//     // some compatibility fixes for Windows paths
//     $from = is_dir($from) ? rtrim($from, '\/') . '/' : $from;
//     $to   = is_dir($to)   ? rtrim($to, '\/') . '/'   : $to;
//     $from = str_replace('\\', '/', $from);
//     $to   = str_replace('\\', '/', $to);

//     $from     = explode('/', $from);
//     $to       = explode('/', $to);
//     $relPath  = $to;

//     foreach($from as $depth => $dir) {
//         // find first non-matching dir
//         if($dir === $to[$depth]) {
//             // ignore this directory
//             array_shift($relPath);
//         } else {
//             // get number of remaining dirs to $from
//             $remaining = count($from) - $depth;
//             if($remaining > 1) {
//                 // add traversals up to first matching dir
//                 $padLength = (count($relPath) + $remaining - 1) * -1;
//                 $relPath = array_pad($relPath, $padLength, '..');
//                 break;
//             } else {
//                 $relPath[0] = './' . $relPath[0];
//             }
//         }
//     }
//     return implode('/', $relPath);
// }

// function get_website_rel_path() {
//     $dir = get_page_rel_path();
//     echo ($dir == "") ? "./" : $dir;
//     // echo $dir;
// }

// function get_page_rel_path() {
//     global $websiteRootPath, $currentPath;
//     echo get_rel_path($currentPath, $websiteRootPath);
// }

function get_page_path() {
    echo $_SERVER['REQUEST_URI'];
}

function get_website_url($rootUrl = false) {
    $doc_root = ""; // added manually 2022.05.29 Siegi
    // base directory
    // $base_dir = __DIR__;
    global $websiteRootDir;
    $base_dir = $websiteRootDir . "/";

    // server protocol
    $protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';

    // domain name
    $domain = $_SERVER['SERVER_NAME'];

    // base url
    $base_url = (!$rootUrl) ? preg_replace("!^${doc_root}!", '', $base_dir) : "";

    // server port
    $port = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";

    // put em all together to get the complete base URL
    $url = "${protocol}://${domain}${disp_port}${base_url}";

    echo $url; // = http://example.com/path/directory
}   

function get_page_url() {
    echo get_website_url(true) . get_page_path();
}
?>