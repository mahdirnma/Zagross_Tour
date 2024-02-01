<?php
require_once "Model.php";
class Tour extends Model{

    function delete()
    {
        // TODO: Implement delete() method.
    }

    function insert()
    {
        // TODO: Implement insert() method.
    }

    function update()
    {
        // TODO: Implement update() method.
    }
    public function select_special(){
        return $this->conn->query("SELECT tours.id,tours.title,tours.description,tours.start_day,tours.days,tours.price,hardness.grade FROM tours INNER JOIN hardness ON tours.hardness_id=hardness.id");
    }
}