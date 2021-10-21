<?php

include('header.php');
?>

    <div class="container">
    <h2>Thêm các loại thuốc</h2>
    <form action = "process_adddrugs.php" method="POST">
        <div class="mb-3">
            <label for="$ID " class="form-label">ID</label>
            <input type="text" class="form-control" name="id">
        </div>

        <div class="mb-3">
            <label for="$Name" class="form-label">Tên thuốc</label>
            <input type="text" class="form-control" name = "name">
        </div>

        <div class="mb-3">
            <label for="$Type" class="form-label">Loại thuốc</label>
            <input type="text" class="form-control" name="type">
        </div>

        <div class="mb-3">
            <label for="$Barcode" class="form-label">Mã vạch</label>
            <input type="text" class="form-control" name="barcode">
        </div>

        <div class="mb-3">
            <label for="$Dose" class="form-label">Liều lượng</label>
            <input type="text" class="form-control" name="dose">
        </div>

        <div class="mb-3">
            <label for="$Code" class="form-label">Mã</label>
            <input type="text" class="form-control" name = "code">
        </div>

        <div class="mb-3">
            <label for="$Cost_price" class="form-label">Gía nhập</label>
            <input type="text" class="form-control" name="cost_price">
        </div>

        <div class="mb-3">
            <label for="Selling_price" class="form-label">Gía bán</label>
            <input type="text" class="form-control" name="selling_price">
        </div>

        <div class="mb-3">
            <label for="$Expiry" class="form-label">Trạng thái hạn sử dụng</label>
            <input type="text" class="form-control" name = "expiry">
        </div>

        <div class="mb-3">
            <label for="Company_name" class="form-label">Công ty</label>
            <input type="text" class="form-control" name="company_name">
        </div>

        <div class="mb-3">
            <label for="$Production_date" class="form-label">Ngày sản xuất</label>
            <input type="text" class="form-control" name="production_date">
        </div>

        <div class="mb-3">
            <label for="$Expiration_date" class="form-label">Ngày hết hạn</label>
            <input type="text" class="form-control" name="expiration_date">
        </div>

        <div class="mb-3">
            <label for="$Place" class="form-label">Nơi sản xuất</label>
            <input type="text" class="form-control" name = "place">
        </div>

        <div class="mb-3">
            <label for="$Quantity" class="form-label">Số lượng</label>
            <input type="text" class="form-control" name = "quantity">
        </div>
    
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-success">Lưu</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

