<?php

//Parametros del if en Simple (ps'x')

$ps1=276; $ps2=303; $ps3=306; $ps4=332; $ps5=516; $ps6=612;


if($ancho<$ps1)
{   

    $restoancho=($ancho-1)%9;
    $ma=$ancho+8-$restoancho;
    
    for ($i=1; $i <= $cm; $i=$i+1) 
    { 
      echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$i</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm </strong></td>    
              </tr>
              </table>";
     }

}
elseif ($ancho<$ps2)
{
    echo "<strong>El ancho $ancho mm, no es valido.Te recomendamos elegir un ancho mayor a 303mm o menor a 275mm</strong>";
}
elseif($ancho<=$ps3)
{
    $restoancho=($ancho-1)%9;
    $ma=$ancho+8-$restoancho;

    for ($i=1; $i <= $cm; $i=$i+1) 
    { 
      echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center'  WIDTH=50><strong>$i</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm </strong></td>    
              </tr>
              </table>";
     }
}
elseif($ancho<=$ps4)
{
   echo "El ancho $ancho no es valido porque genera mucho desperdicio";
}
elseif ($ancho<=$ps5)
{ 
    $ma=306;
    $disferencia=$ancho-$ma;
    $mb=9-($disferencia%9)+$disferencia;
 

    for ($i=1; $i <= $cm; $i=$i+2) 
    { 
      $o=$i+1;

      echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$i</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm </strong></td>
                  
                  <td WIDTH=$mb align='center' bgcolor=#A569BD ><strong>$mb mm</strong></td>
                
              </tr>
              </table>";

        if($o<=$cm){
        echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$o</strong></td>

                  <td WIDTH=$mb align='center' bgcolor=#A569BD ><strong>$mb mm </strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A ><strong>$ma mm</strong></td>
              </tr>
              </table>";}
     }     
}
elseif ($ancho<=$ps6)
{
    $ma=306;
    $disferencia=$ancho-$ma;
    $mb=round($disferencia/9,0,PHP_ROUND_HALF_UP)*9;

    $qdientesmb=($mb)/9;
    $dientessobrante=34-$qdientesmb;
    $mitaddedientes=$qdientesmb/2;
    $mitaddedientesa=round($mitaddedientes);
    $mb1=$mitaddedientesa*9;
    $mitaddedientesb=$qdientesmb-$mitaddedientesa;
    $mb2=$mitaddedientesb*9;

    for ($i=1; $i <= $cm; $i=$i+2) 
    {
      $o=$i+1;
    

      echo  "<table>
             <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=50><strong>$i</strong></td>
                  
                  <td WIDTH=$ma align='center' bgcolor=#F0B27A><strong>$ma mm </strong></td>
                  
                  <td WIDTH=$mb align='center' bgcolor=#A569BD><strong>$mb mm</strong></td>
              </tr>
              </table>";

     if($o<=$cm)        
     {echo  "<table>
              <tr HEIGHT=50 >
                  <td bgcolor=#ffffcc align='center' WIDTH=48><strong>$o</strong></td>
                  <td WIDTH=$mb1 align='center' bgcolor=#BB8FCE><strong>$mb1 mm </strong></td>
                  
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

if(isset($ma) && $ma!=""){
    $qda=$ma/9;
    $qdar=$qd-$qda;
}

if(isset($mb) && $mb!=""){
    $qdb=$mb/9;
}

if(isset($mb1)){$qdb1=$mb1/9;}

if(isset($mb2)){$qdb2=$mb2/9;}


if($modulo='simple')
   {
       if($ancho<$ps1)
        {  
            echo "cantidad de dientes de bloque A:$qda ";
        }
        elseif($ancho<$ps2)
        {  
            echo "";     
        }
        elseif($ancho<$ps3)
        {  
            echo "cantidad de dientes de bloque A:$qda ";
        }
        elseif($ancho<$ps4)
        {  
            echo "";
        }
        elseif($ancho<$ps5)
        {  
            echo "cantidad de dientes de bloque A:$qda ";
            echo "cantidad de dientes de bloque B:$qdb ";
        }
        elseif($ancho<$ps6)
        {  
            echo "cantidad de dientes de bloque A:$qda ";
            echo "cantidad de dientes de bloque B:$qdb ";
            echo "cantidad de dientes de bloque C:$qdb1 ";
            echo "cantidad de dientes de bloque D:$qdb2 ";
        }     
   }
