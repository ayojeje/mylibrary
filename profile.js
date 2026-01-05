
fetch("profile.php", { method: "GET" })
  .then((res) => res.json())
  .then((data) => {

    document.getElementById("fullname").innerHTML = data.fullname;
    document.getElementById("username").innerHTML = data.username;
    document.getElementById("email").innerHTML = data.email;
    //document.getElementById("id").innerHTML = res.id

  });





