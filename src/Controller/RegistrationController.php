<?php

namespace App\Controller;

use App\Models\User;
use Twig\Environment;

class RegistrationController extends AbstractController
{
    public function __construct(Environment $twig, User $user)
    {
        parent::__construct($twig);
        $this->user = $user;
    }

    public function register()
    {
        return $this->twig->render('register.html.twig');
    }

    public function handleRegister(): void
    {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];




        if ($this->user->findByUsername($username)) {

            echo "Nom d'utilisateur déjà utilisé, rafraichissez la page pour en enregistrer un nouveau !";
            return;
        }


        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        $this->user->create($username, $email, $hashedPassword);



        $_SESSION['message'] = 'Votre compte a bien été créé.';


        header('Location: /');
        exit();
    }
}
