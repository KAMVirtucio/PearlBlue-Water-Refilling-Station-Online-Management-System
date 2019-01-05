function ShowHeader(){
    document.getElementById('header').style.width = "30%";
    document.getElementById('logo').style.padding = "3% 33% 3% 0";
    document.getElementById('introHeader').style.padding = "0.5% 35% 0 5%";
    document.getElementById('hideBtn').style.display = "block";
    document.getElementById('headerBtn').style.display = "none";
    document.getElementById('introPar').style.padding= "0 35% 0 5%";
    document.getElementById('LearnMoreBtnCont').style.padding = "0.5% 35% 0 5%";
    document.getElementById('bottomSlider').style.display = "block";
    document.getElementById('offersDescContainer').style.paddingRight = "35%";
    document.getElementById('factsContainer').style.paddingRight = "35%";
    document.getElementById('aboutusContainer').style.paddingRight = "35%";
    document.getElementById('onePicture').style.display = "none";
    document.getElementById('twoPicture').style.display = "none";
}
function HideHeader(){
    document.getElementById('header').style.width = "0";
    document.getElementById('logo').style.padding = "3% 0 3% 0";
    document.getElementById('introHeader').style.padding = "0.5% 25% 0 25%";
    document.getElementById('hideBtn').style.display = "none";
    document.getElementById('headerBtn').style.display = "block";
    document.getElementById('introPar').style.padding= "0 25% 0 25%";
    document.getElementById('LearnMoreBtnCont').style.padding = "0.5% 25% 0 25%";
    document.getElementById('bottomSlider').style.display = "none";
    document.getElementById('offersDescContainer').style.paddingRight = "5%";
    document.getElementById('factsContainer').style.paddingRight = "5%";
    document.getElementById('aboutusContainer').style.paddingRight = "5%";
    document.getElementById('onePicture').style.display = "inline";
    document.getElementById('twoPicture').style.display = "inline";
}