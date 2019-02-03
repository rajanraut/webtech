<?php
include_once('config.php');
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$result = mysqli_query($mysqli,"UPDATE  SET register where id='$id' ");
	
}

?>
<form action="update.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h3 align="center" style="color:red;">Register As a Donor</h3>
    <p align="center">Please fill in this form to be a Donor:</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your Full Name" name="name" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" required>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

    <label for="state"><b>State</b></label>
      <select id="state" name="state" >
        <option value="select">Choose</option>
        <option value="state1">State 1</option>
        <option value="state2">State 2</option>
        <option value="state3">State 3</option>
        <option value="state4">State 4</option>
        <option value="state5">State 5</option>
        <option value="state6">State 6</option>
        <option value="state7">State 7</option>
      </select><br/><br/>
      <div id="gender">
      <label for="gender"><b>Gender</b></label>
      <input type="radio" name="sex" value="male" checked="male" /> Male
      <input type="radio" name="sex" value="female" /> Female
      <input type="radio" name="sex" value="other" /> Others
    </div><br/>

      <label for="weight"><b>Weight</b></label>
      <input type="text" placeholder="weight" name="weight" required><tr/>

      <label for="bloodgroup"><b>Blood Group</b></label>
      <select id="bloodgroup" name="bloodgroup">
      <option value="choose blood group">Choose your Blood Group</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="A+">A+</option>
      <option value="B+">B+</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="B-">B-</option>
      <option value="A-">A-</option>
    </select>
    <br/><br/>
    <label for="dateofbirth"><b>Date of Birth</b></label><br/><br/>
      <font class="frmcomments">(min: 18 yrs  max: 55 yrs)</font><br/>
      <br>
      <select id="day" name="day" style="width:80px;" class="smalltxt textbox"  size="1" >
    <option value="">DD
    <option value="1" >1					<option value="2" >2					<option value="3" >3
      <option value="4" >4					<option value="5" >5					<option value="6" >6
        <option value="7" >7					<option value="8" >8					<option value="9" >9
          <option value="10" >10					<option value="11" >11					<option value="12" >12
            <option value="13" >13					<option value="14" >14					<option value="15" >15
              <option value="16" >16					<option value="17" >17					<option value="18" >18
                <option value="19" >19					<option value="20" >20					<option value="21" >21
                  <option value="22" >22					<option value="23" >23					<option value="24" >24
                    <option value="25" >25					<option value="26" >26					<option value="27" >27
                      <option value="28" >28					<option value="29" >29					<option value="30" >30
                        <option value="31" >31				</select>
      <select id="month" name="month"style="width:80px;" class="smalltxt textbox"  size="1" >
      <option value="">MM
    <option value="1" >1					<option value="2" >2					<option value="3" >3					<option value="4" >4
      					<option value="5" >5					<option value="6" >6					<option value="7" >7					<option value="8" >8
                  <option value="9" >9					<option value="10" >10					<option value="11" >11
                  	<option value="12" >12
                      </select>
      <select id="year" name="year" style="width:100px;" class="smalltxt textbox"  size="1" >
      <option value="">YYYY
    <option value="1950" >1950					<option value="1951" >1951					<option value="1952" >1952
      <option value="1953" >1953					<option value="1954" >1954					<option value="1955" >1955
        <option value="1956" >1956					<option value="1957" >1957					<option value="1958" >1958
          <option value="1959" >1959					<option value="1960" >1960					<option value="1961" >1961
            <option value="1962" >1962					<option value="1963" >1963					<option value="1964" >1964
              <option value="1965" >1965					<option value="1966" >1966					<option value="1967" >1967
                <option value="1968" >1968					<option value="1969" >1969					<option value="1970" >1970
                  <option value="1971" >1971					<option value="1972" >1972					<option value="1973" >1973
                    <option value="1974" >1974					<option value="1975" >1975					<option value="1976" >1976
                      <option value="1977" >1977					<option value="1978" >1978					<option value="1979" >1979
                        <option value="1980" >1980					<option value="1981" >1981					<option value="1982" >1982
                        	<option value="1983" >1983					<option value="1984" >1984					<option value="1985" >1985
                            <option value="1986" >1986					<option value="1987" >1987					<option value="1988" >1988
                              <option value="1989" >1989					<option value="1990" >1990					<option value="1991" >1991
                      					<option value="1992" >1992					<option value="1993" >1993					<option value="1994" >1994
                      					<option value="1995" >1995					<option value="1996" >1996					<option value="1997" >1997
                                  <option value="1998" >1998					<option value="1999" >1999					<option value="2000" >2000
                                    <option value="2001" >2001					<option value="2002" >2002					<option value="2003" >2003
                                      <option value="2004" >2004					<option value="2005" >2005					<option value="2006" >2006
                                        <option value="2007" >2007					<option value="2008" >2008					<option value="2009" >2009
                                          <option value="2010" >2010					<option value="2011" >2011					<option value="2012" >2012
                                            <option value="2013" >2013					<option value="2014" >2014					<option value="2015" >2015
                                              option value="2016" >2016					<option value="2017" >2017					<option value="2018" >2018
                                                	<option value="2019" >2019
                                                  </option></select><br/><br/>
                                                  <font class="frmcomments">Date of birth will not be shown to others.
                                                     It's only for calculating your age.</font>

                                                  <br/><br/>
