// php -d xdebug.collect_params=4 -d xdebug.collect_assignments=1 -d xdebug.auto_trace=1 -d xdebug.trace_format=2 -d xdebug.trace_output_name=trace.%p.html test.php
// mv /tmp/trace.$!.html.xt /tmp/trace.html
// links /tmp/trace.html
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
