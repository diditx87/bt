<?php
if(isset($argv[1])) {
    if(file_exists($argv[1])) {
        $ambil = explode(PHP_EOL, file_get_contents($argv[1]));
        foreach($ambil as $targets) {
            $potong = explode("|", $targets);
            daftar($potong[0], $potong[1]);
        }
    }else die("File doesn't exist!");
}else die("Usage: php check.php targets.txt");
function daftar($email, $password) {
        $link  = "https://cod4y.000webhostapp.com/";
        $c = curl_init($link);
        curl_setopt($c, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:66.0) Gecko/20100101 Firefox/66.0");
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_TIMEOUT, 60);
        curl_setopt($c, CURLOPT_VERBOSE, false);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_POSTFIELDS,"s=$email&r=AM8DI4MTD");
        curl_setopt($c, CURLOPT_POST, 1);
		$ex = curl_exec($c);
		echo "sukses\n";}
		?>
