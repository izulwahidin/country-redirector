<?php

$ttl = explode(PHP_EOL,file_get_contents("assets/titles.txt"));
file_put_contents("assets/titles.json",json_encode($ttl));