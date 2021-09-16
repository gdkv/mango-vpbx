<?php 

namespace Epictest\MangoVpbx\MangoOffice;

use Epictest\MangoVpbx\MangoOffice;

class Call extends MangoOffice {

    public function sendCall()
    {
        $data = [];
        
        return $this->execute('commands/callback', $data);
    }

    public function groupCall() 
    {
        $data = [];
        
        return $this->execute('commands/callback', $data);
    }

    public function hangupCall()
    {
        $data = [];
        
        return $this->execute('commands/callback', $data);
    }
}