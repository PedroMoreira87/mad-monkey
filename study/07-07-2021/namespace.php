<?php

namespace study\test;

class hello {

    function __construct() 
    {
        echo "created test"; 
    }
}

class anotherTest {

    function __construct()
    {
        echo "<p> created another test </p>";
    }
}

function all() {
    echo "all";
}

function all2() {
    echo "<p> another </p>";
}

const HELLO = "hello";
const GOODBYE = "<p> goodbye </p>";
