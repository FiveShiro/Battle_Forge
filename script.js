document.addEventListener("DOMContentLoaded", function () {
    const nav = document.getElementById("nav");
    const navList = nav.querySelector("ul");
    const hamburgerIcon = nav.querySelector(".fa-bars");
    const closeButton = nav.querySelector(".closeOption");
  
    hamburgerIcon.addEventListener("click", function () {
      navList.classList.toggle("show");
    });
  

    closeButton.addEventListener("click", function (event) {
      event.preventDefault(); 
      navList.classList.remove("show");
    });
  

    navList.addEventListener("click", function (event) {
      if (
        event.target.tagName === "A" &&
        !event.target.parentElement.classList.contains("closeOption")
      ) {
        navList.classList.remove("show");
      }
    });
  });

function passwordMatching(){
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var message = document.getElementById("message");
    var registerForm = document.getElementById('registerForm');

    if(password.length !=0){
        if(password == confirmPassword){
            registerForm.submit();
        }
        else{
            message.textContent = "Password Do Not Match!";
            message.style.color = "red";
        }
    }
    else{
        alert("Fill in the Passwords Pls!");
        message.textContent = "";
    }
}

function showCommentskof() {
  var commentkof = document.getElementById("commentkof");
  commentkof.submit();
}

function showCommentsggs() {
  var commentggs = document.getElementById("commentggs");
  commentggs.submit();
}

  function showCommentsTekken8() {
    var commentTk8 = document.getElementById("commentTk8");
    commentTk8.submit();
  }

  function showCommentsUNIB() {
    var commentUNIB = document.getElementById("commentUNIB");
    commentUNIB.submit();
  }

  function showCommentssf6() {
    var commentsf6 = document.getElementById("commentsf6");
    commentsf6.submit();
  }

  function showCommentssf3() {
    var commentsf3 = document.getElementById("commentsf3");
    commentsf3.submit();
  }

  function showCommentsGBFRVR() {
    var commentGBFRVR = document.getElementById("commentGBFRVR");
    commentGBFRVR.submit();
  }

  function enableEdit() {
    var inputField = document.querySelector('.input-field');
    inputField.removeAttribute('readonly');
    inputField.focus();
}

document.addEventListener("DOMContentLoaded", function() {
  var navElement = document.getElementById("nav");
  if (!navElement.classList.contains("fadeIn")) {
      navElement.classList.add("fadeIn");
  }
});

document.addEventListener("DOMContentLoaded", function() {
  var element = document.getElementById("pfusnm");
  if (!element.classList.contains("fadeInMove")) {
      element.classList.add("fadeInMove");
  }
});

const avatarInput = document.getElementById('avatarInput');
    const avatarImg = document.getElementById('avatarImg');
    const changeAvatarBtn = document.getElementById('changeAvatarBtn');

    avatarInput.addEventListener('change', function(event) {
      const file = event.target.files[0];
      const reader = new FileReader();

      reader.onload = function(event) {
        avatarImg.src = event.target.result;
      };

      reader.readAsDataURL(file);
    });

    changeAvatarBtn.addEventListener('click', function() {
      avatarInput.click();
    });