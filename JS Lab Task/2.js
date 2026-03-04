let btn = document.getElementById('btn');

btn.addEventListener('click', function(event){

    event.preventDefault();

    let email = document.getElementById('email').value;
    let msg = document.getElementById('msg');

    msg.innerHTML = "";

    if(email.trim() == ""){
        msg.innerHTML = "Email cannot be empty";
        return;
    }

    let count=0;
    for(let i = 0; i < email.length; i++){
        let ch = email.charAt(i);

        if(( ch == '@' || ch == '.'  )){
            count++;
        }
    }
    if(count ==2){
        msg.innerHTML = "Valid Email";
        return;
    }else{
        msg.innerHTML = "Invalid Email";
    }
    
});