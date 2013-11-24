<?php

namespace Screwfix;

/**
 * SysPatternRepository
 *
 * @author Daniel Silovsky
 * @copyright (c) 2013, Daniel Silovsky
 * @license http://www.screwfix-calendar.co.uk/license
 */
class SysPatternRepository extends Repository {
	
	private $_name = 'sys_pattern';
	
	public function __construct(\Nette\Database\Connection $connection)
	{
		parent::__construct($this->_name, $connection);
	}
	
	public function findById($id)
	{
		return $this->get($id);
	}
	
	public function first()
	{
		return $this->limit(1);
	}
}
