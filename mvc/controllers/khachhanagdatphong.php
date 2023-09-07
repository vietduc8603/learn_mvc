<?php
class khachhanagdatphong extends Controller
{
    public function start()
    {

        $roomModel = $this->model("RoomModel");





        $dataRoomAlone = $roomModel->getRoomType("Phòng đơn");
        $dataRoomCouple = $roomModel->getRoomType("Phòng đôi");
        $dataRoomFamily = $roomModel->getRoomType("Phòng gia đình");



        $this->view("defaultLayout", [
            "container" => "khachhanagdatphong",
            "roomAlone" => $dataRoomAlone,
            "roomCouple" => $dataRoomCouple,
            "roomFamily" => $dataRoomFamily
        ]);
    }
}
