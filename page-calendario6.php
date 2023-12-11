<?php include("my-style.php"); ?>

<style>


    :root {
        --color1: darkblue;
        --color2: #ccc;
        --color2: #ed7b4acc;
    }

    strong {
        /* opacity: .6; */
        color: #666;
    }

    .anyo {
        position: absolute;
        transform: rotate(-90deg) translate(-12rem , -33rem);
        font-size: 11rem;
        /* opacity: .25; */
        text-shadow: -1px -2px 0px #ffffffcc, -6px -5px 5px var(--color2);
        color: c7c7c7;
        
    }


    .big-wrapper-cal {
        width: 52.5rem;
        /* border: 1px solid; */
        padding: 0rem 1rem 0rem;
        /* margin: auto; */
        margin-left: 17rem;
        margin-right: 0rem;
        font-family: 'Archivo';
        zoom: .83;
    }

    .important-day {
        color: var(--color2);
        font-weight: 900;
    }    

    .wrapper-cal {
        /* zoom: .95; */
        margin: auto;
        /* width: max-content; */
        display: grid;
        grid-template-columns: repeat(4, max-content);
        gap: 0 3.1rem;
    }

    .wrapper-cal1 {
        /* margin-bottom: 1rem; */
    }

    .wrapper-cal2 {
        /* margin-bottom: 1rem; */
    }

    table {
        width: 100%;
    }

    h1 {
        text-align: right;
        /* margin-bottom: 0.2rem; */
    }

    h2 {
        text-align: right;
        margin-bottom: 0.2rem;
        font-size: 1.2em;
        color: var(--color2);
    }

    .wide {
        grid-column: 1/-1;
    }

    .tar {
        text-align: right
    }

    th {
        font-size: .679rem;
        font-weight: 100;
        opacity: .5;
    }
    td {
        text-align: right;
        /* box-shadow: 0 0 1px 1px #ccc1; */
        width: 2.2ch;
        /* padding: 0.1rem; */
        
    }    



    th {
        color: #0006;
    }

    td {
        color: #000c;
    }

    .important-days {
        font-family: 'Archivo';
        font-size: .85rem;
        display: grid;
        /* grid-template-columns: repeat(6, max-content); */
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(7,1fr);
        gap: 0 1.6rem;
        margin: 1.5rem 0 1rem ;
        grid-auto-flow: column;
    }

    li {
        list-style: none;
        margin-bottom: 0.3rem;
    }

    .important-days li span {
        font-size: .85em;
        color: #000b;
        font-weight: 900;
    }

    .important-days li b {
        color: #000b;
        color: var(--color2);
        font-weight: 100;
        font-family: 'archivo narrow';
    }

 
    
    /* 
    */
    .important-days>li:nth-of-type(43), 
    .important-days>li:nth-of-type(42), 
    .important-days>li:nth-of-type(41), 
    .important-days>li:nth-of-type(34), 
    .important-days>li:nth-of-type(33),
    .important-days>li:nth-of-type(32),
    .important-days>li:nth-of-type(25),
    .important-days>li:nth-of-type(24),
    .important-days>li:nth-of-type(23),
    .important-days>li:nth-of-type(22),
    .important-days>li:nth-of-type(21),
    .important-days>li:nth-of-type(20),
    .important-days>li:nth-of-type(19),
    .important-days>li:nth-of-type(18),
    .important-days>li:nth-of-type(17) {
        display: none;
    }


</style>

<?php

class CalendarDay {
    private $date;
    private $importantDay;
    
    public function __construct($date, $importantDay = null) {
        $this->date = $date;
        $this->importantDay = $importantDay;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function getImportantDay() {
        return $this->importantDay;
    }
    
    public function hasImportantDay() {
        return !empty($this->importantDay);
    }
}

function generateYearlyCalendar($year, $importantDays = []) {
    $months = range(8, 11);
    $calendar = [];
    
    foreach ($months as $month) {
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $monthName = date('F', mktime(0, 0, 0, $month, 1, $year)) . " " . date('Y', mktime(0, 0, 0, $month, 1, $year));
        
        $calendar[$monthName] = [];
        
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $dateString = sprintf('%04d-%02d-%02d', $year, $month, $day);
            $importantDay = isset($importantDays[$dateString]) ? $importantDays[$dateString] : null;
            $dayObj = new CalendarDay($dateString, $importantDay);
            $calendar[$monthName][$day] = $dayObj;
        }
    }
    
    return $calendar;
}

