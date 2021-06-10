<?php
    echo '<style>
    h2{
        text-align: center;
    }
    table{
        background-image: url(../img/bg_sell_2.jpg);
        color: white;
        font-size: 18px;
        font-weight: 600;
    }
    </style>';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "giverentdb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        echo "Error";
    }
    if(isset($_POST['submit'])){
        
        $search = $_POST['search'];
        $sql = "SELECT * FROM rental_details_ WHERE adrs LIKE '%$search%' OR picode LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        echo '<h2> Results related to your Search </h2>';
        echo '<table border="1" cellpadding="2" align="center" cellspacing="2">
            <tr>
            <th>SR_NO:</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Property Type</th>
            <th>Duration</th>
            <th>Address</th>
            <th>Pincode</th>
            <th>District</th>
            <th>City</th>
            <th>State</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Images</th>
            </tr>';
        while($row = mysqli_fetch_array($result)){
            $srno = $row['sr_no'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $type = $row['prop_type'];
            $duration = $row['duration'];
            $address = $row['adrs'];
            $pcode = $row['picode'];
            $district = $row['district'];
            $city = $row['city'];
            $state = $row['statte'];
            $email = $row['email'];
            $phone = $row['phone_no'];
            $image_text = $row['images'];

            echo '<tr>
            <td>'.$srno.'</td>
            <td>'.$fname.'</td>
            <td>'.$lname.'</td>
            <td>'.$type.'</td>
            <td>'.$duration.'</td>
            <td>'.$address.'</td>
            <td>'.$pcode.'</td>
            <td>'.$district.'</td>
            <td>'.$city.'</td>
            <td>'.$state.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td><img src = "../imagefetch/'.$row['images'].'" style = "width:150px; height:100px;"></td>
            </tr>';

        }
        echo '</table>';
    }
    
    else
    {
        echo "Error";
    }