const userBtn = document.querySelector('#user-btn'); 
userBtn.addEventListener('click', function(){
    const userBox =document.querySelector('.profile-detail'); 
    userBox.classList.toggle('active');
})
    
const toggle = document.querySelector('.toggle-btn'); 
toggle.addEventListener('click', function(){
    const sidebar = document.querySelector('.sidebar'); 
    sidebar.classList.toggle('active');  
})