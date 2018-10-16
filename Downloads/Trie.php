<?php

class Trie
{
   const chaves = array(
       'sol',
       'solo',
       'solar'
   );

   const fimPalavra = false;

   public function getReconhece($entrada)
   {
       $entrada = 'solario';

       $entArray = str_split($entrada, count($entrada));

       foreach (self::chaves as $chave) {
           $constArray = str_split($chave, count($chave));
           for ($i = 0; $i < count($chave); $i++) {
               if ($entArray[$i] == $constArray[$i]) {
                   $newEntrada = $entArray[$i] + $entArray[$i++];
                   $constArray = $constArray[$i] + $constArray[$i++];
                   $this->getReconhece($newEntrada);
               } else {
                   return false;
               }
           }
       }

       return true;
   }

}
