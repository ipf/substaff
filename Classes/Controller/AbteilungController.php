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
 * AbteilungController
 */
class Tx_Substaff_Controller_AbteilungController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_Substaff_Domain_Repository_AbteilungRepository
	 * @inject
	 */
	protected $abteilungRepository;

	/**
	 * @var Tx_Substaff_Domain_Model_Abteilung
	 * @inject
	 */
	protected $abteilung;

	/**
	 * @var Tx_Substaff_Domain_Repository_MitarbeiterRepository
	 * @inject
	 */
	protected $mitarbeiterRepository;

	/**
	 * List all abteilung
	 */
	public function listAction() {
		$abteilung = $this->abteilungRepository->findAll();
		$this->view->assign('abteilung', $abteilung);
	}

	/**
	 * @param Tx_Substaff_Domain_Model_Abteilung $abteilung
	 */
	public function showAction(Tx_Substaff_Domain_Model_Abteilung $abteilung) {
		$mitarbeiter = $this->mitarbeiterRepository->findByAbteilung($abteilung);

		$this->view
				->assign('abteilung', $abteilung)
				->assign('mitarbeiter', $mitarbeiter)
		;
	}

}