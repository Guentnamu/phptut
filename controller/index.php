<?php

$task = $app['database']->selectAll('task');

require 'view/index.view.php';
