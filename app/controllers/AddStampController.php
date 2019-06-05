<?php

use Phalcon\Mvc\Controller;

class AddStampController extends Controller
{
	public function indexAction()
	{
      


    }

    public function submitAction() {

        if ($this->request->hasFiles()) {
            $file = $this->request->getUploadedFiles();
            $imageName = $file[0]->getName();
            $file[0]->moveTo('images/' . md5($imageName). '.' . $file[0]->getExtension());
        }

        $name = $this->request->get("name");
        $year = $this->request->get("year");
        $quantity = $this->request->get("quantity");
        $collection = $this->request->get("collection");
        $description = $this->request->get("description");
        //$posted = $this->request->get("posted");

        $addStamp = new Stamps();
        $addStamp->image = md5($imageName);
        $addStamp->year = $year;
        $addStamp->quantity = $quantity;
        $addStamp->collection = $collection;
        $addStamp->description = $description;
        $addStamp->posted = 'true';
        $addStamp->save();

        $this->response->redirect('stamps');
    }
    
}	