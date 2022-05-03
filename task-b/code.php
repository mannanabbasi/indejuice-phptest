<?php

    /* 
     *  Function    : generateSentence()
     * 
     *  Description : Generate a sentence listing out all items provided in an array.
     *  
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     * 
     *  Return      : string
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */

    
    function generateSentence($start, $items, $append= null){
        $result = $start .= ": ";
		$appendedItemsArray = appendToArray($items,$append);

        $str = implode(", ",$appendedItemsArray);//Convert array to a comma separated string
        $formatted = substr_replace($str, ' and', strrpos($str, ','), 1); // replace last occuring , sign with 'and' in the resulting string
        return $result.=$formatted.".";


    }


    //FUNCTION TO APPEND GIVEN STRING OR ARRAY TO THE ARRAY, RETURNS ARRAY WITH APPENDED STRING ON EACH ARRAY ELEMENT... 
    function appendToArray($items, $append) {
        if(isset($append)) {
            $appendedArray = array();
            if (is_array($append)) {
                foreach($items as $key => $item) {
                    $appendedArray[]=$item." ".$append[$key];
                }
            } else {
                foreach($items as $item) {
                    $appendedArray[]=$item." ".$append;
                }
            }
            return $appendedArray;
        } else {
            return $items;
        }
        
    }

    