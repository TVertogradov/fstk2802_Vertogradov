<?php
/*22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx<br>
    xxxx<br>
    xxxxxx<br>
    xxxxxxxx<br>
    xxxxxxxxxx</p>
*/

for ($x = 'xx'; iconv_strlen($x)<=10; $x.='xx'){
    echo "$x<br>";
}