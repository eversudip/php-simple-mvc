<?php

namespace App\Core\Database;
use PDO;

class QueryBuilder
{
	protected $pdo;
	
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	/**
	 * selects all the records from the given table
	 */
	public function selectAllRecords($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
		//var_dump($statement->fetchAll(PDO::FETCH_OBJ));
		//var_dump($statement->fetchAll(PDO::FETCH_CLASS, 'className'));
	}

	/**
	 * dynamic inserts into the tables
	 */
	public function insert($table, array $data)
	{
		$sql = sprintf('insert into %s (%s) values (%s)',
				$table,
				implode(', ', array_keys($data)),
				':'.implode(', :', array_keys($data))
			);
		try {

			$statement = $this->pdo->prepare($sql);
			$statement->execute($data);

		} catch(Exception $e) {
			die('Something went wrong!');
		}
	}

	
}