window.onload=function(){
    let kvadratik = document.querySelector('.cont');
    let b1 = document.querySelector('.box1');
    let b2 = document.querySelector('.box2');
    let b3 = document.querySelector('.box3');
    let p1 = document.querySelector('.a1');
    let p2 = document.querySelector('.a2');
    let p3 = document.querySelector('.a3');
    kvadratik.addEventListener('click', function(e) {
        if(kvadratik.classList.contains('rotate')){
            kvadratik.classList.remove('rotate');
            b1.classList.remove('probel1');
            b2.classList.remove('probel2');
            b3.classList.remove('probel3');
            p1.classList.remove('adr1');
            p2.classList.remove('adr2');
            p3.classList.remove('adr3');
        }else{
                kvadratik.classList.add('rotate');
                b1.classList.add('probel1');
                b2.classList.add('probel2');
                b3.classList.add('probel3');
                p1.classList.add('adr1');
                p2.classList.add('adr2');
                p3.classList.add('adr3');
                p1.classList.remove('ad1');
                p2.classList.remove('ad2');
                p3.classList.remove('ad3');
                kvadratik.classList.remove('rot');
                b1.classList.remove('pro1');
                b2.classList.remove('pro2');
                b3.classList.remove('pro3');
                document.getElementById('a1').style.opacity = '100%'
                document.getElementById('a2').style.opacity = '100%'
                document.getElementById('a3').style.opacity = '100%'  
        }
    
})
}

/* const prevBtn = document.querySelector('.prev')
const nextBtn = document.querySelector('.next') */
/* const outImg = document.querySelector('.news-kv')
 *//* 
const art1 = 'News.jpg'
const art2 = 'Back.png'


const images = [art1, art2]

let i = 0
outImg.innerHTML =`<img src=${images[i]}>` 

nextBtn.onclick = () =>{
    if(i < images.length - 1){
        i++
    }else{
        i = 0
    }
    outImg.innerHTML =`<img src=${images[i]}>`
}

prevBtn.onclick = () =>{
    if(i > 0 ){
        i--
    }else{
        i = images.length-1 
    }
    outImg.innerHTML =`<img src=${images[i]}>`
} */
