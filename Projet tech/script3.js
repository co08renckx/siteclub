let type  = document.getElementById("type");
let promotion  = document.getElementById("promotion");
let specialite  = document.getElementById("specialite");






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
        //txt += myObj[x].name + "<br>";
        promotion.appendChild(element);
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
        //txt += myObj[x].name + "<br>";
        specialite.appendChild(element);
       }
     
           
       },

       error : function(resultat, status, erreur){


       },

       complete : function(resultat, status){


       }



  });
  $.ajax({
       url: "type.php",
          type: "GET",
          dataType: "html",
      success:function(Resultat,status){

        myObj = JSON.parse(Resultat);
        for (x in myObj) {
        let element = document.createElement("option");
        element.innerHTML =  myObj[x].Type;
        element.value =  myObj[x].id ;
        //txt += myObj[x].name + "<br>";
        type.appendChild(element);
       }
     
           
       },

       error : function(resultat, status, erreur){


       },

       complete : function(resultat, status){


       }



  });

  

 
  