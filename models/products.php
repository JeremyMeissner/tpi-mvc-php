<?php
require_once(ROOT . 'models/config/pdo.inc.php');
class Product
{
    private $id;

    private $description;

    private $prix;

    private $image;

    private $idCategorie;

    public function findAllByCategory($idCategory)
    {

        $sql = "SELECT * FROM `produit` WHERE idCategorie = :idCategory";
        $data = [
            ":idCategory" => $idCategory
        ];

        $req = CustomPDO::getInstance()->prepare($sql);

        $req->setFetchMode(PDO::FETCH_CLASS, 'Product');

        $req->execute($data);


        return $req->fetchAll();
    }

    public function findAll()
    {

        $sql = "SELECT * FROM `produit`";

        $req = CustomPDO::getInstance()->prepare($sql);

        $req->setFetchMode(PDO::FETCH_CLASS, 'Product');

        $req->execute();


        return $req->fetchAll();
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of idCategorie
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set the value of idCategorie
     *
     * @return  self
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }
}
