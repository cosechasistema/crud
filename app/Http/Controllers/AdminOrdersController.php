<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminOrdersController extends CBController {


  public function cbInit()
  {
    $this->setTable("orders");
    $this->setPermalink("orders");
    $this->setPageTitle("Orders");

    $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(true);
    $this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
    // $this->addSelectTable("Customer","customers_id",["table"=>"customers","value_option"=>"id","display_option"=>"name","sql_condition"=>""])->help("Ingrese el cliente")->foreignKey('id');
    $this->addText("Order Number","order_number")->strLimit(150)->maxLength(255);
    $this->addNumber("Total","total");

    $this->addSelectTable("Customer cliente","customers_id",[
      "table"         => "customers",
      "value_option"  => "id",
      "display_option" => "name",
      "sql_condition" => null
    ]); // Add foreignKey() fill with parent name


    $this->addSubModule("Products productos", AdminProductsController::class, "id", function ($row) {
      return [
        "ID"=> $row->primary_key, // You can get the id of table by using primary_key object
        "Created"=> date("d/m/Y H:i", strtotime($row->created_at))
      ];
    });
    $this->addIndexActionButton("Export", url("download"), "fa fa-download", ButtonColor::class);
    // To add html bottom of detail page, use this bellow method
    $this->setAfterDetailForm(function($row) {
      // $row contain detail object variable

      return "<p>Lorem ipsum dolor</p>";
    });

}
}
