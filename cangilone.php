<?php

//Parametros del if en Cangilone (pm'x')

$pm1=258; $pm2=303; $pm3=306; $pm4=360; $pm5=540; $pm6=(612+$bordes*2);


if($ancho<$pm1 )
{   

    $restoancho=($ancho-1)%9;
    $ma=$ancho+8-$restoancho;

    for ($i=1; $i <= $cm; $i=$i+4) 
    { 
      $o=$i+1;
      $o2=$i+2;
      $o3=$i+3;

        echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center'  WIDTH=50 ><strong>$i</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#CD6155 ><strong>$ma mm<br>$modulo</strong></td>    
              </tr>
              </table>";

        if($o<=$cm)
        {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$o</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm</strong></td>    
              </tr>
              </table>";}

        if($o2<=$cm)
        {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center'  WIDTH=50><strong>$o2</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm</strong></td>    
              </tr>
              </table>";}
        
        if($o3<=$cm)
        {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$o3</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm</strong></td>    
              </tr>
              </table>";}
     }

}
elseif ($ancho<$pm2)
{
    echo "El ancho $ancho mm, no es valido.Te recomendamos elegir un ancho mayor a 303mm o menor a 275mm";
}
elseif($ancho<=$pm3)
{
  
    $restoancho=($ancho-1)%9;
    $ma=$ancho+8-$restoancho;

    for ($i=1; $i <= $cm; $i=$i+4) 
    { 
      $o=$i+1;
      $o2=$i+2;
      $o3=$i+3;

        echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center'  WIDTH=50><strong>$i</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#CD6155 ><strong>$ma mm<br>$modulo</strong></td>    
              </tr>
              </table>";

        if($o<=$cm)
        {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$o</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm</strong></td>    
              </tr>
              </table>";}

        if($o2<=$cm)
        {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center'  WIDTH=50><strong>$o2</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm</strong></td>    
              </tr>
              </table>";}
        
        if($o3<=$cm)
        {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center'  WIDTH=50><strong>$o3</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm</strong></td>    
              </tr>
              </table>";}
     
    }
}
elseif($ancho<=$pm4)
{
    $mitadredondiadadientes=round(($ancho+4)/18,0,PHP_ROUND_HALF_UP);
    $ma=$mitadredondiadadientes*9;



    $dientes1=round($mitadredondiadadientes/2);
    $mb1=$dientes1*9;
    $mb2=($mitadredondiadadientes-$dientes1)*9;



    
     for ($i=1; $i <= $cm; $i=$i+4) 
    {
      $o=$i+1;
      $o1=$i+2;
      $o2=$i+3;
    

      echo  "<table>
             <tr HEIGHT=50 >
               <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$i</strong></td>
      
               <td WIDTH=$ma align='center' bgcolor=#F1948A ><strong>$ma mm<br>$modulo</strong></td>
      
               <td WIDTH=$ma align='center' bgcolor=#CD6155 ><strong>$ma mm<br>$modulo</strong></td>
      
            </tr>
            </table>";

     if($o<=$cm)        
     {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=48><strong>$o</strong></td>
                  <td WIDTH=$mb1 align='center' bgcolor=#BB8FCE ><strong>$mb1 mm </strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm </strong></td>
                  
                  <td WIDTH=$mb2 align='center' bgcolor=#D7BDE2><strong>$mb2 mm </strong></td>
              </tr>
              </table>";}

      if($o1<=$cm) 

      echo  "<table>
             <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$o1</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm </strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#A569BD ><strong>$ma mm</strong></td>
              </tr>
              </table>";

     if($o2<=$cm)        
     {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=48><strong>$o2</strong></td>
                  <td WIDTH=$mb1 align='center' bgcolor=#BB8FCE ><strong>$mb1 mm </strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm </strong></td>
                  
                  <td WIDTH=$mb2 align='center' bgcolor=#D7BDE2><strong>$mb2 mm </strong></td>
              </tr>
              </table>";}
     }
}
elseif ($ancho<=$pm5)
{
    $ma=306;
    $disferencia=$ancho-$ma;
    $mb1=9-($disferencia%9)+$disferencia;
    $mb=$mb1-$bordes*2;
    
    
    for ($i=1; $i <= $cm; $i=$i+4) 
    { 
          $o=$i+1;
          $o1=$i+2;
          $o2=$i+3;
    
          echo  "<table>
                  <tr HEIGHT=50 >
                      <td bgcolor=#ffffcc align='center' WIDTH=46><strong>$i</strong></td>

                      <td WIDTH=$bordes align='center' bgcolor=#85C1E9 ><strong>$bordes<br>mm</strong></td>
                      
                      <td WIDTH=$mb align='center' bgcolor=#F1948A ><strong>$mb mm<br>$modulo</strong></td>
                      
                      <td WIDTH=$ma align='center' bgcolor=#CD6155 ><strong>$ma mm<br>$modulo</strong></td>
                      
                      <td WIDTH=$bordes align='center' bgcolor=#85C1E9 ><strong>$bordes<br>mm</strong></td>
                    
                  </tr>
                  </table>";
    
            if($o<=$cm){
            echo  "<table>
                  <tr HEIGHT=50 >
                      <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$o</strong></td>

                      <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm</strong></td>
    
                      <td WIDTH=$mb1 align='center' bgcolor=#A569BD ><strong>$mb1 mm </strong></td>
                      
                      
                  </tr>
                  </table>";}

            if($o1<=$cm){
               echo  "<table>
                          <tr HEIGHT=50 >
                              <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$o1</strong></td>

                              <td WIDTH=$mb1 align='center' bgcolor=#A569BD ><strong>$mb1 mm </strong></td>

                              <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm</strong></td>
                              
                          </tr>
                          </table>";}

             if($o2<=$cm){
                            echo  "<table>
                                  <tr HEIGHT=50 >
                                      <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$o2</strong></td>

                                      <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm</strong></td>
                    
                                      <td WIDTH=$mb1 align='center' bgcolor=#A569BD ><strong>$mb1 mm </strong></td>
                                      

                                  </tr>
                                  </table>";}
    }     
}      
elseif ($ancho<=$pm6)
{  
    $ma=306;
    $mb=9*(round(($ancho-(2*$bordes)-$ma)/9,0,PHP_ROUND_HALF_UP));
    $mb1=round(($ancho-$ma)/2);
    $mb2=$ancho-$ma-$mb1;
    $mb3=$mb1+$mb2;


    for ($i=1; $i <= $cm; $i=$i+4) 
    {
      $o=$i+1;
      $o1=$i+2;
      $o2=$i+3;
    

      echo  "<table>
             <tr HEIGHT=50 >
               <td bgcolor=#ffffcc align='center' WIDTH=46><strong>$i</strong></td>

               <td WIDTH=$bordes align='center' bgcolor=#85C1E9 ><strong>$bordes<br>mm</strong></td>
      
               <td WIDTH=$mb align='center' bgcolor=#F1948A ><strong>$mb mm<br>$modulo</strong></td>
      
               <td WIDTH=$ma align='center' bgcolor=#CD6155 ><strong>$ma mm<br>$modulo</strong></td>
      
               <td WIDTH=$bordes align='center' bgcolor=#85C1E9 ><strong>$bordes<br>mm</strong></td>
    
            </tr>
            </table>";

     if($o<=$cm)        
     {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=48><strong>$o</strong></td>
                  <td WIDTH=$mb1 align='center' bgcolor=#BB8FCE ><strong>$mb1 mm </strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm </strong></td>
                  
                  <td WIDTH=$mb2 align='center' bgcolor=#D7BDE2><strong>$mb2 mm </strong></td>
              </tr>
              </table>";}

      if($o1<=$cm) 

      echo  "<table>
             <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$o1</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm </strong></td>

                  <td WIDTH=$mb3 align='center' bgcolor=#8E44AD ><strong>$mb3 mm</strong></td>
              </tr>
              </table>";

     if($o2<=$cm)        
     {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=48><strong>$o2</strong></td>
                  <td WIDTH=$mb1 align='center' bgcolor=#BB8FCE ><strong>$mb1 mm </strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm </strong></td>
                  
                  <td WIDTH=$mb2 align='center' bgcolor=#D7BDE2><strong>$mb2 mm </strong></td>
              </tr>
              </table>";}
     }   
}
else
{
    echo "El ancho de $ancho supera al maximo establecido";
}



// Q dientes:

$qd=34;

if(isset($ma)){$qda=$ma/9;}

if(isset($mb)){$qdb=$mb/9;}

if(isset($mb1)){$qdb1=$mb1/9;}

if(isset($mb2)){$qdb2=$mb2/9;}

if(isset($mb3)){$qdb3=$mb3/9;}

if(isset($bordes)){$qdbordes=$bordes/9;}

