<?php
$d=$_SESSION['diocese'];
$dio_query=mysqli_query($db, "SELECT d.diocese_id,d.diocese_name FROM diocese d WHERE d.diocese_id='$d'");
$dio_details=mysqli_fetch_row($dio_query);

$school_sql=mysqli_query($db,"SELECT school.school_id,school.school_name
FROM school 
INNER JOIN diocese 
ON diocese.diocese_id=school.diocese_id
WHERE diocese.diocese_id='$d'");
$diocese_query=mysqli_query($db,"SELECT * FROM diocese WHERE diocese.diocese_id='$d'");
$dio_details=mysqli_fetch_row($diocese_query);


$info_sql=mysqli_query($db,"SELECT COUNT(stud_id) as 'all', 
(SELECT COUNT(*) FROM pre_test INNER JOIN student ON pre_test.stud_id=student.stud_id INNER JOIN school ON school.school_id=student.school_id INNER JOIN diocese ON diocese.diocese_id=school.diocese_id WHERE diocese.diocese_id='$d' AND student.gender='Male') as 'male',
(SELECT COUNT(*) FROM pre_test INNER JOIN student ON pre_test.stud_id=student.stud_id INNER JOIN school ON school.school_id=student.school_id INNER JOIN diocese ON diocese.diocese_id=school.diocese_id WHERE diocese.diocese_id='$d' AND student.gender='Female') as 'female',
(SELECT COUNT(*) FROM pre_test INNER JOIN student ON pre_test.stud_id=student.stud_id INNER JOIN school ON school.school_id=student.school_id INNER JOIN diocese ON diocese.diocese_id=school.diocese_id WHERE diocese.diocese_id='$d'),

(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id INNER JOIN school b ON b.school_id=d.school_id INNER JOIN diocese e ON e.diocese_id=b.diocese_id WHERE a.parent_who = 'tatay' AND e.diocese_id = '$d') as 'tatay',
(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id INNER JOIN school b ON b.school_id=d.school_id INNER JOIN diocese e ON e.diocese_id=b.diocese_id WHERE a.parent_who = 'nanay' AND e.diocese_id = '$d') as 'nanay',
(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id INNER JOIN school b ON b.school_id=d.school_id INNER JOIN diocese e ON e.diocese_id=b.diocese_id WHERE a.parent_who = 'pareho' AND e.diocese_id = '$d') as 'pareho',

(SELECT COUNT(*) FROM parent a INNER JOIN job b ON b.job_id = a.job_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE b.job_based = 'LB' AND f.diocese_id = '$d') as 'LB',
(SELECT COUNT(*) FROM parent a INNER JOIN job b ON b.job_id = a.job_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE b.job_based = 'SB' AND f.diocese_id = '$d') as 'SB',

(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE b.cont_code = 'AS' AND f.diocese_id = '$d') as 'AS',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE b.cont_code = 'EU' AND f.diocese_id = '$d') as 'EU',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE b.cont_code = 'NA' AND f.diocese_id = '$d') as 'NA',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE b.cont_code = 'OC' AND f.diocese_id = '$d') as 'OC',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE b.cont_code NOT IN('AS', 'EU', 'NA', 'OC') AND f.diocese_id = '$d') as 'OTHERS',

(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE  a.years_stay = '1' AND f.diocese_id = '$d') as '1st',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE  a.years_stay = '2' AND f.diocese_id = '$d') as '2nd',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE  a.years_stay = '3' AND f.diocese_id = '$d') as '3rd',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE  a.years_stay = '4' AND f.diocese_id = '$d') as '4th',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id INNER JOIN school e ON e.school_id=d.school_id INNER JOIN diocese f ON f.diocese_id=e.diocese_id WHERE  a.years_stay = '5' AND f.diocese_id = '$d') as '5th'

FROM parent a
INNER JOIN family b ON b.parent_id = a.parent_id
INNER JOIN student d ON d.fam_id = b.fam_id
INNER JOIN school e ON e.school_id=d.school_id
INNER JOIN diocese f ON f.diocese_id=e.diocese_id
WHERE f.diocese_id='$d' ");

$info=mysqli_fetch_row($info_sql);
?>