<?php

if (isset($_POST['largo'])) 
   {if($largo%50!=0)
    {echo "<strong>El largo $largo mm es invalido debe ser multiplo de 50mm</strong><br>";}
     else{
         $cm=$largo/50;
         }
    }
