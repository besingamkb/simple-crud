<?php


class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	
    }

    public function inputAction($id) {
        $this->view->a = Users::findFirstById($id);
    }

    public function updateAction($id) {
        $update = Users::findFirstById($id);
        if ($this->request->isPost()) {
            $update->name = $this->request->getPost("name");
            $update->email = $this->request->getPost("email");
            $update->save();
        }

        return $this->to('index/list');
    }

    public function deleteAction($id) {
        $delete = Users::findFirstById($id);
        if ( $delete != false ) {
            $delete->delete();
        }
        $this->to('index/list');
    }

    public function listAction() {
        $this->view->lists = Users::find();
    }

    public function addNewAction() {
    	$a = new Users();
    	//echo $this->request->getPost("name") . " " . $this->request->getPost("email");
    	$a->name = $this->request->getPost("name");
    	$a->email = $this->request->getPost("email");

    	$a->save();
    }

}

