<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class PalanhiPlayers
 * @package Hackathon\PlayerIA
 * @author YOUR NAME HERE
 */
class PalanhiPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {

        if ($this->result->getLastChoiceFor($this->mySide) === parent::paperChoice())
            return parent::rockChoice();
        else if ($this->result->getLastChoiceFor($this->mySide) === parent::scissorsChoice())
            return parent::paperChoice();
       
        return parent::scissorsChoice();

    }
};
