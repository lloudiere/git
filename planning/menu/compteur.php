<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur animé</title>
    <style>
        .compteur{ font-size: 4rem; text-align: center; font-weight: bold; color: #3498db; }
    </style>
</head>
<body>
    <div class="compteur" id="compteur">0</div>
    <div class="compteur" id="compteur2">0</div>
    <div class="compteur" id="compteur3">0</div>

    <script>
        function animeCompteur(elementId, start, end, duration) {
       
            const element = document.getElementById(elementId);
            let current = start;
            const increment = (end - start) / (duration / 10);

            const timer = setInterval(function() {
                current += increment;
                if ((increment > 0 && current >= end) || (increment < 0 && current <= end)) {
                    current = end;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 10);
        }

        // Exemple : compte jusqu'à 5000 en 3 secondes
        animeCompteur('compteur', 0, 12000, 5000);
        animeCompteur('compteur2', 0, 1100, 7000);        
        animeCompteur('compteur3', 0, 1963, 7000);
    </script>
</body>
</html>
