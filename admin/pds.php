<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  
  <div class="content-wrapper">
    
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Personal Data Sheet </li>
      </ol>
		<br><br>
    <form action="pds_add.php" method="POST">
      <input type = submit>
		<section class="contentSection right clearfix">
		<div class="displaySuccess"></div>
		<link rel="stylesheet" href="css.css">
		<div class="container-fluid">
			<div class="row-fluid header">
				<h2 class="center maintitle">PERSONAL DATA SHEET</h2></br>
				<div class ="">
				<p class="pull-right">CS ID No. _______________</p>
			</div>
	
			</br>
 
    <h5 class="title"><i>PERSONAL INFORMATION</i></h5>
    <table class="table"
      <tbody>
        <tr>
          <td class="tbl">SURNAME* </td><td><input type="text" name="lastname"></td><BR>
		  
        </tr>
		
        <tr>
          <td class="tbl">FIRSTNAME*</td><td><input type="text" name="firstname"></td>

        </tr>
		
        <tr>
          <td class="tbl">MIDDLENAME</td><td><input type="text" name="MIDDLENAME"></td>
		
		  
          <td class="tbl">NAME EXTENSION</td><td><input type="text" name="NAME EXTENSION"></td>
		  
        </tr>
        <tr>
		
          <td class="tbl">DATE OF BIRTH</td><td><input type="date" name="birthday"></td>
		
          <td class="tbl" rowspan="2">RESIDENTIAL ADDRESS</td><td><input type="text" name="address1"></td>
         
		  
        </tr>
        <tr>
          <td class="tbl">PLACE OF BIRTH</td><td><input type="text" name="PLACE OF BIRTH"></td>
		  <td></td>
        </tr>
        <tr>
          <td class="tbl">SEX*</td>
		   <td class="answer">
		   <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
		  
		  
		  
         </td>
          <td class="tbl">ZIPCODE</td><td><input type="text" name="ZIPCODE"></td>
          
        </tr>
        <tr>
          <td class="tbl">CIVIL STATUS</td>
		  
		  <td class="answer">
		   <input type="checkbox" value="" name="b41"/>  Single
            <input type="checkbox" value="" name="b41"/> Married <br>
			<input type="checkbox" value="" name="b41"/> Annulled
            <input type="checkbox" value="" name="b41"/> Widowed<br>
			<input type="checkbox" value="" name="b41"/> Separated
            <input type="checkbox" value="" name="b41"/> Others,Specify  ___________
          
          <td class="tbl">TELEPHONE NO.*</td><td><input type="NUMBER" name="contact"></td>
          
        </tr>
        <tr>
          <td class="tbl">CITIZENSHIP</td><td><input type="text" name="CITIZENSHIP"></td>
         
          <td class="tbl" rowspan="2">PERMANENT ADDRESS*</td><td><input type="text" name="address2"></td>
		 </form>
        </tr>
        <tr>
          <td class="tbl">HEIGHT(m)</td><td><input type="number" name="height"></td>
         
        </tr>
        <tr>
          <td class="tbl">WEIGHT(kg)</td><td><input type="number" name="weight"></td>
        
          <td class="tbl">ZIPCODE</td><td><input type="number" name="zipcode"></td>
          
        </tr>
        <tr>
          <td class="tbl">BLOOD TYPE</td><td><input type="text" name="blood type"></td>
          <td class="tbl">TELEPHONE NO.</td><td><input type="number" name="telephone no."></td>
          
        </tr>
        <tr>
          <td class="tbl">GSIS NO.</td><td><input type="number" name="gsis no."></td>
          
          <td class="tbl">E-MAIL ADDRESS</td><td><input type="text" name="E-MAIL ADDRESS"></td>
          
        </tr>
        <tr>
          <td class="tbl">PAG-IBIG ID NO.</td><td><input type="number" name="PAG-IBIG ID NO."></td>
         
          <td class="tbl">CELLPHONE NO.</td><td><input type="number" name="CELLPHONE NO."></td>
          
        </tr>
        <tr>
          <td class="tbl">PHILHEALTH NO.</td><td><input type="number" name="PHILHEALTH NO."></td>
          
          <td class="tbl">AGENCY EMPLOYEE NO.</td><td><input type="number" name="AGENCY EMPLOYEE NO."></td>
         
        </tr>
        <tr>
          <td class="tbl">SSS NO.</td><td><input type="number" name="SSS NO."></td>
        
          <td class="tbl">T.I.N.</td><td><input type="number" name="T.I.N."></td>
          
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW2-->
  <div class="row-fluid body">
    <h5 class="title"><i>FAMILY BACKGROUND</i></h5>
    <table class="table"></br>
      <tbody>
        <tr>
          <td class="tbl">SPOUSE'S SURNAME</td><td><input type="text" name="SPOUSE'S NAME"></td>
		  
          <td class="list">NAME OF CHILD</td><td><input type="text" name="NAME OF CHILD"></td>
          <td class="list">DATE OF BIRTH</td><td><input type="text" name="DATE OF BIRTH"></td>
        </tr>
        <tr>
          <td class="tbl">FIRST SURNAME</td><td><input type="text" name="FIRST SURNAME"></td>
          
        </tr>
        <tr>
          <td class="tbl">MIDDLE SURNAME</td><td><input type="text" name="MIDDLE NAME"></td>
          
        </tr>
        <tr>
          <td class="tbl">OCCUPATION</td><td><input type="text" name="OCCUPATION"></td>
   
        </tr>
        <tr>
          <td class="tbl">EMPLOYER NAME</td><td><input type="text" name="EMPLOYER NAME"></td>
          
        </tr>
        <tr>
          <td class="tbl">BUSINESS ADDRESS</td><td><input type="text" name="BUSINESS ADDRESS"></td>
          
        </tr>
        <tr>
          <td class="tbl">TELEPHONE NO.</td><td><input type="NUMBER" name="TELEPHONE NO."></td>
          
        </tr>
        <tr>
          <td class="tbl">FATHER'S SURNAME</td><td><input type="text" name="FATHER'S SURNAME"></td>
          
        </tr>
        <tr>
          <td class="tbl">FIRST NAME</td><td><input type="text" name="FIRST NAME"></td>
          
        </tr>
        <tr>
          <td class="tbl">MIDDLE NAME</td><td><input type="text" name="MIDDLE NAME"></td>
         
        </tr>
        <tr>
          <td class="tbl">MOTHER'S MAIDEN SURNAME</td><td><input type="text" name="MOTHER'S NAME"></td>
         
        </tr>
        <tr>
           <td class="tbl">FIRST NAME</td><td><input type="text" name="FIRST NAME"></td>
          
        </tr>
        <tr>
           <td class="tbl">MIDDLE NAME</td><td><input type="text" name="MIDDLE NAME"></td>
          
        </tr>  
      </td body>
    </table>
  </div> 
  <!--ROW3--> 
  <div class="row- fluid body">
    <h5 class="title"><i>EDUCATIONAL BACKGROUND</i></h5>
    <table class="table"></br>
      <tbody>  
        <tr> 
          <td class="tbl center" rowspan="2">LEVEL</td>
		   
          <td class="list center" rowspan="2">NAME OF SCHOOL</td>
		 
          <td class="tbl center" rowspan="2">DECREE COURSE</td>
          <td class="tbl center" rowspan="2">YEAR GRADUATED</td>
          <td class="tbl center" rowspan="2">HIGHEST GRADE/LEVEL EARNED</td>
          <td class="tbl center" colspan="2">INCLUSIVE DATES OF ATTENDANCE</td>
          <td class="tbl center" rowspan="2">SCHOLARSHIP/HONORS RECEIVED</td>
        </TR>
        <tr>
          <td class="tbl center">FROM</td>
          <td class="tbl center">TO</td>
        </tr>
        <tr>
          <td class="tbl">ELEMENTARY</td><td><input type="text" name="ELEMENTARY"></td> 
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">SECONDARY</td><td><input type="text" name="SECONDARY"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">VOCATIONAL</td><td><input type="text" name="VOCATIONAL"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">COLLEGE</td><td><input type="text" name="COLLEGE"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="tbl">GRADUATE STUDIES</td><td><input type="text" name="GRADUATE STUDIES"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW4-->
  <div class="row-fluid body">
    <h5 class="title"><i>CIVIL SERVICE ELIGIBILITY</i></h5>
    <table class="table"></br>
      <tbody>
        <tr>
          <td class="list center" rowspan="2">CAREER SERVICE</td>
          <td class="tbl center" rowspan="2">RATING</td>
          <td class="tbl center" rowspan="2">DATE OF EXAMINATION</td>
          <td class="list center" rowspan="2">PLACE OF EXAMINATION</td>
          <td class="tbl center" colspan="2">LICENSE</td>
        </tr>
        <tr>
          <td class="tbl center">NUMBER</td>
          <td class="tbl center">DATE OF RELEASE</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW5-->
  <div class="row-fluid body">
    <h5 class="title"><i>WORK EXPERIENCE</i></h5>
    <table class="table"></br>
      <tbody>
        <tr>
          <td class="tbl center" colspan="2">INCLUSIVE DATES</td>
          <td class="list center" rowspan="2">POSITION TITLE</td>
          <td class="tbl center" rowspan="2">COMPANY</td>
          <td class="tbl center" rowspan="2">MONTHLY SALARY</td>
          <td class="tbl center" rowspan="2">SAL.GRADE & STEPS INCREMENT</td>
          <td class="tbl center" rowspan="2">STATUS OF APPOINTMENT</td>
          <td class="tbl center" rowspan="2">GOVERNMENT SERVICE</td>
        </tr>
        <tr>
          <td class="tbl center">FROM</td>
          <td class="tbl center">TO</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW6-->
  <div class="row-fluid body">
    <h5 class="title"><i>VOLUNTARY WORK</i></h5>
    <table class="table"></br>
      <tbody>
        <tr>
          <td class="list center" rowspan="2">NAME & ADDRESS OF ORGANIZATION</td>
          <td class="tbl center" colspan="2">INCLUSIVE DATES</td>
          <td class="tbl center" rowspan="2">NUMBER OF HOURS</td>
          <td class="tbl center" rowspan="2">NATURE OF WORK</td>
        </tr>
        <tr>
          <td class="tbl center">FROM</tD>
          <td class="tbl center">TO</tD>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW7-->
  <div class="row-fluid body">
    <h5 class="title"><i>TRAINING PROGRAMS</i></h5>
    <table class="table"></br>
      <tbody>
        <tr>
          <td class="list center" rowspan="2">TITLE OF SEMINAR</td>
          <td class="tbl center" colspan="2">INCLUSIVE DATES</td>
          <td class="tbl center" rowspan="2">NUMBER OF HOURS</td>
          <td class="tbl center" rowspan="2">CONDUCTED BY</td>
        </tr>
        <tr>
          <td class="tbl center">FROM</tD>
          <td class="tbl center">TO</tD>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW8-->
  <div class="row-fluid body">
    <h5 class="title"><i>OTHER INFORMATION</i></h5>
    <table class="table"></br>
      <tbody>
        <tr>
          <td class="center tbl">SPECIAL SKILLS/HOBBIES</td>
          <td class="center tbl">NON-ACADEMIC RECOGNITION</td>
          <td class="center tbl">MEMBERSHIP IN ASSOCIATION OR ORGANIZATION</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!--ROW9-->
  <div class="row-fluid body">
    <h5 class="title2"><i></i></h5>
    <table class="table"></br>
      <tbody>
        <tr>
          <td class="question">
            <p>36. Are you related by consanguinity or affinity to any of the following: </p><br>
            <p>a. Within the third degree (for National Government Employees):
              appointing authority, recommending authority, chief of office/bureau/department
              or person who has immediate supervision over you in the Office, Bureau or Department
              where you will be appointed?</p><br>
            <p>b. Within fourth degree (for Local Government Employees):
              appointing authority or recommending authority where you will be appointed? </p>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a36"/> YES
            <input type="radio" value="" name="a36"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
            <br>
            <input type="radio" value="" name="b36"/> YES
            <input type="radio" value="" name="b36"/> NO
            <br><br>
            <p>If YES, give details: <br>
            ___________________________<br>
            ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question">
            <p>37.</p><br>
            <p>a. Have you ever been formally charged?</p><br><br><br>
            <p>b. Have you ever been guilty of any administrative offense? </p>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a37"/> YES
            <input type="radio" value="" name="a37"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
            <br>
            <input type="radio" value="" name="b37"/> YES
            <input type="radio" value="" name="b37"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question">
            <p>38.</p><br>
            <p>a. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</p><br>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a38"/> YES
            <input type="radio" value="" name="a38"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question">
            <p>39.</p><br>
            <p>a. Have you ever been separated from the service in any of the following modes:<br>
              resignation, retirement, dropped from the rolls, dismissal, termination, and of term, finished contract, AWOL, in the public or private sector?</p>  
              <br>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a39"/> YES
            <input type="radio" value="" name="a39"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question">
            <p>40.</p><br>
            <p>a. Have you ever been a candidate in a national or local election (except Barangay Election)?</p><br>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a40"/> YES
            <input type="radio" value="" name="a40"/> NO
            <br><br>
            <p>If YES, give details: <br>
              ___________________________<br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question">
            <p>41. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000   (RA 8972), please answer the following items?</p><br>
            <p>a. Are you a member of any Indegenous group?</p><br>
            <p>b. Are you a differently-abled?</p><br>
            <p>c. Are you a solo parent?</p><br>
          </td>
          <td class="answer">
            <input type="radio" value="" name="a41"/> YES
            <input type="radio" value="" name="a41"/> NO
            <br>
            <p>If YES, give details: <br>
              ___________________________</p>
            <br>
            <input type="radio" value="" name="b41"/> YES
            <input type="radio" value="" name="b41"/> NO
            <br>
            <p>If YES, give details: <br>
              ___________________________</p> <br>
            <input type="radio" value="" name="c41"/> YES
            <input type="radio" value="" name="c41"/> NO
            <br>
            <p>If YES, give details: <br>
              ___________________________</p>
          </td>
        </tR>
        <tr>
          <td class="question" colspan="2">
            <p>42. REFERENCES (Person not related by consanguinity of affinity to applicant/appointee)</p></br>
          </td>
        </tR>
      </tbody>
    </table>
  </div>
  <!--ROW10-->
  <div class="row-fluid body">
    <h5 class="title2"><i></i></h5>
    <table class="table"></br>
      <tbody>
        <tr>
          <td class="list center">Name</td>
          <td class="list center">Address</tD>
          <td class="tbl center">Tel. No.</td>
          <td rowspan="5" class="tbl center passportPic">
            <p>ID picture taken within the last 6 months (3.5cm x 4.5cm)</p>
          </td>
        </tr>
        <tr>
          <td></br></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></br></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></br></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class="question" colspan="3">
            <p>43. I declare under oath that the Personal Data Sheet has been accomplished by me, and is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines<br><br>
              I also authorize the agency head / authorize representative to verify / validate the contents stated herein. I trust that this information shall remain confidential</p>
          </td>
        </tR>
      </tbody>
    </table>
  </div>
  <!--ROW11-->
  <div class="row-fluid body">
    <h5 class="title2"><i></i></h5>
    <table class="table"></br>
      <tbody>
        <tr>
          <td></br><!--COMMUNITY TAX CERTIFICATE NO HERE--></td>
          <td rowspan="3"><!--Signature--></td>
          <td rowspan="6" class="tbl center">RIGHT THUMBMARK</td>
        </tr>
        <tr>
          <td class="auth list center">COMMUNITY TAX CERTIFICATE NO.</td>
        </tr>
        <tr>
          <td></br><!--ISSUED AT--></td>
        </tr>
        <tr>
          <td class="auth list center">ISSUED AT</td>
          <td class="auth list center">SIGNATURE</td>
        </tr>
        <tr>
          <td></br><!--ISSUED ON--></td>
          <td></br><!--DATE ACCOMPLISHED--></td>
        </tr>
        <tr>
          <td class="auth list center">ISSUED ON</td>
          <td class="auth list center">DATE ACCOMPLISHED</td>
        </tr>
		
      </tbody>
    </table>
  </div>
</div>
</br>
<script type="text/javascript" src="../js/global.js"></script>
</body>
</html>