const li = item.parentElement;

item.addEventListener('click' , function() {
    allSideMenu.forEach(i=> {
        i.parentElement.classList.remove('active');
        })
    li.classList.add('active');
})



const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sideBar = document.getElementById('sidebar');
menuBar.addEventListener('click' , function(){
    sideBar.classList.toggle('hide');
})



