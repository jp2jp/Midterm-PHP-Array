<!DOCTYPE html>
<html>
<body>

    <?php

        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $p => $p_value) {
            echo $p . " is " . $p_value . " years old.";
            echo "<br>";
        }

    ?>

</body>
</html>