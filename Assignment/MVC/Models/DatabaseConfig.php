<?php

namespace MVC\Config;

class DatabaseConfig
{
    protected $DBHOST;
    protected $DBNAME;
    protected $DBUSER;
    protected $DBPASS;
    protected $DBCHARSET;

    public function __construct()
    {
        $this->DBHOST = 'localhost';
        $this->DBNAME = 'db_course';
        $this->DBUSER = 'root';
        $this->DBPASS = '';
        $this->DBCHARSET = 'utf8';
    }
}
