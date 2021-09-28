<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Home</title>

<style>
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

li {
  border-right: 1px solid #bbb;
}
footer {
           text-align: center;
           padding: 3px;
           background-color: rgb(18, 163, 132);
           font-size: 18px;
           margin-top: 15%;
           }

.n1 {
  position: absolute;
  left: 550px;
  margin-top: 100px;
}
.n2 {
  position: absolute;
  left: 800px;
  margin-top: 100px;
}
.b1 {
  position: absolute;
  left: 555px;
  margin-top: 300px;
}
.b2 {
  position: absolute;
  left: 820px;
  margin-top: 300px;
}

.user-name{
  margin-left: 82%;
  color: white;
}
</style>

</head>
<body style="background-color : powderblue">
      <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                        <a class="navbar-brand" href="/userindex">Home</a>
                        </div>
                        
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="/profile"><span class="glyphicon glyphicon-user"></span> <?php $session = session(); ?>
                          <h5 class="username"><?php echo  $session->get('user_fname'); ?> <?php echo  $session->get('user_lname'); ?></h5></a></li>
                        <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        </ul>
                    </div>
        </nav>



              
   
<img src="https://www.npru.ac.th/2019/img/slide/banner1920x600-02.jpg" style="width:100%;margin-top:-2.5%;" Align="center">

<br><br><br><br>
<img class="n1" src="data:image/png;base64,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" width=170px alt="">
<img class="n2" src="https://png.pngtree.com/png-clipart/20191121/original/pngtree-vector-upload-icon-png-image_5158776.jpg" width=170px alt="">
<a href="/search"><button class="b1" type="button">ค้นหาข้อมูลนักศึกษา</button></a>
<a href="/profile"><button class="b2" type="button">ข้อมูลส่วนตัว</button></a>
<center><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAAA1BMVEX///+nxBvIAAAASElEQVR4nO3BMQEAAADCoPVPbQwfoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIC3AcUIAAFkqh/QAAAAAElFTkSuQmCC" width=50%  alt=""></center>
<br><br><br><br>
                <footer>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQu0QBRLWyj_kV5HbW1Z_-ZuNK5G78NHTToog&usqp=CAU&fbclid=IwAR1aoj85lYOiZd1yKlKke76DoWCJmVq_8mJMZ9tTXYjk-YF-oiEqUVua3M0" alt="Italian Trulli" style="margin-left:-1200px;width:15%;">
                          <p style="margin-top:-100px;">มหาวิทยาลัยราชภัฏนครปฐม</p>
                          <p>ที่อยู่: 85 ถ. มาลัยแมน ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม 73000</p>
                          <p>โทรศัพท์: 034 109 300</p>
                </footer>
</body>
</html>