<?php
$error_message = "";

if (isset($_POST['pin'])) {
    $pin = $_POST['pin'];
    if ($pin == "1992") {
        header("Location: real-index.php");
        exit();
    } else {
        $error_message = "This is a wrong PIN.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keypad App</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(0,0,41);
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            
        }
        .input-field {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            
        }
        input[type="text"] {
            font-size: 24px;
            padding: 10px;
            width: 200px;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: default;
        }
        .keypad {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        .keypad i {
            padding: 20px;
            font-size: 24px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .keypad i:hover {
            background-color: #555;
        }
        .enter-button {
            margin-top: 20px;
            padding: 10px 30px;
            font-size: 24px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .enter-button:hover {
            background-color: #555;
        }
        .clear-button {
            background-color: #333;
            margin-left: 3px;
            width: 30px;
            height: 30px;
            padding: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            color: white;
        }
        .clear-button img{
            width: 30px;
            height: 30px;
        }
        .clear-button:hover {
            background-color: #555;
        }
        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <form method="post" class="container">
        <div class="input-field">
            <input type="text" id="password" name="pin" placeholder="Enter PIN" readonly>
            <i class="clear-button" onclick="clearInput()"><img src="clear.png" alt=""></i>
        </div>
        <div class="keypad">
            <i onclick="appendNumber(1)">1</i>
            <i onclick="appendNumber(2)">2</i>
            <i onclick="appendNumber(3)">3</i>
            <i onclick="appendNumber(4)">4</i>
            <i onclick="appendNumber(5)">5</i>
            <i onclick="appendNumber(6)">6</i>
            <i onclick="appendNumber(7)">7</i>
            <i onclick="appendNumber(8)">8</i>
            <i onclick="appendNumber(9)">9</i>
            <i onclick="appendNumber(0)">0</i>
        </div>
        <button type="submit" onclick="enter()" class="enter-button">ENTER</button>
        <?php if ($error_message): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>
    </form>

    <script>
        function appendNumber(number) {
            const input = document.getElementById('password');
            console.log(`Append Number: ${number}`)
            input.value += number;
        }

        function clearInput() {
            const input = document.getElementById('password');
            console.log("clear")
            input.value = "";
        }

        function enter() {
            console.log("enter")
        }
    </script>
</body>
</html>
