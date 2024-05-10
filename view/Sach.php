<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Danh sách Sách</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Danh sách Sách</h2>
    <table>
        <thead>
            <tr>
                <th>Mã Sách</th>
                <th>Tên Sách</th>
                <th>Số Lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sachData = include '../model/laysach.php';
            if (!empty($sachData)) {
                foreach ($sachData as $sach) {
                    echo "<tr>";
                    echo "<td>" . $sach['MaSach'] . "</td>";
                    echo "<td>" . $sach['TenSach'] . "</td>";
                    echo "<td>" . $sach['SoLuong'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Không có dữ liệu sách để hiển thị.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>