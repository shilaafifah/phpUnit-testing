<?php
// File: WordCount.php
class Wordcount{
    public function countWord ($sentence){
        return count(explode(" ", $sentence));
    }
}