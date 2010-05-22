<?php

class Application_Form_User extends Zend_Form
{

    public function init()
    {
	
		$username = new Zend_Form_Element_Text('username');
		$username->setLabel('Usuário')
			   ->setRequired(true)
			   ->addFilter('StripTags')
			   ->addFilter('StringTrim')
			   ->addValidator('NotEmpty')
			   ->addValidator('StringLength', false, array(5,30));
			
		$fullName = new Zend_Form_Element_Text('fullName');
		$fullName->setLabel('Nome Completo')
			   ->setRequired(true)
			   ->addFilter('StripTags')
			   ->addFilter('StringTrim')
			   ->addValidator('NotEmpty')
			   ->addValidator('StringLength', false, array(5,90));	
		
		$email = new Zend_Form_Element_Text('email');
		$email->setLabel('E-mail')
			   ->setRequired(true)
			   ->addFilter('StripTags')
			   ->addFilter('StringTrim')
			   ->addValidator('EmailAddress');
			
		$password = new Zend_Form_Element_Password('password');
		$password->setLabel('Senha')
			   ->setRequired(true)
			   ->addFilter('StripTags')
			   ->addFilter('StringTrim')
			   ->addValidator('NotEmpty')
			   ->addValidator('StringLength', false, array(5,30));
			
		$submit = new Zend_Form_Element_Submit('Salvar');
			
		$this->addElements( array($username, $fullName, $email, $password, $submit) );
		
    }


}

