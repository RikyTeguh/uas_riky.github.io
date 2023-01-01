let start = 0;
jalan();

function jalan(){
    const dua = document.querySelectorAll(".header2");
    for (let i = 0; i < dua.length; i++){
        dua[i].style.display = "none";
    }
    if(start >= dua.length){
        start = 0;
    }
    dua[start].style.display = "block";
    console.log("Gambar Ke " + start);
    start++;

    setTimeout(jalan, 2000);
}