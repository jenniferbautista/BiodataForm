<?php  

$name    =  $_POST['user'];  
$PresentAddress  =   $_POST['PA1'];  
$PermanentAddress  =   $_POST['PA2'];  
$DateofBirth = $_POST['DB'];
$Religion = $_POST['Religion'];
$CivilStatus = $_POST['CS'];
$Age = $_POST['Age'];
$Citizenship = $_POST['Citizenship'];
$PlaceofBirth = $_POST['PB'];
$Height = $_POST['Height'];
$NameofFather = $_POST['NF'];
$NameofMother = $_POST['NM'];
$Address = $_POST['Address'];
$LanguagesorDialectsSpoken = $_POST['LDS'];
$PersontobenotifiedInCaseifEmergency = $_POST['PE'] ;

$Elementary = $_POST['Elementary'];
$YearGraduate = $_POST['YD1'];
$HighSchool = $_POST['HS'];
$YearGraduate = $_POST['YD2'];
$College = $_POST['College'];
$YearGraduate = $_POST['YD3'];
$Course = $_POST['Course'];
$SpecialSkills = $_POST['SS'];



echo
 "Name: $name <br />  Present Addres: $PresentAddress <br /> Permanent Address: $PresentAddress <br/>  Date of Birth: $DateofBirth 
<br /> Religion: $Religion <br /> Civil Status: $CivilStatus <br /> Age: $Age <br />  Citizenship: $Citizenship <br /> Place of Birth: $PlaceofBirth <br />
Height: $Height <br /> Name of Father: $NameofFather <br /> Name of Mother: $NameofMother <br /> Address: $Address <br /> Languages or Dialects Spoken: $LanguagesorDialectsSpoken <br /> Person to be notified In Case if Emergency: $PersontobenotifiedInCaseifEmergency <br /> 

Elementary: $Elementary <br /> 
Year Graduate: $YearGraduate <br /> High School: $HighSchool <br /> Year Graduate: $YearGraduate <br /> College: $College <br/ > Year Graduate: $YearGraduate <br /> Course: $Course <br /> Special Skills: $SpecialSkills ";  
   
?>  