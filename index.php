<?php 

include('App/Config.php');
include('App/Autoload.php');

App\Autoload::run();

App\Enrutador::run(new App\Request());

?>