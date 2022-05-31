<?php

//          print Statement : ✅

//echo 'Homepage';
//echo 'Hello World!';

//       Variable Statment : ✅

//$name = 'Hasan';
//echo "Hello, {$name}";

$name = 'Hasan';
$number = 100;
$Number_List = 100.5;
$NUMBER = 100;
$NUMBeR = 100;

$name = '<h1>HELLO</h1>';

//echo $name;
//echo $name . ' ' . $NUMBeR;

//Math ✅

//echo 65 + 45;
//echo '<br>';
//echo 56 - 45;
//echo '<br>';
//echo 56 * 45;
//echo '<br>';
//echo 56 * 45;
//echo '<br>';
//echo 56 / 45;
//echo '<br>';
//echo '<br>';

//echo 45 + 34 * 45/421 - 45;
//echo '<br>';
//echo ( 5 + 5 ) * 10;
//echo '<br>';
//echo 5 + 5 / 10;

$number1 = 12;
$number2 = 24;

//echo $number1 * number2;

//        Data Types : ✅

// 1. String

$name = 'Hasan';

// 2. Numbers

$age = 24;
//integer
$pi = 3.14;
//double

// 3. Boolean ( true, false )

$rainy = false;

// 4. null

$empty = null;
$name = null;

//echo "Hello , {$name}";

//      Convert between genres :✅
//      PHP is loosely type

// 1.
//echo gettype( 'hello' );
//echo gettype( '1' );

//echo true;
//echo false;
// null

// 2. To String
$var = 10;
//echo gettype( ( string ) $var );

// 3. To Integer

//echo ( integer ) false;

//echo ( integer ) '12';

//echo ( integer ) 'Hello';

//echo ( integer ) '5Hello';

// 4. To Boolean

//echo ( boolean ) 5;
//echo ( boolean ) 0;
//echo ( boolean ) 'Hello';
//echo ( boolean ) '0';
//echo ( boolean ) null;

//      Constants ✅

const MAX_VALUE = 100;
//echo MAX_VALUE;

//    Operators ✅

$a = 6;
$b = 3;

//echo $a + $b + 5;
//echo '<br />';

//echo $a - $b ;
//echo '<br />';

//echo $a * $b;
//echo '<br />';

//echo $a / $b;
//echo '<br />';

//echo $a ** $b;
//echo '<br />';

//echo $a % $b;
//echo '<br />';

//echo ++$a;
//echo '<br />';

//echo --$a;
//echo '<br />';

//The best way
//echo $a++;
//echo '<br />';

//echo $a--;
//echo '<br />';

//    Logical Operators : ✅

$PHP = true;
$JAVASCRIPT = false;

//1. OR ( ||, OR )

$canApply = $PHP || $JAVASCRIPT ;
//echo $canApply;

//2. AND ( &&, AND )
$canApply = $PHP && $JAVASCRIPT ;
//echo $canApply;

//3. NOT ( ! )
//echo !$canApply;

//        comparison operators : ✅

$a = 1;
//$b = 1;
$b = '1';

//echo $a === $b;
//echo $a == $b;

//echo $a !== $b;

//echo $a >= $b;
//echo $a < $b;

//echo $a <=> $b;

//       conditional sentences  ✅
// 1.  if else ..
$a = 1;
$b = 2;

if ( $a > $b ) {
    // echo 'a is bigger than b';
} else {
    // echo 'a is not bigger than b';

}

// 2.elseif

if ( $a > $b ) {
    // echo 'a is bigger than b';
} elseif ( $a == $b ) {
    // echo 'a is equal to b';
} else {
    // echo 'a is not bigger than b';

}

// 3.switch

$i = 5;

switch  ( $i ) {
    case 0 :
    //echo 'i is equal to 0';
    break;

    case 1 :
    // echo 'i is equal to 1';
    break;

    case 2 :
    // echo 'i is equal to 2';
    break;
}

