<html>
    <body>
        Task name       Start date      End date
        <br/>
            <?php 
                $a=array("ar_t"=>array(),"ar_sd"=>array(),"ar_dur"=>array(),"ar_pr"=>array());
                for($i=0;$i<8;$i++){
                    $a["ar_t"][$i]=$_GET["tname".$i];
                    $a["ar_sd"][$i]=$_GET["sdate"];
                    $a["ar_dur"][$i]=$_GET["tdur".$i];
                    $a["ar_pr"][$i]=$_GET["tprior".$i];
                }
                for($i=0;$i<7;$i++){
                    $p=$i;
                    for($j=$i;$i<8;$i++){
                        if($a["ar_pr"][$j]<$a["ar_pr"][$p]) $p=$j; 
                    }
                    $k1=$a["ar_t"][$i];$k2=$a["ar_sd"][$i];$k3=$a["ar_dur"][$i];$k4=$a["ar_pr"][$i];
                    $a["ar_t"][$i]=$a["ar_t"][$p];$a["ar_sd"][$i]=$a["ar_sd"][$p];
                    $a["ar_dur"][$i]=$a["ar_dur"][$p];$a["ar_pr"][$i]=$a["ar_pr"][$p];
                    $a["ar_t"][$p]=$k1;$a["ar_sd"][$p]=$k2;$a["ar_dur"][$p]=$k3;$a["ar_pr"][$p]=$k4;
                } 
                echo "Task name     start date      duration        priyority";
                for($i=0;$i<8;$i++){
                    echo $a["ar_t"][$i]."       ";
                    echo $a["ar_sd"][$i]."     ";
                    echo $a["ar_dur"][$i]."      ";
                    echo $a["ar_pr"][$i]."<br/>";               
                }
            ?>
            
    </body>
</html>