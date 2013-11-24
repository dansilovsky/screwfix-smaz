<?php

namespace Screwfix;

/**
 * UserRepository
 *
 * @author Daniel Silovsky
 * @copyright (c) 2013, Daniel Silovsky
 * @license http://www.screwfix-calendar.co.uk/licence
 */
class UserRepository extends \Screwfix\Repository {
	
	private $_name = 'user';
	
	public function __construct(\Nette\Database\Connection $connection)
	{
		parent::__construct($this->_name, $connection);
	}
        
        /**
         * Get user by username
         * 
         * @param    string   $username
         * @return Nette\Database\Table\ActiveRow
         */
        public function findByUsername($username)
        {
		return $this->where('username', $username);
        }
}
