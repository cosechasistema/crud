<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminSimpleController extends CBController {


    public function cbInit()
    {
        $this->setTable("simple");
        $this->setPermalink("simple");
        $this->setPageTitle("Simple");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Nombre","nombre")->help("ingrese el nombre")->filterable(true)->strLimit(150)->maxLength(255);
		$this->addText("direccion","direccion")->filterable(true)->strLimit(150)->maxLength(150);
		$this->addDate("fecha","fecha");


    }
}
