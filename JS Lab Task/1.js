let btn = document.getElementById('btn');

btn.addEventListener('click', function(event){

    event.preventDefault(); 

    let name = document.getElementById('name').value;
    let msg = document.getElementById('msg');

    msg.innerHTML = "";

   
    if(name == ""){
        msg.innerHTML = "Name cannot be empty";
        return;
    }

    let parts = name.trim().split(" ");
    let count = 0;

    for(let i = 0; i < parts.length; i++){
        if(parts[i] != ""){
            count++;
        }
    }

    if(count < 2){
        msg.innerHTML = "Name must contain at least two words";
        return;
    }

    for(let i = 0; i < name.length; i++){
        let ch = name.charAt(i);

        if(!((ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z') || ch == '.' || ch == '-' || ch == ' ' )){
            msg.innerHTML = "Invalid character found";
            return;
        }
    }

    let firstChar = name.charAt(0);
    if(!((firstChar >= 'A' && firstChar <= 'Z') || (firstChar >= 'a' && firstChar <= 'z'))){
        msg.innerHTML = "Name must start with a letter";
        return;
    }
   
    msg.innerHTML = "Valid Name";
});