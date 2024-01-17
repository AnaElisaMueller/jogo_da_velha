<?php

function swapPlayer(string $player): string{
//troca de player
    if($player === PLAYER_ONE_ICON){
        return PLAYER_TWO_ICON;
    } else {
        return PLAYER_ONE_ICON;
    }
}