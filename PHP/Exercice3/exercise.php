<?php

$input;
$brotherA =0;
$brotherB =0;

// For each round in the input array
foreach ($input as $round) {
    // if the first value of the round is upper than the second
    if ($round[0] > $round[1]) {
        //then increment the brother A counter
        $brotherA++;
    } else if ($round[0] < $round[1]) {
        //then increment the brother B counter
        $brotherB++;
    }
    // else (do nothing)
}

//if the brother A counter is upper than the brother B counter
if ($brotherA > $brotherB) {
    // then set A as winner
    $winner = 'A';
} else {
    // else st B as winner
    $winner = 'B';
}

$winner;


/**
 * Get winner
 *
 * Return the winner of a game containing multiple rounds
 *
 * @param array[] $input The input containing rounds
 *
 * @return string
 */
/*
function getWinner(array $input) : string
{
    $brotherA = 0;
    $brotherB = 0;

    foreach ($input as [$cardA, $cardB]) {
        if ($cardA > $cardB) {
            $brotherA++;
        } else if ($cardA < $cardB) {
            $brotherB++;
        }
    }
    if ($brotherA > $brotherB) {
        return 'A';
    }
    return 'B';
}

$winner = getWinner($input);
*/
