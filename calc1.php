<?php
    $res = 0;
    if (isset($_GET["operation"])) {
        switch ($_GET["operation"]) {
            case "+":
                $res = $_GET["operand1"] + $_GET["operand2"];
                break;
            case "-":
                $res = $_GET["operand1"] - $_GET["operand2"];
                break;
            case "*":
                $res = $_GET["operand1"] * $_GET["operand2"];
                break;
            case "/":
                $res = $_GET["operand2"] == 0?"error!":$_GET["operand1"] / $_GET["operand2"];
                break;
        }
        
    }
    echo $res;
?>