var a = document.getElementById('side');
       
a.onclick = function(){
 var b = document.getElementById("mySidebar");
 
     if(b.style.width>='200px'){
     	document.getElementById("image").src="../content/img/side.png";
     	document.getElementById("main").style.marginLeft = "20px";
        a.style.marginLeft = "0";
        b.style.width= "0";
         console.log(b.style.width);
    }
    else{
    	document.getElementById("main").style.marginLeft = "135px";
    	document.getElementById("image").src="../content/img/close.png";
        b.style.width = "200px";
        a.style.marginLeft = "160px";
        console.log(b.style.width);
    }
};
