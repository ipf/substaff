<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "substaff".
 *
 * Auto generated 20-11-2012 17:55
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Substaff',
	'description' => 'A simple demo extension for extbase',
	'category' => 'example',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Ingo Pfennigstorf',
	'author_email' => '',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'typo3' => '4.7.0-0.0.0',
			'extbase' => '4.7.0-0.0.0',
			'fluid' => '4.7.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:17:"ext_localconf.php";s:4:"b27f";s:14:"ext_tables.php";s:4:"b3b3";s:44:"Classes/Controller/MitarbeiterController.php";s:4:"623a";s:36:"Classes/Domain/Model/Mitarbeiter.php";s:4:"954d";s:34:"Configuration/TypoScript/setup.txt";s:4:"d41d";}',
	'suggests' => array(
	),
);

?>