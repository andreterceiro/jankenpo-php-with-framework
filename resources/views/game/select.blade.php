@extends('layout')
@section('content')
    Selecione uma opção:
    <form method="POST" action="/game/result">
        @csrf
        <div>
            <input type="radio" name="userOption" value="paper"><img src="/assets/paper.png" />
        </div>
        <div>
            <input type="radio" name="userOption" value="rock"><img src="/assets/rock.png" />
        </div>
        <div>
            <input type="radio" name="userOption" value="scissors"><img src="/assets/scissors.png" />
        </div>
        <input type="submit" value="Jogar"></submit>
    </form>
@stop
