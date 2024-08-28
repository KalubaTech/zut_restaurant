<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadMenu extends Controller
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
        $title = mysqli_real_escape_string($connection, $request->input('title'));
        $description = mysqli_real_escape_string($connection, $request->input('description'));
        $price = mysqli_real_escape_string($connection, $request->input('price'));
        $type = mysqli_real_escape_string($connection, $request->input('type'));
        $calories = mysqli_real_escape_string($connection, $request->input('calories'));

        // Initialize the image path
        $imagePath = ''; 

        
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newFileName = md5(time() . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
            
            // Define the upload directory
            $uploadPath = public_path('uploads');
            
            // Move the image to the upload directory
            $image->move($uploadPath, $newFileName);

            // Set the image path to store in the database
            $imagePath = 'uploads/' . $newFileName; 
        }

        

        $messages = array();

        // Prepare the SQL query
        $sql = "INSERT INTO `meals`(`name`, `image`, `type`, `calories`, `description`, `price`) VALUES ('$title','$imagePath','$type','$calories','$description','$price')";
 

        if(mysqli_query($connection,$sql)){
           $messages = ['message'=>'Successfully!'];
        }else{
            $messages = ['message'=>'Failed: '.mysqli_error($connection)];
        }

        // Convert the message array to JSON and return it
    
        echo json_encode($messages);
        // Close the database connection
        $connection->close();
    }
}
