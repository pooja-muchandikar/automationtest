<?php

namespace Page;

use Page\Constants as ConstantsPage;

class Logout {

	protected $tester;

	public function __construct( \AcceptanceTester $I ) {
		$this->tester = $I;
	}

	public function logout() {

		$I = $this->tester;

		$I->moveMouseOver( ConstantsPage::$adminBarMenuSelector );
		$I->click( ConstantsPage::$logoutLink );
		$I->waitForElement('#login', 20);

	}

}
