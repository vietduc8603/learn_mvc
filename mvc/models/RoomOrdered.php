<?php
class RoomOrdered extends DB
{
    public function addRoomOrdered($roomID, $ngaydat, $ngaynhan, $loaiphong, $gia, $name, $cccd, $sdt, $ngaysinh, $quoctich, $diachi, $gioitinh)
    {
        $query = "INSERT INTO rooms_ordered VALUES('$roomID', '$ngaydat', '$ngaynhan', '$loaiphong', '$gia', '', '$name', '$cccd', '$sdt', '$ngaysinh', '$quoctich', '$diachi', '$gioitinh')";

        mysqli_query($this->connection, $query);
    }
}
