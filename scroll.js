window.addEventListener("scroll",muncul);
function muncul(){
    let elements = document.querySelectorAll(".materi2");
    for(let i = 0; i < elements.length; i++){
        let tinggilayar = window.innerHeight;
        let jarakAtas = elements[i].getBoundingClientRect().top;
        let ukuranScroll = 50;

        if(jarakAtas < tinggilayar - ukuranScroll){
            elements[i].classList.add("tampil");
        }else{
            elements[i].classList.remove("tampil");
        }
    }
}

window.addEventListener("scroll",datang);
function datang(){
    let element = document.querySelectorAll(".materi3");
    for(let a = 0; a < element.length; a++){
        let tinggi = window.innerHeight;
        let jarak = element[a].getBoundingClientRect().top;
        let ukuran = 50;

        if(jarak < tinggi - ukuran){
            element[a].classList.add("tampil");
        }else{
            element[a].classList.remove("tampil");
        }
    }
}

window.addEventListener("scroll",keatas);
function keatas(){
    let elem = document.querySelectorAll(".materi");
    for(let b = 0; b < elem.length; b++){
        let duwur = window.innerHeight;
        let adoh = elem[b].getBoundingClientRect().top;
        let gedi = 50;

        if(adoh < duwur - gedi){
            elem[b].classList.add("tampil");
        }else{
            elem[b].classList.remove("tampil");
        }
    }
}
