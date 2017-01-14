<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>COMP 4711 - Lab 1</title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();
        
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        $myself = new Student();
        $myself->surname = "Chan";
        $myself->first_name = "Jason";
        $myself->add_email('home','jason@awesomeness.com');
        $myself->add_email('work1','j_chan@my.bcit.ca');
        $myself->add_grade(95);
        $myself->add_grade(90);
        $myself->add_grade(85);
        $students['a008'] = $myself;

        ksort($students); // one of the many sort functions
        
        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
