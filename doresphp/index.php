<?php
$title = 'inde';
require_once 'includes/header.php';
?>
<h1 class= "text- center"> Registration for IT conference</h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form> 
    <div class="form-group">
        <label for="exampleInputFirstname1">First Name</label>
        <input type="name" class="form-control" id="exampleInputFirstnamefirst1" aria-describedby="nameHelp">
     <div class= "form-group">
        <label for="exampleInputLastnamefirst1">Last Name</label>
        <input type="Last name" class="form-control" id="exampleInputLastnamefirst1" aria-describedby="nameHelp">
     <div class= "form-group">
        <label for="exampleDateofbirth1">date of birth</label>
        <input type="date of birth" class="form-control" id="exampledateofbirth1" aria-describedby="nameHelp">
        
        <label for="start">Start date:</label>

<input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
 <div class="form-group">
    <label for="Exampleofspecialty">Specialty</label>
    <label type="Specialty" class="form-control" id="exampleofSpecialty1" aria-describedby="nameHelp">
        <option selected>Choose....</option>
        <option value="1">Database Admin</option>
        <option value="2">Software Developer</option>
        <option value="3"> Web Administrator</option>
        <option value="4"> Other</option>
</select>

 <div class="form-group">
        <label for="examplEmailaddress1">Email address</label>
        <input type="Email address" class="form-control" id="exampleEmailaddress1" aria-describedby="nameHelp">   
    <div class="form-group">
        <label for="examplecontactnumber1">contact number</label>
        <input type="contact number" class="form-control" id="exampleInputcontactnumber1" aria-describedby="nameHelp">
  </div>
</form>

<?php require_once 'includes/footer.php'?>