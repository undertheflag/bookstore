<?php

namespace Bookstore\Models;

use PDO;

abstract class AbstractModel {
    protected $db;  //private property can't  ingerit from parent class

    public function __construct(PDO $db) {
        $this->db = $db;
    }
}
