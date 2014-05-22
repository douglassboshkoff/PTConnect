<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
	</head>
	<body>
		<div id="mainform">
			<form>
				<label style="padding-right: 79px;">Name</label><input id="fname" type="text" value="Alex"/>
				<input id="lname" type="text" value="Gottwald"/></br></br>
				<label style="padding-right: 84px;">Email</label><input id="email" type="text" value="agottwald@parktudor.org"/></br></br>
				<label style="padding-right: 45px;">Password</label><input id="password" type="password" value="ptconnect1"/></br></br>
				<label>PT Grad Year</label><select id="gradyear">
					<option>PT Grad Year</option>
					<option>2017</option>
					<option>2016</option>
					<option>2015</option>
					<option>2014</option>
					<option>2013</option>
					<option>2012</option>
					<option>2011</option>
					<option>2010</option>
					<option>2010</option>
					<option>2010</option>
					<option>2009</option>
					<option>2008</option>
					<option>2007</option>
					<option>2006</option>
					<option>2005</option>
					<option>2004</option>
				</select></br></br></br>
				<label style="padding-right: 102px;">Bio</label><textarea id="bioEdit" rows="6"></textarea></br>
				<input id="saveButton" type="submit" value="Save" /></br></br>
			</form>
		</div>
		<div id="upload">
			<img src="profile.png"/><br>
			<button>Upload</button>
		</div>
	</body>
</html>
