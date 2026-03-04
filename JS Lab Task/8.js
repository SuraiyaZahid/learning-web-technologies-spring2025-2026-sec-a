let btn = document.getElementById("submitbtn");
<<<<<<< HEAD:JS Lab Task/8.js
 
=======

>>>>>>> f4bdbd15a2ac9bfffd91526b548f6dcad2b9672b:JS Lab Lask/8.js
btn.addEventListener("click", function(event){
 
    let msg = document.getElementById("msg");
    msg.innerHTML = "";
<<<<<<< HEAD:JS Lab Task/8.js
 
   
=======

    
>>>>>>> f4bdbd15a2ac9bfffd91526b548f6dcad2b9672b:JS Lab Lask/8.js
    let name = document.getElementById("name").value;
 
    if(name.trim() == ""){
        msg.innerHTML = "Name cannot be empty";
        event.preventDefault();
        return;
    }
 
    let first = name.charAt(0);
    if(!((first>='A' && first<='Z') || (first>='a' && first<='z'))){
        msg.innerHTML = "Name must start with letter";
        event.preventDefault();
        return;
    }
 
    let parts = name.trim().split(" ");
    let count = 0;
    for(let i=0;i<parts.length;i++){
        if(parts[i]!="") count++;
    }
    if(count < 2){
        msg.innerHTML = "Name must contain at least two words";
        event.preventDefault();
        return;
    }
<<<<<<< HEAD:JS Lab Task/8.js
 
   
=======

    
>>>>>>> f4bdbd15a2ac9bfffd91526b548f6dcad2b9672b:JS Lab Lask/8.js
    let email = document.getElementById("email").value;
 
    if(email.trim() == ""){
        msg.innerHTML = "Email cannot be empty";
        event.preventDefault();
        return;
    }
 
    if(email.indexOf("@")==-1 || email.indexOf(".")==-1){
        msg.innerHTML = "Invalid email";
        event.preventDefault();
        return;
    }
<<<<<<< HEAD:JS Lab Task/8.js
 
   
=======

    
>>>>>>> f4bdbd15a2ac9bfffd91526b548f6dcad2b9672b:JS Lab Lask/8.js
    let g = document.getElementsByName("gender");
    let selected = false;
 
    for(let i=0;i<g.length;i++){
        if(g[i].checked){
            selected = true;
        }
    }
 
    if(!selected){
        msg.innerHTML = "Select gender";
        event.preventDefault();
        return;
    }
<<<<<<< HEAD:JS Lab Task/8.js
 
   
=======

    
>>>>>>> f4bdbd15a2ac9bfffd91526b548f6dcad2b9672b:JS Lab Lask/8.js
    let dd = document.getElementById("dd").value;
    let mm = document.getElementById("mm").value;
    let yyyy = document.getElementById("yyyy").value;
 
    if(dd=="" || mm=="" || yyyy==""){
        msg.innerHTML = "Enter full date";
        event.preventDefault();
        return;
    }
 
    if(dd<1 || dd>31 || mm<1 || mm>12 || yyyy<1900 || yyyy>2025){
        msg.innerHTML = "Invalid date";
        event.preventDefault();
        return;
    }
<<<<<<< HEAD:JS Lab Task/8.js
 
   
=======

    
>>>>>>> f4bdbd15a2ac9bfffd91526b548f6dcad2b9672b:JS Lab Lask/8.js
    let blood = document.getElementById("blood").value;
 
    if(blood==""){
        msg.innerHTML = "Select blood group";
        event.preventDefault();
        return;
    }
<<<<<<< HEAD:JS Lab Task/8.js
 
 
=======

    
>>>>>>> f4bdbd15a2ac9bfffd91526b548f6dcad2b9672b:JS Lab Lask/8.js
    let degree = document.getElementsByName("degree");
    let ok = false;
 
    for(let i=0;i<degree.length;i++){
        if(degree[i].checked){
            ok = true;
        }
    }
 
    if(!ok){
        msg.innerHTML = "Select at least one degree";
        event.preventDefault();
        return;
    }
<<<<<<< HEAD:JS Lab Task/8.js
 
   
=======


>>>>>>> f4bdbd15a2ac9bfffd91526b548f6dcad2b9672b:JS Lab Lask/8.js
    let photo = document.getElementById("photo").value;
 
    if(photo==""){
        msg.innerHTML = "Upload photo";
        event.preventDefault();
        return;
    }
 
   msg.innerHTML = "Form Submitted Successfully ";
return true;
});
<<<<<<< HEAD:JS Lab Task/8.js
 
=======
>>>>>>> f4bdbd15a2ac9bfffd91526b548f6dcad2b9672b:JS Lab Lask/8.js
