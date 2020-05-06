<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminDetalleController extends CBController {


    public function cbInit()
    {
        $this->setTable("detalle");
        $this->setPermalink("detalle");
        $this->setPageTitle("Detalle");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Descripcion Detalle","descripcion_detalle")->strLimit(150)->maxLength(255);
		$this->addSelectTable("Maestro","maestro_id",["table"=>"maestro","value_option"=>"id","display_option"=>"descripcion","sql_condition"=>""])->foreignKey('maestro_id');
		

    }
}
