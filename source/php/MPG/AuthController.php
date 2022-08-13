<?php

namespace MPG;

class AuthController extends Controller {

    public static function ensureUserIsLogged() {

        if ( !isset($_SESSION['mpg']['user_is_logged']) ) {

            Routes::redirectTo('/login#');

        }

    }

    public function login() : ViewResponse {

        if ( isset($_POST['uri']) || isset($_POST['host']) ) {

            $requiredFields = $this->processFormData();
            
            if ( count($requiredFields) >= 1 ) {

                return new ViewResponse(200, 'login', [
                    'requiredFields' => $requiredFields
                ]);
                
            } else {

                $_SESSION['mpg']['user_is_logged'] = true;
                Routes::redirectTo('/');

            }

        } else {
            return new ViewResponse(200, 'login');
        }

    }

    private function processFormData() : array {

        $requiredFields = [];
        $_SESSION['mpg'] = [];

        if (empty($_POST['password'])){
            $requiredFields[] = 'Password';
            return $requiredFields;
        }

        if(strcmp($_POST['password'],getenv("ACCESS_KEY")) != 0){
            echo "Password mismatch";
            $requiredFields[] = 'Password';
            return $requiredFields;
        }

        if ( isset($_POST['uri'])) {

            if ( preg_match(MongoDBHelper::URI_REGEX, $_POST['uri']) ) {
                $_SESSION['mpg']['mongodb_uri'] = $_POST['uri'];
            } else {
                $requiredFields[] = 'URI';
            }

        }else {
            $requiredFields[] = 'URI or Host';
        }

        return $requiredFields;

    }

    public function logout() {

        $_SESSION['mpg'] = [];

        Routes::redirectTo('/login');

    }

}
