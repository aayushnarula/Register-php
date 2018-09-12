<?php
	class Account{
		public function __construct(){
		}

		public function register(){

			$this->validateUsername($Username);
			$this->validateFirstname($firstName);
			$this->validateLastname($lastName);
			$this->validateEmail($email, $email2);
			$this->validatePassword($password, $password2);
		}

		private function validateUsername($un){
			echo "username function called";
		}

		private function validateFirstname($fn){

		}

		private function validateLastname($un){

		}

		private function validateEmail($em, $em2){

		}

		private function validatePassword($pw, $pw2){

		}
}

?>