<?php
/**
 * Description
 *
 * @author Matthias Teuber <m.teuber@delodesign.de>
 * @created 22.01.2016
 */

require_once 'Psr4Autoload.php';

$autoloader = new Psr4Autoload();
$autoloader->register();

define('SOURCE_PATH', realpath(dirname(__FILE__)));