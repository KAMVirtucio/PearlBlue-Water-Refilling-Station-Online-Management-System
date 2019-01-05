var optionOne = document.getElementById('withFaucet');
var optionTwo = document.getElementById('withoutFaucet');
var optionThree = document.getElementById('bottledwater');
var orderNum = document.getElementById('numberOrder');
var showTotal = document.getElementById('totalOrder');

optionOne.addEventListener("click", showContainerOne);
optionTwo.addEventListener("click", showContainerTwo);
optionThree.addEventListener("click", showContainerThree);

function showContainerOne(){
    document.getElementById('pictureOrderContainer').style.display = "block";

    document.getElementById('pictureOrder').src = "/PearlBlueWRS/images/container1.png";

    document.getElementById('totalOrder').value = 50 * document.getElementById('numberOrder').value;

    optionTwo.checked = false;
    optionThree.checked = false;

    var optionChosen = "withFaucet";
}

function showContainerTwo(){
    document.getElementById('pictureOrderContainer').style.display = "block";
    
    document.getElementById('pictureOrder').src = "/PearlBlueWRS/images/container2.png";
    document.getElementById('totalOrder').value = 60 * document.getElementById('numberOrder').value;

    optionOne.checked = false;
    optionThree.checked = false;

    var optionChosen = "withoutFaucet";
}

function showContainerThree(){
    document.getElementById('pictureOrderContainer').style.display = "block";
    
    document.getElementById('pictureOrder').src = "/PearlBlueWRS/images/container3.png";
    document.getElementById('totalOrder').value = 15 * document.getElementById('numberOrder').value;

    optionTwo.checked = false;
    optionOne.checked = false;

    var optionChosen = "bottledwater";
}

function showPaymentScheme(){
    document.getElementById('proceedOrderContainer').style.display = "none";
    document.getElementById('submitOrderContainer').style.display = "block";
    document.getElementById('paymentDetailsContainer').style.display = "block";
}

document.getElementById('onlinePayment').addEventListener("click", showBankDetails);
function showBankDetails(){
    document.getElementById('bankDetailsContainer').style.display = "block";
}

document.getElementById('cashPayment').addEventListener("click", hideBankDetails);
function hideBankDetails(){
    document.getElementById('bankDetailsContainer').style.display = "none";
}