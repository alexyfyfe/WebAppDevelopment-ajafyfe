<p> HELLO! </p>

<?
define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');
$rules = array(
    //
    //main pages
    //
    'about' => "/about",
    'contactus' => "/contactus",
    'blog' => "/blog",
    'blog_article' => "/blog/(?'blogID'[\w\-]+)",
    //
    //Admin Pages
    //
    'login' => "/login",
    'create_article' => "/createarticle",
    'logout' => "/logout",
    //
    // Home Page
    //
    'home' => "/"
);
$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri,
        ''
        , $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);
foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}
// nothing is found so handle the 404 error
include(INCLUDE_DIR . '404.php');
?>

<!--
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

            <h1> This is an Index Page.</h1>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/adminer.php">adminer.php</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/displayAllMovies.php">displayAllMovies.php</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/displayMoviesCreatedByMarvelStudios.php">displayMoviesCreatedByMarvelStudios.php</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/displayAllMoviesCreatedAfter2010.php">displayAllMoviesCreatedAfter2010.php</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/displayAllXMenFilms.php">displayAllXMenFilms.php</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/helloSelector.php">helloSelector.php</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/createSuperHero.php">createSuperHero.php</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/superheroform.html">superheroform.html</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/Showsuperheros.php">Showsuperheros.php</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/battle.php">battle.php</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/displaybattles.php">displaybattles.php</a></li>
            <br>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/cookieIndex.html">cookieIndex.html</a></li>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/cookieIndexSession.html">cookieIndexSession.html</a></li>
            <br>
            <li><a href="http://webappdevelopment-ajfyfe.azurewebsites.net/HEADER.php">HEADER.php</a></li>


    </body>
</html>
           -->