<?php
/**
 * testing different hash options
 */

$str    = 'some string here';
$salt   = 'me@mail.com';
$reruns = 999999;

# list all available hash algorithms:
echo "<pre>";

    foreach (hash_algos() as $alg) {

      $time_start = microtime(true);

      for ($i = 0; $i <= $reruns; $i++) {

        $hash    = hash($alg, $str, false);

      }

    $time_end   = microtime(true);
    $exec_time  = number_format($time_end - $time_start, 6);

    printf("algorithm %-6s generated %+5s chars %d times, in %f sec: %s \n", $alg, strlen($hash), $reruns, $exec_time, $hash);

    }

echo "</pre>";

