<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

class GameController extends Controller
{
    /**
     * Allow user to select an option
     * 
     * @access public
     * @return undefined
     */
    public function select() {
        return view('game.select');
    }

    /**
     * See who is the winner and shows the winner
     * 
     * @access public
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
