<doctype !html>
	<title>FORMS</title>
	<head>
	<h1>this is my login form</h1></head>
	<body>
		<form action="result.html" methode="GET" enctype="multipart/form-data">
		
<div>
	<label for ="Name">Name</label>
<input  type="text" name="NAME IS" id="Name" required>
</div>
		
<div>
	<label for ="email">Email</label>
<input  type="email" name="Email IS" id="Email" placeholder="put your email" required>
</div>

<div>
	<label>Pasword</label>
<input  type="password" name="PASWORD IS" placeholder="put strong pasword" required>
</div>
		
<div>
	<label for ="age">Age</label>
<input  type="number" name="AGE IS" id="age" min="10" max="30" step="1">
</div>
		
<div>
	<label for ="date">Birthdate</label>
<input  type="date" name="DATEOFBIRTH IS" id="Birthdate" required>
</div>
<div>
	SUBJECTS
	<div>
		<lable for="chemistry">Chemistry</lable>
		<input type="checkbox" name="chemistry" id="chemistry">
	</div>
		<div>
		<lable for="math">Math</lable>
		<input type="checkbox" name="math" id="math">
	</div>
	<div>
		<lable for="english">English</lable>
		<input type="checkbox" name="english" id="english">
	</div>
	<div>
		<lable for="biology">Biology</lable>
		<input type="checkbox" name="biology" id="biology">
	</div>
</div>
<div>
	GENDER
	<div>
		<lable for="male">Male</lable>
		<input type="radio" name="gender" id="gender" value="male">
	</div>
<div>
		<lable for="female">Female</lable>
		<input type="radio" name="gender" id="gender" value="female">
	</div>
	</div>
<div>
	<lable for"accesorries">ACCESSORIES</lable>
	<select name="accesorries" id="accesorries" multiple>
	<option value="bag">Bag</option>
	<option value="pens">Pens</option>
	<option value="copies">Copies</option>
	<option value="ink">Ink</option>
</select>
</div>
<div>
	<label for="about yourself">About yourself </label>
	<textarea id="about yourself" name="about yourself" placeholder="tell us something interesting about yourself"></textarea>
</div>
<div>
	<label for="phone">Phone No</label>
	<input type="tel" name="phone" id="phone"
	</div>
	<div>
	<label for="color">Color for idcard</label>
	<input type="color" name="color" id="color"
	</div>
<div>
	<lable for="file">File</lable>
	<input id="file" type="file" name="file">
	</div>
<div>
	<button type="reset">want to reset form</button>
	<button type="Submit">letsSubmit</button>
	<button> want to see form
		<a herf="result.html">next page</a></button>
</div>
</form>
	</body>