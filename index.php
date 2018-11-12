<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hw6</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <form action="" name="calc1" method="POST">
        <input type="number" name="operand1" id="operand1" value=0>
        <select name="operation" id="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="operand2" id="operand2" value=0>
        <button id="calculate1">=</button>
        <input type="text" name="res" id="res" disabled>
        <p>
            <button class="operations">+</button>
            <button class="operations">-</button>
            <button class="operations">*</button>
            <button class="operations">/</button>
        </p>
    </form>
    <script>
        $(document).ready(function() {
            $('#calculate1').click(function() {
                $.ajax ({
                    url: "calc1.php",
                    data: {
                        operand1: $('#operand1').val(),
                        operand2: $('#operand2').val(),
                        operation: $('#operation').val()
                    },
                    success: function(result) {
                        $('#res').val(result);
                    }
                });
                return false;
                
            });
            
            $('.operations').click(function(e) {
                $.ajax ({
                    url: "calc1.php",
                    data: {
                        operand1: $('#operand1').val(),
                        operand2: $('#operand2').val(),
                        operation: e.target.innerText
                    },
                    success: function(result) {
                        $('#res').val(result);
                    }
                });
                return false;
            });
        });
    </script>
</body>
</html>