<?php
include('header.php');
?>

<h1>Danh sách các loại thuốc</h1>
<a href="add_person.php"><button type="button" class="btn btn-primary">Thêm</button></a>

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'quanlyduocpham','3306');
    if(!$conn){
        die("Kết nối không thành công");
    }

    $sql ="Select * from drugs";
    $result = mysqli_query($conn, $sql);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Tên thuốc</th>";
    echo "<th>Loại thuốc</th>";
    echo "<th>Mã vạch</th>";
    echo "<th>Liều lượng</th>";
    echo "<th>Mã</th>";
    echo "<th>Gía nhập</th>";
    echo "<th>Gía bán</th>";
    echo "<th>Trạn thái hạn sử dụng</th>";
    echo "<th>Công ty</th>";
    echo "<th>Ngày sản xuất</th>";
    echo "<th>Ngày hết hạn</th>";
    echo "<th>Nơi sản xuất</th>";
    echo "<th>Số lượng</th>";
    echo"<th>Sửa</th>";
    echo"<th>Xóa</th>";
    echo "</tr>";

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['type']."</td>";
            echo "<td>".$row['barcode']."</td>";
            echo "<td>".$row['dose']."</td>";
            echo "<td>".$row['code']."</td>";
            echo "<td>".$row['cost_price']."</td>";
            echo "<td>".$row['selling_price']."</td>";
            echo "<td>".$row['expiry']."</td>";
            echo "<td>".$row['company_name']."</td>";
            echo "<td>".$row['production_date']."</td>";
            echo "<td>".$row['expiration_date']."</td>";
            echo "<td>".$row['place']."</td>";
            echo "<td>".$row['quantity']."</td>";
          
            $id = $row['id'];
            echo'<td><a href="sua.php?id=<?'.$row['id'].'; ?>"><button type="button"
    class="btn btn-success">Sửa</button></a></td>';
echo'<td><a href="delete.php?id='.$id.'"><button type="button" class="btn btn-danger">Xóa</button></a></td>';
echo "<tr>";

    }
    }

    echo "</table>";

    mysqli_close($conn);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>

    </html>