let btn = document.getElementById('btn');

btn.addEventListener('click', function(event){

    event.preventDefault();

    let blood = document.getElementById('blood').value;
    let msg = document.getElementById('msg');

    msg.innerHTML = "";

    if(blood == ""){
        msg.innerHTML = "Select blood group";
        return;
    }

    msg.innerHTML = "Valid Selection";
});