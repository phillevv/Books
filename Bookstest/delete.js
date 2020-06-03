
//Sök form för delete 
 $(document).ready(function(){
     
     
     

    //Funktion för submit          
    $("#myFormd").submit(function() {
        
        var search = $("#titles").val();
        
        if(search == '') {
            console.log("Flyll I");
        }
        
        else {

            var title='';
            
            $.get("api.php?title="  + search, function(response) {
            for(i=0;i < response.length;i++)
            {
                 //console.log(response[i]);
                 
             title=$('<form action="deletesql.php" method="post"> <div class="card" style="width: 18rem; padding:10px; margin:5px;">  <h5 class="card-title" style="padding: 10px;"> <input type="text" value='+response[i].id+' name="id" style="display:none;">' + response[i].title + '</h5>' + '<p>' + response[i].author +  '</p>' + '<p>' + response[i].pub + '</p>' + ' <button type="submit" class="btn btn-danger">Ta bort</button> </div></form>');
              
                
                title.appendTo(".results");
            }
                

                  
            });
        }
        return false;
    });
    
                 
}); 


  
 //Gömmer element 
$(document).ready(function(){
  $("#titles").click(function(){
    $(".results div").hide();
      
  });
    
    
    
    

});   



