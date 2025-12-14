
let form = document.getElementById("reg");
form.addEventListener("submit", function (e) {
    e.preventDefault();
    alert(1)

    let fullnameinput = document.getElementById("fname");
    let usernameinput = document.getElementById("username");
    let emailinput = document.getElementById("email");
    let passwordinput = document.getElementById("pwd");


    fetch("reg2.php", {
        method: "POST",
        body: JSON.stringify({
            fullname: fullnameinput.value,
            username: usernameinput.value,
            email: emailinput.value,
            password: passwordinput.value,


        })

    }).then(res => {
        if (!res.ok) {
            return new Error(res.statusText)
        }
        return res.json();
    }).then(data => {
        console.log(data)
        window.location.href = "login.php";

    }).catch(err => {
        console.log(err)

    })

})

