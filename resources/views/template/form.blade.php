<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
     <body>
        <h2>Buat Account Baru</h2>
        <h3>Sign Up Form</h3>
        <form method="GET" action="{{route('welcome') }}">

        <p>First name:</p>
        <input type="text">
        <p>Last name:</p>
        <input type="text">

        <p>Gender</p>
        <input type="radio" name="jenis_kelamin" value="Male">Male<br>
        <input type="radio" name="jenis_kelamin" value="female">Female<br>

        <p>Nationality</p>
        <select nama="country">
            <option value="Indonesian">Indonesian</option>
            <option value="English">English</option>
            <option value="Japan">Japan</option>
            <option value="Korea">Korea</option>
        </select>

        <p>Language Spoken</p>
        <input type="checkbox">
        <label>Bahasa Indonesia</label><br>
        <input type="checkbox">
        <label>English</label><br>
        <input type="checkbox">
        <label>other</label><br>

        <p>Bio</p>
        <textarea name="bio" id="" cols="30" rows="10"></textarea>
        <br>
        <button type="submit"> Sign Up</button>
</body>
</html>