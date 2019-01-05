var showBtn = document.getElementById('showContainersBtn');

showBtn.addEventListener("click", showContainerInventory);

function showContainerInventory(){
    document.getElementById('ordersinventoryContainer').style.display = "none";
    document.getElementById('containersInventoryCont').style.display = "block";
    document.getElementById('showOrdersBtn').style.display = "block";
    document.getElementById('showContainersBtn').style.display = "none";
    document.getElementById('navbar').style.maxWidth = "337.250px";
    document.getElementById('dashboardTextCont').style.paddingLeft = "404.688px";
    document.getElementById('searchfilterContainer').style.paddingLeft = "404.688px";
    document.getElementById('categoryFilter').disabled = "disabled";
}

var showOrd = document.getElementById('showOrdersBtn');

showOrd.addEventListener("click", showOrderInventory);

function showOrderInventory(){
    document.getElementById('ordersinventoryContainer').style.display = "block";
    document.getElementById('containersInventoryCont').style.display = "none";
    document.getElementById('showOrdersBtn').style.display = "none";
    document.getElementById('showContainersBtn').style.display = "block";
    document.getElementById('navbar').style.maxWidth = "100%";
    document.getElementById('dashboardTextCont').style.paddingLeft = "30%";
    document.getElementById('searchfilterContainer').style.paddingLeft = "30%";
    document.getElementById('categoryFilter').disabled = "";
}

var exitTableDetails = document.getElementById('exitIcon');

exitTableDetails.addEventListener("click", hideTableDetails);

function hideTableDetails(){
    document.getElementById('detailsInventoryCont').style.display = "none";
}