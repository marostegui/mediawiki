<?php

require_once __DIR__ . '/Maintenance.php';

class ValidateRegistrationFile extends Maintenance {
	public function __construct() {
		parent::__construct();
		$this->addArg( 'path', 'Path to extension.json/skin.json file.', true );
	}
	public function execute() {
		$validator = new ExtensionJsonValidator( function( $msg ) {
			$this->error( $msg, 1 );
		} );
		$validator->checkDependencies();
		$path = $this->getArg( 0 );
		try {
			$validator->validate( $path );
			$this->output( "$path validates against the schema!\n" );
		} catch ( ExtensionJsonValidationError $e ) {
			$this->error( $e->getMessage(), 1 );
		}
	}
}

$maintClass = 'ValidateRegistrationFile';
require_once RUN_MAINTENANCE_IF_MAIN;
