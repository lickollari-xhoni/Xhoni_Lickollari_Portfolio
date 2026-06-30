import 'bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menuBtn');
    const menuOverlay = document.getElementById('menuOverlay');

    function toggleMenu() {
        if (menuOverlay.style.display === 'flex') {
            menuOverlay.style.display = 'none';
            menuBtn.classList.remove('is-open');
            document.body.style.overflow = 'auto';
        } else {
            menuOverlay.style.display = 'flex';
            menuBtn.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }
    }

    if (menuBtn && menuOverlay) {
        menuBtn.addEventListener('click', toggleMenu);
    }
});

document.querySelectorAll('.interactive-link').forEach(link => {
    const circle = link.querySelector('.hover-circle');
    
    link.addEventListener('mousemove', (e) => {
        const rect = link.getBoundingClientRect();
        
        // Calcola la posizione esatta del mouse relativa al link
        const x = e.clientX - rect.left - (circle.offsetWidth / 2);
        const y = e.clientY - rect.top - (circle.offsetHeight / 2);
        
        // Applica le coordinate e mantiene attivo il cerchio
        circle.style.transform = `translate(${x}px, ${y}px) scale(1)`;
    });
    
    link.addEventListener('mouseleave', () => {
        // Quando esci, si rimpicciolisce scomparendo elegantemente
        circle.style.transform = `scale(0)`;
    });
});


// animazione welcome
const text = "Full-Stack Web Developer";
let i = 0;
function typeWriter() {
  if (i < text.length) {
    document.getElementById("typing").innerHTML += text.charAt(i);
    i++;
    setTimeout(typeWriter, 100);
  }
}


// animazione menu
document.getElementById('menuBtn').addEventListener('click', function() {
    const overlay = document.getElementById('menuOverlay');
    overlay.classList.add('active'); // O la classe che usi per mostrare il menu
    
    // Forza il refresh dell'animazione per gli elementi
    const items = document.querySelectorAll('.menu-page-item');
    items.forEach(item => {
        item.style.animation = 'none';
        item.offsetHeight; // Trucco per resettare l'animazione
        item.style.animation = null; 
    });
});

// logo XH
document.getElementById('xhLogo').addEventListener('click', function() {
    // Rimuoviamo la rotazione, lasciamo solo lo scale
    this.style.transition = 'transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
    this.style.transform = 'scale(1.1)'; // Un leggero balzo in avanti
    
    setTimeout(() => {
        this.style.transform = 'scale(1)'; // Torna alla dimensione originale
    }, 300);
});

// aboute animazione
document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll('.reveal-bottom');
        elements.forEach(el => {
            // Un piccolo timeout per assicurare che il browser sia pronto
            setTimeout(() => {
                el.classList.add('active');
            }, 100);
        });
});
