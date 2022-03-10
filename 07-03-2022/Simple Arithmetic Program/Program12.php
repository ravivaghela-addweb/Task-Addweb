<?php

       echo "Program 12 : Calculate the Gross Salary when Basic Salary is given.<br/>
       The allowances HRA(%) ,DA (%), PF and Medical are also given.<br/>
       Add the HRA and DA in the Basic Salary but deduct PF and Medical from the Salary.<br/>";

       echo "===========================<br/>";

       $basic = 25000;
       echo "Basic Salary = $basic";

       $HRA = $basic * 0.2;
       echo "<br/>HRA = $HRA";

       $DA = $basic * 0.4;
       echo "<br/>DA = $DA";

      $PF = $basic * 0.15;
       echo "<br/>PF = $PF";

      $medical = $basic * 0.1;
       echo "<br/>Medical = $medical";

       echo "<br/>===========================";

       $gross = $basic + $HRA + $DA;
       echo "<br/>Gross Salary = $gross";

       $salary = $gross - ($PF + $medical);
       echo "<br/>Salary = $salary";


?>