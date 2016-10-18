<?php
namespace App\Controller;
use App\Controller\AppController;
/**
* Personal Controller
* User personal interface
*
*/
class ArenasController  extends AppController {
	public function index(){

	//die('test');
	    $fighters = $this->fighters->find('all');
		//$fighters = $this->fighters;
		//$fighters = $this->fighters->find('all');
		//$this->set('fighters', $this->fighters->find('all'))
        $this->set(compact('events'));
	}
        
	public function fighter(){
	//die('tutu');
	}
        
}