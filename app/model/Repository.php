<?php

namespace Screwfix;

use Nette;

/**
 * Executes operations over database table
 *
 * @author Daniel Silovsky
 * @copyright (c) 2013, Daniel Silovsky
 * @license http://www.screwfix-calendar.co.uk/license
 */
abstract class Repository extends \Nette\Database\Table\Selection {

	/**
	 * Format in which are saved date data in database
	 */
	const FORMAT_DATE = 'Y-m-d';
	
	public function __construct($table, Nette\Database\Connection $db)
	{
		parent::__construct($table, $db);
	}
}
