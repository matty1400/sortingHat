
var firstnameElement = document.querySelector(".firstname");
var lastnameElement = document.querySelector(".lastname");
var ageElement = document.querySelector(".age");
var genderElement = document.querySelector(".gender");
var descriptionElement = document.querySelector(".description");
var gryffindorButton = document.getElementById("gryffindor");
var slytherinButton = document.getElementById("slytherin");
var hufflepuffButton = document.getElementById("hufflepuff");
var ravenclawButton = document.getElementById("ravenclaw");
var nextPersonButton = document.getElementById("nextPerson")
var houseElement = document.querySelector(".houseInfo");
var IDElement = document.querySelector(".ID");
var votesButton = document.getElementById("votes");

var nummer = 1;






        
      
    getRandomUser();

    
   
  
   
    
            
           
    
    
    

            nextPersonButton.addEventListener("click",function(){
                nummer++;
                getRandomUser();
                
                    
                   });
            gryffindorButton.addEventListener("click",function(){
                addvote(1);
                    
                   });
            
            slytherinButton.addEventListener("click",function(){
            addvote(2);
                
                });

            hufflepuffButton.addEventListener("click",function(){
                addvote(3);
                    
                    });
            ravenclawButton.addEventListener("click",function(){
            addvote(4);
                
                });



           

            function getRandomUser(){
                fetch("http://sortinghat.matijseraly.be/api/getRandomUser.php?personID="+nummer)
                .then(function (response){
                    return response.json();
                })
                .then(function  (data){
                    
                    firstnameElement.innerHTML="Firstname: "+data[0].firstName;
                    lastnameElement.innerHTML="Lastname: "+data[0].lastName;
                    ageElement.innerHTML="Age: "+data[0].age;
                    genderElement.innerHTML="Gender: "+data[0].gender;
                    descriptionElement.innerHTML="Description: "+data[0].description;
                  

                    



                    
                    

                   
                     }) 
                     buttonReset();
                    
                }
            function addvote(house) {
                fetch("http://sortinghat.matijseraly.be/api/addVote.php?houseID="+house+"&&personID="+nummer)
                .then(function (response){
                    return response.json();
                })
                .then(function  (data){
                    
                  
                   
                    
                });
                gryffindorButton.disabled= true;
                slytherinButton.disabled= true;
                hufflepuffButton.disabled= true;
                ravenclawButton.disabled= true;
                votesButton.disabled=false;
                
            }

            votesButton.addEventListener("click",function() {
                
            fetch("http://sortinghat.matijseraly.be/api/getTotalVotes.php?personID="+nummer)
            .then(function (response){
                return response.json();
            })
            .then(function  (data){
                
              gryffindorButton.innerHTML=data[0] + "% Gryffindor";
              slytherinButton.innerHTML=data[1] + "% Slytherin";
              hufflepuffButton.innerHTML=data[2] + "% Hufflepuff";
              ravenclawButton.innerHTML=data[3] + "% Ravenclaw";
                
            });

                
            });

            function buttonReset(){
               gryffindorButton.innerHTML="Vote for Gryffindor";
               slytherinButton.innerHTML="Vote for Slytherin";
               hufflepuffButton.innerHTML="Vote for Hufflepuff";
               ravenclawButton.innerHTML="Vote for Ravenclaw";
               
               
               
                gryffindorButton.disabled= false;
                slytherinButton.disabled= false;
                hufflepuffButton.disabled= false;
                ravenclawButton.disabled= false;

            }


         


         

           
            
 
           