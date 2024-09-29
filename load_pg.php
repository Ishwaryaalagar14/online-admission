<?php 
include 'connection.php';

$dept = $_GET['dept'];

$sql=    "SELECT
        applications.application_no,
        personaldetails.applicant_name AS name,
        ssc_details.mark AS ssc_mark,
        hsc_details.mark AS hsc_mark,
        ug_details.cgpa,
        personaldetails.mobilenumber AS contact,
        applications.date,
        applications.status
    FROM
        applications
    INNER JOIN personaldetails ON personaldetails.application_no = applications.application_no
    INNER JOIN ssc_details ON ssc_details.application_no = applications.application_no
    INNER JOIN hsc_details ON hsc_details.application_no = applications.application_no
    INNER JOIN ug_details ON ug_details.application_no = applications.application_no
    WHERE
        applications.branch = '$dept';";

$result = mysqli_query($conn,$sql);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {

	$rows[] = $row;
}

$output = ['data' => $rows];

// Convert the array to JSON format
$jsonOutput = json_encode($output, JSON_PRETTY_PRINT);


echo $jsonOutput;

?>
