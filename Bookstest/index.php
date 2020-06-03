<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Books</title>
        <link rel=stylesheet href="style.css" type="text/css">
    </head>
    
        <body>
            <header>      
                 
                <nav class="nav justify-content-center">

                    <form class="form-inline shadow p-3 mb-8 bg-white rounded" id="myForm" >
                        <input class="form-control mr-sm-2" type="search" placeholder="Sök" aria-label="Sök" id="title">
                              <select id="inputState" class="form-control">
                                  <option class="title" selected value="title">Sortera efter</option>
                                    <option class="title" value="title">Titel</option>
                                    <option class="author" value="author">Författare</option>
                                    <option class="pub" value="pub">Utgivningsår</option>
                              </select>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin:15px;" id="button">Sök</button>
                               
                    </form>
                        <?php include ('add.php'); ?>
                        <?php include ('delete.php'); ?>
                </nav>
            </header>
            
         <div class="result">
            <div class="d-flex justify-content-center">
            <div id="result" class="d-flex align-content-stretch flex-wrap">
                    

            </div>
                
            </div>
            </div>
             <?php include ('script.php'); ?>
        </body>

</html>