<?php
require 'Filebase/vendor/autoload.php';
session_start();

//database
$database = new \Filebase\Database([
    'dir' => 'Filebase/Database/users',
	'backupLocation' => 'Filebase/Database/Backup'
]);
if(isset($_SESSION['username']))
{
   $title = "<center><h2> Hello, ".$_SESSION['username']."!</h2></center>";
   $Name = "<h2>".$_SESSION["firstName"]. " ".$_SESSION["lastName"]."</h2>";
   $Finance = $_SESSION["financePref"];
   $FitNutr = $_SESSION["fitNutrPref"];
   $EduPro = $_SESSION["eduProfPref"];
   $button1 = "<a href='Profile.php' class='mbloginbtn'>Profile</a>";
   $button2 = "<a href='PHP/LogOut.inc.php' class='mbloginbtn'>Log Out</a>";
   $usrname = $_SESSION["username"];
   $user = $database->get($usrname);
   $_SESSION["hasPfp"] = $user->hasProfilePicture;
   if ($_SESSION["hasPfp"] == true) {
   	$profilePicLink = $user->profilePicture;
   }

   $_SESSION["userLocalCal"] = $user->userID;

}
else//should not go here for any reason but good for precautionary measures
{
	$title = "<h1> Hello USER</h1>";
	$Name = "<h3>DEFAULT</h3>";
	$button1 = "<a href='Login.php' class='mbloginbtn'>Login</a>";
	$button2 = "<a href='SignUp.html' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}

//Profile Picture
///////////////////////////////////////////////////////////////////////////////////////
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]))
{

//img upload code
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false)
  {
    $uploadOk = 1;
  }
  else
  {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
else
{
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
	{
			if($database->has($_SESSION["username"]))
			{
				$user->profilePicture = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
				$profilePicLink = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
				$user->hasProfilePicture = true;
				$_SESSION["hasPfp"] = true;
				$user->save();
			}
	}
	else
	{
    echo "Sorry, there was an error uploading your file.";
    }
}
}

?>
<!DOCTYPE html>
<html>

<head>

<title> Profile </title>
<link rel="stylesheet" type = "text/css" href="home_css/Sign_Up_CSS.css">
<link rel="stylesheet" type = "text/css" href="home_css/menubar+footerCSS.css"/>
<style type="text/css">
	.float-container
	{
		 display: flex;
  justify-content: space-around;
	}
    .Profile
    {
    	outline-style: solid;
      	outline-color: black;
      	width: 25%;
      	border: 5px solid #cc6699;
      	box-shadow: 0 5px 15px;
      }
      .ScheduleBuilder
      {
      	outline-style: solid;
      	outline-color: black;
      	width: 70%;
      	border: 5px solid #3399ff;
      	box-shadow: 0 5px 15px;
      }
      h1
      {
      	font-family: Arial Narrow, sans-serif;
      }

			input[type="submit"] {
			width: 50%;
			background-color: #3399ff;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			}
		input:hover 
		{
			background-color: #0033cc;
		}
		input#fileToUpload{
			display: none;
		}
		input#fileToUpload + label{
			color: white;
			background-color: #3399ff;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input#fileToUpload + label:hover{
			background-color: #0033cc;
		}

		img{
			margin-top: 10px;
		}
		.frame
		{
			width: 250px;
			height: 250px;
			border: 3px solid #ccc;
			background: #eee;
			margin: auto;
			padding: 15px 10px;
		}
		.calendar {
				width:820px;
				height: 420px;
				display: flex;
			}

			.title {
				width: 700px;
				height: 210px;
				background: #9ad3bc;
				position: relative;
				text-align: center;
			}

			.title #left {
				width: 70px;
				height: 210px;
				color: #456268;
				position: absolute;
				text-decoration: none;
				left: 0px;
				margin-top: 0px;
				text-align: center;
				line-height: 210px;
			}

			.title #right {
				width: 70px;
				height: 210px;
				color: #456268;
				position: absolute;
				text-decoration: none;
				right: 0px;
				margin-top: 0px;
				text-align: center;
				line-height: 200px;
			}

			.title #left:hover {
				background-color: #79a3b1;
			}

			.title #right:hover {
				background-color: #79a3b1;
			}

			.title #now {
				position: absolute;
				top: 50%;
				margin-top: -20px;
				margin-left: -40px;
				color: #456268;
			}

			.week {
				width: 100px;
				height: 30px;
				background-color: #456268;
				color: #fcf8ec;
				float: left;
				text-align: center;
				line-height: 30px;
			}

			.day {
				width: 100px;
				height: 30px;
				background-color: #d0e8f2;
				color: #456268;
				float: left;
				text-align: center;
				line-height: 30px;
			}
			.calendarLf{
				width: 700px;
			}

			.note{
				width: 500px;
				margin-left: 20px;
			}
			.note>ul{
				padding-left: 20px;
			}
			#ulOb{
			width: 580px;
			}
		ul{
			background-color: #d0e8f2;
  			width: 500px;
  			height: 400px;
 			border: 1px dotted black;
  			overflow: auto;
  			
		}
		li{
			padding-bottom:10px;

		}
		