switch  ( $i ) {
    case 0 :
    case 1 :
    case 2 :
    // echo 'i is less than 3 but not negative';
    break;

    case 3:
    // echo 'i is equal to 3';
    break;
}

switch  ( $i ) {
    case 0 :
    // echo 'i is equal to 0';
    break;

    case 1 :
    // echo 'i is equal to 1';
    break;

    case 2 :
    // echo 'i is equal to 2';
    break;

    default:
    //echo 'i is not equal to 0, 1 or 2';
}

// 4.Ternary Operator

// condation  ?  statement1 : statement 2;

$a = 1;
$b = 0;

//echo $a > $b ? 'a is the bigger than b' : 'a is not the bigger than b';

//echo $a > $b ? null : 'a is not the bigger than b';

$result = $a > $b ? 'a is the bigger than b' : 'a is not the bigger than b';

//echo $result;

// 5.Checking values using isset

$a = 1;
$b = 0;

const MAX = 100;

if ( isset( $a ) ) {
    //echo 'defined';
} else {
    // echo 'undefined';
}

//echo isset( $a ) ? 'defined' : 'undefined' ;

//echo defined( 'MAX' ) ? 'defined' : 'undefined';

// 6.Null Coalescing Operator  ( PHP version 7 )
// $first ?? $second

$username = 'Hasan';
$email = 'Hasan@gmail.com';

//echo $username ?? $email ?? 'nobody' ;

//                  loops while and do...while  : ✅

//               1.  while Loop

$i = 1 ;
//while( $i <= 10 ) {
//echo $i++;
//}

echo '<br />';

$y = 1;
//do {
// echo $y++;
//}
//while ( $y <= 10 );

//               2. for Loop

//for ( $i = 1; $i <= 10; $i++ ) {
//  echo $i;
//}

//             3. Beak and Continue

$i = 0;
while( $i <= 10 ) {
    $i++;
    if ( $i % 2 ) continue ;
    //  echo "{$i} <br>" ;
    if ( $i == 5 ) break;

}

//                         Arrays : ✅

$names = [
    'Hasan',
    'Mohammad',
    'Samer',
    'Ibrahim'
];

$names[] = 'Ali';
$names [ 1 ] = 'Edited';
unset( $names[ 1 ] );

//print_r( $names );

//                   2. Associative Arrays

$employees = [
    [
        'name' => 'Hasan',
        'age' => '24',
        'job' => 'Software Developer',
        'skills' => [ 'HTML', 'CSS', 'JAVASCRIPT', 'PHP' ]
    ],

    [
        'name' => 'Ibrahim',
        'age' => '30',
        'job' => 'Software Developer',
        'skills' => [ 'NodeJs', 'MongoDB', 'ReactJS' ]
    ],

];

//echo $employees [ 0 ] [ 'name' ] ;
//echo '<br />';
//echo $employees [ 1 ] [ 'name' ] ;

//                   3. Traversing arrays using loops

$employees = [
    [
        'name' => 'Hasan',
        'age' => '24',
        'job' => 'Software Developer',
        'skills' => [ 'HTML', 'CSS', 'JAVASCRIPT', 'PHP' ]
    ],

    [
        'name' => 'Ibrahim',
        'age' => '30',
        'job' => 'Software Developer',
        'skills' => [ 'NodeJs', 'MongoDB', 'ReactJS' ]
    ],

];

$count = count( $employees );

// for ( $i = 0 ; $i < $count ; $i++ ) {
//    echo $employees [ $i ][ 'name' ] . '-' . $employees [ $i ][ 'job' ];
//  echo '<br />';
//}

//  $i = 0;
//  while( $i >= 0 ) {
//           echo $employees [ $i ][ 'name' ] . '-' . $employees [ $i ][ 'job' ];
// echo '<br />';
//$i++;
//}

$i = $count - 1;
while( $i >= 0 ) {
    //    echo $employees [ $i ][ 'name' ] . '-' . $employees [ $i ][ 'job' ];
    //echo '<br />';
    $i--;
}

