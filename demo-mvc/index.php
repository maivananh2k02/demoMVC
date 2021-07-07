<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller;

$dbconnect = new \App\Model\DBConnect();
$controller = new Controller\ProductController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
try {
    switch ($page) {
        case 'product-list':
            $controller->showAllProducts();
            break;
        case 'create-product':
            $controller->createProduct();
            break;
        case 'delete-product':
            $controller->deleteProduct();
            break;
        case 'update-product':
            $controller->updateProduct();
            break;
        case 'search-product':
            $controller->searchProduct();
            break;
        default:
            $controller->showAllProducts();
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}
include_once 'app/View/backend/layouts/footer.php';
