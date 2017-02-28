<?php



class Task_Model extends model
{
    protected static $object_class = 'Task_Object';

   public static function getTasks()
    {
        // write query
        $query = "
            SELECT *
            FROM `tasks`
            WHERE `id` = 1;
        ";
        // run query and get result set
        $resultset = db::query($query);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

      public static function getTaskById($id)
    {
        // write query
        $query = "
            SELECT *
            FROM `tasks`
            WHERE `id` = ?;
        ";
        // run query and get result set
        $resultset = db::query($query, $id);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    //I AM TRYING TO BUILD AN INSERT QUERY HERE TO CREATE NEW TASKS.
    public static function createTask($task_name, $task_description)
    {
        // write query
        $query = "
            INSERT INTO `tasks` (task_name, task_description)
            VALUES (?, ?)
        ";

        db::query($query);
        
    }

   
}