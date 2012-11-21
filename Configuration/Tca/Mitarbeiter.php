<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_substaff_domain_model_mitarbeiter'] = array(
	'ctrl' => $TCA['tx_substaff_domain_model_mitarbeiter']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'name, email_adresse, bild, abteilung'
	),
	'types' => array(
		'1' => array('showitem' => 'hidden, name, email_adresse, bild, abteilung')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => Array(
					Array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					Array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => Array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_substaff_domain_model_mitarbeiter',
				'foreign_table_where' => 'AND tx_substaff_domain_model_mitarbeiter.uid=###REC_FIELD_l18n_parent### AND tx_substaff_domain_model_mitarbeiter.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => Array(
			'config'=>array(
				'type'=>'passthrough'
			)
		),
		't3ver_label' => Array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => Array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'name' => array(
			'exclude' => 0,
			'label'   => 'Name',
			'config'  => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim',
				'max'  => 256
			)
		),
		'email_adresse' => array(
			'exclude' => 1,
			'label'   => 'E-Mail Adresse',
			'config'  => array(
				'type' => 'input',
				'eval' => 'trim',
				'size' => 30,
			)
		),
		'bild' => array(
			'exclude' => 1,
			'label'   => 'Bild',
			'config'  => array(
				'type'          => 'group',
				'internal_type' => 'file',
				'allowed'       => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size'      => 3000,
				'uploadfolder'  => 'uploads/pics',
				'show_thumbs'   => 1,
				'size'          => 1,
				'maxitems'      => 1,
				'minitems'      => 0
			)
		),
		'abteilung' => array(
			'exclude' => 1,
			'label'   => 'Abteilung',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_substaff_domain_model_abteilung',
				'maxitems'      => 10,
				'multiple' => 1,
				'size'=> 10,
				'appearance' => array(
					'collapseAll' => 1,
					'expandSingle' => 1,
				),
			)
		),
	),
);