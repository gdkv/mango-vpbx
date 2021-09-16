<?php 

namespace Epictest\MangoVpbx\MangoOffice;

use Epictest\MangoVpbx\MangoOffice;

class Statistics extends MangoOffice {

    public function getStat()
    {
        $data = [];
        
        return $this->execute('commands/callback', $data);
    }
}