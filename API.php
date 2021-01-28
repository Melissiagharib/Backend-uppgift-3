


<?php
header("Content-Type: application/json; charset=UTF-8");

    $name= array(
        0 => 'BMW',
        1 => 'BMW', 
        2 => 'BMW', 
        3 => 'Volvo', 
        4 => 'Volvo', 
        5 => 'Mercedes', 
        6 => 'Ferrari', 
        7 => 'BMW', 
        8 => 'BMW', 
        9 => 'Audi',     
    );
     
    $price = array(
        0 => '253.000',
        1 => '589.000', 
        2 => '333.000', 
        3 => '350.000', 
        4 => '356.000', 
        5 => '998.000', 
        6 => '999.999', 
        7 => '658.000', 
        8 => '865.000', 
        9 => '996.000',     
    );
 
    $model = array(
         0 => 'X1',
         1 => 'X5', 
         2 => 'X3', 
         3 => 'XC40', 
         4 => 'V60', 
         5 => 'G63 Amg Brabus', 
         6 => 'F8-Tributo', 
         7 => 'X6', 
         8 => 'X7', 
         9 => 'A9',     
    );
    $image = array(
         0 => 'http://localhost/Webbshop/images/Bmw-x1.jpg',
         1=> 'http://localhost/Webbshop/images/Bmw-x5.jpg', 
         2 => 'http://localhost/Webbshop/images/Bmw-x3.jpg', 
         3 => 'http://localhost/Webbshop/images/Volvo-xc40.jpg', 
         4 => 'http://localhost/Webbshop/images/Volvo-V60.jpg', 
         5 => 'http://localhost/Webbshop/images/G63AMG.Brabus.jpg', 
         6 => 'http://localhost/Webbshop/images/Ferrari-F8-Tributo-2020.jpg', 
         7 => 'http://localhost/Webbshopb/images/Bmw-x6.jpg', 
         8 => 'http://localhost/Webbshop/images/Bmw-x7.jpg', 
         9 => 'http://localhost/Webbshop/images/Audi-A9.jpg',     
    );
    $descripion = array(
         0 => 'BMW X1 is a great luxury subcompact SUV',
         1 => 'BMW X5 is one of the best luxury midsize SUVs', 
         2 => 'BMW X3 is a great luxury SUV', 
         3 => 'XC40 is a good luxury subcompact SUV', 
         4 => 'V60 is a good wagon,And very safe', 
         5 => 'Mercedes-Benz G-Class is a great luxury large SUV', 
         6 => 'The Ferrari F8 Tributo is the new mid-rear-engined sports car', 
         7 => 'BMW X6 is a decent luxury SUV', 
         8 => 'BMW X7 is a good luxury large SUV', 
         9 => 'Audi’s new ultra-luxurious A9 Coupe',     
    );  
    


        $cars = array();


        for ($i=0; $i < 10 ; $i++){

        $car = array(
            'name' => $name[$i],
            'price' => $price[$i],
            'model' => $model[$i],
            'image' => $image[$i],
            'descripion' => $descripion[$i],
            'lagersaldo' => rand (0,50)
            
    );

         array_push ($cars,$car);
        }
       
    
    $json = json_encode($cars, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
    echo $json;
?>