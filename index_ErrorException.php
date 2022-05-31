<?php
//Error, Exception

//echo undefinedFunction();
//echo U_UNDEFINED_VARIABLE;
//echo 'End of the script';

//try...catch

function division ( $a, $b ) {
    if ( $b == 0 ) throw new Exception( "Can't divide on 0. <br/>" );
    return $a / $b;
}
try {
    echo division( 2, 0 ) ;
} catch( Exception $e ) {
    echo $e->getMessage();
}
finally {
    echo 'Finally';
}

// Null Safe Operator ( PHP => V.8 )

//Back to the course

?>