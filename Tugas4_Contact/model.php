<?php

class User {
    public $id;
    public $CURRENT_JOB;
    public $NAME;
    public $ADRESS;
    public $Status;
    public $PHONE_NUMBER;

    public function __construct($Id, $CURRENT_JOB, $NAME, $ADRESS, $Status, $PHONE_NUMBER) {
        $this->id = $Id;
        $this->currentJob = $CURRENT_JOB;
        $this->name = $NAME;
        $this->address = $ADRESS;
        $this->status = $Status;
        $this->phoneNumber = $PHONE_NUMBER;
    }
}

?>
