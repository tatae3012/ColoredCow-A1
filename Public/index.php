<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Hello World</title>
    </head>

    <body>
        <script type="text/javascript" src='js/action.js'></script>
        <div class = "center">
            <h1>
                <?php
                    include('../Modules/db/db_connect.php');
                    $query = "SELECT * FROM information WHERE id=1";
                    $result = mysqli_query($con, $query);
                    // If no data is found.
                    if(mysqli_num_rows($result) == 0)
                    {
                        echo "Hello !";
                    }
                    else
                    {
                        $name = mysqli_fetch_assoc($result);
                        mysqli_free_result($result);
                        mysqli_close($con);
                        echo "Hello from " . $name["name"] . " !";
                    }
                ?>
            </h1>       
        </div>
    </body>
</html>