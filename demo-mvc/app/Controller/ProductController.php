<?php


namespace App\Controller;
use App\Model\Product;
use App\Model\ProductModel;

class ProductController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function showAllProducts()
    {
        $products = $this->productModel->getAll();
        include_once 'app/View/backend/product/list.php';
    }

    public function createProduct()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once 'app/View/backend/product/create.php';
        }else{
            $sku = $_REQUEST['sku'];
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $discount = $_REQUEST['discount'];
            $img = $_REQUEST['img'];
            $file = $_FILES['sku']['tmp_name'];
            $path = "uploads/" . $_FILES['sku']['name'];
            move_uploaded_file($file, $path);
            $product=new Product($sku,$name,$price,$discount,$img);
            $this->productModel->create($product);
            header('location:index.php');
        }
    }

    public function deleteProduct()
    {
        $id = $_REQUEST['id'];
        $this->productModel->delete($id);
        header('location:index.php');
    }

    public function updateProduct()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_REQUEST['id'];
            $product = $this->productModel->getById($id);
            include_once 'app/View/backend/product/update.php';
        }else{
            $this->productModel->update($_REQUEST);
            header('location:index.php');
        }
    }
    public function searchProduct()
    {
        $search = $_REQUEST['search'] ;
        $products = $this->productModel->search($search);
        var_dump($products);
        die();
        header('location:index.php');
    }
}