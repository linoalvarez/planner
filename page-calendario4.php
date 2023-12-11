<style>

    ::selection {
        color: gold;
        background: tomato;
    }

    :root {
        --color1: darkblue;
        --color2: #ed7b4acc;
    }

    strong {
        /* opacity: .6; */
        color: #666;
    }

    .anyo {
        position: absolute;
        transform: rotate(-90deg) translate(-13rem , -36rem);
        font-size: 11rem;
        /* opacity: .25; */
        text-shadow: -1px -2px 0px #ffffffcc, -6px -5px 5px #ed7b4acc;
        color: c7c7c7;
    }

    .big-wrapper {
        width: 52.5rem;
        /* border: 1px solid; */
        padding: 1rem;
        margin: auto;
        margin-right: 4rem;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        zoom: .83;
    }

    .important-day {
        color: #ed7b4a;
        /* font-weight: 900; */
    }    

    .wrapper {
        /* zoom: .95; */
        /* margin: auto; */
        /* width: max-content; */
        display: grid;
        grid-template-columns: repeat(4, max-content);
        gap: 0 3.1rem;
    }

    .wrapper1 {
        /* margin-bottom: 1rem; */
    }

    .wrapper2 {
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
        text-align: right
    }    

    th {
        color: #0006;
    }

    td {
        color: #000c;
    }

    .important-days {
        font-family: verdana;
        /* padding-top: 2rem; */
        font-size: .85rem;
        display: grid;
        grid-template-columns: repeat(6, max-content);
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(6,1fr);
        gap: 0 1rem;
        margin: 1rem 0;
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
        /* padding-left: 0.5rem; */
    }

    .important-days li b {
        color: #000b;
        color: var(--color2);
        font-weight: 100;
        /* padding-left: 1rem; */
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
    $months = range(9, 12);
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
    $months = range(1, 8);
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

$importantDays = [
        '2023-08-29' =>  'Day 1',
        '2023-09-04' =>  'Labor Day',
        '2023-10-09' =>  'Indi Peoples\' Day',
        '2023-11-10' =>  'Veterans\' Day',
        '2023-11-23' =>  'Thanksgiving',
        '2023-11-24' =>  'Thanksgiving',
        '2023-12-18' =>  'December Break ',
        '2023-12-19' =>  'December Break ',
        '2023-12-20' =>  'December Break ',
        '2023-12-21' =>  'December Break ',
        '2023-12-22' =>  'December Break ',
        '2023-12-25' =>  'December Break ',
        '2023-12-26' =>  'December Break ',
        '2023-12-27' =>  'December Break ',
        '2023-12-28' =>  'December Break ',
        '2023-12-29' =>  'December Break ',
        '2024-01-01' =>  'December Break',
        '2024-01-15' =>  'MLK\'s Day ',
        '2024-02-19' =>  'Presidents Day ',
        '2024-02-20' =>  'February Break ',
        '2024-02-21' =>  'February Break ',
        '2024-02-22' =>  'February Break ',
        '2024-02-23' =>  'February Break ',
        '2024-04-15' =>  'Patriots\' Day ',
        '2024-04-16' =>  'April Break ',
        '2024-04-17' =>  'April Break ',
        '2024-04-18' =>  'April Break ',
        '2024-04-19' =>  'April Break ',
        '2024-05-27' =>  'Memorial Day ',
        '2024-06-19' =>  'Juneteenth ',
];

echo "<div class='big-wrapper'>";

echo "<h1 class='anyo'>2023/24</h1>";

echo "<div class='wrapper wrapper1'>";

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
echo "<div class='wrapper wrapper2'>";


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