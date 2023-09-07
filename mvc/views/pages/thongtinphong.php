<?php
$rooms = $data['dataRooms'];
?>

<?php
if (mysqli_num_rows($rooms) > 0) {
    $room = mysqli_fetch_row($rooms);
    if ($room[2] == "Đã đặt") {

?>
        <div class="thongtinphong">
            <h4 style="margin-bottom: 20px;">Thông tin phòng đang đặt</h4>

            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Tên phòng:</span>
                <p><?php echo "P" . $room[0]; ?></p>
            </div>
            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Loại phòng:</span>
                <p><?php echo  $room[1]; ?></p>
            </div>
            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Trạng thái hiện tại:</span>
                <p><?php echo $room[2]; ?></p>
            </div>

            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Ngày đặt:</span>
                <p><?php echo $room[3]; ?></p>
            </div>
            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Khách hàng:</span>
                <p><?php echo $room[5]; ?></p>
            </div>

            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Giá:</span>
                <p><?php echo $room[6]; ?></p>
            </div>
            <div class="phong_item" style="display: flex; align-items: stretch; margin-bottom: 30px;">
                <span style="margin-right: 10px; font-weight: 600;">Tình trạng:</span>
                <p>Đã dọn dẹp</p>
            </div>
            <button type="button" class="btn btn-success">Nhận phòng</button>
        </div>
    <?php
    } else {
    ?>
        <div class="thongtinphong">

            <h4 style="margin-bottom: 20px;">Thông tin phòng đang đặt</h4>

            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Tên phòng:</span>
                <p><?php echo "P" . $room[0]; ?></p>
            </div>
            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Loại phòng:</span>
                <p><?php echo  $room[1]; ?></p>
            </div>
            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Trạng thái hiện tại:</span>
                <p><?php echo $room[2]; ?></p>
            </div>

            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Ngày đặt:</span>
                <p><?php echo $room[3]; ?></p>
            </div>
            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Ngày nhận:</span>
                <p><?php echo $room[4]; ?></p>
            </div>
            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Khách hàng:</span>
                <p><?php echo $room[5]; ?></p>
            </div>

            <div class="phong_item" style="display: flex; align-items: stretch;">
                <span style="margin-right: 10px; font-weight: 600;">Giá:</span>
                <p><?php echo $room[6]; ?></p>
            </div>
            <div class="phong_item" style="display: flex; align-items: stretch; margin-bottom: 30px;">
                <span style="margin-right: 10px; font-weight: 600;">Tình trạng:</span>
                <p>Đã dọn dẹp</p>
            </div>
            <button type="button" class="btn btn-success">Trả phòng</button>
        </div>
    <?php
    }
} else {
    ?>



    <div class="thongtinphongchuadat" style="width: 100%; height: 100vh; display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <h3>Hiện tại bạn chưa đặt phòng nào</h3>
        <button type="button" class="btn btn-success">Nhấn để đặt phòng</button>
    </div>

<?php
}
?>