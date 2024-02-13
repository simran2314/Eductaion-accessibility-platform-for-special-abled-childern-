<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="reg.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>iEducation - Education for Everyone</title>
</head>

<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  .button {
    border-radius: 10px;
    padding: 2px;
    background-color: blue;
    color: #fff;
    height: 35px;
    line-height: 35px;
    width: 100%;
    border: none;
    outline: none;
    font-size: 18px;
    cursor: pointer;
    margin-bottom: 10px;

  }

  .button:hover {
    opacity: 0.6;
  }

  @media(max-width: 480px) {
    .container {
      width: 100%;
    }

    .input-name {
      width: 100%;
      padding: 8px 0 40px;
      margin-bottom: 10px;
    }

    .input-name span {
      padding: 0;
      margin: 0;
    }

    .form-container {
      border: 2px solid;
      width: 95%;
    }
  }

  body {
    font-size: 14px;
    background: #f2f2f2;
    background-color: rgb(199, 199, 252);
  }

  .container {
    background: white;
    width: 500px;
    padding: 17px;
    margin: 15px auto;
    border-top: 5px solid rgb(55, 55, 63);
    box-shadow: 0 0 7px 5px rgba(21, 1, 95, 0.5);
    background-color: rgb(147, 147, 236);
  }

  .container h1 {
    font-size: 24px;
    line-height: 24px;
    padding: 10px;
    text-align: center;
  }

  .input-name {
    width: 90%;
    position: relative;
    margin: 29px auto;
  }

  .lock {
    padding: 8px 11px;
  }

  .name {
    width: 45%;
    padding: 8px 0 8px 40px;
    text-decoration-color: blue;
  }

  .input-name span {
    margin-left: 35px;
  }

  .text-name {
    width: 100%;
    padding: 8px 0 8px 40px;
  }

  .input-name i {
    position: absolute;
    font-size: 18px;
    color: blue;
    border-right: 1px solid #cccccc;
    padding: 10px;
  }

  .text-name,
  .name {
    border: 1px solid #cccccc;
    outline: #bd02d6;
  }

  .text-name:focus,
  .name:focus {
    background-color: #fafafa;
  }

  .text-name:hover,
  .name:hover {
    border: 1px solid black;
  }

  .radio-button {
    margin-right: 4px;
  }

  .district {
    display: inline-block;
    width: 100%;
    height: 35px;
    padding: 0px 15px;
    cursor: pointer;
    border: 1px solid #cccccc;
    color: #7b7b7b;
    border-radius: 0;
    background: white;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    transition: all 0.2s ease;
    color: black;

  }

  .district::-ms-expand {
    display: none;
  }

  .district:hover,
  .district:focus {
    color: black;
    background: #fafafa;
    border-color: black;
    outline: none;
    text-wrap: black;
  }

  .arrow {
    position: absolute;
    right: 15px;
    width: 0;
    height: 0;
    pointer-events: none;
    top: calc(50% - 4px);
    border-width: 8px 5px 0 5px;
    border-style: solid;
    border-color: #7b7b7b transparent transparent transparent;
  }

  .district:hover+.arrow,
  .district:focus+arrow {
    border-top-color: #040a06;
  }

  .check {
    margin-right: 15px;
    position: relative;
  }

  check::before {
    content: "";
    display: inline-block;
    width: 8px;
    height: 8px;
    margin-right: 8px;
    vertical-align: -2px;
    border: 2px solid #cccccc;
    padding: 2.5px;
  }

  .popup {
    width: 400px;
    background: white;
    border-radius: 6px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%) scale(0.1);
    text-align: center;
    padding: 0 30px 30px;
    color: #333;
    visibility: hidden;
    transition: transform 0.4s, top 0.4s;
  }

  .open-popup {
    visibility: visible;
    top: 50%;
    transform: translate(-50%, -50%) scale(1);
  }

  .popup img {
    width: 100px;
    margin-top: -50px;
    border-radius: 50%;
    box-shadow: 0 2px rgba(0, 0, 0, 0.2);
  }

  .popup h2 {
    font-size: 38px;
    font-weight: 500;
    margin: 30px 0 10px;
  }

  .popup button {
    width: 100%;
    margin-top: 50px;
    padding: 10px 0;
    background: #6fd649;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 5px rgba(0, 0, 0, 0.2);
  }
</style>

<body>
  <!-- Your HTML body... -->
  <div class="container">
    <h1><b>Registration form </b></h1>
    <div class="form-container">
      <form onsubmit="submitForm(event)" action="#" method="POST">
        <div class="input-name">
          <i class="fa fa-user"></i>
          <input type="text" id="firstName" placeholder="First Name" class="name" required name="fname">
          <span>
            <i class="fa fa-user"></i>
            <input type="text" id="lastName" placeholder="Last Name" class="name" required name="lname">
          </span>
        </div>
        <div class="input-name">
          <i class="fa fa-envelope email"></i>
          <input type="email" id="email" placeholder="Email" class="text-name" required name="mail">
        </div>
        <div class="input-name">
          <i class="fa fa-lock lock"></i>
          <input type="password" id="password" placeholder="Generate Password" class="text-name" name="psd" required>
        </div>
        <div class="input-name">
          <input type="radio" class="radio-button" name="gender" value="Male" required name="r1">
          <label style="margin-right:10px; font-size: 18px;">Male</label>
          <input type="radio" class="radio-button" name="gender" value="Female" required name="r2">
          <label style="font-size: 18px;">Female</label>
        </div>
        <div class="input-name">
          <select id="district" class="district" required name="choose">
            <option value="null">select</option>
            <option value="Udhampur">Udhampur</option>
            <option value="Kathua">Kathua</option>
            <option value="Budgame">Budgame</option>
            <option value="Reasi">Reasi</option>
          </select>
          <div class="arrow"></div>
        </div>
        <div class="input-name">
          <input type="checkbox" id="terms" class="check-button" required>
          <label class="check">I Accept the terms and conditions</label>
        </div>
        <div class="input-name">
          <input type="submit" class="button" value="Register" name="submit">
          <div class="popup" id="popup">
            <img src="img/submit.png">
            <h2> Thank You!</h2>
            <p>Your data is submitted successfully<br>Thanks!</p>
            <button type="button" onclick="closePopup()">OK</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    function submitForm(event) {
      event.preventDefault(); // Prevent the default form submission behavior

      var firstName = document.getElementById('firstName').value;
      var lastName = document.getElementById('lastName').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var gender = document.querySelector('input[name="gender"]:checked');
      var district = document.getElementById('district').value;
      var terms = document.getElementById('terms');

      if (firstName !== '' && lastName !== '' && email !== '' && password !== '' && gender && district !== '' && terms.checked) {
        showThankYouPopup();
      } else {
        showFillAllFieldsPopup();
      }
    }

    function showThankYouPopup() {
      var popup = document.getElementById('popup');
      popup.classList.add('open-popup');
    }

    function showFillAllFieldsPopup() {
      alert('Please fill in all required fields.');
    }

    function closePopup() {
      var popup = document.getElementById('popup');
      popup.classList.remove('open-popup');
      location.reload();
    }

  </script>

</body>
</html>


