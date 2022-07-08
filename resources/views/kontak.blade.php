<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style untuk inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style untuk bagian container/contact  */
.container {
  border-radius: 5px;
  background-color: #fab536;
  padding: 10px;
}

/* Buat dua kolom yang berfloat di samping satu sama lain */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Hapus floats setelah columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout -ketika layar kurang dari 600px lebarnya, buat dua kolom bertumpuk satu sama lain, bukan di samping satu sama lain */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Jika ada yang bisa kami bantu bisa hubungi kami:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="https://dosenit.com/wp-content/uploads/2021/03/google_maps.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Negara</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Indonesia</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subjek</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>
