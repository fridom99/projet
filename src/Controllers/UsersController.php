<?php 
namespace App\Controllers;

use PDO;
use App\Models\UsersModel;

class UsersController extends Controller {
    
    public function index() {
        $this->render('users/profil');
    }

    public function profil($id) {

        // if(empty($param[0])) {
        //     $id = $_SESSION['user']['id'];
        // } else {
        //     $id = $param[0];
        // }
        // if(!ConnexionController::logged_user()) { $this->redirect('login'); }
        /** Sous la forme ternaire */

        // Si pas d'id profil, alors on lui en met un
        $id = empty($id) ? $_SESSION['user']['id'] : $id;

        $model = new UsersModel();
        $result = $model->find($id);
        $user=$result->fetch(PDO::FETCH_ASSOC);
        
            // Si une modification du profil est demandée
        if($_SERVER['REQUEST_METHOD']=='POST') {
            // Test si les champs sont remplis
            extract($_POST);

            if(empty($nom)) { FlashController::addFlash("Le nom est obligatoire", 'danger'); }
            if(empty($prenom)) { FlashController::addFlash("Le prénom est obligatoire", 'danger'); }

            if(!empty($password)) {
                
                if(!preg_match('%.{5,16}%', $password)) { FlashController::addFlash("Le mot de passe doit contenir entre 5 et 16 caractères", 'danger');}

                if(!preg_match('%[A-Z]%', $password)) { FlashController::addFlash("Le mot de passe doit contenir au moins une majuscule", 'danger');}
                if(!preg_match('%[a-z]%', $password)) { FlashController::addFlash("Le mot de passe doit contenir au moins une minuscule", 'danger');}
                if(!preg_match('%[0-9]%', $password)) { FlashController::addFlash("Le mot de passe doit contenir au moins un chiffre", 'danger');}
                if(!preg_match('%[!#@$\%_]%', $password)) { FlashController::addFlash("Le mot de passe doit contenir au moins un des caractères suivants : ! # @ $ % _", 'danger');}

                if($password != $password2) { FlashController::addFlash("Les mots de passe ne correspondent pas", 'danger');}
                // Si le champs sont bons on met le nouveau password
            } else {
                $password = $user['password'];
            }
                // Si il n'y a pas de message d'erreur, on update
            if(empty($_SESSION['messages'])) {

                $model->updateUser(array(
                    'id'        =>  $id,
                    'nom'       =>  $nom,
                    'prenom'    =>  $prenom,
                    'password'  =>  $password,
                ));
                $user['nom']       = $nom;
                $user['prenom']    = $prenom;

                FlashController::addFlash("Le profil a été mis à jour", 'success');
                $this->redirect('home');
            }
        }

        // Si le mec est le meme on affiche son profil
        if ($id == $_SESSION['user']['id'])
        {
            // on attribue le role de la session
            $_SESSION['user']['role'] = $user['role'];
            $_SESSION['user']['categorie'] = $user['categorie'];
            // on affiche la page profil avec la variable $user
        $this->render('users/profil', array(
            'user' => $user,
        ));
        }
        // sinon rediriger sur accueil
        else {
            $this->redirect('home');
        }
    }


}