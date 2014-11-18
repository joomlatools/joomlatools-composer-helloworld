<?php
/**
 * Hello World example component
 *
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/joomlatools/joomla-com_helloworld for the canonical source repository
 */

$view = JFactory::getApplication()->input->getCmd('view', 'default');

if ($view === 'error') {
    // Generate a fatal error
    i_am_so_undefined();
} else {
    echo 'Hello World!';
}