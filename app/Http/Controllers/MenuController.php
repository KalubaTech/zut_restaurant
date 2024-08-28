<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function fetchAll()
    {
        header('Content-Type: application/json');

        $data = [
            [
                'id' => 1, 
                'name' => 'Pizza', 
                'description' => 'Delicious cheese pizza', 
                'category' => 'Main Course', 
                'price' => 9.99, 
                'is_available' => true, 
                'image' => 'https://example.com/pizza.jpg'
            ],
            [
                'id' => 2, 
                'name' => 'Salad', 
                'description' => 'Healthy mixed salad', 
                'category' => 'Appetizer', 
                'price' => 5.49, 
                'is_available' => true, 
                'image' => 'https://example.com/salad.jpg'
            ],
            [
                'id' => 3, 
                'name' => 'Burger', 
                'description' => 'Juicy beef burger', 
                'category' => 'Main Course', 
                'price' => 8.99, 
                'is_available' => false, 
                'image' => 'https://example.com/burger.jpg' 
            ]
        ];
        
        
        echo json_encode($data); 
    }
}
