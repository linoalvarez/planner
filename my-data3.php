<?php

$owner = "Alvarez" ;
$schoolYear = "2023/24" ;
$ownerBaseRoom = "211" ;

date_default_timezone_set('America/New_York');

// start / end 2023 - 2024 School Year
$date = '2023-08-29';
$end_date = '2024-06-24';
$dateDeVerdad = $date;

/*       ACTUAL          */

$warningTerm1 = '2023-10-02';
$warningTerm2 = '2023-12-06';
$warningTerm3 = '2024-03-01';
$warningTerm4 = '2024-05-10';

$end1         = '2023-11-06';
$end2         = '2024-01-29';
$end3         = '2024-04-03';
$end4         = '2024-06-13';
    
    
$dayHeaders = array('&nbsp;', 'Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7', 'Day 8');

// $periods = array ('p1' => '07:55 - 08:40', 'p2' => '08:44 - 09:29', 'p3' => '09:33 - 10:18', 'p4' => '10:22 - 11:07', 'p5' => '11:11 - 12:18', 'p6' => '12:22 - 13:07', 'p7' => '13:11 - 13:56', 'p8' => '14:00 - 14:45');

$periods = array ( '07:55<br>&nbsp;&nbsp;&nbsp;08:40', '08:44<br>&nbsp;&nbsp;&nbsp;09:29', '09:33<br>&nbsp;&nbsp;&nbsp;10:18', '10:22<br>&nbsp;&nbsp;&nbsp;11:07', '11:11<br>&nbsp;&nbsp;&nbsp;12:18', '12:22<br>&nbsp;&nbsp;&nbsp;13:07', '13:11<br>&nbsp;&nbsp;&nbsp;13:56', '14:00<br>&nbsp;&nbsp;&nbsp;14:45');

$day1 = array( 'A1' => '***','B1' => '08', 'C1' => '06', 'D1' => '08', 'E1' => 'SH', 'F1' => '***','G1' => '08', 'H1' => 'DS', );
$day2 = array( 'B2' => '***','C2' => '06', 'D2' => '08', 'E2' => '08', 'F2' => '08', 'G2' => '***','H2' => 'DS', 'A2' => '08', );
$day3 = array( 'C1' => '06', 'D1' => '08', 'E1' => 'SH', 'F1' => '***','G1' => '08', 'H1' => 'DS', 'A1' => '***','B1' => '08', );
$day4 = array( 'D2' => '08', 'E2' => '08', 'F2' => '08', 'G2' => '***','H2' => 'DS', 'A2' => '08', 'B2' => '***','C2' => '06', );
$day5 = array( 'E1' => 'SH', 'F1' => '***','G1' => '08', 'H1' => 'DS', 'A1' => '***','B1' => '08', 'C1' => '06', 'D1' => '08', );
$day6 = array( 'F2' => '08', 'G2' => '***','H2' => 'DS', 'A2' => '08', 'B2' => '***','C2' => '06', 'D2' => '08', 'E2' => '08', );
$day7 = array( 'G1' => '08', 'H1' => 'DS', 'A1' => '***','B1' => '08', 'C1' => '06', 'D1' => '08', 'E1' => 'SH', 'F1' => '***',);
$day8 = array( 'H2' => 'DS', 'A2' => '08', 'B2' => '***','C2' => '06', 'D2' => '08', 'E2' => '08', 'F2' => '08', 'G2' => '***',);

