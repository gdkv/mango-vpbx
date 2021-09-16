<?php 

namespace Epictest\MangoVpbx\MangoOffice;

use Epictest\MangoVpbx\MangoOffice;

class Users extends MangoOffice {

    public function listUsers()
    {
        $data = [];
        
        return $this->execute('commands/callback', $data);
    }
}