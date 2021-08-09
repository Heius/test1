<?php
require_once "controller/CustomerController.php";
$controller = "";
if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
}
$action = isset($_GET["action"]) ? $_GET["action"] : "";

switch ($controller) {
    case 'customers':
        switch ($action) {
            case '':
                CustomerController::viewCustomer();
                break;
            case 'create':
                CustomerController::viewCreate();
                break;
            case 'create-process':
                CustomerController::createProcess();
                break;
            default:
                echo "404";
                break;
        }
        break;
    default:
        echo "404";
        break;
}
