<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Schedule Collection</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.1.8/js/intlTelInput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/geolocator/2.1.5/geolocator.min.js"></script>

  <style>
  @import url(https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.1.8/css/intlTelInput.css);

  </style>
   <style>
    @import url(https://fonts.googleapis.com/css?family=Oxygen:700,400,300);
$outline: #DADDE8;
$headings: #47536A;
$header: #646E8A;
$font: #A4A9C5;
$bg: #ECEEF4;
$hint: #ef6339;

html {
  background-color: #E8F0FA;
  font-family: 'Oxygen', sans-serif;
}

.container {
  max-width: 60rem;
  margin: 0 auto;
}

.card {
  border-radius: 5px;
  max-width: 40rem;
  margin: 0 auto;
  margin-top: 100px;
  min-height: 300px;
  background-color: #fff;
  font-weight: 700;
  text-transform: uppercase;
  box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.22), 0 40px 77px 0 rgba(0, 0, 0, 0.22);
}

.form__name {
  font-family: 'Oxygen';
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  font-weight: 900;
  background-color: #ef6339;
  padding: 20px;
  color: #fff;
  font-size: 1.2rem;
}

.time__container,
.message__container,
.contact__container {
  padding: 20px 50px;
}

.form__time,
.form__contact {
  color: $headings;
  font-size: 0.7rem;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  font-weight: 700;
  margin-top: 10px;
}

.date,
.time,
.timezone,
.cname,
.cnum,
.email {
  display: inline-block;
}

label {
  margin-bottom: 10px;
}

label,
input {
  display: block;
  width: 200px;
}

.time,
.cnum {
  margin-left: 20px;
}

.timezone,
.email {
  margin-top: 10px;
  display: block;
}

input {
  width: 200px;
}

.section {
  color: $headings;
}

.box {
  vertical-align: middle;
  cursor: default;
  user-select: none;
  display: inline-block;
  font-size: 10px;
  font-weight: 900;
  height: 20px;
  width: 20px;
  line-height: 20px;
  border-radius: 50px;
  border: 1px solid $headings;
  background-color: $headings;
  text-align: center;
  color: #fff;
}

span {
  vertical-align: middle;
  margin-left: 10px;
}

textarea {
  box-sizing: border-box;
  font-weight: normal;
  padding: 5px;
  margin-top: 20px;
  border: 1px solid $font;
  border-radius: 3px;
  outline: none;
  transition: border-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  color: $hint;
}

textarea:focus {
  border-color: $hint;
}

textarea::placeholder {
  font-weight: 300;
  color: #A9A9A9;
}

select {
  cursor: pointer;
  appearance: none;
  display: block;
  border: 1px solid $font;
  font-size: 0.8rem;
  padding: 12px 10px;
  background-color: transparent;
  color: $hint;
  outline: none;
  width: 60%;
}

select:active {
  border-color: $hint;
}

input {
  font-size: 0.8rem;
  font-weight: 700;
  letter-spacing: 0.5px;
  background: transparent;
  border: 1px solid $font;
  border-radius: 3px;
  outline: none;
  padding: 10px;
  transition: border-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  color: $hint;
}

input:-webkit-autofill {
  -webkit-box-shadow: 0 0 0px 1000px white inset;
  -webkit-text-fill-color: $hint;
}

input:focus {
  border-color: $hint;
}

input::placeholder {
  font-weight: 500;
  color: #A9A9A9;
}

input[type=date] {
  text-transform: uppercase;
}

.form__confirmation {
  padding: 10px 55px;
}
.location{
 margin-top: 20px;
  margin-bottom: 20px;
}

button {
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 700;
  letter-spacing: 1px;
  background-color: #ef6339;
  border: 1px solid $outline;
  color: #fff;
  padding: 18px;
  border-radius: 5px;
  outline: none;
  transition: background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  left: 120px;
  margin-top: 20px;
  margin-bottom: 20px;
}

button:hover {
  background-color: #232628;
  cursor: pointer;
}

button:active {
  background-color: #1083c8;
}

        </style>
</head>
<body>

<div class="container">
 <form action="{{ route('schedule.store') }}" method="POST">
 @csrf
    <div class="card">
        <div class="form__name">
            Scheduling Form
        </div>
        <div class="time__container">
            <div class="section">
                <div class="box">
                    1
                </div><span>Date &amp; Time</span>
            </div>
            <div class="form__time">
                <div class="date">
                    <label for="date">Date</label> <input name="date" id="date" type="date">
                </div>
                <div class="time">
                    <label for="time">Time</label> <input name="time" id="time" type="time">
                </div>
            </div>
        </div>
        <div class="message__container">
            <div class="section">
                <div class="box">
                    2
                </div><span>ADDITIONAL INFORMATION</span>
            </div>
            <textarea name="message" id="message" placeholder="e.g. Please do .. Also, .." cols="50" rows="5"></textarea>
        </div>
        <div class="contact__container">
            <div class="section">
                <div class="box">
                    3
                </div><span>Contact Information</span>
            </div>
            <div class="form__contact">
                <div class="cname">
                    <label for="cname">Name</label> <input value="{{ Auth::user()->name }}" name="cname" id="cname" type="text" readonly>
                </div>
                <div class="cnum">
                    <label for="cnum">Phone Number</label> <input value="{{ Auth::user()->cnum }}" type="tel" id="phone-number" name="cnum" readonly>
                    <script>
  var phoneInput = document.getElementById('phone-number');
  var phoneInputOptions = {
    initialCountry: 'ke',
  };
  intlTelInput(phoneInput, phoneInputOptions);
</script>
                </div>

                <div class="location">
                 <label for="city">City</label>
  <input name="city" value="{{ Auth::user()->city }}" id="city" type="text" readonly>
</select>
</div>
 <div class="location">
  <label for="estate">Estate</label>
  <input name="estate" value="{{ Auth::user()->estate }}" placeholder="e.g. kasarani" id="estate" type="text" readonly>
  <input name="status" id="status" value="pending" type="hidden" >
</div>
<div class="form__confirmation">
            <button type="submit">Confirm Information</button>
        </div>
           
        </div>
        
    </div>
     </form>
</div>

</body>
</html>
