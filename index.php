<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
        <link rel="stylesheet" type="text/css" href="style_doc/styles.css">
        <title>Hello World</title>
    </head>

    <body>
        <script type="text/javascript" src='click.js'></script>
        <div class = "center">
            <h1>
                <?php
                include('db_connect.php');
                // Assign the query.
                $query = "SELECT * FROM information WHERE id=1";
                // Execute the query.
                $result = mysqli_query($con, $query);
                // If no data is found.
                if(mysqli_num_rows($result) == 0){
                    echo "Database is empty !";
                }
                else{
                    // Puts the result in an associate array.
                    $name = mysqli_fetch_assoc($result);
                    // Frees the $result memory as it is no longer required.
                    mysqli_free_result($result);
                    // Closing the connection.
                    mysqli_close($con);
                    // Print the result as in the first column.
                    echo "Hello from " . $name["name"] . " !";
                }
                ?>
            </h1>       
        </div>
    </body>
</html>