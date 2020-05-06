<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminCustomersController extends CBController {


    public function cbInit()
    {
        $this->setTable("customers");
        $this->setPermalink("customers");
        $this->setPageTitle("Customers");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addNumber("Price","price");
		

    }
}
