<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysqli;

class FetchAllMeals extends Controller
{
    public function upload(Request $request)
    {
        // Create a connection to the MySQL database
        $connection = new \mysqli('localhost', 'root', '', 'zut_restaurant');

        // Check for connection errors
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        // Get and sanitize the input data
        $type = mysqli_real_escape_string($connection, $request->input('type'));

        $messages = array();

        $array = array();

        // Prepare the SQL query
        $sql = "SELECT * FROM `meals` WHERE type = '$type'";

        $result = mysqli_query($connection,$sql);
 
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $image = $row['image']; 
                $price = $row['price'];
                $typ = $row['type'];
                $calories = $row['calories'];
                $description = $row['description'];
            
                array_push($array,['id'=>$id, 'name'=>$name, 'image'=>$image, 'type'=>$typ, 'calories'=>$calories, 'description'=>$description, 'price'=>$price]);
            } 
        }

        // Convert the message array to JSON and return it
    
        echo json_encode($array);
        // Close the database connection
        $connection->close();
    }
}
