<?php 
 $type = $_SESSION['type'];
?>
<aside class="main-sidebar">
    
    <section class="sidebar">
      
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">REPORTS</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		
        <li class="header">MANAGE</li>
		    <?php
          if ($type == 1){


        ?>
        
        <li class="nav-item"><a href="pds.php"><i class="fa fa-file-text""></i><span>Recruitment Process</span></a></li>
        <li><a href="department.php"><i class="fa fa-calendar"></i> <span>Department</span></a></li>
        

        <?php
        }
        ?>
      	
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  
            <li><a href="employee.php"><i class="fa fa-circle"></i> Employee List</a></li>
			<li><a href="attendance.php"><i class="fa fa-circle"></i> <span>Attendance</span></a></li>
			<li><a href="schedule_employee.php"><i class="fa fa-circle"></i> <span>Schedule</span></a></li>
			<li><a href="deduction.php"><i class="fa fa-circle"></i> Deductions</a></li>
            <li><a href="overtime.php"><i class="fa fa-circle"></i> Overtime</a></li>
            <li><a href="cashadvance.php"><i class="fa fa-circle"></i> Cash Advance</a></li>
			<li><a href="bonus.php"><i class="fa fa-circle"></i> Bonus</a></li>
			
          </ul>
        </li>
		<?php
          if ($type == 1){


        ?>
        
		<li><a href="position.php"><i class="fa fa-suitcase"></i> Positions</a></li>
		<li><a href="leave.php"><i class="fa fa-tasks"></i> Leave </a></li>
        <li><a href="send.php"><i class="fa fa-envelope"></i> Send Message </a></li>
		
		  <?php
        }
        ?>
		
        <li class="header">PRINTABLES</li>
        <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Payroll</span></a></li>
      <?php
          if ($type == 1){


        ?>

        <li><a href="schedule.php"><i class="fa fa-clock-o"></i> Schedules</a></li>
         <?php
        }
        ?>
      </ul>
    </section>
 
  </aside>