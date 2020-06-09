<?php 
    
    include("variable.php");
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
     <?php include("navbar.php");?>
  </body>
  </html>

  <br/>
    <center>
      
    
    <h1>
    		<?php

				echo "Hello to world of Php</br>"; 
        //echo prints the text in string to screen
	


				//multiple line comment

      /*      $first_name = "Rishu";
            $last_name = "Raj";
            $favorite_number = 9;
            $num = 10;
            //concatenation.
            echo  $first_name . " ". $last_name ;
            echo "</br>";
            echo $favorite_number . $num;    
            echo "</br>";
            //Escape characters
            echo "And then she said : \"you are ugly ! \"";  
            echo "</br>";
            echo "And then she said : 'you are ugly ! '" . "</br>";
            echo 'And then she said : "you are ugly ! " "</br>"';

              //If Else Statements

            if($first_name == "Rishu")
            {
                echo  "Hey Rishu !" . "</br>";

            } 
            else
              echo "Pleae Exit ! " . "</br>";
            if($favorite_number > 10)
            {
                echo  $favorite_number . " is greater than 10" . "</br>";

            } 
            else
              echo $favorite_number . " is less than 10"."</br>";
            
               // IF ELSEIF Statements
            
            $num1 = 45;
            $num2 =5;
            if($num1 > 100)
            {
              echo $num1 . " is greater than 10". "</br>";
            }
              elseif ($num2 == 5)
               {
                echo $num2 . " equals 5 !" . "</br>";
               }
               else
               {
                echo $num1 . "is less than 5 ! " . "</br>";
               }


               // NUMERIC ARRAYS:- 
               
               $names = array("Raj", "Raman", "Roman");
               echo $names[0]. "</br>";

               //Assign numeric to array item's value:-
                $names = array("Raj", "Raman", "40");
               echo $names[2]. "</br>";

               //Assignig Variable to array item's value:-

                $item3 = "Rocco" ;
                $names = array("Raj", "Raman", $item3);
               echo $names[2]. "</br>";

                //Assignig Array to array item's value (MultiDimensional Array):-

               $last_names = array("Shrivastava", "Raghav", "Robin");
                $names = array("Raj", "Raman", $last_names);
               echo $names[2][2]. "</br>";

               //Associative Arrays:-

               $fav_pizza = array(
                "John" => "Pepperoni",
                "Steve" => "Cheese",
                "Praritik" => "Mushroom"
                 );
               echo $fav_pizza["Steve"]. "</br>";

                //Array Count

               echo count($names) . "</br>";

                    // Displaying array's  last item using "Count".

               echo $names[count($names)] . "</br>" ; // here error comes out as no succh item exists as here there is no 3rd item in array as system takes it as 0 , 1, 2 and not 1, 2, 3

              echo $last_names[count($last_names)-1]. "</br>";

              // While Loop:-

              $counter = 0;
              While($counter <

               10)
              {
                echo "The Counter is:-  $counter</br>";
                $counter++;
              }

              //Foreach loop Demonstration:- 

              $names1 = array('Raj', "Roni", "Rohan" );
              foreach ($names1 as $value) 

              {
                echo "$value </br>";

              }

              //While Loop Demo with Arrays

              $count = 0;
              $name = array("Raj", "Roni", "Rohan");

              echo  "COUNT OF ARRAY IS : ";
              echo count($name) ."</br>";
              while ($count < count($name))
              {
                echo "Name: $name[$count]" . "</br>";
                  $count++;
              }

    */          //FUNCTIONs: 
                /*
              function hello($name)
              {
                echo "Hello There $name";

              }
              hello(Raja);


           */
     /* //      function hello($fname, $lname)
        //      {
          //      echo "Hello There $fname $lname". "</br>";


            //  }
              //hello(Rishu, Raj);


                //function add($n1, $n2)
                //{
                  //return $n1 + $n2;
                //}
                //$answer = add(10, 20);
                //echo "The sum of add(10, 20) is:  $answer " . "</br>";
                // Random Function:  rand();
                //echo rand(). "</br>";
                // echo mt_rand(O,10);   //limit the range in random function

                // guess the number using random funtion

              */
                      //error
                /*
                 $number1=0;
                 $number2 = 10; 
                $names = array('john', 'steve', 'Mary');
                echo $names[mt_rand(0,5)];
                   
                // Guess the  number game using mt_rand() function

                    Echo "Guess a number: ! </br>";
                $num = 4;
                $rando = mt_rand(10);
                if(num == $rando){
                  echo "You win ! $num= $rando ;
                                  }
                  } else {
                    echo " You loose $num does not matches $rando  " ;

                  }
                                      }
   */

                    // Date function
      /*            echo date('Y'). "</br>";  // complete year
                    echo date('y'). "</br>";  // oncle the last two digit of year

                    echo date('l jS \of F, Y'). "</br>";  // l- day's name, j- date 1-30, S- st/nd/rd/th, F- month name, Y- year
                    $today = date('Y');
                    echo "Copyright (c)  $today - All right Reserved". "</br>";
                          

                  // String Replacement

                    $string = "In the process of learning java. ";
                    $replace = "java";
                    $new = "PHP";

                    echo str_replace($replace, $new, $string). "</br>";

                    echo str_word_count($string) . "</br>"; 
                     echo str_shuffle($string). "</br>";
                     echo str_repeat($string, 2). "</br>";
                     echo strtoupper($replace). "</br>";  // same as for lowercase

                     echo ucwords($string). "</br>";  // uppercases first letter of words
                     echo ucfirst($string). "</br>";  // uppercase only the first letter of first word

                     // same as for lowercase ie; tolower, lcwords, lcfirst etc.

                     echo strlen($string). "</br>";


       finish               */

                          ?>
	   </h1>
        <?php
  /*          echo $favorite_number;
            echo "</br>";
            echo $favorite_number + 4; 
            echo "</br>";
            echo "</br>";
            //For Loop demonstration 
            echo "For Loop demonstration </br>";
            for ($i=0; $i <9 ; $i++)
            { 
              //$num = $num+i;
             // $favorite_number = $favorite_number +i;
              echo  $favorite_number+ $i;
              echo "</br>";
            }
*/          ?>
 
<div class= "container">

  <div class="jumbotron">
  <h1 class="display-4">Hello, Coding world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
</div>

  <?php             
      include("footer.php");
      ?>
  </center>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