$day1rooms = array( 'A1' => '   ', 'B1' => '211', 'C1' => '213', 'D1' => '211', 'E1' => '801', 'F1' => '   ', 'G1' => '211', 'H1' => '   ', );
$day2rooms = array( 'B2' => '   ', 'C2' => '213', 'D2' => '211', 'E2' => '211', 'F2' => '211', 'G2' => '   ', 'H2' => '   ', 'A2' => '211', );
$day3rooms = array( 'C1' => '213', 'D1' => '211', 'E1' => '801', 'F1' => '   ', 'G1' => '211', 'H1' => '   ', 'A1' => '   ', 'B1' => '211', );
$day4rooms = array( 'D2' => '211', 'E2' => '211', 'F2' => '211', 'G2' => '   ', 'H2' => '   ', 'A2' => '211', 'B2' => '   ', 'C2' => '213', );
$day5rooms = array( 'E1' => '801', 'F1' => '   ', 'G1' => '211', 'H1' => '   ', 'A1' => '   ', 'B1' => '211', 'C1' => '213', 'D1' => '211', );
$day6rooms = array( 'F2' => '211', 'G2' => '   ', 'H2' => '   ', 'A2' => '211', 'B2' => '   ', 'C2' => '213', 'D2' => '211', 'E2' => '211', );
$day7rooms = array( 'G1' => '211', 'H1' => '   ', 'A1' => '   ', 'B1' => '211', 'C1' => '213', 'D1' => '211', 'E1' => '801', 'F1' => '   ', );
$day8rooms = array( 'H2' => '   ', 'A2' => '211', 'B2' => '   ', 'C2' => '213', 'D2' => '211', 'E2' => '211', 'F2' => '211', 'G2' => '   ', );

$day1counts = array( 'A1' => '  ', 'B1' => '15', 'C1' => '26', 'D1' => '17', 'E1' => '26', 'F1' => '  ', 'G1' => '16', 'H1' => '  ', );
$day2counts = array( 'B2' => '  ', 'C2' => '26', 'D2' => '25', 'E2' => '25', 'F2' => '18', 'G2' => '  ', 'H2' => '  ', 'A2' => '26', );
$day3counts = array( 'C1' => '26', 'D1' => '17', 'E1' => '26', 'F1' => '  ', 'G1' => '16', 'H1' => '  ', 'A1' => '  ', 'B1' => '15', );
$day4counts = array( 'D2' => '25', 'E2' => '25', 'F2' => '18', 'G2' => '  ', 'H2' => '  ', 'A2' => '26', 'B2' => '  ', 'C2' => '26', );
$day5counts = array( 'E1' => '26', 'F1' => '  ', 'G1' => '16', 'H1' => '  ', 'A1' => '  ', 'B1' => '15', 'C1' => '26', 'D1' => '17', );
$day6counts = array( 'F2' => '18', 'G2' => '  ', 'H2' => '  ', 'A2' => '26', 'B2' => '  ', 'C2' => '26', 'D2' => '25', 'E2' => '25', );
$day7counts = array( 'G1' => '16', 'H1' => '  ', 'A1' => '  ', 'B1' => '15', 'C1' => '26', 'D1' => '17', 'E1' => '26', 'F1' => '  ', );
$day8counts = array( 'H2' => '  ', 'A2' => '26', 'B2' => '  ', 'C2' => '26', 'D2' => '25', 'E2' => '25', 'F2' => '18', 'G2' => '  ', );

$dutyPost1 = 'Traffic Duty (Post 12)'; $dutyDay1 = 1; 
$dutyPost2 = 'Traffic Duty (Post 12)'; $dutyDay2 = 7; 
$dutyPost3 = 'Traffic Duty (Post 12)'; $dutyDay3 = 8; 

$lectivoPeroSpecial = array(
    '2023-08-29' => 'Day_1',
    '2023-09-18' => 'Half_Day (1) PD',
   $warningTerm1 => 'Term 1 Warnings',
    '2023-10-23' => 'Half_Day (2) PD',
           $end1 => 'Term 1 End',
    '2023-11-13' => 'Term 1 Grades Due',
    '2023-11-16' => 'Half_Day (3) PD',
    '2023-11-22' => 'Half_Day (4)  Thanksgiving',
   $warningTerm2 => 'Term 2 Warnings',
    '2023-12-15' => 'Half_Day (5) Dec Break',
           $end2 => 'Term 2 End',
    '2024-01-31' => 'Half_Day (6) PD',
    '2024-02-05' => 'Term 2 Grades Due',
//  '2024-02-07' => 'LAS50',
   $warningTerm3 => 'Term 3 Warnings',
    '2024-03-13' => 'Half_Day (7) PD',
           $end3 => 'Term 3 End',
    '2024-04-10' => 'Term 3 Grades Due',
 // '2024-03-25' => 'MCAS  ELA_01 (*)',
 // '2024-04-26' => 'MCAS  ELA_02 (*)',
    '2024-05-03' => 'Half_Day (8) Prom',
 // '2024-04-24' => 'MCAS  STE_01 (*)',
 // '2024-05-23' => 'MCAS  STE_02 (*)',
   $warningTerm4 => 'Term 4 Warnings',
 // '2024-04-23' => 'MCAS Math_01 (*)',
 // '2024-05-24' => 'MCAS Math_02 (*)',
    '2024-06-10' => 'Term 4 Grades Due (*)',
           $end4 => 'Term 4 End',
);

