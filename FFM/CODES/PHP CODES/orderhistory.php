<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-image: url(https://img.freepik.com/premium-photo/dark-scene-with-smoke-background-3d-rendering_118019-1281.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
    .btn
    {
      font-size: 18px;
      padding-left: 700px;
    }
    h1 {
      color: aliceblue;
      text-align: center;
    }

    .order-details {
      background-color: none;
      padding: 20px;
      margin-bottom: 20px;
      color: aliceblue;
      border-radius: 5px;
    }

    .order-details p {
      margin: 0;
    }
    .karthi
    {
      color: aliceblue;
      padding-left: 600px;
    }
    .karthick
    {
      font-size: 18px;
      color: aliceblue;
      width: 30px;
      height: 20px;
    }
    .btn {
      font-size: 18px;
      padding: 8px 20px;
      margin-left: 670px;
      position: relative;
      z-index: 1;
      color: white;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      text-decoration: none;
    }

    .btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #007bff;
      opacity: 0.7;
      z-index: -1;
      border-radius: 5px;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      margin-left: -300px;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      color: aliceblue;
    }
    
    th {
      background-color: #007bff;
    }
    
    tr:hover {
    background-color: lightcyan; /* Change to the desired background color when hovering */
  }

  tr:hover td {
    color: black; /* Change to the desired text color when hovering */
  }

    
  </style>
</head>
<body>
  <h1>Order History</h1>
  <br>
  <br>
  <div id="orderDetailsContainer" class="karthi">
    <?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database_name = "order_details";

    $conn = mysqli_connect($server_name, $username, $password, $database_name);

    // Check the connection
    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    // Retrieve order details from the database
    $sql_query = "SELECT * FROM entry_details";
    $result = mysqli_query($conn, $sql_query);

    if (mysqli_num_rows($result) > 0) {
        // Output order details
        echo "<table>";
        echo "<tr>";
        echo "<th>Address</th>";
        echo "<th>Phone Number</th>";
        echo "<th>Quantity</th>";
        echo "<th>Meat Size</th>";
        echo "<th>Extra Masala</th>";
        echo "<th>Payment</th>";
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['address1'] . "</td>";
          echo "<td>" . $row['phone_number'] . "</td>";
          echo "<td>" . $row['quantity'] . "</td>";
          echo "<td>" . $row['size'] . "</td>";
          echo "<td>" . $row['extra_masala'] . "</td>";
          echo "<td>" . $row['payment'] . "</td>";
          echo "</tr>";
      }
      echo "</table>";
  } else {
      echo "No order details found.";
  }

  mysqli_close($conn);
  ?>
</div>

<a href="./page1.html" button class="btn">Home</button></a>

</body>
</html>

