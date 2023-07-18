<?php

if ($out) {
    $jsObj = json_decode($out);
    if(null!=$jsObj) {
        $tokenset = $jsObj->variables;
        print_r ($tokenset[0] );
    }};