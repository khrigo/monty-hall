<?php

class MontyHall {

    private $rounds     = 10;
    private $doors      = 3;
    private $wins       = array( "changing" => 0, "keeping" => 0 );

    public function setDoors($doors)
    {
        $this->doors = $doors;
        return $this;
    }

    public function play($rounds = false)
    {
        if  ($rounds) $this->rounds = $rounds;
        for ($i = 0; $i < $this->rounds; $i++) {
            $prizeDoor          = $this->randomDoor();
            $playerChoiseDoor   = $this->randomDoor();
            $hostOpenDoor       = $this->chooseDoor($prizeDoor, $playerChoiseDoor);
            $playerChangeDoor   = $this->chooseDoor($playerChoiseDoor, $hostOpenDoor);

            if( $playerChoiseDoor == $prizeDoor ) $this->wins["keeping"]++;
            if( $playerChangeDoor == $prizeDoor ) $this->wins["changing"]++;
        }

    return $this;
    }

    public function getResults()
    {
        echo    " Winnings:                "   . "<br>" .
                " - Changing the door:     "   . ($this->wins["changing"] * 100) / $this->rounds . "%<br>" .
                " - Not Changing the door: "   . ($this->wins["keeping"]  * 100) / $this->rounds . "%<br>" .
                " Simulation Statistics:   "   . "<br>" .
                " - Games played:          "   . $this->rounds . "<br>" .
                " - Doors used:            "   . $this->doors  . "<br>" ;
    }

    private function randomDoor()
    {
        return rand(1, $this->doors);
    }

    private function chooseDoor($number1 = null, $number2 = null)
    {
        do      $result = $this->randomDoor();
        while   ($result == $number1 or $result == $number2);
        return  $result;
    }

}


// Use the MontyHall Simulation
$montyhall = new MontyHall();
$montyhall->setDoors(3)->play(10000)->getResults();