document.addEventListener('DOMContentLoaded', () => {
    const topbar = document.querySelector('.topbar');
    const sidebar = document.getElementById('collapseWidthExample');
    const content = document.querySelector('.content');

    function updateMargins() {
        const isMobile = window.innerWidth <= 900;
        if (isMobile) {
            // On mobile, sidebar is fixed width 250px when shown
            if (sidebar.classList.contains('show')) {
                topbar.style.marginLeft = '250px';
                content.style.marginLeft = '250px';
            } else {
                topbar.style.marginLeft = '0';
                content.style.marginLeft = '0';
            }
        } else {
            // Desktop: 10vw
            if (sidebar.classList.contains('show')) {
                topbar.style.marginLeft = '10vw';
                content.style.marginLeft = '10vw';
            } else {
                topbar.style.marginLeft = '0';
                content.style.marginLeft = '0';
            }
        }
    }

    // Initial check
    updateMargins();

    sidebar.addEventListener('shown.bs.collapse', updateMargins);
    sidebar.addEventListener('hidden.bs.collapse', updateMargins);

    // Update on window resize
    window.addEventListener('resize', updateMargins);
});
function updateDateTime() {
    const d = new Date();
    const date = d.toLocaleDateString();
    const time = d.toLocaleTimeString();
    document.getElementById("datetime").textContent = `${date} ${time}`;
}
window.onload = function() {
  updateDateTime();
  setInterval(updateDateTime, 1000);

const modal = document.getElementById("profileModal");
const btn = document.getElementById("profileBtn");
const closeBtn = document.querySelector(".close");

// When user clicks the Profile button
btn.onclick = function() {
  modal.style.display = "block";
}

// When user clicks the close (×)
closeBtn.onclick = function() {
  modal.style.display = "none";
}

// When user clicks outside the modal box
window.onclick = function(e) {
  if (e.target == modal) {
    modal.style.display = "none";
  }
}
};
