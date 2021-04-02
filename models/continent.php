<?php
require(__DIR__ . '/inc/pdo.inc.php');
class Continent
{
    private $id;

    private $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function findAllByName($name)
    {
        $req = Pdo::getInstance();

        $sql = "SELECT * FROM `Continent`";

        /*
        $sql = "SELECT * FROM `Continent` WHERE txtName = :txtName";
        $data = [
            ":txtName" => $name
        ];
        */

        $req = $req->prepare($sql);

        $req->setFetchMode(PDO::FETCH_CLASS, 'Continent');

        //$req->execute($data);
        $req->execute();
        return $req->fetchAll();
    }
}
