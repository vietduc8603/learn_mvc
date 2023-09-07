<?php
class thongtinphong extends Controller
{
    public function start()
    {

        $roomModel = $this->model("RoomModel");

        $dataRooms = $roomModel->getARoomForName($_SESSION['username']);

        $this->view("defaultLayout", [
            "container" => "thongtinphong",
            "dataRooms" => $dataRooms
        ]);
    }
}
