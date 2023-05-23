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

    .karthi {
      color: aliceblue;
      padding-left: 600px;
    }

    .karthick {
      font-size: 18px;
      color: aliceblue;
      width: 30px;
      height: 20px;
    }
  </style>
</head>
<body>
  <h1>Order Details</h1>
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
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='order-details'>";
            echo "<p><strong>Name:</strong> " . $row['full_name'] . "</p>";
            echo "<p><strong>Address:</strong> " . $row['address1'] . "</p>";
            echo "<p><strong>Phone Number:</strong> " . $row['phone_number'] . "</p>";
            echo "<p><strong>Quantity:</strong> " . $row['quantity'] . "</p>";
            echo "<p><strong>Meat Size:</strong> " . $row['size'] . "</p>";
            echo "<p><strong>Extra Masala:</strong> " . $row['extra_masala'] . "</p>";
            echo "<p><strong>Payment:</strong> " . $row['payment'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No order details found.";
    }

    mysqli_close($conn);
    ?>
  </div>
  <a href="./thanks_page.html" class="btn">Home</a>
</body>
</html>
