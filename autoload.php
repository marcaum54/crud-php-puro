<?php

foreach (glob("_autoload/*.php") as $filename)
    require_once $filename;
