<?php

class UsersController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
		$this->view->minhaFrase = "Os programadores são a Elite da TI <script>// oi amigao </script>";
		$this->view->form = new Application_Form_User();
		
		if ($this->getRequest()->isPost()) {
			if ($this->view->form->isValid($this->_request->getPost())) {
				// Salva no banco de dados ou seja lá o que for fazer com os dados provenientes do form
				var_dump($this->_request->getPost());
			} else {
				$this->view->form->populate($this->_request->getPost());
			}
		}
		
    }


}

