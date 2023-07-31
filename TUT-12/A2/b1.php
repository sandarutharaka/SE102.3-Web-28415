
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST["Firstname"];
        $last_name = $_POST["Lastname"];
        $username = $_POST["Username"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $academic_year = $_POST["academicyear"];
        $phone_no = $_POST["phone"];
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .output-table{
                border-collapse:collapse;
                width:1005;
            }
            .output-table th,.output-table td{
                border:1px solid #ddd;
                padding:8px;
            }
            .output-table th{
                background-color:yellow;
            }
            </style>
    </head>
    <body>
      <?php if($_SERVER["REQUEST_METHOD"]=="POST"):?>  
    
    <h2>Registration Form - Output</h2>
    <table class="output-table">
        <tr>
            <th>First Name</th>
            <td><?php echo $first_name; ?></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><?php echo $last_name; ?></td>
        </tr>
        <tr>
            <th>Username</th>
            <td><?php echo $username; ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo $password; ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <th>Academic Year</th>
            <td><?php echo $academic_year; ?></td>
        </tr>
        <tr>
            <th>Phone No</th>
            <td><?php echo $phone_no; ?></td>
        </tr>
    </table>
    <?php
    endif;
    ?>
</body>

</html> 