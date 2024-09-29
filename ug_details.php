
<?php

include 'connection.php';

// $sql = 'SELECT applications.application_no,personaldetails.applicant_name as name,ssc_details.mark as ssc_mark,hsc_details.mark as hsc_mark,ug_details.cgpa,personaldetails.mobilenumber as contact,applications.date,applications.status FROM applications INNER JOIN personaldetails on personaldetails.application_no=applications.application_no INNER JOIN ssc_details on ssc_details.application_no = applications.application_no INNER JOIN hsc_details on hsc_details.application_no = applications.application_no INNER JOIN ug_details on ug_details.application_no=applications.application_no;';

$sql = 'SELECT applications.application_no , personaldetails.applicant_name as name,ssc_details.mark as ssc_mark,hsc_details.mark as hsc_mark,personaldetails.mobilenumber as contact,applications.date,applications.status FROM applications INNER JOIN personaldetails on applications.application_no = personaldetails.application_no INNER JOIN ssc_details on applications.application_no = ssc_details.application_no INNER JOIN hsc_details on applications.application_no = hsc_details.application_no;';

$result = mysqli_query($conn,$sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UG Applications</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css ">
	
	<script type="text/javascript" src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
	<link href="https://cdn.datatables.net/v/dt/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/date-1.5.1/fh-3.4.0/r-2.5.0/sb-1.6.0/sp-2.2.0/datatables.min.css" rel="stylesheet">

	<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap.min.js"></script>
	 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/date-1.5.1/fh-3.4.0/r-2.5.0/sb-1.6.0/sp-2.2.0/datatables.min.js"></script>
	</head>
<body>
<div class="d-flex">
<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Department</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto hf">
      <li class="nav-item">
        <a href="#" data-target="BSC_CS" class="nav-link active target-btn" aria-current="page">
         Computer Science
        </a>
      </li>
      <li>
        <a href="#" data-target="BSC_IT" class="nav-link link-body-emphasis target-btn">
        Information Technology
        </a>
      </li>
      <li>
        <a href="#" data-target="BCA" class="nav-link link-body-emphasis target-btn">
        Computer Application
        </a>
      </li>
      <li>
        <a href="#" data-target="BSC_CDF" class="nav-link link-body-emphasis target-btn">
        Costume Fashion & Design
        </a>
      </li>
      <li>
        <a href="#" data-target="BSC_Electronics" class="nav-link link-body-emphasis target-btn">
        Electronics
        </a>
      </li>
      <li>
        <a href="#" data-target="BA_English" class="nav-link link-body-emphasis target-btn">
        English
        </a>
      </li>
      <li>
        <a href="#" data-target="BBA" class="nav-link link-body-emphasis target-btn">
        Business Administration
        </a>
      </li>
      <li>
        <a href="#" data-target="BCom" class="nav-link link-body-emphasis target-btn">
       Commerce
        </a>
      </li>
      <li>
        <a href="#" data-target="BCom_PA" class="nav-link link-body-emphasis target-btn">
        Professional Accounting
        </a>
      </li>
      <li>
        <a href="#" data-target="BCom_BA" class="nav-link link-body-emphasis target-btn">
        Business Analytics
        </a>
      </li>
      
    </ul>
    <hr>
  </div>

<div class="flex-grow-1">
        <!-- Your main content goes here -->
        <div class="container">
            <!-- Example: Page title -->
            <h1 class="mt-2">UG Applications</h1>
            <table id="myTable" class="table table-striped">
</table>
<button id="lol" class="btn btn-info">click me</button>
        </div>
    </div>
	</div>

<script type="text/javascript">
		let table = new DataTable('#myTable', {
    ajax: 'load_ug.php?dept=BSc_CS',
    responsive:true,
    columns: [
       { data: 'application_no', title: 'ID' },
                { data: 'name', title: 'Name' },
                { data: 'ssc_mark', title: 'SSC Mark' },
                { data: 'hsc_mark', title: 'HSC Mark' },
                // { data: 'cgpa', title: 'CGPA' },
                { data: 'contact', title: 'Contact' },
                { data: 'date', title: 'Date' },
                { data: 'status', title: 'Status' }
                // Add more columns as needed
    ]
});


	// let targetBtn = document.querySelectorAll('.target-btn');
	// targetBtn.addEventListener('click',()=>{
	// 	table.ajax.url("load_pg.php?dept=M.Com");
	// 	table.ajax.reload(); 
	// });

	$(".target-btn").click((el) => {
    const targetValue = $(el.target).data('target');

    		    $(".target-btn").removeClass("active");
    		    $(".target-btn").addClass("link-body-emphasis");
			    
			    $(el.target).addClass("active");
			    $(el.target).removeClass("link-body-emphasis");

    
    		table.ajax.url("load_ug.php?dept="+targetValue);
	 		table.ajax.reload();

		});	
	function reload() {
		table.ajax.reload(); 
	}
</script>

</body>
</html>