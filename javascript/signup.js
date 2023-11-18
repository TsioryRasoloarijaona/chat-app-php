const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
    errorTxt = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
   //console.log("hello");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php" ,true);
    xhr.onload = ()=>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                    if (data === "succes"){
                        location.href = "users.php";

                    }else{
                        errorTxt.textContent = data
                        errorTxt.style.display = "block";

                    }

                }else{
                    console.log(xhr.status);
                }
            }
    }

   let formData = new FormData(form);
    xhr.send(formData);

}