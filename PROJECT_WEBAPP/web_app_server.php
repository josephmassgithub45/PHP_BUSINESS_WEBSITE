<?php


//PERSONAL DETAILS

$fullname = $_POST["full_name"];
$birthdate = $_POST["birth_date"];
$personalemail = $_POST["mail"];
$mobilenumber = $_POST["mobile_number"];
$gender = $_POST["gender"];
$nationality = $_POST["nationality"];

//IDENTIFICATION DETAILS

$idtype = $_POST["id_type"]; 
$idnumber = $_POST["id_number"]; 
$issuedauthority = $_POST["issued_authority"];
$issuedstate = $_POST["issued_state"];
$issueddate = $_POST["issued_date"];
$expirydate = $_POST["expiry_date"];

//ORGANIZATIONAL DETAILS

$organizationname = $_POST["organization_name"];
$headofficeaddress = $_POST["head_office_address"];
$registrationnumber = $_POST["registration_number"];
$dateofregistration  = $_POST["date_of_registration"];

//ADDRESS DETAILS

$addresstype = $_POST["address_type"];
$statename = $_POST["state_name"];
$district = $_POST["district_name"];
$blocknumber = $_POST["block_number"];
$wordnumber = $_POST["word_number"];
 
//FAMILY DETAILS

$fathername = $_POST["father_name"];
$mothername = $_POST["mother_name"];
$grandfathername = $_POST["grandfather_name"];
$spousename = $_POST["spouse_name"];
$fatherinlaw = $_POST["father_in_law"];
$motherinlaw = $_POST["mother_in_law"];

//STATUS

$NNGO = $_POST["fav_language1"];
$NNNGO = $_POST["fav_language2"];

//NAME AND ADDRESS OF COUNTRY OF ORIGIN (If International)

$countryname = $_POST["country_name"];
$statename = $_POST["state_name"];
$address = $_POST["address"];
$mobilenumber = $_POST["mobile_number"];
$email = $_POST["email"];
$statenumberofsub = $_POST["state_number_of_sub_office"];

//"No. of Vehicles | Motor Bikes | Sea Transport <br><br>"

$vehiclenumber = $_POST["vehicles"];
$motorbikenumber = $_POST["motor_bike"];
$seatransport = $_POST["sea_transport"];

// FINANCIAL STATUS


$income = $_POST["income"];
$account = $_POST["account"];
$taxliabilities = $_POST["tax_liabilities"];


//ADDITIONAL SECTION

$projectimplemented = $_POST["project_implemented"];
$selectfile = $_POST["myfile"];
$pdistrict = $_POST["p_district"];
$pchiefdom = $_POST["p_chiefdom"];
$ptown = $_POST["p_town"];
$ward = $_POST["p_ward"];
$activities = $_POST["p_activities"];


//DONORS RECEIVED FOR LAST (12) MONTHS 


 $donor_name= $_POST["donor_name"];
 $amount= $_POST["donor_amount"];
 $project_fund= $_POST["p_fund"];
 $donorname= $_POST["donorname"];
 $damount= $_POST["donoramount"];
 $projectfund = $_POST["projectfund"];


// DONOR FUNDS EXPECTED IN TE LAST (12) MONTHS


$nameofdonor = $_POST["d_name"];
$amount_entered = $_POST["d_amount"];
$projects = $_POST["d_pro"];


// BENEFICIARIES OF PROJECTS IMPEMENTED LAST 12 MONTHS


$categories = $_POST["categories"];
$location = $_POST["location"];
$bchiefdom = $_POST["chiefdom" ];
$btownorvillage = $_POST["town"];
$bward = $_POST["ward"];
$estimatednumber = $_POST["esbeneficiaries"];




echo "PERSONAL DETAILS <br><br>";


echo "(1)  The full name is :----->>>>>" , "<span style='color:red;'>{$fullname}</span> <br>";
echo "(2)  The Date of birth is :----->>>>>" , "<span style='color:red;'>{$birthdate}</span> <br>";
echo "(3)  The Personal Email is :----->>>>>" , "<span style='color:red;'>{$personalemail}</span> <br>";
echo "(4)  The Mobile number is :----->>>>>" , "<span style='color:red;'>{$mobilenumber}</span> <br>";
echo "(5)  The Gender is :----->>>>>" , "<span style='color:red;'>{$gender}</span> <br>";
echo "(6)  The Nationality is :----->>>>>" , "<span style='color:red;'>{$nationality}</span> <br><br>";


