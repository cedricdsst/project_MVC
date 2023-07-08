<?php

namespace App\Controller;

use App\Models\User;
use Twig\Environment;

class IndexController extends AbstractController
{
  private $user;

  public function __construct(Environment $twig, User $user)
  {
    parent::__construct($twig);
    $this->user = $user;
  }

  public function home(): string
  {
    $message = $_SESSION['message'] ?? null;
    unset($_SESSION['message']); // Clear the message.

    // Fetch all users from the database.
    $users = $this->user->getAllUsers();

    // Pass the users to the view.
    return $this->twig->render('index.html.twig', ['message' => $message, 'users' => $users]);
  }
}
