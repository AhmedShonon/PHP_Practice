<?
$new_csv = fopen('/report.csv', 'w');
fputcsv($new_csv,$row);
fclose($new_csv);

header("content-type:text/csv");
header("content-disposition:attachment;filename=report.csv");
readfile("/report.csv");
?>