// php -d xdebug.collect_params=4 -d xdebug.collect_assignments=1 -d xdebug.auto_trace=1 -d xdebug.trace_format=0 -d xdebug.trace_output_name=trace.%p -d xdebug.trace_format=1 -d xdebug.collect_return=1 func-trace-test.php
// cat /tmp/trace.$!.xt
<?php
$str = "Xdebug";
function ret_ord( $c ) {
    return ord( $c );
}

if (function_exists("xdebug_start_trace")) {
  echo "xdebug OK\n";
  ini_set('xdebug.collect_params', 4);
  ini_set('xdebug.collect_assignments', 1);
  ini_set('xdebug.collect_return', 'On');
  ini_set('xdebug.trace_format', 1);
  ini_set('xdebug.trace_output_name', 'trace.%p.%u');

  ini_set('xdebug.auto_trace', 1);
  //xdebug_start_trace('trace-php.log', XDEBUG_TRACE_NAKED_FILENAME);
  xdebug_start_trace();
}

foreach ( str_split( $str ) as $char ) {
    echo $char, ": ", ret_ord( $char ), "\n";
}

xdebug_stop_trace();
