<?php


namespace App\Model;

class ProductModel
{
    private $dbConnect;
    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    //Lấy ra toàn bộ Product
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM `Products`";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        }catch (\PDOException $exception){
            die($exception->getMessage());
        }

    }


    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM `Products` where `id`= $id";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertToObject($stmt->fetch());
        }catch (\PDOException $exception){
            die($exception->getMessage());
        }

    }

    public function create($product)
    {
        try {
            $sql = "INSERT INTO `Products`(`sku`,`name`,`price`,`discount`,`img`) VALUES (?,?,?,?,?)";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1,$product->getSku());
            $stmt->bindParam(2,$product->getName());
            $stmt->bindParam(3,$product->getPrice());
            $stmt->bindParam(4,$product->getDiscount());
            $stmt->bindParam(5,$product->getImg());
            $stmt->execute();
        }catch (\PDOException $exception){
            echo $exception->getMessage();
        }

    }

    //Cập nhật thông tin Product
    public function update($request)
    {
        try {
            $sql = "UPDATE `Products` SET `sku`=?,`name`=?,`price`=?,`discount`=?,`img`=? WHERE `id`=". $request['id'];
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1,$request['sku']);
            $stmt->bindParam(2,$request['name']);
            $stmt->bindParam(3,$request['price']);
            $stmt->bindParam(4,$request['discount']);
            $stmt->bindParam(5,$request['img']);
            $stmt->execute();
        }catch (\PDOException $exception){
            echo $exception->getMessage();
        }
    }

    //Xoá Product theo id
    public function delete($id)
    {
        $sql = "DELETE FROM `Products` WHERE `id` = $id";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }

    public function convertToObject($data)
    {
        $product =  new Product($data['sku'],$data['name'],$data['price'],$data['discount'],$data['img']);
        $product->setId($data['id']);
        return $product;
    }

    public function convertAllToObj($data)
    {
        $products = [];
        foreach ($data as $item){
            $products[] = $this->convertToObject($item);
        }
        return $products;
    }
    public function search($search): array
    {
        $sql = "SELECT * FROM `Products` WHERE `name` LIKE '%$search%'";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}