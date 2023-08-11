<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/currency.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-screen bg-green-100">
    <?php require 'converter.inc.php';?>
    <div class="converter min-h-[300px] min-w-[300px] rounded-md bg-purple-300 p-3">
    <span class="h-[20px] text-center w-full block text-lg"><?php echo $sign. " ".$converted?></span>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post"class="flex flex-col gap-4">
    <span class="block text-center w-full"><?php echo $err;?></span>
        <input type="number" name="peso" id="peso" class="inline p-2 w-full">
        <select name="fc"  class="inline p-2 w-full">
            <option value=""></option>
            <option value="dollar">dollar</option>
            <option value="euro">euro</option>
            <option value="indian rupee">indian rupee</option>
            <option value="japanese yen">japanese yen</option>
            <option value="chinese yuan">chinese yuan</option>
        </select>
        <button type="submit" class="bg-green-500 p-2 hover:bg-green-400">Convert</button>
    </form>
    </div>
    <?php include 'footer.php'?>
</body>
</html>