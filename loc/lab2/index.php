<?php
require_once("UserClass.php");
require_once("EmployeeClass.php");
?>
<!doctype html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="container px-10 mx-auto">
    <div class="flex justify-start">
        <div class="text-xl font-bold">User INFO</div>
    </div>
    <?php
        $vanthien = new User('NguyenVanThien','thiennv@google.com');
    ?>
    <div class="grid grid-cols-2 gap-1 w-1/3" action="#" method="post">
        <div>User ID</div>
        <div>
            <?php echo $vanthien->getId(); ?>
        </div>
        <div>Username</div>
        <div>
            <?php echo $vanthien->getUsername(); ?>
        </div>
        <div>Status</div>
        <div>
            <?php echo $vanthien->getStatus() == 1 ? "Activated" : "Blocked"; ?>
        </div>
        <div>Email</div>
        <div>
            <?php echo $vanthien->getEmail(); ?>
        </div>
    </div>

    <div class="flex justify-start">
        <div class="text-xl font-bold">More User INFO</div>
    </div>
    <?php
        $alex = new User('Alexander Mabel','Alex@google.com');
        $alex->setStatus(0);
    ?>
    <div class="grid grid-cols-2 gap-1 w-1/3" action="#" method="post">
        <div>User ID</div>
        <div>
            <?php echo $alex->getId(); ?>
        </div>
        <div>Username</div>
        <div>
            <?php echo $alex->getUsername(); ?>
        </div>
        <div>Status</div>
        <div>
            <?php echo $alex->getStatus() == 1 ? "Activated" : "Blocked"; ?>
        </div>
        <div>Email</div>
        <div>
            <?php echo $alex->getEmail(); ?>
        </div>
    </div>


    <div class="flex justify-start">
        <div class="text-xl font-bold">More OOP - Person</div>
    </div>
    <?php
        $person = new Person('Nguyen A','079200001111');
    ?>
    <div class="grid grid-cols-2 gap-1 w-1/3" action="#" method="post">
        <div>Person Nation ID</div>
        <div>
            <?php echo $person->getId(); ?>
        </div>
        <div>Person Name</div>
        <div>
            <?php echo $person->getName(); ?>
        </div>
        <!-- <div>Status</div>
        <div>
            <?php echo $alex->getStatus() == 1 ? "Activated" : "Blocked"; ?>
        </div>
        <div>Email</div>
        <div>
            <?php echo $alex->getEmail(); ?>
        </div> -->
    </div>

    <div class="flex justify-start">
        <div class="text-xl font-bold">More OOP - Employee</div>
    </div>
    <?php
        $employeeB = new Employee('Nguyen B','079200001112','R&D');
    ?>
    <div class="grid grid-cols-2 gap-1 w-1/3" action="#" method="post">
        <div>Employee Nation ID</div>
        <div>
            <?php echo $employeeB->getId(); ?>
        </div>
        <div>Employee Name</div>
        <div>
            <?php echo $employeeB->getName(); ?>
        </div>
        <div>Employee ID</div>
        <div>
            <?php echo $employeeB->getEmployeeID(); ?>
        </div>
        <div>Employee Department</div>
        <div>
            <?php echo $employeeB->getDepartment(); ?>
        </div>
    </div>

    <div class="flex justify-start">
        <div class="text-xl font-bold">More OOP - More Employee</div>
    </div>
    <?php
        $employeeC = new Employee('Nguyen C','079200001113','Human Resource');
    ?>
    <div class="grid grid-cols-2 gap-1 w-1/3" action="#" method="post">
        <div>Employee Nation ID</div>
        <div>
            <?php echo $employeeC->getId(); ?>
        </div>
        <div>Employee Name</div>
        <div>
            <?php echo $employeeC->getName(); ?>
        </div>
        <div>Employee ID</div>
        <div>
            <?php echo $employeeC->getEmployeeID(); ?>
        </div>
        <div>Employee Department</div>
        <div>
            <?php echo $employeeC->getDepartment(); ?>
        </div>
    </div>

    

  </div>
</body>
</html>