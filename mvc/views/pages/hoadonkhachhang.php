<?php
$rooms = $data['dataRooms'];
?>

<?php
if (mysqli_num_rows($rooms) > 0) {
?>
    <div class="hoadonkhachhang">
        hdd
    </div>
<?php
} else {

?>

    <div class="hoadonkhachhangchuadat" style="width: 100%; height: 100vh; display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <h3>Chưa có bất kì hóa đơn nào</h3>
        <button type="button" class="btn btn-success">Nhấn để đặt phòng</button>
    </div>

<?php
}
?>