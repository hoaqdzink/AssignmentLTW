<?phP
    function connect(){
        $server = 'localhost';
        $user = 'root';
        $pass = '';

        $database = 'shoebk';

        // kết nối
        $connect = new mysqli($server, $user, $pass, $database);

        // kiểm tra kết nối
        if ($connect) {
            mysqli_query($connect, "SET NAMES 'utf8' ");
            //echo 'Đã kết nối thành công';
        } else {
           // echo 'Kết nối thất bại';
        }
    }
?>