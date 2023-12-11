<style>
  .wrapper {
    zoom: .85;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin: auto;
    width: max-content;
    display: grid;
    grid-template-columns: repeat(4, max-content);
    gap: 0 2rem;
  }

  .wide {
    grid-column: 1/-1;
    color: red;
  }

  .tar {
    text-align: right
  }
  
  th {
    font-size: .79rem;
    font-weight: 100;
    opacity: .5;
  }
  td {
    text-align: right
  }
  
</style>

<?php
function generateYearlyCalendar($year, $importantDays = []) {
    $months = range(1, 12);
    $calendar = [];

    foreach ($months as $month) {
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $monthName = date('F', mktime(0, 0, 0, $month, 1, $year));

        $calendar[$monthName] = [];

        for ($day = 1; $day <= $daysInMonth; $day++) {
            $dateString = sprintf('%04d-%02d-%02d', $year, $month, $day);
            $isImportant = in_array($dateString, $importantDays);
            $calendar[$monthName][$day] = [
                'date' => $dateString,
                'isImportant' => $isImportant
            ];
        }
    }

    return $calendar;
}

$importantDays = [
    '2023-08-28',
    '2024-06-13'
];
echo "<div class='wrapper wide'>";
$anyo=2023; $anyoMasUno = $anyo + 1;
echo "<h1 class='wide tar'>" . $anyo . "</h1>";
$yearlyCalendar = generateYearlyCalendar($anyo, $importantDays);
// Example usage: Loop through the generated calendar
foreach ($yearlyCalendar as $monthName => $days) {
  echo "<month>";  
  echo "<h2 class='tar'>$monthName</h2>";
    echo "<table>";
    echo "<tr><th>S</th><th>M</th><th>T</th><th>W</th><th>R</th><th>F</th><th>S</th></tr>";
    echo "<tr>";
    $firstDay = reset($days)['date'];
    $firstDayOfWeek = date('w', strtotime($firstDay));

    // Add empty cells for days before the first day of the month
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        echo "<td></td>";
    }

    foreach ($days as $day => $data) {
        $date = $data['date'];
        $isImportant = $data['isImportant'];
        $dayOfWeek = date('w', strtotime($date));
        $style = $isImportant ? 'style="border-radius: 5px;box-shadow: 0 0 0 1px #333;font-weight: 900; color: red;"' : '';

        echo "<td $style>$day</td>";

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



  
?>
