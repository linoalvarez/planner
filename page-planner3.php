<?php include('my-data3.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvarez WP 23_24 Planner (211) 3.0 V</title>
    <?php include('my-style3.php') ?>   
</head>
<body>
<div class="letterV"></div>    
<!-- <div class="letterH"></div>     -->
<div class="wrapper">
    
    <div class="page schedule" id="schedule">
        
        <div class="owner"> <h1> <?php echo '<span>' . $owner . '</span> <span>' . $schoolYear . '</span> <span>' . '('. $ownerBaseRoom . ')</span>'; ?></h1>
        </div>
                
        <div class="grid-schedule">
            <div class="wide day-header"><?php foreach ($dayHeaders as $dayHeader) {echo'<div>' . $dayHeader . '</div>'; } ?></div>
            <div class="class-times"><?php foreach ($periods as $period) { echo '<div class="class-time"><span>' . $period . '</span></div>'; }?></div>
            <div class="day1"><?php foreach ($day1 as $key => $value){echo'<div class="'.$key.'">'.'<span class="block">'.$key.'</span>'.'<span class="class">'.$value.'</span>'.'</div>';}?> </div>
            <div class="day2"><?php foreach ($day2 as $key => $value){echo'<div class="'.$key.'">'.'<span class="block">'.$key.'</span>'.'<span class="class">'.$value.'</span>'.'</div>';}?></div>
            <div class="day3"><?php foreach ($day3 as $key => $value){echo'<div class="'.$key.'">'.'<span class="block">'.$key.'</span>'.'<span class="class">'.$value.'</span>'.'</div>';}?></div>
            <div class="day4"><?php foreach ($day4 as $key => $value){echo'<div class="'.$key.'">'.'<span class="block">'.$key.'</span>'.'<span class="class">'.$value.'</span>'.'</div>';}?></div>
            <div class="day5"><?php foreach ($day5 as $key => $value){echo'<div class="'.$key.'">'.'<span class="block">'.$key.'</span>'.'<span class="class">'.$value.'</span>'.'</div>';}?></div>
            <div class="day6"><?php foreach ($day6 as $key => $value){echo'<div class="'.$key.'">'.'<span class="block">'.$key.'</span>'.'<span class="class">'.$value.'</span>'.'</div>';}?></div>
            <div class="day7"><?php foreach ($day7 as $key => $value){echo'<div class="'.$key.'">'.'<span class="block">'.$key.'</span>'.'<span class="class">'.$value.'</span>'.'</div>';}?></div>
            <div class="day8"><?php foreach ($day8 as $key => $value){echo'<div class="'.$key.'">'.'<span class="block">'.$key.'</span>'.'<span class="class">'.$value.'</span>'.'</div>';}?></div>
        </div>
        
        <div class="lunch-times"><span>11:11 - </span><b>L1</b><span> - 11:33 - </span><b>L2</b><span> - 11:56 - </span><b>L3</b><span> - 12:18</span></div>
        
    </div> <!-- page -->

    <div class="page y2324 wide pb0" id="y2324">
        <!-- <h1>page</h1> -->
        <iframe width="100%" height="1000px" src="https://www.linoalvarez.org/calendario7" frameborder="0"></iframe>
    </div> <!-- page -->

        <div class="page two-columns wide no-school-important-dates">

            <div class="no-school" id="no-school">
                
                <h1 class="wide center">No School</h1>
                
                <?php foreach ($noSchoolNew as $key => $value)  { echo "<div> <span><a href='#f" . $key . "'>" . date("M d Y", strtotime($key)) .  "</a></span>" . "<span>" . $value . "</span></div>"; }; ?>
            </div>

            <div class="important-dates">
            
                <h1 class="center">Important Dates</h1>
                    
                <?php foreach($lectivoPeroSpecial as $key => $value) { echo  '<div class="' . $value . '"><span><a href="#f' . $key . '">' . date("D M d Y", strtotime($key)) . '</a></span><span class="'  . $value . '"' . '>'.'<span>' . $value . '</span></div>' ; }; ?>
                    
            </div>
        </div> <!-- page -->


<?php $schoolday = 1; $amsaDay = 1;
    
    while (strtotime($date) <= strtotime($end_date)) {
        $timestamp = strtotime($date);

        $day = date('l', $timestamp);

            if(!in_array($date, $noSchoolNewTest)) { 

                if($day != "Saturday" && $day != "Sunday" ) { ?> 
      
      
<?php   $fecha = $date; ?>
<?php   $fechaAmsaDay = " Day " . $amsaDay ?>
<?php   $weekDay =  $day ?>
<?php   $daysLeft =  180 - $schoolday ?>

    <div class="page<?php echo ' Day' . $amsaDay;?>" id="<?php  echo "f" . $date;?>">
        <header>
            <h1 class="fecha"> <?php echo $mes = date('M d Y', $timestamp); ?> </h1>
            <div class="weekday-AMSADay wide"><?php echo $weekDay . " | " . $fechaAmsaDay;;?></div>
            <div class="lectivo-importante wide"><?php  echo $lectivoPeroSpecial[$date]?></div>
            <?php  ?>
            <!-- <h2 class="int-day-of"><?php //echo $dia_internacional_de[date("Y-m-d", $timestamp)]; ?></h2> -->
        </header>
        <main class="bloques <?php  echo $lectivoPeroSpecial[$date]?>">
            <div class="bloques-times">
                <?php foreach($periods as $period) {echo "<div>" . $period . "</div>";} ?>
            </div>                
            <div class="bloques-names">
            <?php    if($amsaDay == 1) { foreach ($day1 as $key => $day1bloque) { echo "<div class='" . $key . "'>" . $key . "</div>"; } }
                else if($amsaDay == 2) { foreach ($day2 as $key => $day2bloque) { echo "<div class='" . $key . "'>" . $key . "</div>"; } }
                else if($amsaDay == 3) { foreach ($day3 as $key => $day3bloque) { echo "<div class='" . $key . "'>" . $key . "</div>"; } }
                else if($amsaDay == 4) { foreach ($day4 as $key => $day4bloque) { echo "<div class='" . $key . "'>" . $key . "</div>"; } }
                else if($amsaDay == 5) { foreach ($day5 as $key => $day5bloque) { echo "<div class='" . $key . "'>" . $key . "</div>"; } }
                else if($amsaDay == 6) { foreach ($day6 as $key => $day6bloque) { echo "<div class='" . $key . "'>" . $key . "</div>"; } }
                else if($amsaDay == 7) { foreach ($day7 as $key => $day7bloque) { echo "<div class='" . $key . "'>" . $key . "</div>"; } }
                else if($amsaDay == 8) { foreach ($day8 as $key => $day8bloque) { echo "<div class='" . $key . "'>" . $key . "</div>"; } } ?>
            </div>   
            <div class="bloques-class">
            <?php    if($amsaDay == 1) { foreach ($day1 as $key => $day1bloque) { echo "<div class='" . $key . "'>" . $day1bloque . "</div>"; } }
                else if($amsaDay == 2) { foreach ($day2 as $key => $day2bloque) { echo "<div class='" . $key . "'>" . $day2bloque . "</div>"; } }
                else if($amsaDay == 3) { foreach ($day3 as $key => $day3bloque) { echo "<div class='" . $key . "'>" . $day3bloque . "</div>"; } }
                else if($amsaDay == 4) { foreach ($day4 as $key => $day4bloque) { echo "<div class='" . $key . "'>" . $day4bloque . "</div>"; } }
                else if($amsaDay == 5) { foreach ($day5 as $key => $day5bloque) { echo "<div class='" . $key . "'>" . $day5bloque . "</div>"; } }
                else if($amsaDay == 6) { foreach ($day6 as $key => $day6bloque) { echo "<div class='" . $key . "'>" . $day6bloque . "</div>"; } }
                else if($amsaDay == 7) { foreach ($day7 as $key => $day7bloque) { echo "<div class='" . $key . "'>" . $day7bloque . "</div>"; } }
                else if($amsaDay == 8) { foreach ($day8 as $key => $day8bloque) { echo "<div class='" . $key . "'>" . $day8bloque . "</div>"; } }?>
            </div>   
            <div class="bloques-rooms">
                <?php  
                    if($amsaDay == 1) { foreach ($day1rooms as $key => $day1room) { echo "<div class='" . $key . "'>" . $day1room . "</div>"; } }
                elseif($amsaDay == 2) { foreach ($day2rooms as $key => $day2room) { echo "<div class='" . $key . "'>" . $day2room . "</div>"; } }
                elseif($amsaDay == 3) { foreach ($day3rooms as $key => $day3room) { echo "<div class='" . $key . "'>" . $day3room . "</div>"; } }
                elseif($amsaDay == 4) { foreach ($day4rooms as $key => $day4room) { echo "<div class='" . $key . "'>" . $day4room . "</div>"; } }
                elseif($amsaDay == 5) { foreach ($day5rooms as $key => $day5room) { echo "<div class='" . $key . "'>" . $day5room . "</div>"; } }
                elseif($amsaDay == 6) { foreach ($day6rooms as $key => $day6room) { echo "<div class='" . $key . "'>" . $day6room . "</div>"; } }
                elseif($amsaDay == 7) { foreach ($day7rooms as $key => $day7room) { echo "<div class='" . $key . "'>" . $day7room . "</div>"; } }
                elseif($amsaDay == 8) { foreach ($day8rooms as $key => $day8room) { echo "<div class='" . $key . "'>" . $day8room . "</div>"; } } ?>
            </div>   
            <div class="bloques-counts">
                <?php  
                    if($amsaDay == 1) { foreach ($day1counts as $key => $day1count) { echo "<div class='" . $key . "'>" . $day1count . "</div>"; } }
                elseif($amsaDay == 2) { foreach ($day2counts as $key => $day2count) { echo "<div class='" . $key . "'>" . $day2count . "</div>"; } }
                elseif($amsaDay == 3) { foreach ($day3counts as $key => $day3count) { echo "<div class='" . $key . "'>" . $day3count . "</div>"; } }
                elseif($amsaDay == 4) { foreach ($day4counts as $key => $day4count) { echo "<div class='" . $key . "'>" . $day4count . "</div>"; } }
                elseif($amsaDay == 5) { foreach ($day5counts as $key => $day5count) { echo "<div class='" . $key . "'>" . $day5count . "</div>"; } }
                elseif($amsaDay == 6) { foreach ($day6counts as $key => $day6count) { echo "<div class='" . $key . "'>" . $day6count . "</div>"; } }
                elseif($amsaDay == 7) { foreach ($day7counts as $key => $day7count) { echo "<div class='" . $key . "'>" . $day7count . "</div>"; } }
                elseif($amsaDay == 8) { foreach ($day8counts as $key => $day8count) { echo "<div class='" . $key . "'>" . $day8count . "</div>"; } } ?>
            </div>   
            <div class="bloques-misc">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </main>
        <footer>
            <div class="traffic-duty wide center"><?php if ($amsaDay == $dutyDay1) {echo $dutyPost1;} else if ($amsaDay == $dutyDay2) {echo $dutyPost2;} else if ($amsaDay == $dutyDay3) {echo $dutyPost3;} else {echo "";}?></div>
            <div class="days-left wide"><?php echo $schoolday . "/". $daysLeft ;?> </div>
        </footer>
    </div>
        <?php 

                $schoolday = $schoolday + 1;
                $amsaDay = $amsaDay + 1;
                if($amsaDay == 9) { $amsaDay = 1; };
        }; //sat/sun
    };
    
    $date = date ("Y-m-d", strtotime("+1 days", strtotime($date)));
};
?>
    <div class="page y23 wide pb0" id="y2324">
        <!-- <h1>page</h1> -->
        <iframe width="100%" height="970px" src="https://www.linoalvarez.org/calendario2" frameborder="0"></iframe>
    </div> <!-- page -->

    <div class="page y24 wide pb0" id="y2324">
        <!-- <h1>page</h1> -->
        <iframe width="100%" height="970px" src="https://www.linoalvarez.org/calendario3" frameborder="0"></iframe>
    </div> <!-- page -->

    <div class="page wide"></div>
<?php include('my-rosters.php') ?>


</body>
</html>





