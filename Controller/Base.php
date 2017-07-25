<?php

namespace Controller;

class Base
{
    private $table;

    public function index()
    {
        $this->createTable();
    }

    public function createTable()
    {
        $this->table = new Table();
        $this->table->setRound(1);
    }
}