<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/currency.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .result{
            width: 100%;
            text-align: center;
            font-size: 50px;
            color: white;
        }
    </style>
</head>
<body class="w-full h-screen flex flex-col justify-center bg-brown-700">
  
    <main class="w-full h-full grid place-content-center ">
            <div class="calculator w[80%] h-[400px] bg-blue-500 rounded-lg p-4">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="flex flex-col gap-2">

                <div class="w-full">
                <label for="num_1">Num 1</label>
                    <input type="text" name="num_1" id="num_1" placeholder="input num1"  class="input w-full max-w-xs" />
                </div>
                    <select name="operator" id="operator" class="select mx-w-xs">
                        <option value="+" selected>Addition</option>
                        <option value="-">Subtraction</option>
                        <option value="*">Multiplication</option>
                        <option value="/">Division</option>
                        <option value="%">Modulo</option>
                    </select>
                     <div class="w-full">
                     <label for="num_2" class="w-full">Num 2</label>
                    <input type="text" name="num_2" id="num_2" placeholder="input num2"  class="input w-full max-w-xs"/>
                     </div>
                <button type="submit" class="btn mt-4" name="calcu">calculate</button>
                <span class="result">
                <?php include "calcu.inc.php";?> 
                </span>
                </form>
            </div>
        </main>
</body>
</html>
