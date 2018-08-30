<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Game;
use AppBundle\Entity\Board;

class GameP4Controller extends Controller {

    /**
     * @Route("/game/{id}", name="viewGame")
     * @Template
     */
    public function boardAction() {

        /*
          for ($i = 0; $i < 5; $i++) {
          $aEx[$t["$i"]] = '<a>' . $i . '</a>';
          }
          dump($aEx);
         */


        $aGrid = [
            ['1', '2', '3', '4', '5', '6'],
            ['1', '2', '3', '4', '5', '6'],
            ['1', '2', '3', '4', '5', '6'],
            ['1', '2', '3', '4', '5', '6'],
            ['1', '2', '3', '4', '5', '6'],
            ['1', '2', '3', '4', '5', '6'],
        ];

        $game = new Game;
        return $this->render('@App/Game/board.html.twig', [
                    'game' => $game,
                    'tab' => $aGrid,
        ]);
    }

}
