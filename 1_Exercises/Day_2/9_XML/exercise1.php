<?php

$doc = simplexml_load_file('xml/reed.xml');

$courses = $doc->xpath('course');
echo "<h1>List of courses</h1>";
foreach ($courses as $course){
    echo "<p>" . $course->title . "</p>";
}