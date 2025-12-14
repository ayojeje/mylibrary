let form = document.getElementById("regSubmit");
form.addEventListener("submit", function (e) {
    e.preventDefault();


    let emailInput = document.getElementById("email");
    let passwordInput = document.getElementById("password");
    console.log(passwordInput);

    fetch("loginn.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({

            email: emailInput.value,
            password: passwordInput.value
        })
    }).then(res => {
        if (!res.ok) {
            return new Error(res.statusText)
        }
        return res.json();
    }).then(data => {
        console.log(data);
        if (data.user) {
            document.getElementById("msg").innerHTML = data.message;
            msg.style.color = "green";
            location.href = "dashboard.php";
        } else {
            document.getElementById("msg").innerHTML = data.message;
            msg.style.color = "red";
        }
    })
    //   .catch(err=>{
    //     console.log(err);

    //       let error = err;
    //       console.log(error)
    //   })
})
