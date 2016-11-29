<?php

require_once 'dbconnect.php';
require_once 'model.php';

$articles = articles_all();

include 'theme/editor.php';
