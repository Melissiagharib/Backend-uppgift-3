<?php

class App{

    public static $endpoint = "http://localhost/Webbshop/API.php";
    
	public static function main()
    {
        try {
            $rawData = self::getData();
            self:: viewData ($rawData);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

	public static function getData()
    {

        $json = @file_get_contents(self::$endpoint);

        if (!$json)
            throw new Exception("Cannot access " . self::$endpoint);

        return json_decode($json, true);
    }

       public static function viewData($array){
      
    
        
// Lägg in info på produkten från array (API.php)
$template = "";
foreach ($array as $key => $postArray) {
    $template .= "
   
    <div class='card h-100'>
      <img src= '$postArray[image]' alt=' ' class = 'img-fluid' width = 500x325px > 
      <div class='card-body'>
      <h2> $postArray[name]</h2>
        <h3> $postArray[model]</h3>
        <h4 class=' card-title'>$postArray[descripion]</h4>
        <p class='card-text'>$postArray[price] Sek </p>
        <p> $postArray[lagersaldo] Cars in stock  </p> 

        <br>
        
    </div> ";
    
   
     }

    echo $template;
    
   }
    }
    ?>

   