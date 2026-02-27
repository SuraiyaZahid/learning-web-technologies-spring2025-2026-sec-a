let btn = document.getElementById('btn');

btn.addEventListener('click', function(event){

    event.preventDefault();

    let degree = document.getElementsByName('degree');
    let msg = document.getElementById('msg');

    msg.innerHTML = "";

    let checked = false;

    for(let i = 0; i < degree.length; i++){
        if(degree[i].checked){
            checked = true;
        }
    }

    if(!checked){
        msg.innerHTML = "Select at least one";
        return;
    }

    msg.innerHTML = "Valid Selection";
});