function generateYearlyCalendar2($year, $importantDays = []) {
    $months = range(1, 7);
    $calendar = [];
    
    foreach ($months as $month) {
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $monthName = date('F', mktime(0, 0, 0, $month, 1, $year)) . " " . date('Y', mktime(0, 0, 0, $month, 1, $year));
        
        $calendar[$monthName] = [];
        
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $dateString = sprintf('%04d-%02d-%02d', $year, $month, $day);
            $importantDay = isset($importantDays[$dateString]) ? $importantDays[$dateString] : null;
            $dayObj = new CalendarDay($dateString, $importantDay);
            $calendar[$monthName][$day] = $dayObj;
        }
    }
    
    return $calendar;
}


function generateYearlyCalendar0($year, $importantDays = []) {
    $months = range(1, 1);
    $calendar = [];
    
    foreach ($months as $month) {
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $monthName = date('F', mktime(0, 0, 0, $month, 1, $year)) . " " . date('Y', mktime(0, 0, 0, $month, 1, $year));
        
        $calendar[$monthName] = [];
        
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $dateString = sprintf('%04d-%02d-%02d', $year, $month, $day);
            $importantDay = isset($importantDays[$dateString]) ? $importantDays[$dateString] : null;
            $dayObj = new CalendarDay($dateString, $importantDay);
            $calendar[$monthName][$day] = $dayObj;
        }
    }
    
    return $calendar;
}

function generateYearlyCalendar1($year, $importantDays = []) {
    $months = range(12, 12);
    $calendar = [];
    
    foreach ($months as $month) {
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $monthName = date('F', mktime(0, 0, 0, $month, 1, $year)) . " " . date('Y', mktime(0, 0, 0, $month, 1, $year));
        
        $calendar[$monthName] = [];
        
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $dateString = sprintf('%04d-%02d-%02d', $year, $month, $day);
            $importantDay = isset($importantDays[$dateString]) ? $importantDays[$dateString] : null;
            $dayObj = new CalendarDay($dateString, $importantDay);
            $calendar[$monthName][$day] = $dayObj;
        }
    }
    
    return $calendar;
}

    $warningTerm1 = '2023-10-02';
    $warningTerm2 = '2023-12-06';
    $warningTerm3 = '2024-03-01';
    $warningTerm4 = '2024-05-10';
    
    $end1         = '2023-11-06';
    $end2         = '2024-01-29';
    $end3         = '2024-04-03';
    $end4         = '2024-06-13';

    
    
    $importantDays = [
        '2023-08-29' =>  'Day 1',
        '2023-09-04' =>  'Labor Day',
        '2023-09-18' => 'Half_Day (1) PD',
        $warningTerm1 => 'Term 1 Warnings',
        '2023-10-09' =>  'Indi Peoples\' Day',
        '2023-10-23' => 'Half_Day (2) PD',
        $end1 =>  'Term 1 End',
        '2023-11-10' =>  'Veterans\' Day',
        '2023-11-13' => 'Term 1 Grades Due',
        '2023-11-16' => 'Half_Day (3) PD',
        '2023-11-22' => 'Half_Day (4) TG',
        '2023-11-23' =>  'Thanksgiving',
        '2023-11-24' =>  'Thanksgiving',
        $warningTerm2 => 'Term 2 Warnings',
        '2023-12-15' => 'Half_Day (5) ',
        '2023-12-18' =>  'Winter Break Start ',
        '2023-12-19' =>  'Winter Break ',
        '2023-12-20' =>  'Winter Break ',
        '2023-12-21' =>  'Winter Break ',
        '2023-12-22' =>  'Winter Break ',
        '2023-12-25' =>  'Winter Break ',
        '2023-12-26' =>  'Winter Break ',
        '2023-12-27' =>  'Winter Break ',
        '2023-12-28' =>  'Winter Break ',
        '2023-12-29' =>  'Winter Break ',
        '2024-01-01' =>  'Winter Break End',
        '2024-01-15' =>  'MLK\'s Day ',
        $end2 =>  'Term 2 End',
        '2024-01-31' => 'Half_Day (6) PD',
        '2024-02-05' => 'Term 2 Grades Due',
        '2024-02-19' =>  'February Break Start',
        '2024-02-20' =>  'February Break ',
        '2024-02-21' =>  'February Break ',
        '2024-02-22' =>  'February Break ',
        '2024-02-23' =>  'February Break End',
        '2024-03-13' => 'Half_Day (7) PD',
        $warningTerm3 => 'Term 3 Warnings',
        $end3 =>  'Term 3 End',
        '2024-04-10' => 'Term 3 Grades Due',
        '2024-04-15' =>  'Spring Break Start',
        '2024-04-16' =>  'Spring Break ',
        '2024-04-17' =>  'Spring Break ',
        '2024-04-18' =>  'Spring Break ',
        '2024-04-19' =>  'Spring Break End',
        '2024-05-03' => 'Half_Day (8) Prom',
        $warningTerm4 => 'Term 4 Warnings',
        '2024-05-27' =>  'Memorial Day ',
        $end4 =>  'Term 4 End',
        '2024-06-14' => 'Term 4 Grades Due (*)',
        '2024-06-19' =>  'Juneteenth ',
        '2024-03-25' => 'MCAS  ELA_01 (*)',
        '2024-04-26' => 'MCAS  ELA_02 (*)',
        '2024-04-23' => 'MCAS Math_01 (*)',
        '2024-05-24' => 'MCAS Math_02 (*)',
        '2024-04-24' => 'MCAS  STE_01 (*)',
        '2024-05-23' => 'MCAS  STE_02 (*)',
        '2024-02-07' => 'LA50 ',



];



