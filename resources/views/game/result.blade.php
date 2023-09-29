@extends('layout')
@section('content')
    <div>
        The winner is: <?php echo $winner; ?>
    </div>
    <div>
        Computer selected: <?php echo $computerSelection; ?>
    </div>
    <div>
        <a href="/game/select">Play again</a>
    </div>
@stop