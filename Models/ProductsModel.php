<?php
namespace App\Models;

class ProductsModel extends Model
{
    protected $id;
    protected $name_products;
    protected $price_products;
    protected $short_description;
    protected $long_description;
    protected $artiste_name;
    protected $categorie_name;
    protected $img;

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img): self
    {
        $this->img = $img;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNameProducts()
    {
        return $this->name_products;
    }

    /**
     * @param mixed $name_products
     */
    public function setNameProducts($name_products): self
    {
        $this->name_products = $name_products;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceProducts()
    {
        return $this->price_products;
    }

    /**
     * @param mixed $price_products
     */
    public function setPriceProducts($price_products): self
    {
        $this->price_products = $price_products;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * @param mixed $short_description
     */
    public function setShortDescription($short_description): self
    {
        $this->short_description = $short_description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongDescription()
    {
        return $this->long_description;
    }

    /**
     * @param mixed $long_description
     */
    public function setLongDescription($long_description): self
    {
        $this->long_description = $long_description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArtisteName()
    {
        return $this->artiste_name;
    }

    /**
     * @param mixed $artiste_name
     */
    public function setArtisteName($artiste_name): self
    {
        $this->artiste_name = $artiste_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategorieName()
    {
        return $this->categorie_name;
    }

    /**
     * @param mixed $categorie_name
     */
    public function setCategorieName($categorie_name): self
    {
        $this->categorie_name = $categorie_name;
        return $this;
    }

    public function __construct()
    {
        //$this->table = "users";
        $class = str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
        $this->table = strtolower(str_replace('Model', '', $class));
    }
}


