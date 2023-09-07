<div class="dichvu">
    <div class="dichvu_control" style="padding-top: 30px; margin-bottom: 30px;">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalthem">
            Thêm dịch vụ
        </button>
    </div>


    <h4>Danh sách dịch vụ</h4>
    <table style="width: 100%; border: 1px solid #333; padding: 10px; border-radius: 10px; margin-top: 30px;">
        <thead>
            <th style="padding: 10px;">Tên dịch vụ</th>
            <th style="padding: 10px;">Số lượng</th>
            <th style="padding: 10px;">Thành tiền</th>
            <th style="padding: 10px;">Chức năng</th>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px; padding-left: 10px;">coca</td>
                <td style="padding: 10px;">1</td>
                <td style="padding: 10px;">10k</td>
                <td style="padding: 10px; padding-right: 10px;">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModalsua">
                        Sửa
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalxoa">
                        Xóa
                    </button>
                </td>
            </tr>
        </tbody>
    </table>



    <!-- modal sua -->
    <div class="modal fade" id="exampleModalsua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sửa thông tin dịch vụ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    sua
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal xoa -->
    <div class="modal fade" id="exampleModalxoa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa dịch vụ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn chắc chắn muốn xóa dịch vụ này
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Đúng vậy</button>
                </div>
            </div>
        </div>
    </div>


    <!-- them dich vu -->
    <div class="modal fade" id="exampleModalthem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm dịch vụ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Tên dịch vụ</label>
                    <input style="margin-top: 6px; margin-bottom: 20px;" type="text" class="form-control" aria-label="" aria-describedby="basic-addon1">

                    <label for="">Số lượng</label>
                    <input style="margin-top: 6px; margin-bottom: 20px;" type="text" class="form-control" aria-label="" aria-describedby="basic-addon1">

                    <label for="">Giá</label>
                    <input style="margin-top: 6px; margin-bottom: 20px;" type="text" class="form-control" aria-label="" aria-describedby="basic-addon1">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </div>
</div>