<?php

require_once('../_include.php');

try {

	$config = SimpleSAML_Configuration::getInstance();
	$session = SimpleSAML_Session::getInstance();

	/* Make sure that the user has admin access rights. */
	if (!isset($session) || !$session->isValid('login-admin') ) {
		SimpleSAML_Utilities::redirect('/' . $config->getBaseURL() . 'auth/login-admin.php',
		                               array('RelayState' => SimpleSAML_Utilities::selfURL())
		                               );
	}
	phpinfo();

} catch(Exception $e) {
	SimpleSAML_Utilities::fatalError('na', NULL, $e);
}

?>