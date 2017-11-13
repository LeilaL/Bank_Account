<?php
declare(strict_types=1);

class Account {
  protected $id;
  protected $name;
  protected $amount;


// SETTERS
/**
    * Set the value of Id
    *
    * @param mixed id
    *
    * @return self
    */
public function setId($id) {
    $this->id = $id;
}

/**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */

  public function setName($name) {
      $this->name = $name;
  }

  /**
     * Set the value of Amount
     *
     * @param mixed amount
     *
     * @return self
     */
  public function setAmount($amount) {
      $this->amount = $amount;
  }


  // GETTERS

  /**
    * Get the value of Id
    *
    * @param empty
    *
    * @return int
    */
  public function getId() {
    return $this->id;
  }

  /**
      * Get the value of Name
      *
      * @return mixed
      */
  public function getName() {
    return $this->name;
  }

  /**
      * Get the value of Amount
      *
      * @return mixed
      */
  public function getAmount() {
    return $this->amount;
  }


// RETRAIT
  public function retrait($amount){
  return $this->amount += $amount;
  }
  // VERSEMENT
    public function versement($amount){
    $this->amount -= $amount;
    }

  // METHODS
  public function hydrate($data){
    foreach ($data as $key => $value) {
      $method = "set" .ucfirst($key);
      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  public function __construct($data) {
$this->hydrate($data);
  }


}

 ?>
