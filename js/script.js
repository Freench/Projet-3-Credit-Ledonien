let mainMenu = document.getElementById("menu-slider")
        document.getElementById("menuburger").addEventListener("click", function(){
            if (mainMenu.style.display === "none"){
                
                mainMenu.style.display = "block";    
            } else {
                
                mainMenu.style.display = "none";
            }
        });