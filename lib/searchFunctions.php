<?php

/**
 * Funzione di ordine superiore funzione che restituisce una funzione
 * Programmazione Funzionale - dichiarativo 
 */
function searchText($searchText)
{

    return function ($taskItem) use ($searchText) {

        $cleanedSpaces = preg_replace('/[ ]+/m', ' ', $searchText);
        $stringToLower = strtolower($taskItem['taskName']);
        $searchToLower = trim(strtolower($cleanedSpaces));
        if ($searchToLower !== '') {
            $result = strpos($stringToLower, $searchToLower) !== false;
        } else {
            $result = true;
        }
        return $result; //il risultato e' un booleano
    };
}

/**
 * @var string $status è la stringa che corrisponde allo status da cercare
 * (progress|done|todo)
 * @return callable La funzione che verrà utilizzata da array_filter
 */
function searchStatus(string $_status){
    return function ($mockTaskItem) use ($_status) {
            if (($_status === '') || ($_status === 'all')) {
                $result = true;
            } else {
                $result = strpos($mockTaskItem['status'], $_status) !== false; 
            }
        return $result;
    };
}