echo "<div class='big-wrapper-cal'>";

echo "<h1 class='anyo'>2023/24</h1>";

echo "<div class='wrapper-cal wrapper-cal1'>";

$yearlyCalendar = generateYearlyCalendar(2023, $importantDays);
// Example usage: Loop through the generated calendar
foreach ($yearlyCalendar as $monthName => $days) {
    echo "<month>";
    echo "<h2>$monthName</h2>";
    echo "<table>";
    echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";
    echo "<tr>";
    $firstDay = reset($days)->getDate();
    $firstDayOfWeek = date('w', strtotime($firstDay));
    
    // Add empty cells for days before the first day of the month
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        echo "<td></td>";
    }
    
    foreach ($days as $day => $data) {
        $date = $data->getDate();
        $importantDay = $data->getImportantDay();
        $dayOfWeek = date('w', strtotime($date));
        $class = $data->hasImportantDay() ? 'important-day' : '';
        
        echo "<td class=\"$class\">$day";
        echo "</td>";
        
        // Start a new row after Saturday
        if ($dayOfWeek == 6) {
            echo "</tr>";
            if ($day < count($days)) {
                echo "<tr>";
            }
        }
    }
    
    echo "</table>";
    echo "</month>";
}

?>
</div>
    <div class="important-days wide">
        
        <?php foreach($importantDays as $key => $value) { echo "<li><strong>" . date('M d, Y', strtotime($key)) . "</strong>" . "<br><b>$value</b></li>"; } ?>
        
    </div>
<?php

echo "<div class='wrapper-cal wrapper-cal2'>";

$yearlyCalendar1 = generateYearlyCalendar1(2023, $importantDays);
// Example usage: Loop through the generated calendar
foreach ($yearlyCalendar1 as $monthName => $days) {
    echo "<month>";
    echo "<h2>$monthName</h2>";
    echo "<table>";
    echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";
    echo "<tr>";
    $firstDay = reset($days)->getDate();
    $firstDayOfWeek = date('w', strtotime($firstDay));
    
    // Add empty cells for days before the first day of the month
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        echo "<td></td>";
    }
    
    foreach ($days as $day => $data) {
        $date = $data->getDate();
        $importantDay = $data->getImportantDay();
        $dayOfWeek = date('w', strtotime($date));
        $class = $data->hasImportantDay() ? 'important-day' : '';
        
        echo "<td class=\"$class\">$day";
        echo "</td>";
        
        // Start a new row after Saturday
        if ($dayOfWeek == 6) {
            echo "</tr>";
            if ($day < count($days)) {
                echo "<tr>";
            }
        }
    }
    
    echo "</table>";
    echo "</month>";
}


$yearlyCalendar2 = generateYearlyCalendar2(2024, $importantDays);
// Example usage: Loop through the generated calendar
foreach ($yearlyCalendar2 as $monthName => $days) {
    echo "<month>";
    echo "<h2>$monthName</h2>";
    echo "<table>";
    echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";
    echo "<tr>";
    $firstDay = reset($days)->getDate();
    $firstDayOfWeek = date('w', strtotime($firstDay));
    
    // Add empty cells for days before the first day of the month
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        echo "<td></td>";
    }
    
    foreach ($days as $day => $data) {
        $date = $data->getDate();
        $importantDay = $data->getImportantDay();
        $dayOfWeek = date('w', strtotime($date));
        $class = $data->hasImportantDay() ? 'important-day' : '';
        
        echo "<td class=\"$class\">$day";
        echo "</td>";
        
        // Start a new row after Saturday
        if ($dayOfWeek == 6) {
            echo "</tr>";
            if ($day < count($days)) {
                echo "<tr>";
            }
        }
    }
    
    echo "</table>";
    echo "</month>";
}

    
echo "</div>";