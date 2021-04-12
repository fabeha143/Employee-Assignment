<html>
    <head>
        <title>Assignment</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <div class="searchbox">
            <form class="search-form" method="POST">
                <input type="text" placeholder="Search" name="search" >
                <input type="submit" name="submitsearch" >
            </form>
        </div>


        <form action="form.php" method="post" class="form1">
            <input type="submit" name="empdata" value="Enter your data">
        </form>
        <?php
            include 'db_connect.php';
            $sql = "SELECT * FROM employee_details";
            if($result = mysqli_query($conn,$sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table class='mytable'>";
                    echo "<tr>";
                        echo "<th>id</th>";
                        echo "<th>Full name</th>";
                        echo "<th>Email</th>";
                        echo "<th>Phone Number</th>";
                    echo "</tr>";

                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['full_name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['phone_no'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    mysqli_free_result($result);
                }
                
            }
            
        

            ?>

    </body>
</html>