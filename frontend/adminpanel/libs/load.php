<?php

function load_temp($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/parko/frontend/host/templates/$name";
}