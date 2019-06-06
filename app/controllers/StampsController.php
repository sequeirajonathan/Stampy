<?php

use Phalcon\Mvc\Controller;

class StampsController extends Controller
{
	public function indexAction()
	{
		$filter = $this->request->get("filter");
		
		if(empty($filter)) {
			$stamps = Stamps::find(['order' => "year ASC"]);
		} else {
			$stamps = Stamps::find(['order' => "$filter DESC"]);
		}

		$imageLocation = "images/";
		$this->view->stamps = $stamps;
		$this->view->images = $imageLocation;

	}

	public function editAction() {
		
	}

	public function deleteAction() {
		$id = $this->request->get("id");
		$stamp = Stamps::findFirst($id);
		$stamp ->delete();

		$this->response->redirect('stamps');
	}


}	