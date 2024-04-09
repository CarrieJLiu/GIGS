<?php
   require_once('./dbconnection.php');

   $db = db_connect();
   
   // Check if the form is submitted
   if (isset($_POST['insert'])) {
    // Retrieve form data
    $userName = $_POST['userName'];   
    $company = $_POST['company'];   
    $description = $_POST['description'];

    // Validate and sanitize the form data
    // (You can add your own validation logic here)

    // Insert the gig into the database
    $sql = "INSERT INTO reviews (userName, company, description)
            VALUES ('$userName', '$company', '$description')";

    $result = $db->query($sql);

if ($result) {
    // Gig added successfully, redirect to displaygigs.php
    header('Location: displayreview.php');
    exit();
} else {
    echo "Error adding the gig: " . $db->error;
}
}

    
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="icon/icontitle.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>Add Gig Form</title>
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php include 'navBar.php'; ?>

    <div class="container">
        <h1>Add Review For...</h1>
        <form action="" method="POST">
            <label for="userName">User Name:</label>
            <input type="text" id="userName" name="userName" required>
            
            <label for="company">Company Name:</label>
            <input type="text" id="company" name="company" required>

            <label for="description">Review:</label>
            <textarea id="description" name="description" required></textarea>

            <input type="submit" value="Add Review" name="insert">

        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
