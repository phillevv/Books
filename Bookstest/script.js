$(document).ready(function(){
     
     
    var search = $("#title").val();
     
        if(search == '') {
            var title='';
            
            $.get("api.php?title="  + search, function(response) {
            for(i=0;i < response.length;i++)
            {
                 //console.log(response[i]);
                
                  title=$('<div class="card" style="width: 18rem; padding:10px; margin:5px;">  <h5 class="card-title" style="padding: 10px;">' + response[i].title + '</h5>' + '<p>' + response[i].author +  '</p>' + '<p>' + response[i].pub + '</p>' + ' <a href="#" class="btn btn-info">Köp</a> </div>');
       
                    title.appendTo("#result");
            }
                
   
                }); 
                        }
     

    //Funktion som söker efter föremål efter submit          
    $("#myForm").submit(function() {
        
        
        var search = $("#title").val();

        
        if(search == '') {
         location.reload();  
        }
        
        
        else {

            var title='';
            
            $.get("api.php?title="  + search, function(response) {
            for(i=0;i < response.length;i++)
            {
                 //console.log(response[i]);
                 
             title=$('<div class="card" style="width: 18rem; padding:10px; margin:5px;">  <h5 class="card-title" style="padding: 10px;">' + response[i].title + '</h5>' + '<p>' + response[i].author +  '</p>' + '<p>' + response[i].pub + '</p>' + ' <a href="#" class="btn btn-info">Köp</a> </div>');
              
                
                title.appendTo("#result");
            }
                

                  
            });
        }
        return false;
        
        
        
        
        
            });
     
    //Funktion som sorterar innehåll efter select 
    $("select.form-control").change(function(){
        var selected = $(this).children("option:selected").val();
        var search = $("#title").val();
                
        if (selected == selected) {

            var title='';
            
            $.get("api"+selected+".php?title=" + search, function(response) {
                for(i=0;i < response.length;i++)
                {
                 //console.log(response[i]);
                 
                title=$('<div class="card" style="width: 18rem; padding:10px; margin:5px;">  <h5 class="card-title" style="padding: 10px;">' + response[i].title + '</h5>' + '<p>' + response[i].author +  '</p>' + '<p>' + response[i].pub + '</p>' + ' <a href="#" class="btn btn-info">Köp</a> </div>');
              
                
                title.appendTo("#result");
                }
                

                  
                });
                }
                

                
                });
     

                 
        }); 



//Gömmer element 
$(document).ready(function(){
  $("#title").click(function(){
    $(".result div").hide();
      
  });
    
  $("#inputState").click(function(){
    $(".result div").hide();
  });
    
    
    

});
