<?php
//model
function get_courses()
{
    
<<<<<<< HEAD
    return array_values($course);
=======
    return array_values($course); //oc
>>>>>>> 4da4639 (done)
}

function find_by_semester($semester)
{
     
    return (array_key_exists($semester, $course) ? $course[$semester] : 'Invalid semester');
}
