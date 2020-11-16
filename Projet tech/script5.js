//peut etre à modif pour le calendrier
$(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month'
    },
  dayClick: function(date, allDay, jsEvent, view) {
  $('#calendar').fullCalendar('clientEvents', function(event) {
    // match the event date with clicked date if true render clicked date events
    if (moment(date).format('YYYY-MM-DD') == moment(event._start).format('YYYY-MM-DD')) {

      // do your stuff here
      if(event.namee =="event"){
      document.getElementById('id01').style.display='block';
      let or =document.getElementById('id02');
      let f = document.createElement('header');
      let h_Club = document.createElement('h3');
      let h_Date_evenement = document.createElement('h3');
      let h_debut = document.createElement('h3');
      let h_fin = document.createElement('h3');
      let h_type = document.createElement('h3');
      let h_lieu = document.createElement('h3');
      let h_objectif = document.createElement('h3');
      let h_Annee_universitaire = document.createElement('h3');
      let h_Responsable = document.createElement('h3');
      let h_Campus = document.createElement('h3');
      let p_Club = document.createElement('p');
      let p_Date_evenement = document.createElement('p');
      let p_debut = document.createElement('p');
      let p_fin = document.createElement('p');
      let p_type = document.createElement('p');
      let p_lieu = document.createElement('p');
      let p_objectif = document.createElement('p');
      let p_Annee_universitaire = document.createElement('p');
      let p_Responsable = document.createElement('p');
      let p_Campus = document.createElement('p');
       f.className ="w3-container card-header ";
       h_Club.className = 'w3-container card-title h3';
       h_Date_evenement.className = 'w3-container card-text h3';
       h_debut.className = 'w3-container card-text h3';
       h_fin.className = 'w3-container card-text h3';
       h_type.className = 'w3-container card-text h3';
       h_lieu.className = 'w3-container card-text h3';
       h_objectif.className = 'w3-container card-text h3';
       h_Annee_universitaire.className = 'w3-container card-text h3';
       h_Responsable.className = 'w3-container card-text h3';
       h_Campus.className = 'w3-container card-text h3';


       p_Club.className = 'w3-container card-text' ;
       p_Date_evenement.className = 'w3-container card-text';
       p_debut.className = 'w3-container card-text';
       p_fin.className = 'w3-container card-text';
       p_type.className = 'w3-container card-text';
       p_lieu.className = 'w3-container card-text';
       p_objectif.className = 'w3-container card-text';
       p_Annee_universitaire.className = 'w3-container card-text';
       p_Responsable.className = 'w3-container card-text';
       p_Campus.className = 'w3-container card-text';

       f.innerHTML = event.title;
       h_Club.innerHTML = 'Club :';
       h_Date_evenement.innerHTML = 'Date de l\'événement :';
       h_debut.innerHTML = 'Heure de début :';
       h_fin.innerHTML = 'Heure de fin :';
       h_type.innerHTML = 'Type :';
       h_lieu.innerHTML = 'Lieu :';
       h_objectif.innerHTML = 'Objectif :';
       h_Annee_universitaire.innerHTML = 'Année Universitaire :';
       h_Responsable.innerHTML = 'Responsable :';
       h_Campus.innerHTML = 'Campus :';


       p_Club.innerHTML = event.Nom_club;
       p_Date_evenement.innerHTML = event.start;
       p_debut.innerHTML = event.Horaire_debut;
       p_fin.innerHTML = event.Horaire_fin;
       p_type.innerHTML = event.Type;
       p_lieu.innerHTML = event.Lieu;
       p_objectif.innerHTML = event.Objectif;
       p_Annee_universitaire.innerHTML = event.Annee_universitaire;
       p_Responsable.innerHTML = event.Responsable;
       p_Campus.innerHTML = event.Campus;

       or.style.borderRadius = '20px';
      
      f.style.backgroundColor = '#00BFFF';
      f.style.height = '50px';
      f.style.color = 'white';
      f.style.textAlign = 'center';
      f.style.textTransform = 'uppercase';
      f.style.borderRadius = '20px';
      f.style.fontSize = '25px';


      h_Club.style.color = '#00BFFF';
      h_Club.style.marginLeft = '50px';
      h_Club.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_Club.style.textDecoration = 'underline';

      h_Date_evenement.style.color = '#00BFFF';
      h_Date_evenement.style.marginLeft = '50px';
      h_Date_evenement.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_Date_evenement.style.textDecoration = 'underline';

      h_debut.style.color = '#00BFFF';
      h_debut.style.marginLeft = '50px';
      h_debut.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_debut.style.textDecoration = 'underline';

      h_fin.style.color = '#00BFFF';
      h_fin.style.marginLeft = '50px';
      h_fin.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_fin.style.textDecoration = 'underline';

      h_type.style.color = '#00BFFF';
      h_type.style.marginLeft = '50px';
      h_type.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_type.style.textDecoration = 'underline';

      h_lieu.style.color = '#00BFFF';
      h_lieu.style.marginLeft = '50px';
      h_lieu.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_lieu.style.textDecoration = 'underline';

      h_objectif.style.color = '#00BFFF';
      h_objectif.style.marginLeft = '50px';
      h_objectif.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_objectif.style.textDecoration = 'underline';

      h_Annee_universitaire.style.color = '#00BFFF';
      h_Annee_universitaire.style.marginLeft = '50px';
      h_Annee_universitaire.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_Annee_universitaire.style.textDecoration = 'underline';

      h_Responsable.style.color = '#00BFFF';
      h_Responsable.style.marginLeft = '50px';
      h_Responsable.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_Responsable.style.textDecoration = 'underline';

      h_Campus.style.color = '#00BFFF';
      h_Campus.style.marginLeft = '50px';
      h_Campus.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_Campus.style.textDecoration = 'underline';



      p_Club.style.textAlign = 'center';
      p_Club.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_Club.style.fontSize = '18px';

      p_Date_evenement.style.textAlign = 'center';
      p_Date_evenement.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_Date_evenement.style.fontSize = '18px';

      p_debut.style.textAlign = 'center';
      p_debut.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_debut.style.fontSize = '18px';

      p_fin.style.textAlign = 'center';
      p_fin.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_fin.style.fontSize = '18px';

      p_type.style.textAlign = 'center';
      p_type.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_type.style.fontSize = '18px';

      p_lieu.style.textAlign = 'center';
      p_lieu.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_lieu.style.fontSize = '18px';

      p_objectif.style.textAlign = 'center';
      p_objectif.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_objectif.style.fontSize = '18px';

      p_Annee_universitaire.style.textAlign = 'center';
      p_Annee_universitaire.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_Annee_universitaire.style.fontSize = '18px';

      p_Responsable.style.textAlign = 'center';
      p_Responsable.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_Responsable.style.fontSize = '18px';

      p_Campus.style.textAlign = 'center';
      p_Campus.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_Campus.style.fontSize = '18px';
      
    

     
      
      let f1 = document.createElement('div');
      f1.className ='w3-container card-body';
      
      

      or.appendChild(f);
      or.appendChild(f1);
      f1.appendChild(h_Club);
      f1.appendChild(p_Club);
      f1.appendChild(h_Annee_universitaire);
      f1.appendChild(p_Annee_universitaire);
      f1.appendChild(h_Date_evenement);
      f1.appendChild(p_Date_evenement);
      f1.appendChild(h_debut);
      f1.appendChild(p_debut);
      f1.appendChild(h_fin);
      f1.appendChild(p_fin);
      f1.appendChild(h_type);
      f1.appendChild(p_type);
      f1.appendChild(h_lieu);
      f1.appendChild(p_lieu);
      f1.appendChild(h_Campus);
      f1.appendChild(p_Campus);
      f1.appendChild(h_Responsable);
      f1.appendChild(p_Responsable);
      f1.appendChild(h_objectif);
      f1.appendChild(p_objectif);
      

       //document.querySelector('.w3-container').innerHTML = event.title;
       //document.querySelector('#Content').innerHTML = event.start;
      // console.log(event.title);

      // if you have subarray i mean array within array then 
      
      
    }
    if(event.namee =="soutenance"){
      document.getElementById('id01').style.display='block';
      let or =document.getElementById('id02');
      let f = document.createElement('header');
      let h_Club = document.createElement('h3');
      let h_Date_evenement = document.createElement('h3');
      let h_debut = document.createElement('h3');

      let p_Club = document.createElement('p');
      let p_Date_evenement = document.createElement('p');
      let p_debut = document.createElement('p');
       f.className ="w3-container card-header ";
       h_Club.className = 'w3-container card-title h3';
       h_Date_evenement.className = 'w3-container card-text h3';
       h_debut.className = 'w3-container card-text h3';



       p_Club.className = 'w3-container card-text' ;
       p_Date_evenement.className = 'w3-container card-text';
       p_debut.className = 'w3-container card-text';



       f.innerHTML = event.title;
       h_Club.innerHTML = 'Club :';
       h_Date_evenement.innerHTML = 'Date de la soutenance :';
       h_debut.innerHTML = 'Heure de début :';
       
      


       p_Club.innerHTML = event.Nom_club;
       p_Date_evenement.innerHTML = event.start;
       p_debut.innerHTML = event.Horaire_debut;
       
     
      or.style.borderRadius = '20px';
      
      f.style.backgroundColor = '#00BFFF';
      f.style.height = '50px';
      f.style.color = 'white';
      f.style.textAlign = 'center';
      f.style.textTransform = 'uppercase';
      f.style.borderRadius = '20px';
      f.style.fontSize = '25px';


      h_Club.style.color = '#00BFFF';
      h_Club.style.marginLeft = '50px';
      h_Club.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_Club.style.textDecoration = 'underline';

      h_Date_evenement.style.color = '#00BFFF';
      h_Date_evenement.style.marginLeft = '50px';
      h_Date_evenement.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_Date_evenement.style.textDecoration = 'underline';

      h_debut.style.color = '#00BFFF';
      h_debut.style.marginLeft = '50px';
      h_debut.style.fontFamily = 'Impact,Charcoal,sans-serif';
      h_debut.style.textDecoration = 'underline';


      p_Club.style.textAlign = 'center';
      p_Club.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_Club.style.fontSize = '18px';

      p_Date_evenement.style.textAlign = 'center';
      p_Date_evenement.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_Date_evenement.style.fontSize = '18px';

      p_debut.style.textAlign = 'center';
      p_debut.style.fontFamily = 'Impact,Charcoal,sans-serif';
      p_debut.style.fontSize = '18px';
    

     
      
      let f1 = document.createElement('div');
      f1.className ='w3-container card-body';
      
      

      or.appendChild(f);
      or.appendChild(f1);
      f1.appendChild(h_Club);
      f1.appendChild(p_Club);
      f1.appendChild(h_Date_evenement);
      f1.appendChild(p_Date_evenement);
      f1.appendChild(h_debut);
      f1.appendChild(p_debut);
     
     
      

       //document.querySelector('.w3-container').innerHTML = event.title;
       //document.querySelector('#Content').innerHTML = event.start;
      // console.log(event.title);

      // if you have subarray i mean array within array then 
      
      
    }
  }
  })
},
  
    events: 'load.php',
    selectable:true,
    selectHelper:true,  
    

   

    

   });


   $( "#id01" ).click(function(){

     $("#id02").empty();
     document.getElementById('id01').style.display='none';
    

    

            
        });
  });

