<html>
    <body>
        <?php
        $servername = "localhost";
        $user = "root";
        $password ="";
        $db = "univercity";

        $conn = mysqli_connect($servername,$user,$password,$db);
        if(!$conn){
            die("Connection failed:" .mysql_connect_error());

        }
        $sql = "SELECT id,name,email,FROM users";
        $result = $conn->query($sql);
        
        ?>
        
        <table border="1">
        
        <tr>
        
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        </tr>
        
        
        <?php
        if($result->num_row >0){
            while($row=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["email"]?></td>
            </tr>
            <?php }
        
            }
            else{
                echo"0 results";
            }
            ?>
            </table>
        </body>
        </html>
        
        