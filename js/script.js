const searchInput = document.querySelector("#search")
const searchResult = document.querySelector(".table-results")


let dataArray;

async function getUsers(){

  // const res = await fetch("https://randomuser.me/api/?nat=fr&results=50")
  const res = await fetch("http://192.168.1.190/API/users.php")
  // console.log(res)
  const  results   = await res.json()
  console.log(results)
  dataArray = orderList(results)
  createUserList(dataArray)
}

getUsers()

function orderList(data) {

  const orderedData = data.sort((a,b) => {
    if(a.Nom.toLowerCase() < b.Nom.toLowerCase()) {
      return -1;
    }
    if(a.Nom.toLowerCase() > b.Nom.toLowerCase()) {
      return 1;
    }
    return 0;
  })
  
  return orderedData;
}


function createUserList(usersList) {

  usersList.forEach(user => {

    const listItem = document.createElement("tr");
    // listItem.setAttribute("class", "table-item");

    listItem.innerHTML = `

    <th scope="row">${user.id}</th>
    <td>${user.Nom}</td>
    <td>${user.Prenom}</td>
    <td>${user.Mail}</td>
    <td>${user.cat}</td>
    <td><a href="../php/update_usr.php?id=${user.id}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
  </svg></a>&nbsp;&nbsp;<a href="../php/del_art.php?id=${user.id}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
  </svg></a><a href="../php/commande.liste.php?id=${user.id}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
  <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
</svg></a></td>
    
    `
    searchResult.appendChild(listItem);
  })

}

searchInput.addEventListener("input", filterData)

function filterData(e) {

  searchResult.innerHTML = ""

  const searchedString = e.target.value.toLowerCase().replace(/\s/g, "");

  const filteredArr = dataArray.filter(el => 
    el.Nom.toLowerCase().includes(searchedString))
   

  createUserList(filteredArr)
}
