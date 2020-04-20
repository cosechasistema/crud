<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminOrdersDetailController extends CBController {


    public function cbInit()
    {
        $this->setTable("orders_detail");
        $this->setPermalink("orders_detail");
        $this->setPageTitle("Orders Detail");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addSelectTable("Order","orders_id",["table"=>"orders","value_option"=>"id","display_option"=>"order_number","sql_condition"=>""])->foreignKey('id');
		$this->addSelectTable("Product","products_id",["table"=>"products","value_option"=>"id","display_option"=>"name","sql_condition"=>""])->foreignKey('id');
		$this->addMoney("Product Price","product_price");
		$this->addNumber("Qty","qty");
		$this->addNumber("Subtotal","subtotal");
		

    }
}
