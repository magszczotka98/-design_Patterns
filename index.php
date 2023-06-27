<?php
 class Burger
{
    public $burger;
    public static $burgers = array();

    public function __construct($burger)
    {
        $this->burger= $burger;
    }

    public static function getBurger($burger)
    {
        if (!array_key_exists($burger, static::$burgers)){
            static::$burgers[$burger] = new Burger($burger);
        }
        return static::$burgers[$burger];

    }

    public static function getBurgerType(){         //zlicza zamówienia
        print_r("Number of Order:"."<br>") . count(static::$burgers) . "<br>";;
        foreach (array_keys(static::$burgers)as $key) {
            print_r("$key"."<br>");
        }
    }

}
Burger::getBurger("Clasic Burger");
Burger::getBurgerType();
echo"<br>";
Burger::getBurger("BLT Burger");
Burger::getBurgerType();
echo"<br>";
Burger::getBurger("Chicken Burger");
Burger::getBurgerType();
echo"<br>";
Burger::getBurger("Pork Burger");
Burger::getBurgerType();
echo"<br>";
Burger::getBurger("BBQ Burger");
Burger::getBurgerType();
echo"<br>";
Burger::getBurger("Fish Burger");
Burger::getBurgerType();
echo"<br>";
Burger::getBurger("Devil Burger");

echo "Pracowity dzień! :) ";
