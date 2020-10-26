

let promotion1  = document.getElementById("promotion1");
let specialite1  = document.getElementById("specialite1");

let promotion2  = document.getElementById("promotion2");
let specialite2  = document.getElementById("specialite2");

let promotion3  = document.getElementById("promotion3");
let specialite3  = document.getElementById("specialite3");

let promotion4  = document.getElementById("promotion4");
let specialite4  = document.getElementById("specialite4");

let promotion5  = document.getElementById("promotion5");
let specialite5  = document.getElementById("specialite5");





  $.ajax({
       url: "promotion.php",
          type: "GET",
          dataType: "html",
      success:function(Resultat,status){

        myObj = JSON.parse(Resultat);
        for (x in myObj) {
        let element = document.createElement("option");
        element.innerHTML =  myObj[x].promotion;
        element.value =  myObj[x].id ;
        let elementt = document.createElement("option");
        elementt.innerHTML =  myObj[x].promotion;
        elementt.value =  myObj[x].id ;
        let elementtt = document.createElement("option");
        elementtt.innerHTML =  myObj[x].promotion;
        elementtt.value =  myObj[x].id ;
        let elementttt = document.createElement("option");
        elementttt.innerHTML =  myObj[x].promotion;
        elementttt.value =  myObj[x].id ;
        let elementtttt = document.createElement("option");
        elementtttt.innerHTML =  myObj[x].promotion;
        elementtttt.value =  myObj[x].id ;
        
        promotion1.appendChild(elementt);
        promotion2.appendChild(elementtt);
        promotion3.appendChild(elementttt);
        promotion4.appendChild(elementtttt);
        promotion5.appendChild(element);
       }
     
           
       },

       error : function(resultat, status, erreur){


       },

       complete : function(resultat, status){


       }



  });

  $.ajax({
       url: "specialite.php",
          type: "GET",
          dataType: "html",
      success:function(Resultat,status){

      

        myObj = JSON.parse(Resultat);
        for (x in myObj) {
        let element = document.createElement("option");
        element.innerHTML =  myObj[x].specialite;
        element.value =  myObj[x].id ;
        let elementt = document.createElement("option");
        elementt.innerHTML =  myObj[x].specialite;
        elementt.value =  myObj[x].id ;
        let elementtt = document.createElement("option");
        elementtt.innerHTML =  myObj[x].specialite;
        elementtt.value =  myObj[x].id ;
        let elementttt = document.createElement("option");
        elementttt.innerHTML =  myObj[x].specialite;
        elementttt.value =  myObj[x].id ;
        let elementtttt = document.createElement("option");
        elementtttt.innerHTML =  myObj[x].specialite;
        elementtttt.value =  myObj[x].id ;
        
  
        
        
        specialite1.appendChild(element);
        specialite2.appendChild(elementt);
        specialite3.appendChild(elementtt);
        specialite4.appendChild(elementttt);
        specialite5.appendChild(elementtttt);
       }
     
           
       },

       error : function(resultat, status, erreur){


       },

       complete : function(resultat, status){


       }



  });
  

