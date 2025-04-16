<?php
session_start();
if($_SESSION['status']!="sudah_login"){
  header("location:login.php");
} 
include('koneksi.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Produk Kantin Dargombez </title>
    <style type="text/css">
      	.waktu {
		overflow: hidden;
		width: 330px;
		margin: 20px auto;
		border: 5px solid #efefef;
	}
	.kotak{
		float: left;
		width: 100px;
		height: 100px;
		background-color: #189fff;
	}
	.waktu p {
		color: #fff;
		font-size: 36px;
		text-align: center;
		margin-top: 30px;
	}

      *{
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: cyan;
      }
      table {
        border: solid 1px #DDEEEE;
        border-collapse: collapse;
        border-spacing: 0;
        width: 70%;
        margin: 10px auto 10px auto;
      }
      table thead th {
          background-color: #DDEFEF;
          border: solid 1px #DDEEEE;
          color: #336B6B;
          padding: 10px;
          text-align: left;
          text-shadow: 1px 1px 1px #fff;
          text-decoration: none;
      }
      table tbody td {
          border: solid 1px #DDEEEE;
          color: #333;
          padding: 10px;
          text-shadow: 1px 1px 1px #fff;
      }
      a {
            color: #fff;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
      }

      #tambah{
        margin-right: 63.4%;
        background-color: green;
      }
      *{
          margin:0; 
          padding:0;
      }
      nav {
          margin:auto;
          text-align: center;
          width: 100%;
          font-family: arial;
      } 
      nav ul {
          background:#37988e;
          padding: 0 20px;
          list-style: none;
          position: relative;
          display: inline-table;
          width: 100%;
      }
      nav ul li{
          float:left;
      }
      nav ul li:hover{
          background:#d68d9a;
      }
      nav ul li:hover a{
        color:#000;
      }
      nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
      }
      .container{
  width:400px;
  height:200px;
  position:relative;
  perspective: 1000;
  -webkit-perspective: 1000;
  left:calc(50% - 200px);
  /* top:calc(50% - 100vh); */
  margin-top: -29%;
}
.card{
  width:100%;
  height:100%;
  position:absolute;
  transform-style:preserve-3d;
  -webkit-transform-style:preserve-3d;
  transition:transform 1s ease;
  cursor:pointer;
}
.back, .front{
  border-radius:6px;
  position:absolute;
  width:100%;
  height:100%;
  transform-style:preserve-3d;
  -webkit-transform-style:preserve-3d;
  
  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
}
.contentfront{
  width:100%;
  height:100%;
  float:left;
  transform:translatez(60px);
  -webkit-transform:translatez(60px);
  
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  
  transform-style:preserve-3d;
  -webkit-transform-style:preserve-3d;
  
}
.contentback{
  width:100%;
  height:100%;
  float:left;
  transform:translatez(60px);
  -webkit-transform:translatez(60px);
  
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  
  transform-style:preserve-3d;
  -webkit-transform-style:preserve-3d;
  
}
.back{
  transform:rotateY(180deg);
  background-color:#232227;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
}
.front{
  text-transform:uppercase;
  background-color:#232227;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
}
.date{
  height:100%;
  width:130px;
  float:left;
  background-color:#E76642;
  border-radius:0 6px 6px 0;
  text-align:right;
  padding:10px 30px;
  box-sizing:border-box;
  transform-style:preserve-3d;
  -webkit-transform-style:preserve-3d;
}
.datecont{
  height:100%;
  transform:translatez(60px) scale(.9);
  -webkit-transform:translatez(60px) scale(.9);
}
#date{
  font-size:50px;
  color:#ECECE7;
  font-family: 'Montserrat', sans-serif;
  font-weight:500;
  float:right;
}
#day{
  float:right;
  font-size:14px;
  color:#232227;
  font-family: 'Montserrat', sans-serif;
  font-weight:400;
}
#month{
  float:right;
  font-size:10px;
  color:#232227;
  font-family: 'Montserrat', sans-serif;
  font-weight:200;
}
.date i{
  color:#ECECE7;
  position:absolute;
  bottom:10px;
  right:0;
}
.date i:hover{
  color:#232227;
  transition:.3s ease;
}
.month{
  height:100%;
  width:270px;
  float:left;
  padding:20px 30px;
  box-sizing:border-box;
}
.month table{
  width:100%;
}
.orangeTr{
  color:#E76642;
}
.whiteTr{
  color:#ECECE7;
  
}
.whiteTr th:hover{
  color:#E76642;
  transition:.3s ease;
}
.month tr{
  height:24px;
}
.month th{
  width:14%;
  font-size:10px;
  font-family: 'Montserrat', sans-serif;
  font-weight:400;
}

.flipped{
  transform:rotateY(-180deg);
  /*height:400px;
  width:200px;
  left:calc(50% - 100px);
  top:calc(50vh - 200px);*/
}
.backcontainer{
  transform-style:preserve-3d;
  width:calc(100% - 60px);
  height:calc(100% - 40px);
  float:left;
  margin-left:30px;
  margin-top:20px;
  /*transform:translatez(60px) scale();*/
  
  background-color:#E76642;
  border-radius:6px;
  padding:10px 30px;
  box-sizing:border-box;
  transform-style:preserve-3d;
  -webkit-transform-style:preserve-3d;
}
    </style>
  </head>
  <body onload="startTime()">
  <nav>
     <ul>
       <li><a href="logout.php">Logout</a></li>
       <li><a target = _blank' href="report.php">Reporting</a></li>
      

       <li><a href ="">Hai, selamat datang <b style="color:black;"><?php echo $_SESSION['username'];?></a?</li>
     </ul>
</nav>
<div>
<div>
   
<br>
<br>
<br>
<br>
<center><h1>Produk di Kantin Dargombez </h1><center>
  <a href="tambah_produk.php" id="tambah" style="margin-left: 1%;">+ Tambah Produk</a>
    <br/>
   <div style="margin-left: 0px;">
   <div class="body">
   <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Produk</th>
          <th>Deskripsi</th>
          <th>Harga Jual</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
      $query = "SELECT * FROM produk ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
    ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_produk']; ?></td>
          <td><?php echo substr($row['deskripsi'], 0, 20); ?></td>
          <td>Rp <?php echo $row['harga_jual']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
          <td>
              <a href="edit_produk.php?id=<?php echo $row['id']; ?>" style="padding-left: 30px; padding-right:30px; background-color: aqua;">Edit</a> 
              <a style="padding-left: 30px; padding-right:30px; background-color: red;" href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; 
      }
      
      ?>
    </tbody>
    </table>
   
   
    <script>
      window.setTimeout("waktu()", 1000);

function waktu() {
  var waktu = new Date();
  setTimeout("waktu()", 1000);
  document.getElementById("jam").innerHTML = waktu.getHours()+":";
  document.getElementById("menit").innerHTML = waktu.getMinutes()+":";
  document.getElementById("detik").innerHTML = waktu.getSeconds();
}
waktu();

let cardElement = document.querySelector(".card");

cardElement.addEventListener("click", flip);

function flip(){
  cardElement.classList.toggle("flipped")
}

function startTime() {
    var weekday = new Array();
    weekday[0] =  "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var d = today.getDate();
    var y = today.getFullYear();
    var wd = weekday[today.getDay()];
    var mt = month[today.getMonth()];
  
    m = checkTime(m);
    s = checkTime(s);
                    document.getElementById('date').innerHTML =
    d;
 document.getElementById('day').innerHTML =
    wd;
 document.getElementById('month').innerHTML =
    mt + "/" + y;
    
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
    </script>
  </body>
</html>