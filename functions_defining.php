<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
<?php
    
    function say_hello() {
      echo "Hello World!<br />";
    }
  
    say_hello();
    
    function say_hello_to($word,$greet) {
      echo "Hello {$word} and {$greet}!<br />";
    }
    
    say_hello_to("World","Goordmorning");
    say_hello_to("Everyone","Hello");
    
    say_hello_loudly();
    
    function say_hello_loudly() {
      echo "HELLO WORLD!<br />";
    }

    // function say_hello_loudly() {
    //   echo "We can't redefine a function.";
    // }
    
  ?>
</body>
</html>