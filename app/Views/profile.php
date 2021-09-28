<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Profile</title>

    <!------ Include the above in your HEAD tag ---------->

    <style>
            body {
                padding-top: 20px;
                padding-bottom: 20px;
                }

                .header,
                .marketing,
                .footer {
                padding-right: 15px;
                padding-left: 15px;
                }


                .header {
                border-bottom: 1px solid #e5e5e5;
                }

                .header h3 {
                padding-bottom: 19px;
                margin-top: 0;
                margin-bottom: 0;
                line-height: 40px;
                }


                .footer {
                padding-top: 19px;
                color: #777;
                border-top: 1px solid #e5e5e5;
                }


                @media (min-width: 768px) {
                .container {
                    max-width: 730px;
                }
                }
                .container-narrow > hr {
                margin: 30px 0;
                }


                .jumbotron {
                text-align: center;
                border-bottom: 1px solid #e5e5e5;
                }
                .jumbotron .btn {
                padding: 14px 24px;
                font-size: 21px;
                }


                .marketing {
                margin: 40px 0;
                }
                .marketing p + h4 {
                margin-top: 28px;
                }


                @media screen and (min-width: 768px) {
                
                .header,
                .marketing,
                .footer {
                    padding-right: 0;
                    padding-left: 0;
                }

                .header {
                    margin-bottom: 30px;
                }

                .jumbotron {
                    border-bottom: 0;
                }
            }

            /* ส่วน navbar */
            ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li{
                float: right;
            }

            li a{
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

            /* footter */
            footer {
                text-align: center;
                padding: 3px;
                background-color: rgb(18, 163, 132);
                font-size: 18px;
                margin-top: 15%;
                }
            .user-name{
                color: black;
                margin-left: 80%; 
                }

            .wellt{
                text-align: center;
                margin-bottom: 8%;
            }
            .navbar{
                margin-top: -1.3%;
            }
            .navbarhome{
                margin-right: 100%;
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
                        <li><a href="/register"><span class="glyphicon glyphicon-user"></span> <?php $session = session(); ?>
                          <h5 class="username"><?php echo  $session->get('user_fname'); ?> <?php echo  $session->get('user_lname'); ?></h5></a></li>
                        <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        </ul>
                    </div>
                    </nav>
            
                
            <div class="container">
                <h1 class="wellt">ข้อมูลส่วนตัว</h1>
                <div class="col-lg-12 well">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="inputfname" class="form-lable">ชื่อ</label>
                                <?php echo  $session->get('user_fname'); ?>
                                </div>

                                <div class="col-sm-6 form-group">
                                <label for="inputlname" class="form-lable">นามสกุล</label>
                        <?php echo  $session->get('user_lname'); ?>
                    </div>
                    </div> 
                    <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>รหัสนักศึกษา</label> 
                                <?php echo  $session->get('user_id'); ?>
                                </div>  
                        <div class="col-sm-4 form-group">
                                <label for="inputschool_year" class="form-lable">ปีการศึกษา</label>
                                <?php echo  $session->get('school_year'); ?>
                         </div>
                         <div class="col-sm-4 form-group">
                                <label for="inputgroups" class="form-lable">หมู่เรียน</label>
                        <?php echo  $session->get('group'); ?>
                     </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="inputday" class="form-lable">วัน</label>
                                <?php echo  $session->get('day'); ?>
                    </div>
                    <div class="col-sm-4 form-group">
                                <label for="inputmonth" class="form-lable">เดือน</label>
                                <?php echo  $session->get('month'); ?>
                    </div>
                    <div class="col-sm-4 form-group">
                                <label for="inputyear" class="form-lable">ปี</label>
                        <?php echo  $session->get('year'); ?>
                     </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group">
                                <label for="inputkanas" class="form-lable">คณะ</label>
                               <?php echo  $session->get('kana'); ?>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputsakhas" class="form-lable">สาขา</label>
                               <?php echo  $session->get('sakha'); ?>
                            </div>       
                            </div> 

                    <div class="form-group">
                            <label for="inputaddress" class="form-lable">ที่อยู่</label>
                    <?php echo  $session->get('address'); ?>
                    </div>
                    <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="inputprovince" class="form-lable">จังหวัด</label>
                                <?php echo  $session->get('province'); ?>
                      </div>
                      <div class="col-sm-6 form-group">
                                <label for="inputpost_code" class="form-lable">รหัสไปรษณีย์</label>
                        <?php echo  $session->get('post_code'); ?>
                    </div>
                   </div>

                     <div class="form-group">
                        <label for="inputemail" class="form-lable">อีเมล์</label> 
                        <?php echo  $session->get('em'); ?>
                    </div>

                    <div class="form-group">
                        <label  for="inputphone" class="form-lable">เบอร์โทรศัพท์</label>
                        <?php echo  $session->get('phones'); ?>
                    </div>
                    <hr>
                    <a href="/update"><button class="btn btn-primary" type="button">แก้ไขข้อมูล</button></a>
                    <a href="/userindex" class="btn btn-danger" >ย้อนกลับ</a>
                    </div>
        

              
           </div>
        </div>
      </div>
    </div>

<br><br><br><br>
            <footer>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQu0QBRLWyj_kV5HbW1Z_-ZuNK5G78NHTToog&usqp=CAU&fbclid=IwAR1aoj85lYOiZd1yKlKke76DoWCJmVq_8mJMZ9tTXYjk-YF-oiEqUVua3M0" alt="Italian Trulli" style="margin-left:-1200px;width:15%;">
                    <p style="margin-top: -100px;">มหาวิทยาลัยราชภัฏนครปฐม</p>
                    <p>ที่อยู่: 85 ถ. มาลัยแมน ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม 73000</p>
                    <p>โทรศัพท์: 034 109 300</p>
            </footer>
</body>
</html>