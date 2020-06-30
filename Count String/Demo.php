<?php

class Demo
{
  function wordCharacterCount($data){
          $word_length = str_word_count($data['string']);
          $character_length = strlen($data['string']);
          $result = [
              'word_length'=>$word_length,
              'character_length'=>$character_length
          ];
          return $result;
  }
  function addition(){
      echo "Hello world";
  }
}