<?php
class BankAccount {
    private $name;
    private $balence;

    /**
     * @return mixed
     */
    public function _construct($name)
    {
        $this->name = $name;
        $this->balence = 0.00;
    }

    /**
     * @return mixed
     */
    public function getBalence()
    {
        return $this->balence;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    public function deposite($amount) {
        if ($amount >= 0.00) {
            $this -> balence += $amount;
        }
    }
    public function withdraw($amount) {
        if($amount >= 0.00 && $amount <= $this->balence) {
            $this->balence -= $amount;
        }
    }
    public function toString() {
        return "{".$this->name.",$".$this->balence."}";
    }
}
