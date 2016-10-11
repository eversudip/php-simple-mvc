<?php

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

	
}