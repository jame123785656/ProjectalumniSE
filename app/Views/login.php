<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="/css/login.css">

    <style>
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
            .box-login{
                width: 60%;
                background: white;
                margin-left: 20%;
                margin-top: 5%
                 }

            footer {
                text-align: center;
                padding: 3px;
                background-color: rgb(18, 163, 132);
                font-size: 18px;
                margin-top: 15%;
                }
                  .user-name{
                    color: white;
                    margin-left: 80%; 
                  }
            h1{
                margin-left: 30%;
            }
            button{
                width: 25%;
                color: black;
            }
    </style>
</head>
<body style="background-color : powderblue">
        
            <ul>
                <li style="float:left"><a href="index">Home</a></li>
            </ul>



             <div class="box-login">
                <div class="container mt-4">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <h1>เข้าสู่ระบบ</h1>
                            <hr>
                            <?php if(session()->getFlashdata('msg')): ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                            <?php endif; ?>
                            <form action="/login/auth" method="post">
                                <div class="mb-3">
                                    <label for="inputid" class="form-label">รหัสนักศึกษา</label>
                                    <input type="text" name="id" class="form-control" id="inputforid" value="<?= set_value('id'); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="inputpassword" class="form-label">รหัสผ่าน</label>
                                    <input type="password" name="password" class="form-control" id="inputforpassword">
                                </div>
                                <button type="submit" class="btn btn-success" >ยืนยัน</button>
                                <a href="/index" class="btn btn-danger" >ยกเลิก</a>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>



            <footer>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQu0QBRLWyj_kV5HbW1Z_-ZuNK5G78NHTToog&usqp=CAU&fbclid=IwAR1aoj85lYOiZd1yKlKke76DoWCJmVq_8mJMZ9tTXYjk-YF-oiEqUVua3M0" alt="Italian Trulli" style="margin-left:-1200px;width:15%;">
                <p style="margin-top:-100px;">มหาวิทยาลัยราชภัฏนครปฐม</p>
                <p>ที่อยู่: 85 ถ. มาลัยแมน ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม 73000</p>
                <p>โทรศัพท์: 034 109 300</p>
            </footer>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>