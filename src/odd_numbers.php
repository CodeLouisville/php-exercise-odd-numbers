<?php 
  function odd_numbers( $input ) {
      $integers = array_filter ( $input, "isInteger" );
      $oddIntegers = array_filter ( $integers, "isOdd" );
      $success = sort( $oddIntegers );
      
      return $oddIntegers;
  }

  function isInteger( $mv ) {
      if (is_int( $mv )) {
          return true;
      } else {
          return false;
      }
  }

  function isOdd( $i ) {
      $mod2 = abs( $i % 2 );
      if ( $mod2 == 1 ) {
          return true;
      } else {
          return false;
      }  
  }
?>