<label for="mobilenumber"><b>Mobile Number</b></label>
<input type="text" placeholder="Moblie Number" name="mobilenumber" required>
<br/><br/>

<label for="last_donate"><b>Date of Last Donation</b></label><br/>


  <select id="day" name="day1" style="width:80px;" class="smalltxt textbox"  size="1" >
    <option value="">DD
      <option value="1" >1					<option value="2" >2					<option value="3" >3					<option value="4" >4					<option value="5" >5					<option value="6" >6					<option value="7" >7					<option value="8" >8					<option value="9" >9					<option value="10" >10					<option value="11" >11					<option value="12" >12					<option value="13" >13					<option value="14" >14					<option value="15" >15					<option value="16" >16					<option value="17" >17					<option value="18" >18					<option value="19" >19					<option value="20" >20					<option value="21" >21					<option value="22" >22					<option value="23" >23					<option value="24" >24					<option value="25" >25					<option value="26" >26					<option value="27" >27					<option value="28" >28					<option value="29" >29					<option value="30" >30					<option value="31" >31								</select>

    <select id="month" name="month1" style="width:80px;" class="smalltxt textbox"  size="1" >
      <option value="">MM
        <option value="1" >1					<option value="2" >2					<option value="3" >3					<option value="4" >4					<option value="5" >5					<option value="6" >6					<option value="7" >7					<option value="8" >8					<option value="9" >9					<option value="10" >10					<option value="11" >11					<option value="12" >12								</select>


        <select id="month" name="year1" style="width:80px;" class="smalltxt textbox"  size="1" >
          <option value="">YYYY
            <option value="2019" >2019					<option value="2018" >2018					<option value="2017" >2017
              	<option value="2016" >2016					<option value="2015" >2015					<option value="2014" >2014
                  	<option value="2013" >2013					<option value="2012" >2012					<option value="2011" >2011
                    			<option value="2010" >2010					<option value="2009" >2009					<option value="2008" >2008
                            	<option value="2007" >2007					<option value="2006" >2006					<option value="2005" >2005
                                <option value="2004" >2004					<option value="2003" >2003					<option value="2002" >2002
                                  <option value="2001" >2001					<option value="2000" >2000					<option value="1999" >1999
                                    <option value="1998" >1998					<option value="1997" >1997					<option value="1996" >1996
                                      <option value="1995" >1995					<option value="1994" >1994					<option value="1993" >1993
                                        <option value="1992" >1992					<option value="1991" >1991					<option value="1990" >1990
                                          <option value="1989" >1989					<option value="1988" >1988					<option value="1987" >1987
                                            <option value="1986" >1986					<option value="1985" >1985					<option value="1984" >1984
                                              <option value="1983" >1983					<option value="1982" >1982					<option value="1981" >1981
                                                <option value="1980" >1980					<option value="1979" >1979					<option value="1978" >1978
                                                  <option value="1977" >1977					<option value="1976" >1976					<option value="1975" >1975
                                                    <option value="1974" >1974					<option value="1973" >1973					<option value="1972" >1972
                                                      <option value="1971" >1971					<option value="1970" >1970					<option value="1969" >1969
                                                        <option value="1968" >1968					<option value="1967" >1967					<option value="1966" >1966
                                                          <option value="1965" >1965					<option value="1964" >1964					<option value="1963" >1963
                                                            <option value="1962" >1962					<option value="1961" >1961					<option value="1960" >1960
                                                              <option value="1959" >1959					<option value="1958" >1958					<option value="1957" >1957
                                                                <option value="1956" >1956					<option value="1955" >1955					<option value="1954" >1954
                                                                  <option value="1953" >1953					<option value="1952" >1952					<option value="1951" >1951
                                                                    <option value="1950" >1950
                    </select><br/><br/>
                      <font class="frmcomments">(optional)
                      </font><br/><br/>

        <fieldset>
          <label for="eligibilitycheck"><b>Please check your eligibility to donate blood</b></label>

						<ul style="padding-left:30px;">
							<li>My hemoglobin is not less than 12.5 grams</li><br/>
							<li>I am free from acute respiratory diseases and skin diseases</li><br/>
							<li>I do not carry any disease transmissible by blood transfusion</li><br/>
							<li >I am not under medication for Malaria / Tuberculosis / Diabetes / Fits / Convulsions</li><br/>
						</ul>

            <h4>I havenot suffer from<font color="#FF0000">#</font></h4>
            <label class="container1">Kidney Diseases
              <input type="checkbox" checked="checked">
              <span class="checkmark"></span>
            </label>
            <label class="container1">Heart Diseases
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
            <label class="container1">AIDS
                <input type="checkbox">
            <span class="checkmark"></span>
            </label>
              <label class="container1">Cancer
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
            </label>
              <label class="container1">Hepatitis B, C
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
                <br/><br/>
						<div style="padding-left:10px;">
              <font color="#FF0000">#</font>
              <font class="frmcomments">Please consult your physician to check for eligibility.
              </font>
            </div>
            <br/><br/>
            <label>
            <input type="checkbox" checked=:"checked" name="eligibility" style="margin-bottom:15px">
              I have read the above eligibility criteria and confirm that I am eligible to donate blood.
            <br/><br/>
          </fieldset>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <br/>
    <p padding-right="10px">By creating an account you agree to our <a href="policy.htm" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" name="submit" value="submit"> Register</button>
