var a = document.getElementById('side');
       
a.onclick = function(){
 var b = document.getElementById("mySidebar");
 
     if(b.style.width>='230'){
     	document.getElementById("image").src="../content/img/close.png";
     	document.getElementById("main").style.marginLeft = "20px";
        a.style.marginLeft = "0";
        b.style.width= "0";
         console.log(b.style.width);
    }
    else{
    	document.getElementById("main").style.marginLeft = "155px";
    	document.getElementById("image").src="../content/img/side.png";
        b.style.width = "230px";
        a.style.marginLeft = "200px";
        console.log(b.style.width);
    }
};
