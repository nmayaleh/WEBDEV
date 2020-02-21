
          
          // The web browser I used to test the code was chrom

          var selctionA = new Array(5);
          
           var selctionB =  new Array(5);
           var selctionC = new Array(5);  // I created three arrays for each section and each one has 5 seats
           var seat; // to store the choosen seat 
           var name; // to store the name of the user
         
           var priceA;
           var priceB;
           var priceC;// the prices for each seat.
           
           var board = document.getElementById("board"); // for the board ticket

           //  insert  elemnts to all the arrays
           for(i=0 ; i< selctionA.length ; i++){
               selctionA[i]=i+1;
           }

           for(i=0 ; i<selctionB.length ; i++){
               selctionB[i]=i+6;
           }

           for(i=0 ; i<selctionC.length ; i++){
               selctionC[i]=i+11;
           }

            // this function to update the prices and the orders of the section
            function appears(){
                priceA = Math.floor(101 + Math.random() * 99);
             priceB = Math.floor(101 + Math.random() * 199);
            priceC= Math.floor(101 + Math.random() * 199);
            
                var show;
            if(priceB<priceA && priceA<priceC){
                 show = "<div> Section B (6,7,8,9,10)   the price is  " + priceB+    "  </div>  <div> sectionA (1,2,3,4,5)  the price is  "   +priceA+   "</div>  <div> SectionC (11,12,13,14,15)  the price is  " +priceC+ "</div>";
                 document.getElementById("part").innerHTML = show;
            }
                 
                 else if(priceA<priceB && priceB<priceC){
                     show = "<div> Section A (1,2,3,4,5) the price is  " + priceA+    "  </div>  <div> sectionB (6,7,8,9,10) the price is   "   +priceB+   "</div>  <div> SectionC (11,12,13,14,15)  the price is  " +priceC+ "</div>";
                     document.getElementById("part").innerHTML = show;
                 }

                 else if(priceA<priceC && priceC<priceB){
                     show = "<div> Section A (1,2,3,4,5)  the price is  " + priceA+    "  </div>  <div> sectionC (11,12,13,14,15)  the price is "   +priceC+   "</div>  <div> SectionB (6,7,8,9,10) the price is  " +priceB+ "</div>";
                     document.getElementById("part").innerHTML = show;
                 }
                 else if(priceC<priceA && priceA<priceB){
                     show = "<div> Section C (11,12,13,14,15)  the price is " + priceC+    "  </div>  <div> sectionA (1,2,3,4,5) the price is  "   +priceA+   "</div>  <div> SectionB (6,7,8,9,10) the price is  " +priceB+ "</div>";
                     document.getElementById("part").innerHTML = show;
                 }

                 else if(priceC<priceB && priceB<priceA){
                     show = "<div> Section C (11,12,13,14,15)  the price is  " + priceC+    "  </div>  <div> sectionB (6,7,8,9,10) the price is  "   +priceB+   "</div>  <div> SectionA (1,2,3,4,5)  the price is  " +priceA+ "</div>";
                     document.getElementById("part").innerHTML = show;
                 }
                 else if(priceB<priceC && priceC<priceA){
                     show = "<div> Section B (6,7,8,9,10)  the price is " + priceB+    "  </div>  <div> sectionC (11,12,13,14,15)  the price is  "   +priceC+   "</div>  <div> SectionA (1,2,3,4,5) the price is  " +priceA+ "</div>";
                     document.getElementById("part").innerHTML = show;
            }

            }
           
           function start(){
             
             
            appears();
             // buttons to choose a section 
            buttonA = document.getElementById("A")
            buttonA.addEventListener("click" , selectA)
            buttonB = document.getElementById("B")
            buttonB.addEventListener("click" , selectB)
            buttonC = document.getElementById("C")
            buttonC.addEventListener("click" , selectC)

            
                
}
            // when we click on selectionB or selectionC or selectionA a seat is going to be unavailable and update the prices
           function selectB() 
           {
            seat=selctionB.pop();
                  
                
                  name = document.getElementById("name").value ;
                  document.getElementById("customer").innerHTML=name;
                  document.getElementById("Price").innerHTML=priceB;
                  document.getElementById("seat").innerHTML=seat;
                  document.getElementById("sectionid").innerHTML="SECTION B"
                  appears();
              
              if (typeof seat==="undefined") {
                        document.getElementById("part3").innerHTML="Section B is not available"
                        document.getElementById("seat").innerHTML="Choose another section"
  
                        buttonB.disabled = true;
                    }

                    if( buttonA.disabled==true && buttonB.disabled==true && buttonC.disabled==true){
                        document.getElementById("seat").innerHTML="The information for next flight will be available soon"
                    }
              
             }
  
            function selectA() 
           {
                seat=selctionA.pop();
                  
                name = document.getElementById("name").value ;
                document.getElementById("customer").innerHTML=name;
                document.getElementById("Price").innerHTML=priceA;
                document.getElementById("seat").innerHTML=seat;
                document.getElementById("sectionid").innerHTML="SECTION A"
                appears();
            
            if (typeof seat==="undefined") {
                      document.getElementById("part2").innerHTML="Section A is not available"
                      document.getElementById("seat").innerHTML="Choose another section"

                      buttonA.disabled = true;
                  }

                  if( buttonA.disabled==true && buttonB.disabled==true && buttonC.disabled==true){
                    document.getElementById("seat").innerHTML="The information for next flight will be available soon"
                }
            
           }

           function selectC() 
           {
            seat=selctionC.pop();
                  
                
                  name = document.getElementById("name").value ;
                  document.getElementById("customer").innerHTML=name;
                  document.getElementById("Price").innerHTML=priceC;
                  document.getElementById("seat").innerHTML=seat;
                  document.getElementById("sectionid").innerHTML="SECTION C"
                  appears();
              
              if (typeof seat==="undefined") {
                        document.getElementById("part4").innerHTML="Section C is not available"
                        document.getElementById("seat").innerHTML="Choose another section"
  
                        buttonC.disabled = true;
                    }

                    if( buttonA.disabled==true && buttonB.disabled==true && buttonC.disabled==true){
                        document.getElementById("seat").innerHTML="The information for next flight will be available soon"
                    }
           }
        window.addEventListener( "load", start, false );
        

        