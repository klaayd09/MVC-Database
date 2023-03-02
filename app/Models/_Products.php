<?php
 
 namespace App\Models;
 


    class Products{
    public static function all(){
        $product_info = [
        [
            'id' => '1',
            'img' => '/assets/img/portfolio/1.jpg',
            'productName' => 'Bracelet',
            'desc' => '$100',
        ],
        
    ];
         
        return ($product_info);
    
    }
}