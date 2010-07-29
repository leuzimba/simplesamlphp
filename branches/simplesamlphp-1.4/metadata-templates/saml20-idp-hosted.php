<?php
/* 
 * SAML 2.0 Meta data for simpleSAMLphp
 *
 * The SAML 2.0 IdP Hosted config is used by the SAML 2.0 IdP to identify itself.
 *
 * Required parameters:
 *   - host
 *   - privatekey
 *   - certificate
 *   - auth
 *   - authority
 *
 * Optional Parameters:
 *   - 'userid.attribute'
 *   - 'redirect.sign'
 */


$metadata = array( 

	// The SAML entity ID is the index of this config.
	'__DYNAMIC:1__' => array(
	
		// The hostname of the server (VHOST) that this SAML entity will use.
		'host'				=>	'__DEFAULT__',
		
		// X.509 key and certificate. Relative to the cert directory.
		'privatekey'		=>	'server.pem',
		'certificate'		=>	'server.crt',
		
		// Authentication plugin to use. login.php is the default one that uses LDAP.
		'auth'				=>	'auth/login.php'
	)

);

?>