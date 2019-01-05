var exitTableDetails = document.getElementById('exitIcon');

exitTableDetails.addEventListener("click", hideTableDetail);

function hideTableDetail(){
    document.getElementById('detailsInventoryCont').style.display = "none";
}