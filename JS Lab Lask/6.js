let form = document.querySelector("form");

form.addEventListener("submit", function(e){
    e.preventDefault();

    let blood = document.getElementById("blood").value;
    let msg = document.getElementById("msg");

    if(blood === ""){
        msg.innerHTML = "Please select blood group!";
        msg.style.color = "red";
    }else{
        msg.innerHTML = "Form submitted successfully!";
        msg.style.color = "green";
    }
});