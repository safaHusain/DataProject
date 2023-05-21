<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Connection
 *
 * @author safa
 */
class Connection
{
    protected $dbc = NULL;

    public function getConnection()
    {

        if ($this->dbc == NULL)
            $this->dbc = mysqli_connect('localhost', 'u201902206', 'u201902206', 'db201902206');

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            die('b0ther');
        }

        return $this->dbc;
    }

    public function closeDB()
    {
        mysqli_close($this->dbc);
    }
}
