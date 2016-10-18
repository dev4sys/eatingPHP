<?php

/** KRA **/
// src/Model/Table/FightersTable.php

namespace App\Model\Table;
use Cake\ORM\Table;

class ArenasTable extends Table{
	
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}