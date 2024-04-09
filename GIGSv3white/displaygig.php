
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="icon/icontitle.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>Display Gigs</title>
    <style>
        /*
        PROJECT COLORS:
        #084D6A - DARK BLUE
        #48BEC5 - LIGHT BLUE
        #F0F1B7 - BEIGE
        #97D779 - GREEN
        */
        body {
            font-family: Arial, sans-serif;
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

        .gig {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            list-style-type: none;
        }

        .gig:nth-child(even) {
            background-color: #f1f1f1;
        }

        .gig h3 {
            margin: 0;
            font-size: 18px;
        }

        .gig p {
            margin: 5px 0;
        }

        #addgig, #chat, #review {
            border-radius: 5px;
            padding: 3px 12px;
            font-weight: 800;
            font-size: 18px;
            border: none;
            background-color: #084D6A;
            color: #97D779;
            cursor: pointer;
        }

      

    </style>
</head>
<body>
    <?php include 'navBar.php'; ?>

    <div class="container">
        <a href="addform.php"><button id="addgig">Add New Gig</button><br></a>


        <?php
        require_once('./dbconnection.php');

        $db = db_connect();


            echo '<br><div class="gig-container">';

            // Fetch gigs from the database
            $sql = "SELECT * FROM gigworker ORDER BY id DESC";
            $result = $db->query($sql);

            // Display the gigs
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<li class="gig">';
                    echo '<h3>' . $row['userName'] . '</h3>';
                    echo '<p>Location: ' . $row['city'] . ', ' . $row['country'] . '</p>';
                    echo '<p>Phone: ' . $row['phone'] . '</p>';
                    echo '<p>Email: ' . $row['userEmail'] . '</p>';
                    echo '<br><a href="http://localhost/GIGSv3white_3/GIGSv3white/newchat/indexchat.html" target="_blank"><button id="chat">Chat</button></a> ';
                    echo '<a href="http://localhost/GIGSv3white_3/GIGSv3white/GIGSv3white/reviews.php" target="_blank"><button id="review">Review</button></a>';
                    echo '</li>';
                }
            } else {
                echo "No gigs added yet.";
            }
            echo '</div>';
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
