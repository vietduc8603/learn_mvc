<?php
class quanLyDichVu extends Controller
{
    public function start()
    {
        $this->view("defaultLayout", [
            "container" => "quanLyDichVu",
        ]);
    }
}