//                    4. foreach

$employees = [
    [
        'name' => 'Hasan',
        'age' => '24',
        'job' => 'Software Developer',
        'skills' => [ 'HTML', 'CSS', 'JAVASCRIPT', 'PHP' ]
    ],

    [
        'name' => 'Ibrahim',
        'age' => '30',
        'job' => 'Software Developer',
        'skills' => [ 'NodeJs', 'MongoDB', 'ReactJS' ]
    ],

];

foreach ( $employees as $employee ) {
    //  echo $employee [ 'name' ] . '-' . $employee[ 'job' ];
    echo '<br />';
}

foreach ( $employees as $key => $employee ) {
    // echo $key . '-' . $employee [ 'name' ] . '-' . $employee[ 'job' ];
    echo '<br />';
}

//                5. Matrix functions

// 1. count :
//  echo count( [ 'Hello', 'World' ] );

// 2. is_array :
//echo ( integer ) is_array( [ 1, 2, 3 ] );
// echo ( integer ) is_array( 'hello' );

// 3. explode :
$string = 'PHP JAVASCRIPT RUBY SWIFT KOTLIN';
$arr = explode( ' ', $string );
//print_r( $arr );

// 4 . implode

// echo implode( ' ', $arr );

// 5 . array_merge

$arr1 = [ 'red', 'green', 'blue' ];
$arr2 = [ 'black', 'yellow' ];
$result = array_merge( $arr1, $arr2 );
// print_r( $result );

//                      Funations : ✅

// foo();

// function foo() {
//   echo 'Hello World!';
//}

if ( true ) {
    //  function foo() {
    $i = 1;
    while( $i <= 10 )
    echo $i++;

    function bar() {
        echo 'Hello World!';
    }
}
// }

// foo();
//  bar();

//                      2.  Parameters

function foo( $name ) {
    // echo "Hello {$name} !";
}

function is_odd( $number ) {
    //echo $number % 2 ? "{$number} is odd" : "{$number} is even";
}

//is_odd( 4 );

//function sum( $sum1, $sum2 = 0 ) {
//  echo $sum1 + $sum2;
//}

//sum( 1 );

//                 3. Arguments

function sum( ...$numbers ) {
    //   $acc = 0 ;
    // foreach ( $numbers as $number ) $acc += $number;
    //  echo $acc;
    //print_r( $numbers );
}

//$arr = [ 3, 2, 4, 10 ];

//sum( ...$arr );

//               4. return

function sum2( ...$numbers ) {
    $acc = 0 ;
    foreach ( $numbers as $number ) $acc += $number;
    return  $acc;
    //print_r( $numbers );
}

function is_odd2( $number ) {
    return $number % 2;
    //if ( $number % 2 ) return true;
    //return false;
}

echo is_odd2( 1 );
//$total = sum2( 3, 2, 4, 10 );
//echo $total;

//             5.  Closure Functions

$arr =  [ 1, 2, 3, 4, 5 ];

$func = function( $value ) {
    return $value * 2;
}
;

//print_r(
//array_map( $func, $arr )
// );

//         6. Arrow Functions ( PHP => 7.4 )

$arr =  [ 1, 2, 3, 4, 5 ];
$num = 3;

$func = function( $value ) use ( $num ) {
    return $value * $num;
}
;

$afunc = fn( $value ) => $value * $num;

print_r(
    array_map( $afunc, $arr )
);

//         7. String functions

$str = 'abcdef';
//echo strlen( $str );
//6
$str = 'ab cd';
//echo strlen( $str );
//7

$str = 'Mary HadALittle Lamb and She LOVED It So';
$str = strtolower( $str );
//echo$str;
// mary hadalittle Lamb and she Loved it so

$str = 'abcdef';
//echo strpos( $str, 'a' );
//echo str_replace( 'cd', '23', $str );
//echo substr( $str, 1, 2 );
echo substr( $str, -2, 1 );

?>