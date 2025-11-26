<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: skyblue;
        }
    </style>
</head>
<body>

<?php
$players = array("Rohit Sharma","Virat Kohli","Sanju Samson","Hardik Pandya","Ravindra Jadeja","Jasprit Bumrah","Mohammed Siraj");
$role = array("Captain/Batsman","Batsman","Batsman","Allrounder","Allrounder","Bowler","Bowler");

echo "<h2><center>Indian Cricket Team</center></h2>";
echo "<center><table border='1' cellpadding='8'>";
echo "<tr><th>No</th><th>Role</th><th>Player Name</th></tr>";

for ($i = 0; $i < count($players); $i++) {
    echo "<tr>";
    echo "<td>" . ($i+1) . "</td>";
    echo "<td>" . $role[$i] . "</td>";
    echo "<td>" . $players[$i] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>

