function ShowSidebar(){
    document.getElementById('header').style.width = "30%";
    document.getElementById('logo').style.padding = "3% 33% 3% 0";
    document.getElementById('hideBtn').style.display = "block";
    document.getElementById('headerBtn').style.display = "none";
    document.getElementById('bottomSlider').style.display = "block";
    document.getElementById('orderSuccessMessage').style.paddingRight = "35%";
    document.getElementById('orderSuccessMessage').style.paddingLeft = "5%";
}
function HideSidebar(){
    document.getElementById('header').style.width = "0";
    document.getElementById('logo').style.padding = "3% 0 3% 0";
    document.getElementById('hideBtn').style.display = "none";
    document.getElementById('headerBtn').style.display = "block";
    document.getElementById('bottomSlider').style.display = "none";
    document.getElementById('orderSuccessMessage').style.paddingRight = "20%";
    document.getElementById('orderSuccessMessage').style.paddingLeft = "20%";
}