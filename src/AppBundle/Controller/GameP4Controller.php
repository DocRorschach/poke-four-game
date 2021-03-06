<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Game;
use AppBundle\Model\Board;

class GameP4Controller extends Controller {

    /**
     * @Route("/game", name="viewGame")
     * @Security("has_role('ROLE_USER')")
     * @Template
     */
    public function boardAction() {

        for ($y = 1; $y < 5; $y++) {
            for ($x = 1; $x < 7; $x++) {
                $aGrid[$y][$x] = $x;
            }
        }

        $game = new Game;
        return $this->render('@App/Game/board.html.twig', [
                    'game' => $game,
                    'tab' => $aGrid,
        ]);
    }

}
