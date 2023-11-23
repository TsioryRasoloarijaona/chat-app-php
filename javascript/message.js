const form = document.querySelector(".typing-area"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button");

form.onsubmit = (e)=>{
    e.preventDefault();
}

sendBtn.onclick = ()=>{
   // console.log("hello btn")
 let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-message.php" ,true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
               let data = xhr.response;
                console.log(data);
                inputField.value = "";
            }else{
                console.log(xhr.status);
            }
        }
    }



    let formData = new FormData(form);
    xhr.send(formData);
}
