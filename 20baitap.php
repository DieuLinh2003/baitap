<!DOCTYPE html>
<html>
    <body>
    <?php
    $a = 'Xin chao!';
    // đếm số ký tự trong một chuỗi sử dụng hàm strlen().
    echo "1-".strlen($a);    
    // đếm số từ trong một chuỗi sử dụng hàm str_word_count().
    echo "<br>2-".str_word_count($a);
    // đảo ngược một chuỗi sử dụng hàm strrev().
    echo "<br>3-".strrev($a);
    // tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
    echo "<br>4-".strpos($a, "chao");
    // thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
    echo "<br>5-".str_replace("chao", "loi", $a);
    // kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
    echo "<br>6-".strncmp("Hi", "ello", 4);
    // chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
    echo "<br>7-".strtoupper($a);
    // chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
    echo "<br>8-".strtolower($a);
    // chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
    echo "<br>9-".ucwords($a);
    // loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
    echo "<br>10-".trim(" Tam biet! ");
    // loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
    echo "<br>11-".ltrim(" Tam biet!", " T");
    // loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
    echo "<br>12-".rtrim("Tam biet!", "t!");
    // tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
    echo "<br>13-";
    var_dump(explode(" ", $a));
    // nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
    echo "<br>14-".implode(",", array('H', 'e', 'l', 'l', 'o'));
    // thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
    echo "<br>15-".str_pad($a, 20, "-"/*, STR_PAD_BOTH*/);
    // kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
    echo "<br>16-".strrchr($a, "!");
    // kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
    echo "<br>17-".strstr($a, "chao");
    // thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
    $string = 'The quick brown fox jumps over the lazy dog.';
    $patterns = array();
    $patterns[0] = '/quick/';
    $patterns[1] = '/brown/';
    $patterns[2] = '/fox/';
    $replacements = array();
    $replacements[2] = 'bear';
    $replacements[1] = 'black';
    $replacements[0] = 'slow';
    echo "<br>18-".preg_replace($patterns, $replacements, $string);
    // kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
    $x = 1;
    $y = 2.1;
    echo "<br>19-".is_int($x) .' '. is_int($y);
    // kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
    $z = 'ddl@gmail.com';
    $t = 'dl@com';
    echo "<br>20-".filter_var($z, FILTER_VALIDATE_EMAIL) . ' ' .filter_var($t, FILTER_VALIDATE_EMAIL);
    ?>
    </body>
</html>