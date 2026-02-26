let btn = document.getElementById('btn');

btn.addEventListener('click', function(event){

    event.preventDefault();

    let gender = document.getElementsByName('gender');
    let msg = document.getElementById('msg');

    msg.innerHTML = "";

    let selected = false;

    for(let i = 0; i < gender.length; i++){
        if(gender[i].checked){
            selected = true;
        }
    }

    if(!selected){
        msg.innerHTML = "Select one option";
        return;
    }

    msg.innerHTML = "Valid Selection";
});