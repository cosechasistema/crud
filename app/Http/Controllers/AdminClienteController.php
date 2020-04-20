<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminClienteController extends CBController {


    public function cbInit()
    {
        $this->setTable("cliente");
        $this->setPermalink("cliente");
        $this->setPageTitle("Cliente");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Nombre","nombre")->filterable(true)->strLimit(150)->maxLength(255);
		$this->addText("Direccion","direccion")->filterable(true)->strLimit(150)->maxLength(255);
		

    }
}
