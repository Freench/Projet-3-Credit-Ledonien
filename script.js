var frameIndex = 0;
        showFrames(frameIndex);
        // Je fixe mon index pour rappeler mes frames et les manipuler à la façon d'un ARRAY

        function currentFrame(n) {
            showFrames(frameIndex = n);
        }
        // J'établis un parallèle entre l'index de ma classe currentFrame qui réagira onclick et ma future fonction qui gèrera mes frames

        function showFrames(n) {
            let i;
            let frames = document.getElementsByClassName("frame");
            let dots = document.getElementsByClassName("dot");           
            
            for (i = 0; i < frames.length; i++)
            {
                frames[i].style.display = "none";
            }
            //J'initialise mon index à 0, tant qu'il est inférieur à la longueur de mon tableau, j'applique la classe display ="none"
            for (i = 0; i < dots.length; i++)
            {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            //Pareil pour les dots, mais je retire la classe " active" définie en css (attention à l'espace)
            frames[frameIndex].style.display = "block";
            dots[frameIndex].className += " active";
            //J'indique que les frames indexées doivent passer en style "block"
            //Pareil pour le sélecteur, sauf que je rajoute la classe " active"
        }