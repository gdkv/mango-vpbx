<?php 

namespace Epictest\MangoVpbx\MangoOffice;

use Epictest\MangoVpbx\MangoOffice;

class Sms extends MangoOffice {

    public function sendSms()
    {
        $data = [];
        
        return $this->execute('commands/callback', $data);
    }
}