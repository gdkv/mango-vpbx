<?php 

namespace Epictest\MangoVpbx\MangoOffice;

use Epictest\MangoVpbx\Enum\Urls;
use Epictest\MangoVpbx\MangoOffice;

class Call extends MangoOffice {

    public function sendCall()
    {
        $data = [];
        $route = Urls::CALL()->getValue();
        
        return $this->execute($route, $data);
    }

    public function groupCall() 
    {
        $data = [];
        $route = Urls::GROUP()->getValue();

        return $this->execute($route, $data);
    }

    public function hangupCall()
    {
        $data = [];
        $route = Urls::HANGUP()->getValue();
        
        return $this->execute($route, $data);
    }
}