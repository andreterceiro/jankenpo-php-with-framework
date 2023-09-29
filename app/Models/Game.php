<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * Return the random string computer option
     * 
     * @static
     * 
     * @access public
     * 
     * @return string
     */
    public static function getStringComputerOption() {
        $integerComputerOption = random_int(0, 2);
        $computerOptions = [
            'paper',
            'rock',
            'scissors'
        ];

        return $computerOptions[$integerComputerOption];
    }

    /**
     * Return the winner, comparing the user option
     * against the computer option
     * 
     * @static
     * 
     * @access public
     * 
     * @return string
     */
    public static function getWinner($stringUserOption, $stringComputerOption) {
        if (
            ($stringUserOption == "paper" && $stringComputerOption == "rock") 
                ||
            ($stringUserOption == "rock" && $stringComputerOption == "scissors") 
                ||
            ($stringUserOption == "scissors" && $stringComputerOption == "paper")
        ) {
            return "user";
        } elseif ($stringComputerOption == $stringUserOption) {
            return "draw";
        } else {
            return "computer";
        }
    }            
}
