<?php
   class Animals{
    public function FaitDuBruits(){
        echo "L'animal fait du bruits";
    }
   }

   class chat extends Animals{
    public function FaitDuBruits(){
        echo "Miaaww ! ";
    }
   }
   class chien extends Animals{
    public function FaitDuBruits(){
        echo "Ouuuaf ! ";
    }
   }

   $animals = [new chat(), new chien(), new Animals()];

   foreach($animals as $animaux){
     $animaux->FaitDuBruits();
   }
?>