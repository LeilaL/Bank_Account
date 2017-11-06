<?php

abstract class AnimalCompagnie {

  protected $nom;
  protected $age;


    /**
     * Get the value of Nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of Nom
     *
     * @param mixed nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of Age
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of Age
     *
     * @param mixed age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    final public function manger() {
      echo $this->getNom() . " mange";
    }

    abstract function bouger();

    public function __construct($nom, $age) {
      $this->setNom($nom);
      $this->setAge($age);
    }

}

 ?>
