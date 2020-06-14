function validation()
    {
      var username = document.getElementById("uname");
      var password = document.getElementById("pas");

      if(username.value.trim() == "")
     {
        alert("\n Username can't be blank.");
        username.focus();
        //uname.style.border = "solid 3px red";
        //document.getElementById("lab1").style.visibility="visible";
        return false;
      }
      else if(password.value.trim() == "")
     {
        alert("\n Password can't be blank.");
        password.focus();
        //uname.style.border = "solid 3px red";
        //document.getElementById("lab2").style.visibility="visible";
        return false; 
      }
      
      else
      {
        true;
      }
    }
    function validate()
    {
      var fname = document.getElementById("first");
      var lname = document.getElementById("last");
      var phone = document.getElementById("contact");
      var name = document.getElementById("user");
      var pwd = document.getElementById("pass");
      var cpwd = document.getElementById("cpass");
      var mail = document.getElementById("email");
      var regex = /^[7-9][0-9]{9}$/;
      var regx = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

      if(fname.value.trim() == "")
      {
        alert("\n Please enter First name.");
        fname.focus();
        return false;
      }

      else if(lname.value.trim() == "")
      {
        alert("\n Please enter Last name.");
        lname.focus();
        return false;
      }

      else if(phone.value.trim() == "")
      {
        alert("\n Please enter Contact Number.");
        phone.focus();
        return false;
      }

      else if(!regex.test(phone.value))
      {
        alert("\n Please enter a valid contact number");
        phone.focus();
        return false;
      }

      else if(mail.value.trim() == "")
      {
        alert("\n Please enter email address.");
        mail.focus();
        return false;
      }

      else if(!regx.test(mail.value))
      {
        alert("\n Please enter a valid email address.");
        mail.focus();
        return false;
      }

      else if(name.value.trim() == "")
      {
        alert("\n Please enter Username.");
        name.focus();
        return false;
      }

      else if(pwd.value.trim() == "")
      {
        alert("\n Please enter Password.");
        pwd.focus();
        return false;
      }

      else if(pwd.value.trim().length<5)
      {
          alert("\n Password too short.");
          pwd.focus();
        //uname.style.border = "solid 3px red";
        //document.getElementById("lab2").style.visibility="visible";
        return false;
      }

      else if(cpwd.value.trim() == "")
      {
        alert("\n Please confirm the password.");
        cpwd.focus();
        return false;
      }

      if((pwd.value) != (cpwd.value))
      {
        alert("\n Password did not match : Try Again.");
        cpwd.focus();
        return false;
      }
      else 
      {
        true;
      }
      
      
    }