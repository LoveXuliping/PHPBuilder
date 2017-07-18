 1 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  2 <?php
  3 $servername="localhost";
  4 $username="root";
  5 $password="root";
  6 $dbname="myDB";
  7 //创建数据库连接
  8 $conn=new mysqli($servername,$username,$password,$dbname);
  9 //检测是否已经连接成功
 10 if($conn->connect_error){
 11     //如果连接失败，则打印出错误信息
 12     die("连接失败".$conn->connect_error);
 13 }
 14 //预处理和绑定
 15 $stmt=$conn->prepare("INSERT INTO MyGuests(firstname,lastname,email) VALUES(
 16 ?,?,?)");
 17 $stmt->bind_param("sss",$firstname,$lastname,$email);
 18 //设置参数并且执行
 19 $fristname="jonh";
 20 $lastname="doe";
 21 $email="john@example.com";
 22 $stmt->execute();
 23 
 24 $firstname="marry";
 25 $lastname="moe";
 26 $email="marry@example.com";
 27 $stmt->execute();
 28 
 29 $firstname="julie";
 30 $lastname="dooley";
 31 $email="julie@example.com";
 32 $stmt->execute();
 33 
 34 echo "新纪录插入成功";
 35 
 36 $stmt->close();
 37 $conn->close();
 38 ?>
