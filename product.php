<?php
class Product {
    public $id;
    public $name;
    public $price;
    
    public function __construct($id, $name, $price) {
        $this->id= $id;
        $this->name= $name;
        $this->price=$price;
    }

    public function getFormattedPrice($price){
        $formattedPrice= sprintf("%.2f", $price);
        echo "Price:".chr(36).$formattedPrice;
    }

    public function showDetails(){
        echo "Product Details: \n";
        echo "ID:". $this->id. "\n";
        echo "Name:". $this->name. "\n";
    }
}


$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
$product->getFormattedPrice(19.99);

?>