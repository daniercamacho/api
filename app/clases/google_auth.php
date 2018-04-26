<?php 
 
 	class GoogleAuth{

 		protected $client;

 		public function __construct(Google_Client $googleclient = null){
 			$this->client = $googleclient;
 			if ($this->client) {
 				$this->client->setClientId('401886859176-mc9lbemsnlrtqavqnglqe49eb6sha9gm.apps.googleusercontent.com');
 				$this->client->setClientSecret('buzwj-qauIgIu43TL3uNI1-D');
 				$this->client->setRedirectUri('http://localhost/api/index.php');
 				$this->client->setScopes('email');
 			}
 		}
 	}


 ?>