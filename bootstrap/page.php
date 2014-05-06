<?php

//start session and connect to the database
session_start();

$db = new database();



//get number of rows in the table associated with userID
$result = $db->select('count(*)', 'contact', $_SESSION['userID']);


$r = msql_fetch_row($result);

$numrows = $r[o];


// number of rows to show per page
$rowsperpage = 3;

//determine total pages
$totalpages = ceil($numrows/$rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

//get the contacts from the database

$result = $result = $db->select('fname, lname', 'contact', $_SESSION['userID'] . '=userID');

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if


// if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;


// get the info from the db
$result = $db->select('fname, lname', 'contact', $_SESSION['userID'] . "=userID");




// while there are rows to be fetched...
while ($list = mysql_fetch_assoc($result)) {
   // echo data
  echo  "<tr><td>" . $row['fName'] . " " . $row['lName'] . "</td></tr>";
}
//end while


  
  





?>
