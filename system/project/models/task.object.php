<?php

class Task_Object
{
    public function getUrl()
    {
        return url::to('task', array(
            'id' => $this->id
        ));
    }

}