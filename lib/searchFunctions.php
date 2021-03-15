<?php
/**
 * Funzione di ordine superiore funzione che restituisce una funzione
 * Programmazione Funzionale - dichiarativo 
 */
//function searchText($searchText) {
    
   
//}

/**
 * @var string $status è la stringa che corrisponde allo status da cercare
 * (progress|done|todo)
 * @return callable La funzione che verrà utilizzata da array_filter
 */
function searchStatus(string $_status) : callable {
    
    return function($mockTaskItem) use ($_status){
        //echo $status."<br>";
        //echo $mockTaskItem['status']."<br>";
        if($_status!==''){
            if($_status!=='all'){
                $result = strpos($mockTaskItem['status'],$_status) !== false;
            }else{
                $result = true;
            }
        }else{
            $result = true;
        }
        //$result=($mockTaskItem['status']===$status);
        return $result;
    };
} 


