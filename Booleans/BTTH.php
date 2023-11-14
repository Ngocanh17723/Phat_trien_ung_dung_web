<!DOCTYPE html>
<html>

<head>
    <title>Dự Báo Ngành Trúng Tuyển</title>
</head>

<body>
    <h1>Nhập điểm của bạn</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $toan = $_POST["toan"];
        $ly = $_POST["ly"];
        $hoa = $_POST["hoa"];
        $tong_diem = $toan + $ly + $hoa;
        $diem_chuan_cntt = 18;
        $diem_chuan_cntt_chatluongcao = 22;
        $diem_chuan_khdl = 18;
        $diem_chuan_diachat = 17;
        $diem_chuan_moitruong = 15;
        $nganh_trung_tuyen = "";
        if ($tong_diem >= $diem_chuan_cntt_chatluongcao) {
            $nganh_trung_tuyen = "CNTT Chất lượng cao";
        } elseif ($tong_diem >= $diem_chuan_cntt) {
            $nganh_trung_tuyen = "CNTT";
        } elseif ($tong_diem >= $diem_chuan_khdl) {
            $nganh_trung_tuyen = "KHDL";
        } elseif ($tong_diem >= $diem_chuan_diachat) {
            $nganh_trung_tuyen = "Địa chất";
        } elseif ($tong_diem >= $diem_chuan_moitruong) {
            $nganh_trung_tuyen = "Môi trường";
        } else {
            $nganh_trung_tuyen = "Không có ngành nào trúng tuyển";
        }
        echo "<h2>Kết quả dự báo:</h2>";
        echo "<p>Tổng điểm của bạn: $tong_diem</p>";
        echo "<p>Ngành trúng tuyển: $nganh_trung_tuyen</p>";
    }
    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Toán: <input type="number" name="toan" required><br>
        Lý: <input type="number" name="ly" required><br>
        Hóa: <input type="number" name="hoa" required><br>
        <input type="submit" value="Dự báo">
    </form>
</body>

</html>