</style>
</head>

<body>
<nav class="mbHeadernav">
			<div class="mbtablediv">
				<table>
					<tr>
						<td>
							<img src="home_img/potentiallogo.png" alt="logo" style="width:50px;height:50px; float: left;">
						</td>
						<td>
							<a href="HomePage.php" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
						</td>
						<td class="mbheadertd"  style="padding-left: 50px;">
							<a href="Nutrition/Fitness&Nutrition.html" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

						</td>
						<td class="mbheadertd">
							<a href="Education/education.html" class="mbheaderlinkanchors"><p class="mbheaderlinks">Education & Professional Life</p></a>
						</td>
						<td class="mbheadertd">
							<a href="finances/financepage.html" class="mbheaderlinkanchors"><p class="mbheaderlinks">Finances</p></a>
						</td>
					</tr>
				</table>
			</div>
			<div id="mbloginsignupsdiv">
						<?php
						echo "$button1";
						?>
						<?php
						echo "$button2";
						?>
			</div>
		</nav>

<?php
	echo "$title";
?>
<div class="float-container">
<div class="Profile">
	<?php
	echo "<center>$Name</center>";
	if(isset($_SESSION["hasPfp"]) && $_SESSION["hasPfp"] == true)
	{
		echo "<div class='frame'><center><img src= 'uploads/$profilePicLink' alt='User pf pic' class='rounded-circle' height='200' width='200'></center></div>";
	}
	else
	{
		echo "<div class='frame'><center><img src='home_img/default.png' alt='Default' class='rounded-circle' height='200' width='200'></center></div>";
	}
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<br>
		<center><input type="file" name="fileToUpload" id="fileToUpload">
		<label for="fileToUpload">choose profile picture</label></center>
		<br>
		<center><input type="submit" value="upload Image" name="submit"></center>
	</form>

	<?php
	echo "<hr size='8' width='101%' color=#3399ff>";
	if(0 != $Finance)
	{
		echo "<h4>Finance profile: </h4>";
        echo "<a href='FinanceProfile.php'>Finance Profile</a><br>
        <hr size='8' width='101%' color=#cc6699>";

    }
    
    if(0 != $FitNutr)
    {
    	echo "<h4>Fitness and Nutrition profile: </h4>";
    	echo "<a href='FitnessAndNutritionProfile.php'>Fitness and Nutrition Profile</a><br>
    	<hr size='8' width='101%' color=#3399ff>";
    }
    
    if(0 != $EduPro)
    {
    	echo "<h4>Education/Professional profile: </h4>";
        echo "<a href='EducationAndProProfile.php'>Education/Professional Profile</a><br>
        <hr size='8' width='101%' color=#cc6699>";
    }
    

    ?>
</div>
<div class="ScheduleBuilder">
	<center><h3> Event Tracker Memo </h3></center>

