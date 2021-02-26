function rtCheck(){
    var check = document.getElementById("roundTrip").checked;
    if(check === true){
        document.getElementById("retDate").removeAttribute("disabled");
    }
    else{
        document.getElementById("retDate").setAttribute("disabled", true);
    }
    total();
}
function total(){
    var price = priceSelector();
    var depDate = new Date(document.getElementById("depDate").value);
    if(document.getElementById("roundTrip").checked === true){
        var retDate = new Date(document.getElementById("retDate").value);
        price=price*2;
    }
    var adult = document.getElementById("adult").value;
    var child = document.getElementById("child").value;
    var infant = document.getElementById("infant").value;
    var totalPrice = price*(parseInt(adult)+parseInt(child)+parseInt(infant));
    if(isNaN(totalPrice) == true || totalPrice < 0){
        totalPrice = 0;
    }
    document.getElementById("total").innerHTML = "$" + totalPrice + ",00";
    if(checkInputData() === true){
        document.getElementById("confirmbtn").removeAttribute("disabled");
    }
    else{
        document.getElementById("confirmbtn").setAttribute("disabled", true);
    }
}
function priceSelector() {
    var x = 0;
    x = document.getElementsByTagName("body")[0].getAttribute("id"); 
    if(x === "thomas"){
        x = 13;
    }
    else if(x === "polar-express"){
        x = 28;
    }
    else if(x === "shinkansen"){
        x = 49;
    }
    if(document.getElementById("seatClass").value === "Bussiness"){
        x = x * 1.25;
    }
    else if(document.getElementById("seatClass").value === "Crazy Rich Asian"){
        x = x * 1.5;
    }
    else if(document.getElementById("seatClass").value === "Supreme"){
        x = x * 2;
    }
    return x;
}
window.onload = total;
function storeData(){
    var guestName = document.getElementById("guestName").value;
    var email = document.getElementById("email").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var payment = document.getElementById("paymentMethod").value;
    if(checkInputData() == false || (guestName === "" || email === "" || phoneNumber === "" || payment === "") ){
        alert("Incomplete data, check again your submission.");
    }
    else{
        localStorage.setItem("price", priceSelector());
        localStorage.setItem("depDate", (new Date(document.getElementById("depDate").value)));
        localStorage.setItem("retDate", (new Date(document.getElementById("retDate").value)));
        localStorage.setItem("departure", document.getElementById("departure").value);
        localStorage.setItem("destination", document.getElementById("destination").value);
        localStorage.setItem("adult", document.getElementById("adult").value);
        localStorage.setItem("child", document.getElementById("child").value);
        localStorage.setItem("infant", document.getElementById("infant").value);
        localStorage.setItem("seatClass", document.getElementById("seatClass").value);
        localStorage.setItem("product", document.getElementsByTagName("body")[0].getAttribute("id"));
        alert("Bookment created! Check your email for further step.");
        location.reload();
        document.forms[0].reset()
    }
}
function confirm(){
    if(checkInputData() == true){
        document.getElementById('confirmed').style.display = 'block';
    }
    else{
        alert("Incomplete data, check again your submission.");
    }
}
function checkInputData(){
    var depDate = new Date(document.getElementById("depDate").value);
    if(document.getElementById("roundTrip").checked === true){
        var retDate = new Date(document.getElementById("retDate").value);
    }
    var adult = document.getElementById("adult").value;
    var child = document.getElementById("child").value;
    var infant = document.getElementById("infant").value;
    var departure = document.getElementById("departure").value;
    var destination = document.getElementById("destination").value;
    if(isNaN(depDate) === true || (document.getElementById("roundTrip").checked === true && isNaN(retDate) == true) || departure === "" || destination === "" || adult === "" || child === "" || infant === "" || (parseInt(adult) + parseInt(adult) + parseInt(adult) == 0)){
        return false;
    }
    else{
        return true;
    }
}