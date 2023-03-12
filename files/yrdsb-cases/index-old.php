<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>YRDSB Case Count</title>
  <meta property="og:description" content="" />
  <meta property="og:image" content="" />
  <meta property="og:image:secure_url" content="" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:site_name" content="" />
  <meta property="og:title" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"/>
  <link href="css/custom.css" rel="stylesheet">
  <script>
    window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-52542587-4');
  </script>
</head>
<body>

  <div class="container">

    <h1>Cases in York Region</h1>

<?php

require('simple_html_dom.php');

// Create DOM from URL or file
$html = file_get_html('http://www.yrdsb.ca/schools/school-reopening/Pages/COVID19-Advisory-Board.aspx');

// Find all images
foreach($html->find('.ms-rteTable-1') as $element)
       echo $element

?> 

</div>






<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>


	$(".ms-rteTable-1").addClass("rwd-table");
  
  // Replace inner th's with td's
  $('.ms-rteTable-1 .ms-rteTableOddRow-1 th, .ms-rteTable-1 .ms-rteTableEvenRow-1 th').replaceWith(function(){
    return $("<td />", {html: $(this).html()});
});
  
  // Remove old garbage header row
  $( ".ms-rteTableHeaderRow-1" ).remove();

  // Remove old garbage header row
  $( ".ms-rteTable-1" ).addClass('table table-striped table-bordered');

 
 // Create new proper header
 // function insert() { 
 //         $('<thead>A Computer Science portal' 
 //            + ' for geeks</thead>').append($('.ms-rteTable-1'));          
 //        }


$( ".ms-rteTable-1" ).prepend( "<thead><tr><th>School Name</th><th>Confirmed Cases</th><th>Closed Classrooms</th><th>Closure Status</th></tr></thead>" );


$( ".ms-rteTableHeaderRow-1 th" ).wrap( "<tr></tr>" );


	$("*").removeAttr("style");
	$("*").removeAttr("colspan");
	$("*").removeAttr("rowspan");
	$("*").removeAttr("width");
	$("*").removeAttr("height");


	// $(".ms-rteTable-1 tr:nth-child(2)").attr( "data-label", "School Name" );
	// $(".ms-rteTable-1 tr:nth-child(3)").attr( "data-label", "Confirmed Cases" );
	// $(".ms-rteTable-1 tr:nth-child(4)").attr( "data-label", "Closed Classrooms" );
	// $(".ms-rteTable-1 tr:nth-child(5)").attr( "data-label", "Closure Status" );

</script>



<script>
    $(document).ready( function () {
    $('.ms-rteTable-1').DataTable( {
        "order": [[ 1, "desc" ]],
        "lengthMenu": [[25, 50, -1], [25, 50, "All"]],

    } );
  });
</script>

</body>

</html>