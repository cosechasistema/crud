<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminProductsController extends CBController {


    public function cbInit()
    {
        $this->setTable("products");
        $this->setPermalink("products");
        $this->setPageTitle("Products");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Name","name")->filterable(true)->strLimit(150)->maxLength(255);
		$this->addMoney("Price","price")->precision('2')->thousandSeparator(',')->decimalSeparator('.');
		

    }
}