<div class="calendar">
    <!--显示日期部分-->
    <div class="calendarLf">
      <div class="title">
        <a id="left" href="#"><</a>
        <span id="now">November<br>2017</span>
        <a id="right" href="#">></a>
      </div>
      <div>
        <div class="week">Mo</div>
        <div class="week">Tu</div>
        <div class="week">We</div>
        <div class="week">Th</div>
        <div class="week">Fr</div>
        <div class="week">Sa</div>
        <div class="week">Su</div>
      </div>
      <div id="days">
        <div class="day" id="day1"></div>
        <div class="day" id="day2"></div>
        <div class="day" id="day3"></div>
        <div class="day" id="day4"></div>
        <div class="day" id="day5"></div>
        <div class="day" id="day6"></div>
        <div class="day" id="day7"></div>

        <div class="day" id="day8"></div>
        <div class="day" id="day9"></div>
        <div class="day" id="day10"></div>
        <div class="day" id="day11"></div>
        <div class="day" id="day12"></div>
        <div class="day" id="day13"></div>
        <div class="day" id="day14"></div>

        <div class="day" id="day15"></div>
        <div class="day" id="day16"></div>
        <div class="day" id="day17"></div>
        <div class="day" id="day18"></div>
        <div class="day" id="day19"></div>
        <div class="day" id="day20"></div>
        <div class="day" id="day21"></div>

        <div class="day" id="day22"></div>
        <div class="day" id="day23"></div>
        <div class="day" id="day24"></div>
        <div class="day" id="day25"></div>
        <div class="day" id="day26"></div>
        <div class="day" id="day27"></div>
        <div class="day" id="day28"></div>

        <div class="day" id="day29"></div>
        <div class="day" id="day30"></div>
        <div class="day" id="day31"></div>
        <div class="day" id="day32"></div>
        <div class="day" id="day33"></div>
        <div class="day" id="day34"></div>
        <div class="day" id="day35"></div>

        <div class="day" id="day36"></div>
        <div class="day" id="day37"></div>
        <div class="day" id="day38"></div>
        <div class="day" id="day39"></div>
        <div class="day" id="day40"></div>
        <div class="day" id="day41"></div>
        <div class="day" id="day42"></div>
      </div>
    </div>
    <div class="note">
      <ul id="ulOb">

      </ul>
      </div>
  </div>