echo "IDENTIFICATION DETAILS <br><br>";


echo "(7)  The ID Type is :----->>>>>" , "<span style='color:red;'>{$idtype}</span> <br>";
echo "(8)  The ID Number is :----->>>>>" , "<span style='color:red;'>{$idnumber}</span> <br>";
echo "(9)  The Issued Authority is :----->>>>>" , "<span style='color:red;'>{$issuedauthority}</span> <br>";
echo "(10) The Issued State is :----->>>>>" , "<span style='color:red;'>{$issuedstate}</span> <br>";
echo "(11) The ID Issued Date is :----->>>>>" , "<span style='color:red;'>{$issueddate}</span> <br>";
echo "(12) The Expiry Date is :----->>>>>" , "<span style='color:red;'>{$expirydate}</span> <br><br>";


echo "ORGANIZATIONAL DETAILS <br><br>";


echo "(13) The Organization Name is :----->>>>>" , "<span style='color:red;'>{$organizationname}</span> <br>";
echo "(14) The Head Office Address is :----->>>>>" , "<span style='color:red;'>{$headofficeaddress}</span> <br>";
echo "(15) The ID Registration Number is :----->>>>>" , "<span style='color:red;'>{$registrationnumber}</span> <br>";
echo "(16) The Date of Registration is :----->>>>>" , "<span style='color:red;'>{$dateofregistration}</span> <br><br>";


echo "ADDRESS DETAILS <br><br>";


echo "(17) The Address Type is :----->>>>>" , "<span style='color:red;'>{$addresstype}</span> <br>";
echo "(18) The State Name is :----->>>>>" , "<span style='color:red;'>{$statename}</span> <br>";
echo "(19) The District is :----->>>>>" , "<span style='color:red;'>{$district}</span> <br>";
echo "(20) The Block Numbers are :----->>>>>" , "<span style='color:red;'>{$blocknumber}</span> <br>";
echo "(21) The Word Numbers are :----->>>>>" , "<span style='color:red;'>{$wordnumber}</span> <br><br>";


echo "FAMILY DETAILS <br><br>";


echo "(22) The Father's Name is :----->>>>>" , "<span style='color:red;'>{$fathername}</span> <br>";
echo "(23) The Mother's Name is :----->>>>>" , "<span style='color:red;'>{$mothername}</span> <br>";
echo "(24) The Grand-Father's Name is :----->>>>>" , "<span style='color:red;'>{$grandfathername}</span> <br>";
echo "(25) The Spouse Name is :----->>>>>" , "<span style='color:red;'>{$spousename}</span> <br>";
echo "(26) The Father in-Law's name is :----->>>>>" , "<span style='color:red;'>{$fatherinlaw}</span> <br>";
echo "(27) The Mother in-Law's name is :----->>>>>" , "<span style='color:red;'>{$motherinlaw}</span> <br><br>";


echo "STATUS <br><br>";


echo "(28) National Non-Governmental Organization :----->>>>>" , "<span style='color:red;'>{$NNGO}</span> <br>";
echo "(29) National Non-Non-Governmental Organization :----->>>>>" , "<span style='color:red;'>{$NNNGO}</span> <br><br>";


echo "NAME AND ADDRESS OF COUNTRY OF ORIGIN (If International) <br><br>";


echo "(30) The Country's Name is :----->>>>>" , "<span style='color:red;'>{$countryname}</span> <br>";
echo "(31) The State / City's Name is :----->>>>>" , "<span style='color:red;'>{$statename}</span> <br>";
echo "(32) The Address is :----->>>>>" , "<span style='color:red;'>{$address}</span> <br>";
echo "(33) The Mobile Number is :----->>>>>" , "<span style='color:red;'>{$mobilenumber}</span> <br>";
echo "(34) The Email is :----->>>>>" , "<span style='color:red;'>{$email}</span> <br>";
echo "(35) The State Number Of Sub-Office(if any) is :----->>>>>" , "<span style='color:red;'>{$statenumberofsub}</span> <br><br>";


