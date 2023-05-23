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

if (isset($_POST['placeorder'])) {
    $full_name = isset($_POST['fullName']) ? $_POST['fullName'] : '';
    $extra_masala = isset($_POST['masala']) ? implode(', ', $_POST['masala']) : '';
    $address1 = isset($_POST['address']) ? $_POST['address'] : '';
    $phone_number = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
    $size = isset($_POST['size']) ? $_POST['size'] : '';
    $payment = isset($_POST['payment']) ? $_POST['payment'] : '';

    $sql_query = "INSERT INTO entry_details (full_name, extra_masala, address1, phone_number, quantity, size, payment)
                  VALUES ('$full_name', '$extra_masala', '$address1', '$phone_number', '$quantity', '$size', '$payment')";

    if (mysqli_query($conn, $sql_query)) {
        header("Location:./thanks_page.html");
    } else {
        echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
