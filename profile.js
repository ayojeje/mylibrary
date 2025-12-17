let Sn = 1;

init()

function init() {
  fetch("profile.php").then((res) => {
    return res.json()
  }).then(data => {
    displayAll(data)
  })
}

function displayAll(data) {
  let tbody = document.getElementById("tbody")
  tbody.innerHTML = ""

  data.forEach((d) => {
    displaySingleData(d)
  });

}

let tbody = document.getElementById("tbody")
let tRow = document.createElement("tr")
let tdSn = document.createElement("td")
let tdfname = document.createElement("td")
let tdusername = document.createElement("td")
let tdemail = document.createElement("td")


tdSn.appendChild(document.createTextNode(Sn++))
tdfname.appendChild(document.createTextNode(data.fullname))
tduserame.appendChild(document.createTextNode(data.username))
tdemail.appendChild(document.createTextNode(data.email))

tRow.appendChild(tdSn)
tRow.appendChild(tdfname)
tRow.appendChild(tdusername)
tRow.appendChild(tdemail)
tbody.appendChild(tRow)





let firstnameElm = document.getElementById("fullmame")
let lastnameElm = document.getElementById("username")
let emailElm = document.getElementById("email")
let editElm = document.getElementById("editId")



document.getElementById("editForm").addEventListener("submit", updateUser)

function updateUser(e) {
  e.preventDefault()

  let url = "profile.php"
  let apiCall = fetch(url, {
    method: "PUT",
    body: JSON.stringify({
      firstname: fullnameElm.value,
      firstname: usernamenameElm.value,
      firstname: emailElm.value,
      id: editElm.value
    })
  })
  apiCall.then(res => {
    return res.json();
  }).then(data => {
    if (data.success) {
      alert("User successfully update!")
      init()
    }
  })

}








