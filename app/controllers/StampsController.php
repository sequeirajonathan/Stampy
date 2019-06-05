<?php

use Phalcon\Mvc\Controller;

class StampsController extends Controller
{
	public function indexAction()
	{
	 $stamps = Stamps::find();
	 $imageLocation = "images/";

     $this->view->stamps = $stamps;
     $this->view->images = $imageLocation;

	}
}	
