<?php $session = session(); ?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Search In formation</title>

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

        
<!-- Latest compiled and minified CSS -->
    <div class="container mt-4">
    <center><h1>Search In formation</h1></center> <br><br>
   
            <div class="mt-3">
                <table class="table table-bordered" id="Search">
                <thead>
                    <tr>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>หมู่เรียน</th>
                        <th>ปีการศึกษา</th>
                        <th>วัน</th>
                        <th>เดือน</th>
                        <th>ปี</th>
                        <th>สาขา</th>
                        <th>คณะ</th>
                        <th>ที่อยู่</th>
                        <th>จังหวัด</th>
                        <th>รหัสไปรษณีย์</th>
                        <th>อีเมล์</th>
                        <th>เบอร์โทรศัพท์</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($users): ?>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['user_id']; ?></td>
                        <td><?php echo $user['user_fname']; ?></td>
                        <td><?php echo $user['user_lname']; ?></td>
                        <td><?php echo $user['group']; ?></td>
                        <td><?php echo $user['school_year']; ?></td>
                        <td><?php echo $user['day']; ?></td>
                        <td><?php echo $user['month']; ?></td>
                        <td><?php echo $user['year']; ?></td>
                        <td><?php echo $user['sakha']; ?></td>
                        <td><?php echo $user['kana']; ?></td>
                        <td><?php echo $user['address']; ?></td>
                        <td><?php echo $user['province']; ?></td>
                        <td><?php echo $user['post_code']; ?></td>
                        <td><?php echo $user['em']; ?></td>
                        <td><?php echo $user['phones']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
                
                </table>
            </div>
            </div>

            <a href="/userindex" class="btn btn-primary" style="margin-left:13.5%;">ย้อนกลับ</a>
 
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready( function () {
                $('#Search').DataTable();
            } );
            </script>
            


                <footer>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQu0QBRLWyj_kV5HbW1Z_-ZuNK5G78NHTToog&usqp=CAU&fbclid=IwAR1aoj85lYOiZd1yKlKke76DoWCJmVq_8mJMZ9tTXYjk-YF-oiEqUVua3M0" alt="Italian Trulli" style="margin-left:-1200px;width:15%;">
                            <p style="margin-top:-100px;">มหาวิทยาลัยราชภัฏนครปฐม</p>
                            <p>ที่อยู่: 85 ถ. มาลัยแมน ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม 73000</p>
                            <p>โทรศัพท์: 034 109 300</p>
                </footer>
</body>
</html>