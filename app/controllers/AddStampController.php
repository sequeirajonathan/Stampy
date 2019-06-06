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
            $fullFile = md5($imageName). '.' . $file[0]->getExtension();
            $file[0]->moveTo('images/' . $fullFile);
        }

        $name = $this->request->get("name");
        $year = $this->request->get("year");
        $quantity = $this->request->get("quantity");
        $collection = $this->request->get("collection");
        $description = $this->request->get("description");
        //$posted = $this->request->get("posted");

        $addStamp = new Stamps();
        $addStamp->image = $fullFile;
        $addStamp->year = $year;
        $addStamp->name = $name;
        $addStamp->quantity = $quantity;
        $addStamp->collection = $collection;
        $addStamp->description = $description;
        $addStamp->posted = 1;
        $addStamp->save();


        $this->response->redirect('stamps');
    }
    
}	