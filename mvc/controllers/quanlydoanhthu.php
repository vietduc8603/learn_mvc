<?php
class quanlydoanhthu extends Controller
{
    public function start()
    {
        $this->view("defaultLayout", [
            "container" => "quanlydoanhthu"
        ]);
    }
}
