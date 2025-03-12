<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends CI_Controller {

    public function view_dosen(){
        
        $this ->db->get('dosen');
    }
}

