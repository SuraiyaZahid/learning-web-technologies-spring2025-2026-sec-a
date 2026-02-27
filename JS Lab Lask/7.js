let btn = document.getElementById('btn');

btn.addEventListener('click', function(event){

    event.preventDefault();

    let id = document.getElementById('userid').value;
    let pic = document.getElementById('picture').value;
    let msg = document.getElementById('msg');

    msg.innerHTML = "";

    if(id == "" || isNaN(id) || id <= 0){
        msg.innerHTML = "User ID must be positive number";
        return;
    }

    if(pic == ""){
        msg.innerHTML = "Select a picture";
        return;
    }

    msg.innerHTML = "Valid Information";
});