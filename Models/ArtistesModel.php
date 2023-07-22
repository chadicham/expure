<?php
namespace App\Models;

class ArtistesModel extends Model
{
    protected $id;
    protected $name_artiste;
    protected $description_artiste;
    protected $categorie;

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie): self
    {
        $this->categorie = $categorie;
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
    public function getNameArtiste()
    {
        return $this->name_artiste;
    }

    /**
     * @param mixed $name_artiste
     */
    public function setNameArtiste($name_artiste): self
    {
        $this->name_artiste = $name_artiste;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getDescriptionArtiste()
    {
        return $this->description_artiste;
    }

    /**
     * @param mixed $description_artiste
     */
    public function setDescriptionArtiste($description_artiste): self
    {
        $this->description_artiste = $description_artiste;
        return $this;

    }


    public function __construct()
    {
        //$this->table = "users";
        $class = str_replace(__NAMESPACE__ . '\\', '', __CLASS__);
        $this->table = strtolower(str_replace('Model', '', $class));
    }
}


