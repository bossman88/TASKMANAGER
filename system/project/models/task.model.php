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
            WHERE 1
        ";
        // run query and get result set
        $resultset = db::query($query);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }
}