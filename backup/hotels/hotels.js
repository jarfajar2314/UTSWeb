function countDuration(dateIn, dateOut){
    var difTime = dateOut.getDate() - dateIn.getDate();
    if(isNaN(difTime) == true || difTime < 0){
        difTime = "-"
    }
    return difTime;
}
function duration(){
    var checkIn = document.getElementById("dateIn").value;
    var checkOut = document.getElementById("dateOut").value;
    var dateIn = new Date(checkIn);
    var dateOut = new Date(checkOut);
    var difTime = countDuration(dateIn, dateOut);
    document.getElementById("out").innerHTML = difTime + " night(s)";
    total();
}
function total(){
    var price = priceSelector();
    var dateIn = new Date(document.getElementById("dateIn").value);
    var dateOut = new Date(document.getElementById("dateOut").value);
    var duration = countDuration(dateIn, dateOut);
    var guests = document.getElementById("guests").value;
    var rooms = document.getElementById("rooms").value;
    var totalPrice = guests*rooms*duration*price;
    if(isNaN(totalPrice) == true || totalPrice < 0){
        totalPrice = 0;
    }
    document.getElementById("total").innerHTML = "$" + totalPrice + ",00";
}
function priceSelector() {
    var x = 0;
    x = document.getElementsByTagName("body")[0].getAttribute("id"); 
    if(x === "krusty-krab"){
        x = 49;
    }
    else if(x === "auschwitz"){
        x = 29;
    }
    else if(x === "konoha-office"){
        x = 99;
    }
    return x;
  }
function loadAll(){
    duration();
}
window.onload = duration;
function storeData(){
    var guestName = document.getElementById("guestName").value;
    var email = document.getElementById("email").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var payment = document.getElementById("paymentMethod").value;
    if(checkInputData() == false || (guestName === "" || email === "" || phoneNumber === "" || payment === "") ){
        alert("Incomplete data, check again your submission.");
    }
    else{
        var price = priceSelector();
        var dateIn = new Date(document.getElementById("dateIn").value);
        var dateOut = new Date(document.getElementById("dateOut").value);
        var duration = countDuration(dateIn, dateOut);
        var guests = document.getElementById("guests").value;
        var rooms = document.getElementById("rooms").value;
        var checkIn = document.getElementById("timeIn").value;
        var checkOut = document.getElementById("timeOut").value;
        localStorage.setItem("price", price);
        localStorage.setItem("dateIn", dateIn);
        localStorage.setItem("dateOut", dateOut);
        localStorage.setItem("duration", duration);
        localStorage.setItem("guests", guests);
        localStorage.setItem("rooms", rooms);
        localStorage.setItem("checkIn", checkIn);
        localStorage.setItem("checkOut", checkOut);
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
    var price = priceSelector();
    var dateIn = new Date(document.getElementById("dateIn").value);
    var dateOut = new Date(document.getElementById("dateOut").value);
    var duration = countDuration(dateIn, dateOut);
    var guests = document.getElementById("guests").value;
    var rooms = document.getElementById("rooms").value;
    var checkIn = document.getElementById("timeIn").value;
    var checkOut = document.getElementById("timeOut").value;
    if(duration === '-' || guests === "" || rooms === "" || checkIn === "" || checkOut === "" ){
        return false;
    }
    else{
        return true;
    }
}