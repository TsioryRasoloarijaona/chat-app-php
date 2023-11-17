const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    console.log("hello");
    let xhr = new XMLHttpRequest;
    xhr.open("POST", "php/signup.php" ,true);
    xhr.onload = ()=>{

    }

    xhr.send;

}