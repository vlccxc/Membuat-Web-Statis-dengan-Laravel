<!DOCTYPE html>
<html>
<head>
	<title> Sign Up </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="form_body">
	<header id="form_header">
		<a href="Home" id="form_link"> Back </a>
		<h1 id="formH1"> Buat account Baru! </h1>
	</header>
	<h3 id="formH3"> Sign Up Form </h3>
	<form action="Welcome" method="POST">
		@csrf
		<table>
			<tr>
				<td> First name: </td>
			</tr>
			<tr>
				<td> <input type="text" name="firstname" id="firstname" placeholder="username"> </td>
			</tr>
			<tr>
				<td> Last name: </td>
			</tr>
			<tr>
				<td> <input type="text" name="lastname" id="lastname" placeholder="username"> </td>
			</tr>
			<tr>
				<td> Gender: </td>
			</tr>
			<tr class="gender">
				<td> <input type="radio" name="gender" value="male"> Male </td>
			</tr>
			<tr class="gender">
				<td> <input type="radio" name="gender" value="female"> Female </td>
			</tr>
			<tr class="gender">
				<td> <input type="radio" name="gender" value="other"> Other </td>
			</tr>
			<tr>
				<td> Nationality: </td>
			</tr>
			<tr>
				<td>
					<select>
						<option value="indonesian"> Indonesian </option>
						<option value="singaporean"> Singaporean </option>
						<option value="malaysian"> Malaysian </option>
						<option value="autralian"> Australian </option>
					</select>
				</td>
			</tr>
			<tr>
				<td> Languange Spoken: </td>
			</tr>
			<tr class="bahasa"> 
				<td> <input type="checkbox" name="bahasa" value="indonesia"> Bahasa Indonesia </td>
			</tr>
			<tr class="bahasa">
				<td> <input type="checkbox" name="bahasa" value="inggris"> English </td>
			</tr>
			<tr class="bahasa">
				<td> <input type="checkbox" name="bahasa" value="other"> Other </td>
			</tr>
			<tr>
				<td> Bio: </td>
			</tr>
			<tr>
				<td> <textarea id="bio" name="bio" rows="8" cols="30" placeholder="input some word"></textarea> </td>
			</tr>
		</table>
		<input type="submit" name="signUp" value="Sign Up" id="submit">
	</form>
</body>
</html>
