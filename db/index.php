<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Animated Login form</title>
    <link rel="stylesheet" href="animatedpage.css">
</head>

<body>
    <div class="center">
        <img src="svcklogo.jpeg" height="100px" width="100px" class="img1">
        <h1>SVCK STUDENT DATABASE</h1>
        <form method="POST" action="authentication.php" onsubmit="return validation()">
            <div class="txt_field">
                <input type="text" id ="user" name="user" required >
                <label>Roll Number</label>
            </div>
            <div class="txt_field">
                <input type="password" id ="pass" name="pass" required >
                <label>Password</label>
            </div>
            <input type="submit" value="Login">
        </form>

    </div>
	
	
	
	
	
	
	
	
	
	<style>
	
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
img
{
	display:block;
	margin-left:auto;
	margin-right:auto;
}
body{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#cee451, #64e2e2);
  height: 100vh;
  overflow: hidden;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 500px;
  height: 500PX;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}

.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 45px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}

	</style>
	
</body>

</html>