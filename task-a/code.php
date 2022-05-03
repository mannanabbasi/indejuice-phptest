<?php

    /* 
     *  Function    : containsWord()
     * 
     *  Description : Checks whether a sentence contains a specific word, case insensitive.
     *  
     *  Parameters  : (string) word         - The word to find
     *                (string) sentence     - The sentence to search
     * 
     *  Return      : boolean
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */
    
    
    function containsWord($word, $sentence){
       //check if $sentence and $word are not blank
        if (!empty($word) && !empty($sentence)) {
            //convert given string to array of words separated by spaces

            $wordsArray = explode(" ", $sentence);

            //loop over each word in sentence array to find the word we are looking for.
            foreach($wordsArray as $wordsInSentence) {
                //sanitize each element in array and remove . from the end of
                $wordsInSentence = rtrim($wordsInSentence, ".");
                if (strtolower($word) === strtolower($wordsInSentence)) {
                    return true;
                }
            }
            return false;
        }
        return false;

    }
