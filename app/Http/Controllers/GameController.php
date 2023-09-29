<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

class GameController extends Controller
{
    /**
     * Alow user to select an option
     * 
     * @return undefined
     */
    public function select() {
        return view('game.select');
    }

    /**
     * See who win and show the winner
     * 
     * @return undefined
     */
    public function result() {
        $stringUserOption = request('userOption');
        $stringComputerOption = Game::getStringComputerOption();

        $stringWinner = Game::getWinner(
            $stringUserOption,
            $stringComputerOption
        );

        return view(
            'game.result',
            [
                'winner' => $stringWinner,
                'computerSelection' => $stringComputerOption
            ]
        );
    }


}
