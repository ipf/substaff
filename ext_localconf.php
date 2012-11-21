<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY, // The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
	'Mitarbeiterliste', // A unique name of the plugin in UpperCamelCase
	array ( // An array holding the controller-action-combinations that are accessible
		'Mitarbeiter' => 'list', // The first controller and its first action will be the default
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY, // The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
	'Mitarbeiterdetail', // A unique name of the plugin in UpperCamelCase
	array ( // An array holding the controller-action-combinations that are accessible
		'Mitarbeiter' => 'show', // The first controller and its first action will be the default
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY, // The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
	'AbteilungDetail', // A unique name of the plugin in UpperCamelCase
	array ( // An array holding the controller-action-combinations that are accessible
		'Abteilung' => 'show', // The first controller and its first action will be the default
	)
);