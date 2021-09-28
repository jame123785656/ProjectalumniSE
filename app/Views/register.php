<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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

            <ul class="navbar">
                <li class="navbarhome"><a href="/index">Home</a></li>
            </ul>


            <div class="container">
                <h1 class="wellt">สมัครสมาชิก</h1>
                <div class="col-lg-12 well">
                <div class="row">
                
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                <?php endif; ?>
                
                <form action="/register/save" id method="post">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="inputfname" class="form-lable">ชื่อ</label>
                                <input type="text" name="fname" placeholder="กรุณาใส่ชื่อ" class="form-control" id="inputforfname" value="<?= set_value('fname'); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputlname" class="form-lable">นามสกุล</label>
                                <input type="text" name="lname" placeholder="กรุณาใส่นามสกุล" class="form-control" id="inputforlname" value="<?= set_value('lname'); ?>">
                            </div>
                        </div>                    
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>รหัสนักศึกษา</label>
                                <input type="text" name="id" placeholder="กรุณาใส่รหัสนักศึกษา" class="form-control" id="id" value="<?php set_value('id'); ?>">
                            </div>    
                            <div class="col-sm-4 form-group">
                                <label for="inputschool_year" class="form-lable">ปีการศึกษา</label>
                                <input type="text" name="school_years" placeholder="กรุณาใส่ปีการศึกษา" class="form-control" id="inputforschool_years" value="<?= set_value('school_years');?>">
                            </div>    
                            <div class="col-sm-4 form-group">
                                <label for="inputgroups" class="form-lable">หมู่เรียน</label>
                                <input type="text" name="groups" placeholder="กรุณาใส่หมู่เรียน" class="form-control" id="inputforgroups" value="<?= set_value('groups'); ?>">
                            </div>        
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="inputday" class="form-lable">วัน</label>
                                <input type="number" name="days" class="form-control" id="inputfordays" value="<?= set_value('days');?>">
                            </div>    
                            <div class="col-sm-4 form-group">
                                <label for="inputmonth" class="form-lable">เดือน</label>
                                <input type="text" name="months" class="form-control" id="inputformonths" value="<?= set_value('months');?>">
                            </div>    
                            <div class="col-sm-4 form-group">
                                <label for="inputyear" class="form-lable">ปี</label>
                                <input type="text" name="years" class="form-control" id="inputforyears" value="<?= set_value('years');?>">
                            </div>        
                        </div>
                        <div class="row">
                        <div class="col-sm-6 form-group">
                                <label for="inputkanas" class="form-lable">คณะ</label>
                                <input type="text" name="kanas" placeholder="กรุณาใส่คณะ" class="form-control" id="inputforkanas" value="<?= set_value('kanas');?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputsakhas" class="form-lable">สาขา</label>
                                <input type="text" name="sakhas" placeholder="กรุณาใส่สาขา" class="form-control" id="inputforsakhas" value="<?= set_value('sakhas');?>">
                            </div>       
                            </div>  
                        <div class="form-group">
                            <label for="inputaddress" class="form-lable">ที่อยู่</label>
                            <input type="text" name="addresss" placeholder="กรุณาใส่ที่อยู่" row="3" class="form-control" id="inputforaddresss" value="<?= set_value('addresss');?>">
                        </div>    
            
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="inputprovince" class="form-lable">จังหวัด</label>
                                <input type="text" name="provinces" placeholder="กรุณาใส่จังหวัด" class="form-control" id="inputforprovinces" value="<?= set_value('provinces');?>">
                            </div>        
                            <div class="col-sm-6 form-group">
                                <label for="inputpost_code" class="form-lable">รหัสไปรษณีย์</label>
                                <input type="text" name="post_codes" placeholder="กรุณาใส่รหัสไปรษณีย์" class="form-control" id="inputforpost_codes" value="<?= set_value('post_codes');?>">
                            </div>    
                        </div>                        
                    <div class="form-group">
                        <label  for="inputphone" class="form-lable">เบอร์โทรศัพท์</label>
                        <input type="Phone" name="phone" placeholder="กรุณาใส่เบอร์โทรศัพท์" class="form-control" id="inputforphone" value="<?= set_value('phone');?>">
                    </div>        
                    <div class="form-group">
                        <label for="inputemail" class="form-lable">อีเมล์</label>
                        <input type="email" name="emai" placeholder="กรุณาใส่อีเมล์" class="form-control" id="inputforemai" value="<?= set_value('emai');?>">
                    </div>    
                    <div class="form-group">
                    <label for="inputpassword" class="form-lable">รหัสผ่าน</label>
                        <input type="password" name="password" placeholder="กรุณาใส่รหัสผ่าน" class="form-control" id="inputforpassword">
                    </div>     
                    <div class="form-group">
                    <label for="inputconfpassword" class="form-lable">รหัสผ่านอีกครั้ง</label>
                    <input type="password" name="confpassword" placeholder="กรุณาใส่รหัสผ่านอีกครั้ง" class="form-control" id="inputforconfpassword" >
                    </div>           
                     
                    </div>
                         <button type="submit" class="btn btn-success" style=width:20%>ยืนยัน</button>        
                         <a href="/index" class="btn btn-danger" >ยกเลิก</a>
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