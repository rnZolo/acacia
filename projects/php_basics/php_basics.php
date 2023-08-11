<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
         <header>
            <h1>PHP Basics</h1>
         </header>
         <main>
            <section>
                <div class="variables learnings">
                    <h2>Variables</h2>
                    <p>You can easily declare values in PHP</p>
                    <code>$txt = "Hello world!";</code><br>
                    <code>$int = 5;</code><br>
                    <code>$float = 19.3;</code><br>
                </div>
                <div class="comment learnings">
                    <h2>Comments</h2>
                    <p>Different ways to write comment in PHP</p>
                    <code>
                        #this is comment
                    </code><br>
                    <code>
                        //another single line comment
                    </code><br>
                    <code>
                        /* this is multi-line 
                        comment*/
                    </code><br>
                </div>
                <div class="print-echo learnings">
                    <h2>Print and Echo</h2>
                    <p>Syntax to display</p>
                    <code>
                        echo "this is text";
                    </code><br>
                    <code>echo("using Parenthesis");</code><br>
                    <code>
                     print "using print";   
                    </code><br>
                </div>
                    <?php
                    //DATA TYPES
                        $data_types = array(
                        "String",
                        "Integer",
                        "Float (floating point numbers - also called double)",
                        "Boolean",
                        "Array",
                        "Object");
                        $print_echo = "Data Types";
                        $pe_parag = "This are the PHP data types";
                        divmaker($print_echo, $pe_parag, $data_types);
                        //ARITHMETIC OPERATORS
                        $arith_ope = "Arithmetic Operators";
                        $ao_parag = "Operators are used to perform operations on variables and values.";
                        $arit_op_list = array("+ Addition", " - Subtraction", " * Multiplication",
                        "/ Division", " % Modulus", "** Exponentiation");
                        divmaker($arith_ope, $ao_parag, $arit_op_list);
                        //COMPARISON OPERATOR
                        $comp_ope = "Comparison Operator";
                        $co_parag = "The PHP comparison operators are used to compare two values (number or string):";
                        $co_list = array("== Equal","===	Identical", "!= Not equal", 
                        "<>	Not equal", "!== Not identical ",">	Greater than", "<	Less than",">= Greater than or equal",
                        "<=	Less than or equal to", "and And", "or Or", "xor Xor", "&&	And", "||	Or ","! Not");
                        divmaker($comp_ope, $co_parag, $co_list);
                        // TERNARY OPERATOR
                        $ternary_Op = "Ternary Operator";
                        $to_parag = "One line that works like if else statement.";
                        $to_list = array('echo (true)  ? "yes" : "no";    //prints yes',
                        'echo (false) ? "yes" : "no";    //prints no);');
                        divmaker($ternary_Op, $to_parag, $to_list);
                        //looping
                        $loop = "Looping";
                        $loop_para = "";
                        $loop_list =array("for", "Do While", "While");
                        divmaker($loop, $loop_para, $loop_list);
                        //Increment and Dec
                        $inc_dec = "Increment and Decrement (Pre, Post)";
                        $id_parag = "";
                        $id_list = array("++variables", "--variables", "variables++", "variables--");
                        divmaker($inc_dec, $id_parag, $id_list);

                        $file_handling = "File Handling";
                        $fh_para = "File handling is an important part of any web application. Youoften need to open and process a file for different tasks.";
                        $fh_list = array("readfile(), read the write the file, it return the string and the value of content.",
                         "fopen() this function access the file and allow interaction base on mode (r, w, a etc.).",
                        " fwrite() this function  allow changes to apply, you can append write or truncate contents in a file using it.",
                        "fread() this function allow to output the file and specified the length",
                        "fclose() this function close the opened file using the fopen() function."   );
                            divmaker($file_handling, $fh_para, $fh_list);
                        $file_uploading = "File Uploading";
                        $fu_para = "File Uploading is one of the capabilities of PHP. However, so always be careful when allowing file uploads!                        ";
                        $fu_list = array();
                        // CREATE DIV
                        function divmaker($title, $p, $li){
                                echo   '<div class=" learnings">
                                <h2>'.$title.'</h2>
                                <p>'.$p.'</p>';
                                foreach($li as $l){
                                    echo "<code>".$l."</code><br>";
                                }
                                echo "</div>";

                        }
                        


                    ?>
            </section>
         </main><br>
</body>
</html>