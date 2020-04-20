<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminOrdersController extends CBController {


    public function cbInit()
    {
        $this->setTable("orders");
        $this->setPermalink("orders");
        $this->setPageTitle("Orders");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addSelectTable("Customer","customers_id",["table"=>"customers","value_option"=>"id","display_option"=>"name","sql_condition"=>""])->foreignKey('id');
		$this->addText("Order Number","order_number")->strLimit(150)->maxLength(255);
		$this->addNumber("Total","total");
		

    }
}
