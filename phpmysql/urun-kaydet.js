const urunKaydet=document.querySelector("#urun-kaydet");
const baslik=document.querySelector("#baslik");
const aciklama=document.querySelector("#aciklama");
const sira=document.querySelector("#sira");
const fiyat=document.querySelector("#fiyat");
const input = document.querySelector("input");




    

setInterval(function(){

    if(baslik.value==""){
        urunKaydet.classList.add("disabled")}
        else{
            urunKaydet.classList.remove("disabled")
        }
    if(aciklama.value==""){
        urunKaydet.classList.add("disabled")}
        else{
            urunKaydet.classList.remove("disabled")
        }
    if(sira.value==""){
        urunKaydet.classList.add("disabled")}
        else{
            urunKaydet.classList.remove("disabled")
        }
    if(fiyat.value==""){
        urunKaydet.classList.add("disabled")}
        else{
            urunKaydet.classList.remove("disabled")
        }


},500);