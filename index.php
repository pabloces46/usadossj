<?php
	session_start();

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', 'http://localhost/mvc/');

	require_once "Config/autoload.php";
	Config\Autoload::run();

?>

<?php require_once "views/layout/header.php"; ?>

<body class="wp-automobile single-page">
     
  <?php
  
    require_once "views/layout/menu.php";

    $request_route = new Config\Request();
    Config\Router::run($request_route);

    require_once "views/layout/footer.php";
    require_once "views/layout/jsfiles.php";

  ?>

</body>
</html>

	
	

	
