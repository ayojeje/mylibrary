
let Sn = 1;

init()

function init() {
    fetch("displaybooks.php", { method: 'GET' }).then((res) => {

        return res.json()
    }).then(data => {
        console.log(data)
        displayAll(data)
    })
}

function displayAll(data) {
    let tbody = document.getElementById("tbody")
    tbody.innerHTML = ""
    Sn = 1;

    data.forEach((d) => {
        displaySingleData(d)
    });

}


function displaySingleData(data) {

    let tbody = document.getElementById("tbody");
    let tRow = document.createElement("tr");
    let tdSn = document.createElement("td");
    let tdtitle = document.createElement("td");
    let tdauthor = document.createElement("td");
    let tdgenre = document.createElement("td");
    let tdcategories = document.createElement("td");
    let tdfileupload = document.createElement("td");



    tdSn.appendChild(document.createTextNode(Sn++));
    tdtitle.appendChild(document.createTextNode(data.title));
    tdauthor.appendChild(document.createTextNode(data.author));
    tdgenre.appendChild(document.createTextNode(data.genre));
    tdcategories.appendChild(document.createTextNode(data.categories));
    let img = document.createElement("img");
    img.src = "uploads/" + data.fileupload;
    img.width = 50;
    tdfileupload.appendChild(img);



    tRow.appendChild(tdSn);
    tRow.appendChild(tdtitle);
    tRow.appendChild(tdauthor);
    tRow.appendChild(tdgenre);
    tRow.appendChild(tdcategories);
    tRow.appendChild(tdfileupload);
    tbody.appendChild(tRow)
}

let form = document.getElementById("regbooks");

form.addEventListener("submit", function (e) {
    e.preventDefault();

    let formData = new FormData(form); // automatically includes file inputs

    fetch("displaybooks.php", {
        method: "POST",
        body: formData
    })
        .then(res => res.json())
        .then(data => {
            console.log(data);
            alert(data.success ? "Upload successful" : "Upload failed");
            form.reset();
            init();
        })
        .catch(err => console.log(err));
});



// function deleteUser(e) {
//     let deleteId = e.target.getAttribute("deleteId")
//     let url = "deleteUser.php"
//     let apiCall = fetch(url, {
//         method: "DELETE",
//         body: JSON.stringify({
//             id: deleteId
//         })
//     })
//     apiCall.then(res => {
//         return res.json();
//     }).then(data => {
//         if (data.success) {
//             // alert("User successfully deleted!")
//             init()
//         }
//     })
// }

// let firstnameElm = document.getElementById("editFname")
// let lastnameElm = document.getElementById("editLname")
// let emailElm = document.getElementById("editEmail")
// let categElm = document.getElementById("editCategory");
// let phoneNoElm = document.getElementById("editphoneNumber");
// let addressElm = document.getElementById("editAddress");
// let dobElm = document.getElementById("editDate");
// let editElm = document.getElementById("editId")


// document.getElementById("editForm").addEventListener("submit", updateUser)

// function updateUser(e) {
//     e.preventDefault()
//     let url = "register.php"
//     fetch(url, {
//         method: "PUT",
//         body: JSON.stringify({
//             action: "update",
//             firstName: firstnameElm.value,
//             lastName: lastnameElm.value,
//             email: emailElm.value,
//             category: categElm.value,
//             phoneNumber: phoneNoElm.value,
//             address: addressElm.value,
//             dob: dobElm.value,
//             id: editElm.value
//         })
//     })
// .then(res => {
//      return res.json();
// }).then(data => {
//     console.log(editElm.value);
//     if (data.success) {
//          alert("User successfully updated!");
//              firstnameElm.value = "";
//              lastnameElm.value = "";
//              emailElm.value = "";
//              categElm.value = "";
//              phoneNoElm.value = "";
//             addressElm.value = "";
//             dobElm.value = "";
//         init();
//     }
// })
// }
