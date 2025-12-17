let Sn = 1;

init()

function init() {
  fetch("displayreg.php").then((res) => {
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

function displaySingleData(data) {
  let deleteBtn = document.createElement("button")
  deleteBtn.appendChild(document.createTextNode("Delete User"))
  deleteBtn.setAttribute('deleteId', data.id)
  deleteBtn.addEventListener("click", deleteUser)

  let editBtn = document.createElement("button")
  editBtn.appendChild(document.createTextNode("Edit User"))
  editBtn.setAttribute('editId', data.id)
  editBtn.addEventListener("click", () => {
    editUser(data)
  })

  let tbody = document.getElementById("tbody")
  let tRow = document.createElement("tr")
  let tdSn = document.createElement("td")
  let tdfName = document.createElement("td")
  let tdlName = document.createElement("td")
  let tdEmail = document.createElement("td")
  let tddepartment = document.createElement("td")
  let tdDelete = document.createElement("td")
  let tdEdit = document.createElement("td")

  tdDelete.appendChild(deleteBtn)
  tdEdit.appendChild(editBtn)
  tdSn.appendChild(document.createTextNode(Sn++))
  tdfName.appendChild(document.createTextNode(data.firstname))
  tdlName.appendChild(document.createTextNode(data.lastname))
  tdEmail.appendChild(document.createTextNode(data.email))
  tddepartment.appendChild(document.createTextNode(data.department))
  tRow.appendChild(tdSn)
  tRow.appendChild(tdfName)
  tRow.appendChild(tdlName)
  tRow.appendChild(tdEmail)
  tRow.appendChild(tddepartment)
  tRow.appendChild(deleteBtn)
  tRow.appendChild(editBtn)
  tbody.appendChild(tRow)
}


function deleteUser(e) {
  let deleteId = e.target.getAttribute("deleteId")
  let url = "deleteUser.php"
  let apiCall = fetch(url, {
    method: "DELETE",
    body: JSON.stringify({
      id: deleteId
    })
  })
  apiCall.then(res => {
    return res.json();
  }).then(data => {
    if (data.success) {
      alert("User successfully deleted!")
      init()
    }
  })
}

let firstnameElm = document.getElementById("firstname")
let lastnameElm = document.getElementById("lastname")
let emailElm = document.getElementById("email")
let editElm = document.getElementById("editId")

function editUser(data) {
  firstnameElm.value = data.firstname
  lastnameElm.value = data.lastname
  emailElm.value = data.email
  editElm.value = data.id
  document.getElementById("editForm").classList.toggle('dnone')
}

document.getElementById("editForm").addEventListener("submit", updateUser)

function updateUser(e) {
  e.preventDefault()

  let url = "displayreg.php"
  let apiCall = fetch(url, {
    method: "PUT",
    body: JSON.stringify({
      firstname: firstnameElm.value,
      firstname: lastnameElm.value,
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