$noSchoolNew = array( 
    '2023-09-04' =>  'Labor Day',
    '2023-10-09' =>  'Indigenous\' Peoples Day',
    '2023-11-10' =>  'Veterans\' Day',
    '2023-11-23' =>  'Thanksgiving Break',
    '2023-11-24' =>  'Thanksgiving Break',
    '2023-12-18' =>  'December Break Start',
    '2023-12-19' =>  'December Break',
    '2023-12-20' =>  'December Break',
    '2023-12-21' =>  'December Break',
    '2023-12-22' =>  'December Break',
    '2023-12-25' =>  'December Break',
    '2023-12-26' =>  'December Break',
    '2023-12-27' =>  'December Break',
    '2023-12-28' =>  'December Break',
    '2023-12-29' =>  'December Break',
    '2024-01-01' =>  'December Break End',
    '2024-01-15' =>  'MLK\'s Day',
    '2024-02-19' =>  'February Break Start',
    '2024-02-20' =>  'February Break',
    '2024-02-21' =>  'February Break',
    '2024-02-22' =>  'February Break',
    '2024-02-23' =>  'February Break End',
    '2024-04-15' =>  'April Break Start',
    '2024-04-16' =>  'April Break',
    '2024-04-17' =>  'April Break',
    '2024-04-18' =>  'April Break',
    '2024-04-19' =>  'April Break End',
    '2024-05-27' =>  'Memorial Day',
    '2024-06-19' =>  'Juneteenth',
);

$noSchoolNewTest = array( 
    '2023-09-04' ,
    '2023-10-09' ,
    '2023-11-10' ,
    '2023-11-23' ,
    '2023-11-24' ,
    '2023-12-18' ,
    '2023-12-19' ,
    '2023-12-20' ,
    '2023-12-21' ,
    '2023-12-22' ,
    '2023-12-25' ,
    '2023-12-26' ,
    '2023-12-27' ,
    '2023-12-28' ,
    '2023-12-29' ,
    '2024-01-01' ,
    '2024-01-15' ,
    '2024-02-19' ,
    '2024-02-20' ,
    '2024-02-21' ,
    '2024-02-22' ,
    '2024-02-23' ,
    '2024-04-15' ,
    '2024-04-16' ,
    '2024-04-17' ,
    '2024-04-18' ,
    '2024-04-19' ,
    '2024-05-27' ,
    '2024-06-19' ,
);


// dia internacinal de ....


$dia_internacional_de = array(
    '2024-09-05' => 'International Day of Charity',
    '2024-09-07' => 'International Day of Clean Air for Blue Skies',
    '2024-09-08' => 'International Literacy Day',
    '2024-09-09' => 'International Day to Protect Education from Attack',
    '2024-09-10' => 'Suicide Prevention Awareness Day',
    '2024-09-12' => 'United Nations Day for South-South Cooperation',
    '2024-09-15' => 'International Day of Democracy',
    '2024-09-16' => 'International Day for the Preservation of the Ozone Layer',
    '2024-09-17' => 'World Patient Safety Day',
    '2024-09-18' => 'International Equal Pay Day',
    '2024-09-21' => 'International Day of Peace',
    '2024-09-23' => 'International Day of Sign Language',
    '2024-09-26' => 'International Day for the Total Elimination of Nuclear Weapons',
    '2024-09-27' => 'World Tourism Day',
    '2024-09-28' => 'International Day for Universal Access to Information',
    '2024-09-29' => 'International Day of Awareness of Food Loss and Waste',
    '2024-09-29' => 'World Maritime Day',
    '2024-09-30' => 'International Translation Day',
);



?>