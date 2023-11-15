<?php
$IPmaxNumber = 10;
$clientIP = $_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : 
            ($_SERVER['REMOTE_ADDR'] ? $_SERVER['REMOTE_ADDR'] : 
            ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : 
            $_SERVER['REMOTE_ADDR']));
$IPs = file_get_contents('loggedIP.txt');
if (strstr($IPs, $clientIP)) {
    $ips = explode(',', $IPs);
    if (count($ips) > $IPmaxNumber) {
        header("HTTP/1.0 403 Forbidden");
        exit;
    }
    array_push($ips, $clientIP);
    file_put_contents('loggedIP.txt', implode(",", $ips));
}

//require $_SERVER['DOCUMENT_ROOT']."/r00t/anti-ddos-lite.php";
//require($_SERVER['DOCUMENT_ROOT'].'/waf-safeness/start-waf.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHẦN MỀM CHẶN CÁC TRANG WEB XẤU UB2</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <style>
    body {
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      animation: backgroundAnimation 10s infinite;
    }
    @keyframes backgroundAnimation {
      0% {
        background-image: url("img/khkt.png");
        background-position-y: 0%;
      }
      50% {
        background-image: url("img/khkt1.png");
        background-position-y: 0;
      }
      75% {
        background-image: url("img/khkt.png");
        background-position-y: 0%;
      }
      100% {
        background-image: url("img/khkt.png");
        background-position-y: 0%;
      }
    }

    h1 {
      color: white;
      font-size: 48px;
      text-align: center;
      margin-top: 200px;
      animation: fadeIn 2s ease-in-out;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    p {
      font-size: 24px;
      text-align: center;
      margin-top: -20px;
      animation: fadeIn 2s ease-in-out;
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    button {
      background-color: #FF4C4C;
      color: white;
      font-size: 24px;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      margin-top: 20px;
      margin-left: auto;
      margin-right: auto;
      display: block;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
      opacity: 0;
      animation: fadeInButton 2s ease-in-out forwards;
    }

    button:hover {
      background-color: #FF0000;
    }

    .credit {
      position: absolute;
      bottom: 5px;
      right: 5px;
      font-size: 12px;
      color: white;
    }

    #creator {
      position: absolute;
      top: 10px;
      left: 10px;
      font-size: 18px;
      color: white;
    }
#creator a {
      color: white;
      text-decoration: underline;
    }

    #dung {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 18px;
      color: white;
    }

    #dung a {
      color: white;
      text-decoration: underline;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    @keyframes fadeInButton {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
<h1>Phần Mềm Chặn Các Trang Web Xấu: UB<sup>2</sup></h1>
<p>Đây Là Dự Án Để Chặn/Bỏ Chặn Website Xấu.<br>Làm Bằng 100% Code CMD(Code Mặc Định Trong Console)<br>Dự Án Này Được Dùng Trong Giáo Dục.<br>Hiện Tại Chỉ Hoạt Động Trên Windown.</p>
<button onclick="downloadFile()">Download</button>
<div class="credit">Copyright &copy; TPU DaNang KHKT 2023</div>
<div id="creator">
Coder: <a href="https://www.facebook.com/Tak.Nek.XD">A.Kiệt</a>
</div>

<div id="dung">
Tester + Information: <a href="https://www.facebook.com/huynhngocthuydungdng">T.Dung</a>
</div>

<script>
    function downloadFile() {
      window.location.href = "https://takisnoob.ddns.net/khkt/run.bat";
    }
  </script>
</body>
</html>