</div>
</div>
<div class="homepagefooter">
		<div class="footerdiv">
			<h1 class="footerheading">Start with the change now</h1>
			<div class="EmailAddressDiv">
				<input type="text" placeholder="Email Address" id="EmailAddressInput">
				<a href="" class="beginnow">Begin Now</a>
			</div>

		</div>

		<div class="footerlinkswrapper">
			<div class="footerlinksdiv">
				<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Sections</p>
				<p><a href="">Education</a></p>
				<p><a href="">Finances</a></p>
				<p><a href="">Health And Fitness</a></p>
			</div>
			<div class="footerlinksdiv">
				<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Go To</p>
				<p><a href="">Sign in my account</a></p>
				<p><a href="">Schedule Builder</a></p>
			</div>
			<div class="footerlinksdiv">
				<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">About us</p>
				<p><a href="">Contact</a></p>
				<p><a href="">FAQ</a></p>
				<p><a href="">Account</a></p>
			</div>
			<div class="footerlinksdiv">
				<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Why us?</p>
				<p><a href="">Our Values</a></p>
				<p><a href="">Our Mission</a></p>
			</div>
			<div class="footerlinksdiv">
				<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Follow us on</p>
				<p><a href="">Twitter</a></p>
				<p><a href="">Instagram</a></p>
				<p><a href="">Facebook</a></p>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
       var note = new Array;
       var str="";
        // 如果存在缓存需要先加载列表
        <?php $str = "'my_note".$_SESSION["userLocalCal"]."'"; ?>
        if (localStorage.getItem(<?php echo "$str"; ?>))
        {
        //先获取localStorage.getItem("my_note")的内容，转换为数组，以逗号为标志分开
        str= localStorage.getItem(<?php echo "$str"; ?>);
        note = str.split(",");
        //缓存的note显示
        for(i=0;i<note.length;i++)
        {
          addli(note[i]);
        }

        }

      var now = document.getElementById('now');
      var left = document.getElementById('left');
      var right = document.getElementById('right');
      var days = document.getElementById("days");

      var monthLetter = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
      var nowDay = new Date();
      var thisYear = nowDay.getFullYear(); //获取当前年份
      var thisMonth = nowDay.getMonth() + 1; //获取当前月份
      var today = nowDay.getDate(); //获取当前号数

      var dayNum = today.toString(); //用于变更操作
      var changeYear = thisYear;
      var changeMonth = thisMonth;
      var changeDay = dayNum;

      function refresh() { //刷新页面
        for(var i = 1; i <= 42; i++) {
          var Rday = document.getElementById("day" + i);
          Rday.innerHTML = " ";
          Rday.style = "backgroud-color:#eeeeee";
        }
      }

      function printDays(year, month) { //显示当前月的信息
        refresh();
        var nowMonthStartDay = new Date(year, month - 1, 1).getDay(); //当前月第一天是周几
        if(nowMonthStartDay == 0) {
          nowMonthStartDay = 7;
        }
        var numberOfDaysInMonth = new Date(year, month, 0).getDate(); //当前月有多少天
        now.innerHTML = " ";
        now.innerHTML = monthLetter[month - 1] + '</br>' + year; //改变title的内容
        for(var i = 1, j = nowMonthStartDay; i <= numberOfDaysInMonth; i++, j++) { //判断变色的日期
          var Day = document.getElementById("day" + j);
          Day.innerHTML = "" + i;
          if(year == thisYear && month == thisMonth && i.toString() == dayNum) { //当前日期一直是绿色
            Day.style = "background-color:#1abc9c";
          }
          if(i.toString() == changeDay) { //选中的符合要求的日期显示绿色
            Day.style = "background-color:#1abc9c";
          }
        }
      }

      printDays(thisYear, thisMonth);

      left.onclick = function() {
        if(changeMonth == 1) {
          changeYear--;
          changeMonth = 12;
        } else {
          changeMonth--;
        }
        changeDay = 0; //翻页的时候将选中的日期清空
        printDays(changeYear, changeMonth); //打印下一个月的日期
      }
      right.onclick = function() {
        if(changeMonth == 12) {
          changeYear++;
          changeMonth = 1;
        } else {
          changeMonth++;
        }
        changeDay = 0;
        printDays(changeYear, changeMonth);
      }
      days.onmouseover = function(e) { //鼠标移上变橘黄色
        if(e.target && e.target.nodeName == "DIV") {
          e.target.style = "background-color:orange";
        }
      }
      days.onmouseout = function(e) { //鼠标移走恢复原色
        if(e.target && e.target.nodeName == "DIV") {
          e.target.style = "background-color:#eeeeee";
        }
        printDays(changeYear, changeMonth); //确保点击的日期显示颜色
      }

      days.onclick = function(e) { //点击日期，判断选中的年，月，日是否大于当前日期

        var clickDay = e.target.innerHTML;

        var clickDays=changeYear+"-"+changeMonth+"-"+clickDay;
        var con;
        con=confirm("Do you want to write a memo?"); //在页面上弹出对话框
        if(con==true){
        debugger;
          var memo=prompt("Please enter memo",clickDays+":");
          memo=clickDays+":"+memo;
          if(str==""||str==null){
          str=memo;
          localStorage.setItem(<?php echo "$str"; ?>,memo+"="+ Date.parse(new Date()));
          }else{
          str=str+","+memo+"="+ Date.parse(new Date());
          localStorage.setItem(<?php echo "$str"; ?>,str);
          }
          addli(memo);
        }

      }



      function addli(litext){

           var sigle=litext.split("=");
           var ul=document.getElementById('ulOb');
          var li= document.createElement("li");
          //获取时间戳

          li.innerHTML=sigle[0]+'   '+'<a href="javascript:;" onclick="del(\''+litext+'\')">delete</a>';
          ul.appendChild(li);


      }

      function del(str){
      debugger;
        var noteStr= localStorage.getItem(<?php echo "$str"; ?>);
        var arrNote=noteStr.split(",");
        for(var i=0;i<arrNote.length;i++){
          if(str==arrNote[i]){
            arrNote.splice(i,1);
          }
        }
        var newNoteStr=arrNote.join(",");
        localStorage.setItem(<?php echo "$str"; ?>,newNoteStr);
        location.reload() ;
      }
    </script>

</html>
