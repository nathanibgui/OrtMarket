const searchInput = document.querySelector("#search")
const searchResult = document.querySelector(".row")


let dataArray;

async function getUsers(){

  // const res = await fetch("https://randomuser.me/api/?nat=fr&results=50")
  const res = await fetch("http://192.168.1.190/API/articles.php")
  // console.log(res)
  const  results   = await res.json()
  console.log(results)
  dataArray = orderList(results)
  createUserList(dataArray)
}

getUsers()

function orderList(data) {

  const orderedData = data.sort((a,b) => {
    if(a.Title.toLowerCase() < b.Title.toLowerCase()) {
      return -1;
    }
    if(a.Title.toLowerCase() > b.Title.toLowerCase()) {
      return 1;
    }
    return 0;
  })
  
  return orderedData;
}


function createUserList(usersList) {

  usersList.forEach(user => {

    const listItem = document.createElement("div");
    listItem.setAttribute("class", "col mb-5");

    listItem.innerHTML = `
    <div class="card h-100" id="test">
    <!-- Product image-->
    <img class="card-img-top" src="${user.picture}" alt="..." />
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <p class="fw-bolder">${user.Title}</p>
            <!-- Product price-->
        
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <p id="prx" style="text-align:center">${user.prix}€</p>
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="../php/detail_prd.php?id=${user.id}">View options</a> <a href="../php/add_panier.php?idart=${user.id}"><button type="button" class="btn btn-success">+</button></a> </div>
      
    </div>
</div>
    `
    searchResult.appendChild(listItem);
  })

}

searchInput.addEventListener("input", filterData)

function filterData(e) {

  searchResult.innerHTML = ""

  const searchedString = e.target.value.toLowerCase().replace(/\s/g, "");

  const filteredArr = dataArray.filter(el => 
    el.Title.toLowerCase().includes(searchedString))
   

  createUserList(filteredArr)
}
