<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>  
        <?php 
            
            $val = 20;

            echo "<h3> Table $val  </h3>";
            for($i=1; $i<=10; $i++){
                echo "$i X $val = " .$i*$val."<br/>";

            }

        echo "<hr/>";

        echo "swape variables value without use of third variable";

        $a=10;
        $b=20;

        $a=$a+$b;
        $b=$a-$b;
        $a=$a-$b;

        echo '<br/>$a = '.$a;
        echo '<br/> $b = '.$b;
        echo "<hr/>";
        echo "array sort without use of any builtin function <br/>";

        function customSort(&$arr) {
            $n = count($arr);
            // Traverse through all array elements
            for ($i = 0; $i < $n - 1; $i++) {
                // Last i elements are already in place
                for ($j = 0; $j < $n  - $i - 1; $j++) {
                    // Swap if the element found is greater than the next element
                    if ($arr[$j] > $arr[$j + 1]) {
                        // swap temp and arr[i]
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
        }

        // Example usage
        $myArray = [64, 34, 25, 12, 22, 11, 90];
        echo "Original Array: " . implode(', ', $myArray) . PHP_EOL;

        // Call the customSort function
        customSort($myArray);

        echo "<br/> Sorted Array: " . implode(', ', $myArray) . PHP_EOL;

        echo "<hr/>";
     
        // function customSortArrayFUnction(&$unsortedArray){
        //     $n= count($unsortedArray);

        //     for($a=0; $a<=$n-1; $a++){
        //         for($b=0; $b < $n-$a-1; $b++ ){
        //             if($unsortedArray[$b] > $unsortedArray[$b+1]){
        //                 $dumy = $unsortedArray[$b];
        //                 $unsortedArray[$b] = $unsortedArray[$b+1];
        //                 $unsortedArray[$b+1] = $dumy;
        //             }
        //         }
        //     }
        // }


        // $originalArray = [39,45,56,3,2,4,52,1,5,1];


        // echo "Original Array : ".implode(", ",$originalArray);

        // customSortArrayFUnction($originalArray);

        // echo "<br/> Sorted Arrray : ". implode(', ' , $originalArray);




        
        $originalArray = [20,34,3,2,36,50,8];


        echo "Original Array : ".implode(', ',$originalArray);

           $n = count($originalArray);
             
        for($a=0; $a<=$n-1; $a++){
            
            for($b=0; $b < $n-$a-1; $b++){

                if($originalArray[$b] > $originalArray[$b+1]){

                    
                    $arraysorted = $originalArray[$b];
                    $originalArray[$b] = $originalArray[$b+1];
                    $originalArray[$b+1] =$arraysorted;   
                    
                    // print_r($arraysorted);
                    // die();
                    
                }

            }

        }



        echo "<br/>Sorted Array : ".implode(', ', $originalArray);


      echo "<hr/>";  



      $ordiginaArray1 = [3,43,54,2,34,54,7,6,70,80];

    //   print_r($ordiginaArray1);
    //   die();

      echo "Oridina Array : ".implode(", ",$ordiginaArray1);  

      
      

      $n = count($ordiginaArray1);
      
      for($a=0; $a<=$n-1; $a++){


        for($b=0; $b < $n-$a-1; $b++ ){

            if($ordiginaArray1[$b] > $ordiginaArray1[$b+1]){

                $dumy = $ordiginaArray1[$b];
                $ordiginaArray1[$b] = $ordiginaArray1[$b+1];
                $ordiginaArray1[$b+1] = $dumy;

            }
        }

      }


      echo "<br/>Sorted Array  : ". implode(", ",$ordiginaArray1);

      echo "<hr/>";

        echo "Fibonacci series is a sequence of numbers in which each number is the sum of the two preceding ones"; 


        function generateFibonacci($n) {
            $fibonacciSeries = [0, 1];
        
            // print_r($fibonacciSeries);

            // die();

            for ($i = 2; $i < $n; $i++) {
                // Each subsequent number is the sum of the two preceding ones
                $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
            }
        
            return $fibonacciSeries;
        }
        
        // Change the value of $n to generate a Fibonacci series of different length
        $n = 10;
        $fibonacciSeries = generateFibonacci($n);
        
        echo "<br/>Fibonacci Series (first $n numbers): " . implode(', ', $fibonacciSeries);


        echo "<hr/>";


        function fibonacciSeries($n){
            $genrateSeries = [0,1];
            for($a=2; $a < $n; $a++){
                $genrateSeries[$a] = $genrateSeries[$a-1] + $genrateSeries[$a -2];

            }

            return $genrateSeries;


        }

        $n = 4;

        $GenratedSeries =  fibonacciSeries($n);
        echo "<br> Fibonacci series of first ".$n." numbers : ".implode(', ', $GenratedSeries);

        echo "<hr/>";

        $fibonacciSeries = [0,1];
        $number = 5;

        for($a=2; $a < $number; $a++){
            // echo $a;
            $fibonacciSeries[$a] = $fibonacciSeries[$a-1] + $fibonacciSeries[$a-2];  
        }

        // print_r($fibonacciSeries);

        echo "Fibonacci Series Of First ".$number.' Numbers = '.implode(',',$fibonacciSeries)."<hr/>";

        function reverseArray($arrayoriginal){
            $n = count($arrayoriginal);
            $reversArray = [];
            for($a=$n-1; $a >= 0;  $a--){
                $reversArray[] =  $arrayoriginal[$a];
            }
            return $reversArray;
        }

        $arrayoriginal = [34,3,2,45,32,12,3];       
        echo "Original Given Array : ".implode(', ',$arrayoriginal);

        $reversCustomArray = reverseArray($arrayoriginal);


        echo "<br/> Reverse Array : ".implode(', ',$reversCustomArray)."<hr>";



        $array = [2,4,32,54,32,43,21];

        echo "Original Array : ".implode(",", $array);
        // print_r($array);
      
        $number = count($array);
        $reversedArray = [];
        for($b=$number-1; $b >= 0; $b--){
            $reversedArray[] = $array[$b];
        }

        echo "<br/>Reverse Array : ".implode(', ',$reversedArray);
        // print_r($reversedArray);

        echo "<hr/>";


        echo "strrev string reverse custom function <br/>";


        $value = "zahid hussain bhangwar";

        for($a=strlen($value)-1; $a>=0; $a--){
            $revvalue = $value[$a];
            echo  $revvalue;
        }
        echo "<hr/>";


        function custonReverseString($string){

            $reversString = "";
            $value = strlen($string);

            for($a=$value-1; $a>=0; $a--){
                $reversString.=$string[$a];
            }

            return $reversString;

        }

       $string = "Hello World";
        echo "Original String : ".$string."<br/>";

       $reverseString =  custonReverseString($string);

       echo "Revers String : ".$reverseString;

        echo "<hr/>";

        echo "Array bublle Sort ";

        function bubbleSort(&$arr) {
            $n = count($arr);
        
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        // swap temp and arr[$j]
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
        }
        
        // Example usage
        $originalArray = [64, 34, 25, 12, 22, 11, 90];
        echo "Original Array: " . implode(', ', $originalArray) . PHP_EOL;
        
        // Call the bubbleSort function
        bubbleSort($originalArray);
        
        echo "<br/>";
        echo "Sorted Array: " . implode(', ', $originalArray);

        // echo "Buuble Sorted Array value : ".implode(", " ,  $originalArray);



        function  isPrime($number){
                if($number <= 1){
                    return false;
                }

                for($a=0; $a<=sqrt($number); $a++){

                    if($number %2===0){
                        return false;
                    }else{
                        return true;
                    }
                }

        }

        echo "<hr style='color:red' />";
        $testNumber = 11;

        if(isPrime($testNumber)){
            echo "<br>prime number : ".$testNumber;
        }else{
            echo "<br/>not A prime number : ".$testNumber;
        }
    echo "<hr/>";

        ?>

<h2>Set Countdown Target:</h2>
<form id="countdownForm">

    Date: <input type="date" id="targetDateInput" required>
    Time: <input type="time" id="targetTimeInput" required>
    <input type="submit" value="Start Countdown">

</form>

<div id="countdown"></div>

<script>
$(document).ready(function() {
    $("#countdownForm").submit(function(e) {
        e.preventDefault();

        // Get user input for date and time
        var targetDateInput = $("#targetDateInput").val();
        var targetTimeInput = $("#targetTimeInput").val();

        // Combine date and time and set the target date
        var targetDateTime = new Date(targetDateInput + " " + targetTimeInput).getTime();

        // Update the countdown every second
        var countdownInterval = setInterval(function() {
            var now = new Date().getTime();
            var timeDifference = targetDateTime - now;

            var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            // Display the countdown
            $("#countdown").html(days + "d " + hours + "h " + minutes + "m " + seconds + "s ");

            // If the countdown is over, clear the interval
            if (timeDifference <= 0) {
                clearInterval(countdownInterval);
                $("#countdown").html("Countdown expired");
            }
        }, 1000);
    });
});
</script>


</body>
</html>