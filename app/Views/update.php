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

            <div class="container">
                <center><h1 class="wellt">อัพเดต</h1></center>
                <div class="col-lg-12 well">
                <div class="row">
                
                <form action="/Update/update" method="post">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="inputuser_fname" class="form-lable">ชื่อ</label>
                                <input type="text" name="user_fname" placeholder="กรุณาใส่ชื่อ" class="form-control" id="inputforuser_fname" value="<?php echo  $session->get('user_fname'); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputuser_lname" class="form-lable">นามสกุล</label>
                                <input type="text" name="user_lname" placeholder="กรุณาใส่นามสกุล" class="form-control" id="inputforuser_lname" value="<?php echo  $session->get('user_lname'); ?>">
                            </div>
                        </div>                    
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>รหัสนักศึกษา</label>
                                <input type="text" name="user_id" placeholder="กรุณาใส่รหัสนักศึกษา" class="form-control" id="id" value="<?php echo  $session->get('user_id'); ?>">
                            </div>    
                            <div class="col-sm-4 form-group">
                                <label for="inputschool_year" class="form-lable">ปีการศึกษา</label>
                                <input type="text" name="school_year" placeholder="กรุณาใส่ปีการศึกษา" class="form-control" id="inputforschool_year" value="<?php echo  $session->get('school_year'); ?>">
                            </div>    
                            <div class="col-sm-4 form-group">
                                <label for="inputgroups" class="form-lable">หมู่เรียน</label>
                                <input type="text" name="group" placeholder="กรุณาใส่หมู่เรียน" class="form-control" id="inputforgroup" value="<?php echo  $session->get('group'); ?>">
                            </div>        
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="inputday" class="form-lable">วัน</label>
                                <input type="number" name="day" class="form-control" id="inputforday" value="<?php echo  $session->get('day'); ?>">
                            </div>    
                            <div class="col-sm-4 form-group">
                                <label for="inputmonth" class="form-lable">เดือน</label>
                                <input type="text" name="month" class="form-control" id="inputformonth" value="<?php echo  $session->get('month'); ?>">
                            </div>    
                            <div class="col-sm-4 form-group">
                                <label for="inputyear" class="form-lable">ปี</label>
                                <input type="text" name="year" class="form-control" id="inputforyear" value="<?php echo  $session->get('year'); ?>">
                            </div>        
                        </div>
                        <div class="row">
                        <div class="col-sm-6 form-group">
                                <label for="inputkanas" class="form-lable">คณะ</label>
                                <input type="text" name="kana" placeholder="กรุณาใส่คณะ" class="form-control" id="inputforkana" value="<?php echo  $session->get('kana'); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputsakhas" class="form-lable">สาขา</label>
                                <input type="text" name="sakha" placeholder="กรุณาใส่สาขา" class="form-control" id="inputforsakha" value="<?php echo  $session->get('sakha'); ?>">
                            </div>       
                            </div>  
                        <div class="form-group">
                            <label for="inputaddress" class="form-lable">ที่อยู่</label>
                            <input type="text" name="address" placeholder="กรุณาใส่ที่อยู่" row="3" class="form-control" id="inputforaddress" value="<?php echo  $session->get('address'); ?>">
                        </div>    
            
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="inputprovince" class="form-lable">จังหวัด</label>
                                <input type="text" name="province" placeholder="กรุณาใส่จังหวัด" class="form-control" id="inputforprovince" value="<?php echo  $session->get('province'); ?>">
                            </div>        
                            <div class="col-sm-6 form-group">
                                <label for="inputpost_code" class="form-lable">รหัสไปรษณีย์</label>
                                <input type="text" name="post_code" placeholder="กรุณาใส่รหัสไปรษณีย์" class="form-control" id="inputforpost_code" value="<?php echo  $session->get('post_code'); ?>">
                            </div>    
                        </div>                        
                    <div class="form-group">
                        <label  for="inputphone" class="form-lable">เบอร์โทรศัพท์</label>
                        <input type="Phone" name="phones" placeholder="กรุณาใส่เบอร์โทรศัพท์" class="form-control" id="inputforphones" value="<?php echo  $session->get('phones'); ?>">
                    </div>        
                    <div class="form-group">
                        <label for="inputemail" class="form-lable">อีเมล์</label>
                        <input type="email" name="em" placeholder="กรุณาใส่อีเมล์" class="form-control" id="inputforem" value="<?php echo  $session->get('em'); ?>">
                    </div>    
                    <div class="form-group">
                    <label for="inputpassword" class="form-lable">รหัสผ่าน</label>
                        <input type="password" name="passwords" placeholder="กรุณาใส่รหัสผ่าน" class="form-control" id="inputforpasswords" value="<?php echo  $session->get('passwords'); ?>"
                        required=""oninvalid="this.setCustomValidity('กรุณากรอกPassword')" oninput="this.setCustomValidity('')">
                    </div>     
                              
                     
                    </div>
                         <button type="submit" class="btn btn-success" style=width:20%>ยืนยัน</button>        
                         <a href="/profile" class="btn btn-danger" >ยกเลิก</a>
                </form> 
                </div>
    </div>
    </div>
            <!-- footter -->
            <footer>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQu0QBRLWyj_kV5HbW1Z_-ZuNK5G78NHTToog&usqp=CAU&fbclid=IwAR1aoj85lYOiZd1yKlKke76DoWCJmVq_8mJMZ9tTXYjk-YF-oiEqUVua3M0" alt="Italian Trulli" style="margin-left:-1200px;width:15%;">
                <p style="margin-top:-100px;">มหาวิทยาลัยราชภัฏนครปฐม</p>
                <p>ที่อยู่: 85 ถ. มาลัยแมน ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม 73000</p>
                <p>โทรศัพท์: 034 109 300</p>
            </footer>
        
                                


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>