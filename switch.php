<?php
function drawCalendar($month, $year) {
$daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
$numberOfDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$numberOfMonth= date('w',strtotime("$year-$month-01"));

echo "<h2>" .date("FY", strtotime("$year-$month-01")). "</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";

foreach ($daysOfWeek as $day) {
  echo "<th>$day</th>";
}

echo "</tr><tr>";

for ($i = 0; $i < $firstDayOfMonth; $i++) {
  echo "<td></td>";
}
