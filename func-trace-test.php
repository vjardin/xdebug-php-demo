// php -d xdebug.collect_params=4 -d xdebug.collect_assignments=1 -d xdebug.auto_trace=1 -d xdebug.trace_format=0 -d xdebug.trace_output_name=trace.%p -d xdebug.trace_format=1 -d xdebug.collect_return=1 func-trace-test.php
// cat /tmp/trace.$!.xt
<?php
$str = "Xdebug";
function ret_ord( $c )
{
    return ord( $c );
}

foreach ( str_split( $str ) as $char )
{
    echo $char, ": ", ret_ord( $char ), "\n";
}
