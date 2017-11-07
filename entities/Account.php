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


  // METHODS
  public function hydrate($data){
    foreach ($data as $key => $value) {
      // var_dump($data);
      $method = "set" .ucfirst($key);
      // var_dump($method);
      if(method_exists($this, $method)){
        // var_dump($method);
        $this->$method($value);
      }
    }
  }

  public function __construct($data) {
$this->hydrate($data);
  }


}

 ?>
