<!DOCTYPE html>
<html>
	<head>
		<title>Secure Password Generator</title>
		<meta name="" content="" />
		<link href="style.css" rel="stylesheet" type="text/css" />
				<script type="text/javascript">
				var error=0;
				var corrected=0;
				function checkPassCount(){
					if(document.getElementById("no-of-pass").value>1000){
						document.getElementById("errorAreaPassCount").style.display="block";
						error++;
						checkError();
					}
					else{		
						document.getElementById("errorAreaPassCount").style.display="none";
						corrected++;
						checkError();
					}
				}
				function checkPassLength(){
					if(document.getElementById("pass-length").value<=3||document.getElementById("pass-length").value>256){
						document.getElementById("errorAreaPassLength").style.display="block";
						error++;
						checkError();
					}
					else{		
						document.getElementById("errorAreaPassLength").style.display="none";
						corrected++;
						checkError();
						
					}
				}
				function getPass(){
					if(document.getElementById("no-of-pass").value>1){
						var passCount=document.getElementById("no-of-pass").value;
					}
					else{
						var passCount=false;
					}
					var length=document.getElementById("pass-length").value;
					var passCase=document.getElementById("pass-case").value;
					if(document.getElementById("numbers").checked){
						var numbers=document.getElementById("numbers").value;
					}else{
						var numbers=false;
					}
					if(document.getElementById("symbols").checked){
						var symbols=document.getElementById("symbols").value;
					}else{
						var symbols=false;
					}
					showLoader();
					var xmlhttp=new XMLHttpRequest();
					xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
							document.getElementById("gpbox").innerHTML=this.responseText;
							hideLoader();
						}
					};
					xmlhttp.open("GET","genpass.php?count="+passCount+"&len="+length+"&case="+passCase+"&num="+numbers+"&sym="+symbols+"&buster="+new Date().getTime(),true);
					xmlhttp.send();	
				}
				function showLoader(){
					document.getElementById("loader").style.display="block";
				}
				function hideLoader(){
					document.getElementById("loader").style.display="none";
				}
				function showBulk(){
					document.getElementById("passwordCount").style.display="inline-block";
				}
				function showSingle(){
					document.getElementById("passwordCount").style.display="none";
					document.getElementById("no-of-pass").value="";
				}
				function checkError(){
					if(corrected>error||corrected==error){
						document.getElementById("generatePassBtn").style.background="maroon";
							document.getElementById("generatePassBtn").style.color="#fff";
							document.getElementById("generatePassBtn").disabled=false;
							document.getElementById("generatePassBtn").style.border="none";
					}
					else if(error!=corrected){
						document.getElementById("generatePassBtn").style.background="#ddd";
							document.getElementById("generatePassBtn").style.color="#000";
							document.getElementById("generatePassBtn").style.border="1px solid #000";
							document.getElementById("generatePassBtn").disabled=true;
					}
				}
		</script>

	</head>
	<body>
		<div style="display: none;" id="loader">
			<img id="loader-image" src="load.gif" alt="Loading Preloader" />
		</div>
		<section id="generate-form">
			<div class="heading-area">
				<div class="container">
					<h1 class="main-head"> *** <span>strong_password_generator</span></h1>
				</div>
			</div>
			<div class="nav">
				<div class="container-nav">
						<a style="color: #fff; float: left; text-decoration: none; background: rgba(0,0,0,0.2); height: 33px; padding-top: 7px; font-family: calibri; font-size: 20px; text-align: center; color: #fff; width: 150px; cursor: pointer;" href="index.php">Home</a>
						<ul class="nav-menu">
							<li onClick="showSingle()"><span class="menu-items">Single Password</span></li>
							<li onClick="showBulk()"><span class="menu-items">Bulk Password</span></li>
						</ul>
				</div>
			</div>
			<div class="form-area">
			<div class="container-form-area">
				<form class="password-form" action="" method="">
						<div id="passwordCount" style="display: inline-block;" class="form-group">
						<div style="display: none;" id="errorAreaPassCount">
						<span>You cannot generate more than 1000 passwords due to performance reasons. Please contact administrator if you need assistance.</span><br/>
						</div>
							<label title="Choose How many passwords you want to generate. Please make sure, for performance reasons you are limited to only 10000 password counts per request." class="left" for="no-of-pass">Passwords</label>
							<input type="number" id="no-of-pass" class="form-control right" onChange="checkPassCount()" name="noOfPass" max="1000" min="1" value="" placeholder="Passwword Counts" />
							<!-- onChange="checkPassCount()" -->
						</div>
						<div class="form-group">
						<div style="display: none;" id="errorAreaPassLength">
						<span>Password Length Should be between 6 & 256 characters.</span><br/>
						</div>
						<label title="Password length should be a minimum of 6 characters and can be maximum extended to 256 characters. OWASP security Standard recommends a 160 character password format." class="left" for="pass-length">Password Length</label>
						<input class="form-control right" id="pass-length" name="pass-length" onChange="checkPassLength()" type="number" min="6" max="256" value="20" placeholder="Password Length" />
						<!-- onChange="checkPassLength()" -->
						</div>
						<div class="form-group">
						<label title="You can use upper case characters (or) lower case characters (or) a combination of both upper case and lower case characters!" class="left" for="pass-case">Password Case</label>
						<select class="form-control right" name="pass-case" id="pass-case">
							<option value="1">LOWER CASE</option>
							<option value="2">UPPER CASE</option>
							<option value="3">MIXED CASE</option>
						</select>
						</div>
					<div class="form-group">
						<label title="Your password will have letters or characters by default. However to make your password more secure you can add multiple rounds of characters, numbers as well as symbols." class="left" for="letters">Letters</label>
						<input checked disabled class="right" type="checkbox" name="letters" value="lo" class="form-control" id="letters"/>
					</div>
					<br/>
					<div class="form-group">
						<label title="Check to add numbers to your password." class="left" for="numbers">Numbers</label>
						<input class="right"checked type="checkbox" name="numbers" value="1" class="form-control" id="numbers"/>
					</div>
					<div class="form-group">
						<label title="Check to add Symbols to your password." class="left" for="symbols">Symbols</label>
						<input class="right" checked type="checkbox" name="symbols" value="1" class="form-control" id="symbols"/>
					</div>
					<div class="form-group">
						<button type="button" id="generatePassBtn" class="subbtn" onClick="getPass()"/>Generate Password</button>
					</div>
					
				</form>
				<div class="generated-result">
						<label for="gr">Generated Password <span id="write-msg-for-heading"></span></label><br/><br/>
						<textarea class="gpbox" id="gpbox" name="gp"></textarea>
						<br/>
						<br/>
			</div>
			</div>
		</section>

	</body>
</html>