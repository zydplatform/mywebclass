<!DOCTYPE html>
<html>
<head>
	<title>Using data tables</title>
	<link rel="stylesheet" type="text/css" href="datatables/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatables/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatables/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="datatables/css/datepicker.css">
</head>
<body>
	<table id="example" class="table table-striped table-bordered" style="width: 100%;">
		<thead><tr><th>Name</th>
			<th>Batch</th><th>Course</th><th>Semester</th></tr></thead>
			
			<tfoot><tr><th>name of student</th><th>student batch</th><th>student course</th><th>current semester</th></tr></tfoot>
	</table>
<!-- scripts -->
<script type="text/javascript">
	$(document).ready(function(){
		var t=$('#example').DataTable();
		var counter=1;
		$('#addRow').on('click',function(){
			t.row.add([counter +'.1',counter +'.2',counter +'.3',counter +'.4',counter +'.5']).draw(false);
			counter++;
		});
		// automatically add the first row
		$('#addRow').click();
	});
</script>
<script type="text/javascript" src="datatables/js/bootstrap-datepicker1.js"></script>
<script type="text/javascript" src="datatables/js/bootstrap.min.js"></script>
<script type="text/javascript" src="datatables/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="datatables/js/jquery-1.102.min.js"></script>
<script type="text/javascript" src="datatables/js/jquery.dataTables.min.js"></script>
</body>
</html>