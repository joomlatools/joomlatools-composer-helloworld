<?php

$view = JFactory::getApplication()->input->getCmd('view', 'default');

if ($view === 'error') {
    // Generate a fatal error
    i_am_so_undefined();
} else {
    echo 'Hello World!';
}