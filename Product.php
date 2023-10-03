<?php 
class Product {
    //Add properties
    private $id, $name, $price;
    
    public function __construct(int $id, string $name, float $price) {
        //Initialize properties
        $this -> id = $id;
        $this -> name = $name;
        $this -> price = $price;
    }


    // Add getFormattedPrice method
    public function getFormattedPrice (){
        $this -> price = sprintf("%.2f",$this -> price);
        return $this -> price;
    }


    // Add showDetails method
    public function showDetails (){
        $price = $this -> getFormattedPrice();
        // echo $price . "\n";
        $productDetails = <<<details
        Product Details:
        - ID: {$this -> id}
        - Name: {$this -> name}
        - Price: $$price
        details;

        echo $productDetails;
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();