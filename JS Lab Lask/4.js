let btn = document.getElementById('btn');

btn.addEventListener('click', function(event){

    event.preventDefault();

    let dd = document.getElementById('dd').value;
    let mm = document.getElementById('mm').value;
    let yyyy = document.getElementById('yyyy').value;
    let msg = document.getElementById('msg');

    msg.innerHTML = "";

    if(dd=="" || mm=="" || yyyy==""){
        msg.innerHTML = "Date cannot be empty";
        return;
    }

    if(isNaN(dd) || isNaN(mm) || isNaN(yyyy)){
        msg.innerHTML = "Must be numbers";
        return;
    }

    if(dd < 1 || dd > 31 || mm < 1 || mm > 12 || yyyy < 1900 || yyyy > 2016){
        msg.innerHTML = "Invalid Date";
        return;
    }

    msg.innerHTML = "Valid Date";
});