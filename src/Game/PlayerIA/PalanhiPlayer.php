<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class PalanhiPlayers
 * @package Hackathon\PlayerIA
 * @author SHAM KAZEMI-JOESTANI
 * J'ai voulu tenter le tout pour le tout.
 * De base je voulais faire une chose obscure et au final je me suis juste dit que je prendrais le dernier coup de l'autre
 * et que je tenterais ce qu'il ne ferait pas.
 * De base (bis), je voulais prendre les stats des coups de l'adversaire et jouer l'inverse du coup le plus joué.
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
