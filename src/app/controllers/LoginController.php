<?php
// login controller
use Phalcon\Mvc\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
    }
    public function loginAction()
    {
        $post = $this->request->getPost();
        $check = Users::findFirst(array("email = ?0", "bind" => array($post['email'])));
        if ($check->email == $post['email']) {
            $this->view->msg = "Logged in successfully";
        } else {
            $this->view->msg = "Enter correct email";
        }
    }
}
