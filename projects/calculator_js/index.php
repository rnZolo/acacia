<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
         include_once "./php/cdn.inc.php";
    ?>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/index.js" defer></script>
    <style>
        * {
            /* outline : 1px dashed red; */
            
        }

    </style>
    <title>Calculator JS</title>
</head>
<body class="w-full h-full min-h-screen grid place-content-center">
  <!-- Create table -->
  <div class="w-[320px] grid-cols-4 grid-flow-row border-2 border-gray-600 rounded-lg" id="calcu">
      <div class="row w-full p-4">
          <span class="w-full block">
              <input type="text" id="exp" readonly class="block w-full h-[50px] p-2 text-right">
              <input type="text" id="input" readonly class="block w-full h-[50px] text-right p-2">
          </span>
        
      </div>
      <div class="flex flex-col gap-3 w-full p-4">
        <div class="flex w-full  justify-center gap-3">
        <span class="btn p-0 w-[50px]"><button type="button" value="i" class=" w-full h-full">i</button></span>
        <span class="btn p-0 w-[50px]"><button type="button" value="!" class=" w-full h-full">!</button></span>
        <span class="btn p-0 w-[50px]"><button type="button" value="c" class=" w-full h-full">c</button></span>
        <span class="btn p-0 w-[50px]"><button type="button" value="del" class=" w-full h-full">del</button></span>
        </div>
        <div class="flex w-full  justify-center gap-3">
        <span class="btn p-0 w-[50px]"><button type="button" value="1/x" class=" w-full h-full"></button></span>
        <span class="btn p-0 w-[50px]"><button type="button" value="x2" class=" w-full h-full"></button></span>
        <span class="btn p-0 w-[50px]"><button type="button" value="/2" class=" w-full h-full"></button></span>
        <span class="btn p-0 w-[50px]"><button type="button" value="/" class=" w-full h-full op">/</button></span>
        </div>
        <div class="flex w-full  justify-center gap-3">
          <span class="btn p-0 w-[50px] "><button type="button" value="7" class="num w-full h-full">7</button></span>
          <span class="btn p-0 w-[50px] "><button type="button" value="8" class="num w-full h-full">8</button></span>
          <span class="btn p-0 w-[50px] "><button type="button" value="9" class="num w-full h-full">9</button></span>
          <span class="btn p-0 w-[50px]"><button type="button" value="*" class=" w-full h-full op">*</button></span>
        </div>
        <div class="flex w-full  justify-center gap-3">
        <span class="btn p-0 w-[50px] "><button type="button" value="4" class="num w-full h-full">4</button></span>
          <span class="btn p-0 w-[50px] "><button type="button" value="5" class="num w-full h-full">5</button></span>
          <span class="btn p-0 w-[50px] "><button type="button" value="6" class="num w-full h-full">6</button></span>
          <span class="btn p-0 w-[50px]"><button type="button" value="-" class=" w-full h-full op">-</button></span>
        </div>
        <div class="flex w-full  justify-center gap-3">
        <span class="btn p-0 w-[50px] "><button type="button" value="1" class="num w-full h-full">1</button></span>
          <span class="btn p-0 w-[50px] "><button type="button" value="2" class="num w-full h-full">2</button></span>
          <span class="btn p-0 w-[50px] "><button type="button" value="3" class="num w-full h-full">3</button></span>
          <span class="btn p-0 w-[50px]"><button type="button" value="+" class=" w-full h-full op">+</button></span>
        </div>
        <div class="flex w-full gap-3 justify-center">
        <span class="btn p-0 w-[50px]"><button type="button" value="+/-" class=" w-full h-full"></button></span>
        <span class="btn p-0 w-[50px] "><button type="button" value="0" class="num w-full h-full">0</button></span>
          <span class="btn p-0 w-[50px]"><button type="button" value="." class=" w-full h-full">.</button></span>
          <span class="btn p-0 w-[50px]"><button type="button" value="=" class=" w-full h-full op">=</button></span>
        </div> 
      </div>
    </div>
</body>

</html> 
</body>
</html>