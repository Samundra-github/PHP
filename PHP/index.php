<html>
    <body>
        <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            First Name: <input type="text" name="firstName"> <br>
            Last Name: <input type="text" name="lastName"> <br>
            <input type="submit">            
        </form> -->
    
<?php
    // define("Message", "Welcome to PHP");
    // echo Message, "</br>";
    // echo constant ("Message");

    // PHP Variable: -
    // A variable starts with the $ sign, followed by the name of the variable
    // $x = 10;
    // $y = 7;
    // $z = $x + $y;
    // echo "Hello ", $z;

    // PHP String: -

    // Getting lenght of String,
    // echo strlen("Hello String Count Me.");

    // Reverse The Given String,
    // echo strrev("Reverse Me");

    // Replace String,
    // $oldtxt = "Hello World!";
    // $newtxt = str_replace("World", "Dolly", $oldtxt);
    // echo "Replace this text ", $oldtxt;
    // echo "</br>After Replacing Text ", $newtxt;

    // PHP Operators:-
    // $x = 10;
    // $y = 5;
    // echo "Multiply ", $x * $y;
    // echo "</br>Divide ", $x / $y, "</br>";
    // var_dump($x == $y);
    // var_dump($x != $y);

    // + - * / % ** = Arithmetic Operators
    // = += -= *= /= %= Assignment Operators
    // == === != <> !== > < >= <= <=> Comparison Operators
    // ++$x $x++ --$x $x-- Increment/Decrement Operator
    // and or xor && || ! Logical Operators
    // . .= String Operators
    // +(union) ==(equality) ===(identity) != <> (inequality) !==(non-identity) Array Operators
    // ?:(Ternary) ??(Null Coalescing) Conditional Assignment Operators

    // PHP Constant:-
    // Constant are Global.
    // Syntax: define(name, value, case-insensitive); // Case-insensitive is false default.
    // define("Welcome", "Welcome to PHP Constant");
    // echo Welcome;

    // Constant Array,
    // define("Samundra", [
    //     "Samundra Bhandari", "22", "Kathmandu"
    // ]);
    // echo Samundra[0];
    
    // PHP Math,
    // pi() min() max() abs() sqrt() round() rand()
    // echo (pi())."</br>";
    // echo (max(1, 4, 2, 6, 7, 10))."</br>";
    // echo (min(53, 32, 23, 34, 31))."</br>";
    // echo (abs(-43))."</br>";
    // echo (sqrt(121))."</br>";
    // echo (round(23.4232))."</br>";
    // echo (rand(0, 10));

    // Comment in PHP,
    // single line comment using (//);
    /* Multiline Comment
    Using(/* *)/ */
    

    // PHP if..else...esleif Statement: -
    // if...else Statement
    // $a = 10;
    // $b = 7;
    // if ($a > $b) {
    //     echo "A is better";
    // } else {
    //     echo "B is better";
    // }

    // if...elseif Statement
    // $a = 10;
    // $b = 10;
    // if ($a > $b) {
    //     echo "Messi is Better";
    // } elseif ($a < $b) {
    //     echo "Ronaldo is Better";
    // } else {
    //     echo "Both are great";
    // }

    
    // Switch Operators:- 

    // $favPlayer = "Rooney";
    // switch ($favPlayer) {
    //     case 'Rooney':
    //         echo "Your Favorite Player is Wayne Rooney";
    //         break;
        
    //     case 'Ronaldo':
    //         echo "Your Favorite Player is Cristiano Ronaldo";
    //         break;
            
    //     case 'Messi':
    //         echo "Your Favorite Player is Lionel Messi";
    //         break;
    //     default:
    //         echo "You don't have a favorite player";
    // }

    // PHP Loops:-

    // For Loop,
    // for ($i = 0; $i<10; $i++) {
    //     echo $i ."</br>";
    // }

    // While Loop,
    // $i = 1;
    // while ($i <= 10) {
    //     echo $i."</br>";
    //     $i++;
    // }

    // Do While Loop,
    // $i = 1;
    // do {
    //     echo $i."</br>";
    //     $i++;
    // } while ($i <= 13);

    // Foreach Loop, // it only works on array.
    // $hey = ["Welcome", "You", "Beautiful", "People"];
    // foreach ($hey as $hii) {
    //     echo "$hii <br>";
    // }

    // PHP Functions:-
    // PHP Built-in Functions, // We can directly call and use them.

    // User Defined Functions, // We have to create functions ourselves to use it.
    // A function is a block of statements that can be used repeatedly in a program.
    // Syntax: function functionName() {
    //     codes
    // }
    // function myName($lname) {
    //     return $lname;
    // }
    // echo "Samundra ". myName("Bhandari");

    // PHP Arrays:-
    // An array is a special variable, which can hold more than one value at a time.
    
    // Counting Array,
    // $a = ["b", "c", "r", "e"];
    // echo count($a);

    // Accessing single elements of Array,
    // $a = ["b", "c", "r", "e"];
    // echo $a[2];

    // Associative Array,
    // $a = ["b" => "10", "c" => "7", "r" => "17", "e" => "11"];
    // echo "B = ".$a['b']+$a['c'];

    // Using Loop in Associative Array,
    // $a = ["b" => "10", "c" => "7", "r" => "17", "e" => "11"];
    // foreach ($a as $x => $y) {
    //     echo "Text = ".$x. " , Number = ".$y."</br>";
    // }

    // Sorting in Array,
    // Ascending Order,
    // $random = ["jsda", "cawdw", "rccsaf", "eeee"];
    // sort($random);
    // $a = count($random);
    // for ($i=0; $i < $a; $i++) { 
    //     echo $random[$i]."</br>";
    // }

    // Descending Order,
    // $random = ["jsda", "cawdw", "rccsaf", "eeee"];
    // rsort($random);
    // $a = count($random);
    // for ($i=0; $i < $a; $i++) { 
    //     echo $random[$i]."</br>";
    // }

    // Associative Array Sorting,
    // Ascending Order,
    // $a = ["b" => "10", "c" => "7", "r" => "17", "e" => "43"];
    // asort($a); // ksort($a) to sort it by Key
    // foreach ($a as $x => $y) {
    //     echo "Key = " . $x . " , Values = " . $y ."</br>";
    // }

    // Descending Order,
    // $a = ["b" => "10", "c" => "7", "r" => "17", "e" => "43"];
    // arsort($a); // krsort($a) to sort it by Key
    // foreach ($a as $x => $y) {
    //     echo "Key = " . $x . " , Values = " . $y ."</br>";
    // }

    // PHP Superglobals:-
    
    // $GLOBALS = used to access global variables from anywhere in the PHP script
    // $a = 7;
    // $b = 10;
    // function add() {
    //     $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    // }
    // add();
    // echo $c;

    // $_SERVER = holds information about headers, paths, and script locations.
    // echo $_SERVER['PHP_SELF']."</br>";
    // echo $_SERVER['SERVER_NAME']."</br>";
    // echo $_SERVER['HTTP_HOST']."</br>";

    // $_REQUEST = used to collect data after submitting an HTML form.
    // if($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $firstname = ($_REQUEST['firstName']);
    //     $lastname = ($_REQUEST['lastName']);
    //     if (empty($firstname || $lastname )) {
    //         echo "Firstname or Lastname is empty.";
    //     } else {
    //         echo $firstname. " ". $lastname;
    //     }
    // }

    // $_POST = used to collect form data after submitting an HTML form with method="post"
    // if($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $firstname = ($_POST['firstName']);
    //     $lastname = ($_POST['lastName']);
    //     if (empty($firstname && $lastname )) {
    //         echo "Firstname or Lastname is empty.";
    //     } else {
    //         echo $firstname. " ". $lastname;
    //     }
    // }

    // $_GET = used to collect form data after submitting an HTML form with method="get"
    // $firstName = isset($_GET['firstName']) ? $_GET['firstName']: "User";   
    // $lastName =  isset($_GET['firstName']) ? $_GET['lastName'] : "Default";
    
    // if (isset($_GET['firstName']) && isset($_GET['lastName'])) {
    //     echo "Welcome " . $_GET['firstName'] . " " . $_GET['lastName'];
    // }    
    // echo "Welcome $firstName $lastName";

    // PHP Date:-
    
    


    // __LINE__ Magic Constant
    // echo "<h3> Example for __LINE__ </h3>";
    // echo "You are at Line number " . __LINE__ . "<br> <br>";

    // __FILE__ Magic Constant
    // echo "<h1>Example for __FILE__</h1>";
    // echo __FILE__. "<br> <br>";

    // __DIR__ Magic Constant
    // echo "<h2> Example for __DIR__ </h2>";
    // echo __DIR__. "<br> <br>";
    // echo dirname(__FILE__). "<br> <br>";

    // __FUNCTION__ Magic Constant
    // function test() {
    //     echo 'The Function name is '. __FUNCTION__ . "<br> <br>";
    // }
    // test();

    // function test_function() {
    //     echo 'Hey';
    // }
    // test_function();
    // echo __FUNCTION__ ."<br> <br>";

    // __CLASS__

    // class JTP {    
    //     public function __construct() {    
    //         ;    
    // }    
    // function getClassName(){    
    //     echo __CLASS__ . "<br><br>";   
    //     }    
    // }    
    // $t = new JTP;    
    // $t->getClassName();  

    // class base {    
    // function test_first(){    
    //         echo __CLASS__;   
    //     }    
    // }    
    // class child extends base {    
    //     public function __construct() {    
    //         ;    
    //     }    
    // }    
    // $t = new child;    
    // $t->test_first(); 

?>
<!-- Include and Require:-
    It is possible to insert the content of one PHP file into another 
    PHP file (before the server executes it), with the include or require 
    statement. -->

<!-- include will only produce a warning (E_WARNING) and the script will continue, -->
<!-- <?php include 'header.php' ?> -->
<!-- <?php include 'index.html' ?> -->

<!-- require will produce a fatal error (E_COMPILE_ERROR) and stop the script, -->
<!-- <?php require 'footer.php' ?> -->

<?php
    // PHP Cookie:-
    // PHP cookie is a small piece of information which is stored at client browser. It is used to recognize the user.
    // Syntax :-
    // setcookie(name, value, expire, path, domain, secure, httponly);
    // echo "Welcome to the PHP.";
    // setcookie("category", "Books", time() + 86400, "/" );
    // echo " <br>The cookie is set";
?>

<?php
    // PHP Session:-
    // PHP session is used to store and pass information from one page to another temporarily (until user close the website).
    
    // After verifing user login info,
    // session_start();
    // $_SESSION['username'] = "Samundra Bhandari";
    // $_SESSION['favPlayer'] = "Wayne Rooney";
    // echo "We have saved your session";
?>



    </body>
</html>