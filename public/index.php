<?php
require_once __DIR__ . '/../vendor/autoload.php';

session_start();

// Initialization
use App\Controller\ContactController;
use App\Controller\IndexController;
use App\Controller\RegistrationController;
use App\Routing\RouteNotFoundException;
use App\Routing\Router;
use App\Models\User;
use Symfony\Component\Dotenv\Dotenv;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__ . '/../.env');

// DB
[
  'DB_HOST'     => $host,
  'DB_PORT'     => $port,
  'DB_NAME'     => $dbname,
  'DB_CHARSET'  => $charset,
  'DB_USER'     => $user,
  'DB_PASSWORD' => $password
] = $_ENV;

$dsn = "mysql:dbname=$dbname;host=$host:$port;charset=$charset";

try {
  $pdo = new PDO($dsn, $user, $password);
  var_dump($pdo);
} catch (PDOException $ex) {
  echo "Error connecting to the database: " . $ex->getMessage();
  exit;
}

// Twig
$loader = new FilesystemLoader(__DIR__ . '/../templates/');
$twig = new Environment($loader, [
  'debug' => $_ENV['APP_ENV'] === 'dev',
  'cache' => __DIR__ . '/../var/twig/',
]);


$user = new User($pdo);


$router = new Router([
  Environment::class => $twig,
  PDO::class => $pdo,
  User::class => $user
]);

$router->addRoute(
  'homepage',
  '/',
  'GET',
  IndexController::class,
  'home'
);

$router->addRoute(
  'contact_page',
  '/contact',
  'GET',
  ContactController::class,
  'contact'
);

$router->addRoute(
  'register_form',
  '/register',
  'GET',
  RegistrationController::class,
  'register'
);

$router->addRoute(
  'register',
  '/register',
  'POST',
  RegistrationController::class,
  'handleRegister'
);

try {
  $router->execute($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
} catch (RouteNotFoundException $ex) {
  http_response_code(404);
  echo "Page not found";
}
