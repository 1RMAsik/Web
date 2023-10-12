let image = document.getElementById('image')

image.addEventListener('mouseover', function (){
   this.style.width='800px';
   this.style.border = '5px solid blue';
});

image.addEventListener('mouseleave', function (){

    this.style.width = '300px';
    this.style.border = '0px';
})