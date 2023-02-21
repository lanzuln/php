<?php

$name = null;

if (isset($name) && (is_numeric($name) || $name != "")) {
    echo "name is set and it's not emplty";
} else {
    echo "Name is either not set or it's empty";
}