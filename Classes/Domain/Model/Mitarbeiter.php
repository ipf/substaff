<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Ingo Pfennigstorf <pfennigstorf@sub-goettingen.de>
 *      Goettingen State Library
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * Description
 *
 * @author Ingo Pfennigstorf <pfennigstorf@sub-goettingen.de>, Goettingen State Library
 * Date: 20.11.12
 */
class Tx_Substaff_Domain_Model_Mitarbeiter extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $emailAdresse;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Substaff_Domain_Model_Abteilung>
	 * @lazy
	 */
	protected $abteilung;

	/**
	 * @param string $bild
	 */
	public function setBild($bild) {
		$this->bild = $bild;
	}

	/**
	 * @return string
	 */
	public function getBild() {
		return $this->bild;
	}

	/**
	 * @var string
	 */
	protected $bild;

	/**
	 * Initialize defaults
	 */
	public function __construct() {
		$this->initializeStorageObjects();
	}

	/**
	 * Create Persistence storage
	 */
	protected function initializeStorageObjects() {
		$this->abteilung = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * @param \Tx_Extbase_Persistence_ObjectStorage $abteilung
	 */
	public function setAbteilung($abteilung) {
		$this->abteilung = $abteilung;
	}

	/**
	 * @return \Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getAbteilung() {
		return $this->abteilung;
	}

	/**
	 * Addsn a Abteilung
	 *
	 * @param Tx_Substaff_Domain_Model_Abteilung $abteilung
	 * @return void
	 */
	public function addAbteilung(Tx_Substaff_Domain_Model_Abteilung $abteilung) {
		$this->abteilung->attach($abteilung);
	}

	/**
	 * Removes a Abteilung
	 *
	 * @param Tx_Substaff_Domain_Model_Abteilung $abteilungToRemove The Abteilung to be removed
	 * @return void
	 */
	public function removeAbteilung(Tx_Substaff_Domain_Model_Abteilung $abteilungToRemove) {
		$this->abteilung->detach($abteilungToRemove);
	}
	
	
	/**
	 * @param string $emailAdresse
	 */
	public function setEmailAdresse($emailAdresse) {
		$this->emailAdresse = $emailAdresse;
	}

	/**
	 * @return string
	 */
	public function getEmailAdresse() {
		return $this->emailAdresse;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

}