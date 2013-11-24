<?php

namespace Screwfix;

/**
 * NoteRepository
 *
 * @author Daniel Silovsky
 * @copyright (c) 2013, Daniel Silovsky
 * @license http://www.screwfix-calendar.co.uk/license
 */
class NoteRepository extends Repository {

	private $_name = 'note';
	
	public function __construct(\Nette\Database\Connection $connection)
	{
		parent::__construct($this->_name, $connection);
	}

	/**
	 * Fetch array of notes between given dates
	 *
	 * @param    integer  $user_id   user id
	 * @param    string   $from      date format yyyy-mm-dd
	 * @param    string   $to        date format yyyy-mm-dd
	 * @return   \Nette\Database\Table\Selection
	 */
	public function between($user_id, $from, $to)
	{
		return $this->where('user_id', $user_id)
			->where('date >= ?', $from)
			->where('date <= ?', $to)
			->order('date');
	}
}
