
document.addEventListener('DOMContentLoaded', () => {
    const dropdowns = document.querySelectorAll('.dropdown-btn');
    dropdowns.forEach(btn => {
        btn.addEventListener('click', function () {
            const dropdownContent = this.nextElementSibling;
            dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
        });
    });
});

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
    animeCompteur('compteur', 0, 12000, 5000);
    animeCompteur('compteur2', 0, 1100, 7000);        
    animeCompteur('compteur3', 0, 1963, 7000);

