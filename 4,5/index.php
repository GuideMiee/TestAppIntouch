<?php
// ข้อมูลการเชื่อมต่อฐานข้อมูล
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "db.customer";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// คำสั่ง SQL สำหรับแสดงข้อมูล Used ที่มีค่ามากกว่า 500,000
$sql_used = "SELECT * FROM customer WHERE Used > 500000";
$result_used = $conn->query($sql_used);
echo "<h1>Customer</h1>";
// ตรวจสอบว่ามีข้อมูลหรือไม่
if ($result_used->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>CountryCode</th>
                <th>Budget</th>
                <th>Used</th>
            </tr>";
    
    while($row = $result_used->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["Name"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["CountryCode"] . "</td>
                <td>" . $row["Budget"] . "</td>
                <td>" . $row["Used"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<h1>Orders</h1>";
// คำสั่ง SQL สำหรับเชื่อมข้อมูลจากตาราง Customer และ Order
$sql_orders = "SELECT c.ID, c.Name, o.Date, o.Amount 
               FROM customer c
               JOIN orders o ON c.ID = o.CutomerID";
$result_orders = $conn->query($sql_orders);

// ตรวจสอบว่ามีข้อมูลหรือไม่
if ($result_orders->num_rows > 0) {

    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Cutomer ID</th>
                <th>Date</th>
                <th>Amount</th>
            </tr>";
    
    while($row = $result_orders->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["Name"] . "</td>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["Date"] . "</td>
                <td>" . $row["Amount"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$sql_join = "SELECT c.ID AS CutomerID, c.Name, c.Email, c.CountryCode, c.Budget, c.Used, o.ID AS OrderID, o.Date, o.Amount 
             FROM customer c
             JOIN orders o ON c.ID = o.CutomerID";
$result_join = $conn->query($sql_join);

echo "<h1>Join Orders & Customer</h1>";
if ($result_join->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>CountryCode</th>
                <th>Budget</th>
                <th>Used</th>
                <th>Order ID</th>
                <th>Date</th>
                <th>Amount</th>
            </tr>";
    
    while($row = $result_join->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["CutomerID"] . "</td>
                <td>" . $row["Name"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["CountryCode"] . "</td>
                <td>" . $row["Budget"] . "</td>
                <td>" . $row["Used"] . "</td>
                <td>" . $row["OrderID"] . "</td>
                <td>" . $row["Date"] . "</td>
                <td>" . $row["Amount"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// ปิดการเชื่อมต่อ
$conn->close();
