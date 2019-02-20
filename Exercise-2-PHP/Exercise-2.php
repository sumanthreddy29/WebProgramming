<html>
  <head>
    <title>In-class PHP</title>
    </head>  
    <body>
        <h1 align="center">In Class PHP Lab </h1>

<?php
echo "<div align=\"center\" >";
   echo "Question-1";
   echo"<p><i> \" \"Good morning, Dave,\" said HAL.\" </i></p>";
   echo "Question-2</br></br>";
    $radius=10;
    function area($r)
    {
        $result=3.14 * $r *$r;
        echo "Area of circle with radius ", $r, " is ", $result,"(Pi=3.14)</br></br>";
    }
area($radius);
    echo "Question-3</br></br>";
    
       function fahrenheitToCelsius(float $fahrenheit)
{  $celFahr=($fahrenheit - 32) * (5/9);
    echo $fahrenheit ," Fahrenheit in Celsius is ", $celFahr,"</br></br>";
}

  fahrenheitToCelsius(-459.67)  ;
    echo "Question-4</br></br>";    
        $q4=" PHP is fun ";
        echo "\" PHP  is fun \" has ",strlen(trim($q4))," characters</br></br>";
        
 echo "Question-5</br></br>";   
        $q5="WDWWLWWWLDDWDLL";
        $pos=strpos($q5,"WWW");
        $lastletter= $pos+strlen("www");
        echo "Sequence is ",$q5,"</br></br>";
        echo " first letter after the first occurrence of the sequence WWW is ",substr($q5,$lastletter,1),"</br></br>";
       echo "Question-6</br></br>";  
        function palindrome(string $q6)
        {
            $q6rev=strrev($q6);
            if($q6==$q6rev)
            {
                echo $q6," is Palindrome</br></br>";
                
            }
            else
            {
                echo $q6," is not Palindrome</br></br>"; 
            }
        }
        palindrome("hannah");
        palindrome("sumanth");
        
         echo "Question-7</br></br>";  
        
        function oddoreven($num)
        {
            if($num%2==0)
            {
                echo $num," is Even</br></br>";
            }
            else
            {
                echo $num," is Odd</br></br>";
            }
        }
$num=7;
        oddoreven($num);
        oddoreven(6);
        
        
         echo "Question-8</br></br>";  
        function is_leap_year($year) {
	 if((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)))
    {
        echo $year," <b>is Leap Year</b></br></br>";
    }
            else
            {
                echo $year,"<b> is not Leap Year</b></br></br>";
            }
}
        
        is_leap_year(2012);
        is_leap_year(2011);
    echo "</div >";    
?>
    </body>
    </html>