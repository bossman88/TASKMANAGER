<?php

/**
* 
*/
class Database 
{

	protected $db;
	
	function __construct()
	{
		$this->db = new PDO('mysql:host=localhost;dbname=task_manager;charset=utf8', 'root', '');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //remove for production!	
	}

	 //----START THIS IS IMPROVISED CODE ----//
    public function insertTask($task_name, $task_description)
    {
        $stmt = $this->db->prepare('INSERT INTO `tasks` (task_name, task_description) VALUES (?, ?)');
        $stmt->execute([$task_name, $task_description]);
        return $this->db->lastInsertId();
    }
}

    //----END THIS IS IMPROVISED CODE ----//