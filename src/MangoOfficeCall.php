<?php 

namespace Epictest\MangoVpbx;

class MangoOfficeCall extends MangoOffice {

    function sendCall() {
        $data = [];
        
        return $this->execute('commands/callback', $data);
    }

    
}