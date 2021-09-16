<?php 

namespace Epictest\MangoVpbx\MangoOffice;

use Epictest\MangoVpbx\MangoOffice;

class Records extends MangoOffice {

    public function getRecording()
    {
        $data = [];
        
        return $this->execute('commands/callback', $data);
    }

    public function startRecording()
    {
        $data = [];
        
        return $this->execute('commands/callback', $data);
    }
}