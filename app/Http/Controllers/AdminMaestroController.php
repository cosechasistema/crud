<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMaestroController extends CBController {


    public function cbInit()
    {
        $this->setTable("maestro");
        $this->setPermalink("maestro");
        $this->setPageTitle("Maestro");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Descripcion","descripcion")->filterable(true)->strLimit(150)->maxLength(255);
    // Custom field with raw html
    /*    $this->addCustom("fecha")->setHtml(
                    "<input type='text' class='form-control' name='foo'/>"
                );*/
     $this->addDate("Birthday","fecha")->format("d/m/Y");

    /**
        * First parameter is sub module name
        * Second parameter is sub module Controller (You have to create it first)
        * Third parameter is foreign key from cities table
        * Fourth parameter is for detail attributes
        */

    $this->addSubModule("Detalles ", AdminDetalleController::class, "maestro_id", function ($row) {
      return [
        "ID"=> $row->primary_key, // You can get the id of table by using primary_key object
        "Created"=> date("d/m/Y H:i", strtotime($row->created_at))
      ];
    });

    }
}