echo "No. of Vehicles | Motor Bikes | Sea Transport <br><br>";


echo "(36) The Vehicle Number is :----->>>>>" , "<span style='color:red;'>{$vehiclenumber}</span> <br>";
echo "(37) The Motor-Bike Number is :----->>>>>" , "<span style='color:red;'>{$motorbikenumber}</span> <br>";
echo "(38) The Sea Transport is :----->>>>>" , "<span style='color:red;'>{$seatransport}</span> <br><br>";


echo "FINANCIAL STATUS <br><br>";


echo "(39) The Income Generated is :----->>>>>" , "<span style='color:red;'>{$income}</span> <br>";
echo "(40) Is your accunt up to date :----->>>>>" , "<span style='color:red;'>{$account}</span> <br>";
echo "(41) Is your tax paid to the Government is :----->>>>>" , "<span style='color:red;'>{$taxliabilities}</span> <br><br>";



echo "ADDITIONAL SECTION<br><br>";


echo "(42) The Project Implemented is :----->>>>>" , "<span style='color:red;'>{$projectimplemented}</span> <br>";
echo "(43) The File Selected is :----->>>>>" , "<span style='color:red;'>{$selectfile}</span> <br>";
echo "(44) The Project District is :----->>>>>" , "<span style='color:red;'>{$pdistrict}</span> <br>";
echo "(45) The Project Chiefdom is :----->>>>>" , "<span style='color:red;'>{$pchiefdom}</span> <br>";
echo "(46) The Project's Town / Village are :----->>>>>" , "<span style='color:red;'>{$ptown}</span> <br>";
echo "(47) The ward is :----->>>>>" , "<span style='color:red;'>{$ward}</span> <br>";
echo "(48) The activity was :----->>>>>" , "<span style='color:red;'>{$activities}</span> <br><br>";



echo "DONORS RECEIVED FOR LAST 12 MONTHS <br><br>";

echo "(49)  The First Entry Of Donor Name is :----->>>>>" , "<span style='color:red;'>{$donor_name}</span> <br>";
echo "(50)  The First Entry Of Amount is :----->>>>>" , "<span style='color:red;'>{$amount}</span> <br>";
echo "(51)  The First Entry Of Project Fund is :----->>>>>" , "<span style='color:red;'>{$project_fund}</span> <br>";
echo "(52)  The Second Entry of Donor name is :----->>>>>" , "<span style='color:red;'>{$donorname}</span> <br>";
echo "(53)  The Second Entry of Amount is :----->>>>>" , "<span style='color:red;'>{$damount}</span> <br>";
echo "(54)  The Second Entry of Project Fund is :----->>>>>" , "<span style='color:red;'>{$projectfund}</span> <br><br>";


echo "DONOR FUNDS EXPECTED IN TE LAST 12 MONTHS <br><br>";

echo "(55)  The Donor name is :----->>>>>" , "<span style='color:red;'>{$nameofdonor}</span> <br>";
echo "(56)  The Amount is :----->>>>>" , "<span style='color:red;'>{$amount_entered}</span> <br>";
echo "(57)  The Project is :----->>>>>" , "<span style='color:red;'>{$projects}</span> <br><br>";


echo "BENEFICIARIES OF PROJECTS IMPEMENTED LAST 12 MONTHS <br><br>";


echo "(58)  The Category is :----->>>>>" , "<span style='color:red;'>{$categories}</span> <br>";
echo "(59)  The Location is :----->>>>>" , "<span style='color:red;'>{$location}</span> <br>";
echo "(60)  The chiefdom is :----->>>>>" , "<span style='color:red;'>{$bchiefdom}</span> <br>";
echo "(61)  The Town / Village is :----->>>>>" , "<span style='color:red;'>{$btownorvillage}</span> <br>";
echo "(62)  The Ward is :----->>>>>" , "<span style='color:red;'>{$bward}</span> <br>";
echo "(63)  The Estimated Number Of Beneficiaries is :----->>>>>" , "<span style='color:red;'>{$estimatednumber}</span> <br><br>";




?>







