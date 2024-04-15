


<?php

require_once  'config.php';


$module = _MODULE;
$action = _ACTION;  


if(!empty($_GET['module'])){
    
    $module = trim($_GET['module']);
}



if(!empty($_POST['action'])){

    $action = trim($_POST['action']);
}

$path = "modules/" . $module . '/' . $action . '.php';


if(file_exists($path)){   // Nếu tồn tại file giống trong cây thư mục
    require_once($path);
}
else{
    require_once('modules/error/404.php');
}


// echo $module;

// echo '<br>';

// echo $action;