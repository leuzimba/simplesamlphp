<?php
/**
 * The SSOService is part of the SAML 2.0 IdP code, and it receives incoming Authentication Requests
 * from a SAML 2.0 SP, parses, and process it, and then authenticates the user and sends the user back
 * to the SP with an Authentication Response.
 *
 * @author Andreas Åkre Solberg, UNINETT AS. <andreas.solberg@uninett.no>
 * @package simpleSAMLphp
 * @version $Id$
 */

require_once('../../../www/_include.php');

SimpleSAML_Logger::info('SAML2.0 - IdP.SSOService: Accessing SAML 2.0 IdP endpoint SSOService');

try {

	$config = SimpleSAML_Configuration::getInstance();
	if (!$config->getBoolean('enable.saml20-idp', FALSE)) {
		throw new SimpleSAML_Error_Error('NOACCESS');
	}

	$metadata = SimpleSAML_Metadata_MetaDataStorageHandler::getMetadataHandler();
	$idpEntityId = $metadata->getMetaDataCurrentEntityID('saml20-idp-hosted');
	$idp = SimpleSAML_IdP::getById('saml2:' . $idpEntityId);
	sspmod_saml_IdP_SAML2::receiveAuthnRequest($idp);
	assert('FALSE');

} catch(SimpleSAML_Error_Error $e) {

	$e->show();

} catch(Exception $e) {

	$e = new SimpleSAML_Error_Error('UNHANDLEDEXCEPTION', $e);
	$e->show();

}