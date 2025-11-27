<!DOCTYPE html>
<html>
<head>
<title>Electricity Bill</title>
</head>
<body bgcolor="skyblue">

<h2>Electricity Bill Calculator</h2>

<form method="post">
    Consumer ID: <input type="number" name="id" required><br><br>
    Name: <input type="text" name="name" required><br><br>

    Enter Units Consumed: 
    <input type="number" name="units" required><br><br>
    
    Bill Issued From:
    <input type="date" name="issued_from" required><br><br>

    Bill Issued To:
    <input type="date" name="issued_to" required><br><br>

    Due Date:
    <input type="date" name="due_date" required><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $units = $_POST["units"];
    $rate = 5;              // ₹5 per unit (change if needed)
    $amount = $units * $rate;
    $due_date = $_POST["due_date"];

    $issued_from = $_POST["issued_from"];
    $issued_to = $_POST["issued_to"]; 
    
   
    $fixed = 50;
    $gst = $amount * 0.18;
    $total = $amount + $fixed + $gst;

    echo "<h3>------ Bill Details ------</h3>";
    echo "Consumer ID: $id <br>";
    echo "Name: $name <br>";
    echo "Units Consumed: $units <br>";
    echo "Rate per Unit: ₹$rate <br>";
    echo "Energy Charge: ₹".number_format($amount,2)." <br>";
    echo "Fixed Charge: ₹$fixed <br>";
    echo "GST (18%): ₹".number_format($gst,2)." <br><br>";
    echo "Due Date: <b>$due_date</b> <br><br>";
    
    echo "Bill Period: <b>$issued_from</b> to <b>$issued_to</b> <br><br>";
    echo "Due Date: <b>$due_date</b> <br><br>";
    
    echo "<b>Total Bill Amount: ₹".number_format($total,2)."</b>";
}
?>

</body>
</html>

