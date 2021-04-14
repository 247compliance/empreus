<?php
    if(strpos($_SERVER['REQUEST_URI'], 'admin') == false){
    // echo 'url contains shop';
    foreach($_POST as $key=>$value){
          if (is_string($_POST[$key]))  
          {
             $_POST[$key] = strip_tags(trim($_POST[$key]));
             //$_POST[$key] = mysqli_real_escape_string($db,$_POST[$key]);
          }
      }
      foreach($_GET as $key=>$value){
          if (is_string($_GET[$key]))  
          {
             $_GET[$key] = strip_tags(trim($_GET[$key]));
             //$_GET[$key] = mysqli_real_escape_string($db,$_GET[$key]);
          }
      }
    }
    define( 'INCLUDE_DIR', dirname( __FILE__ ).'/');
    $rules = array( 
        'home'      => "(?:\/|\/index|\/index\.php|\/index\.html\.var)", 
        'about'   => "/about/",
        'contact'=>"/contact/",
        'team'=>"/team/",
        'gallery'=>"/gallery/",
        'industry'=>"/industry/",
        'development'=>"/development/",
        'designing'=>"/designing/",
        'webinar'=>"/webinar/",
        'seminar'=>"/seminar/",
        'speaker'=>"/speaker/",
        'app'=>"/app/",
        'chronicals'=>"/chronicals/",
        'team1'   => "/team/team1",
        'team2'   => "/team/team2",
        'team3'   => "/team/team3",
        'team4'   => "/team/team4",
        'team5'   => "/team/team5",
        'team6'   => "/team/team6",
    );
    $uri = rtrim( dirname($_SERVER["SCRIPT_NAME"]), '/' );
    $uri = '/' . trim( str_replace( $uri, '', $_SERVER['REQUEST_URI'] ), '/' );
    $uri = urldecode( $uri );
    $uri = explode('?', $uri);
    $uri = $uri[0];
    // if (substr($uri, -1, 1) == '/')
    // {
    //     $uri = substr($uri, 0, -1);
    // }
    foreach ( $rules as $action => $rule ) {
        if ( preg_match( '~^'.$rule.'/?$~i', $uri, $params ) ) {
            include( INCLUDE_DIR . $action . '.php');
            exit();
        }
    }
    $uri = str_replace('/', '', $uri);
    $uri = str_replace('.php', '', $uri);

    function exception_handler($exception) {
        // echo "Uncaught exception: " , $exception->getMessage(), "\n";
        header("HTTP/1.1 404 Not Found");
        exit();
        // header("Refresh: 0; url=/index");
      }
      
    set_exception_handler('exception_handler');
    if(!@include( INCLUDE_DIR . $uri . '.php')) throw new Exception("File not found");

?>