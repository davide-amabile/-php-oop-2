<?php
// creare classe genitore
class AudiA3
{
    public $brand;
    public $name;

    public function getCar($brand)
    {
        if( $brand === "Audi"){
            $this->brand = "Audi";
            $this->name = "A3"
        }
    }

}

// creare classe figlio
class Diesel1 extends AudiA3
{

    public $brand = getCar("Audi");
    public $engine = "Diesel";
    public $cc = 1968;
    public $price =" 35.200.00";
}
var_dump(Diesel1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

</body>
</html>
