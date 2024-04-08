<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <?php
            require_once 'classes/Car.php';
            echo '<br>';
            $car01=new Car('ambassador','fuel');
            echo $car01->speed;
            echo '<br>';

            echo $car01->name;
            echo '<br>';

            echo $car01->type;
            echo '<br>';
            echo $car01->car_details();

            echo '<br>';
            echo $car01-> setmethod("thar");
            echo '<br>';
            echo $car01-> getmethod();
            echo '<br>';
            echo $car01->car_details();
            //SET CONDITION
            echo '<br>';
            echo $car01->Setnamemethod("BMW");
            echo '<br>';
            echo $car01-> getmethod();
            //////////////////
?>          
    </body>
</html>