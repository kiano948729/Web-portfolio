
// Function for opening the "about" tabs
function openTabAbout(evt, tabName) {
    const tabcontent = document.getElementsByClassName("tabcontent");
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    const tablinks = document.getElementsByClassName("tablinks");
    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Automatically open the first "about" tab
const firstTabLink = document.querySelector(".tablinks");
if (firstTabLink) firstTabLink.click();

// Function for opening the "work" tabs
function openTab(evt, tabName) {
    const tabcontentWork = document.getElementsByClassName("tabcontentWork");
    for (let i = 0; i < tabcontentWork.length; i++) {
        tabcontentWork[i].style.display = "none";
    }

    const worklinks = document.getElementsByClassName("worklinks");
    for (let i = 0; i < worklinks.length; i++) {
        worklinks[i].className = worklinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Automatically open the first "work" tab
document.addEventListener("DOMContentLoaded", () => {
    const firstWorkTabLink = document.querySelector(".worklinks");
    if (firstWorkTabLink) firstWorkTabLink.click();

    // Toggle button for showing/hiding fields
    const toggleButton = document.getElementById('toggle-button');
    const veld = document.getElementById('veld');
    if (toggleButton && veld) {
        toggleButton.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click event from propagating
            veld.style.display = veld.style.display === 'block' ? 'none' : 'block';
        });

        // Close field when clicking outside of it
        document.addEventListener('click', (e) => {
            if (e.target !== toggleButton && e.target !== veld) {
                veld.style.display = 'none';
            }
        });
    }
    const toggleButton1 = document.getElementById('toggle-button1');
    const veld1 = document.getElementById('veld1');
    if (toggleButton1 && veld1) {
        toggleButton1.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click event from propagating
            veld1.style.display = veld1.style.display === 'block' ? 'none' : 'block';
        });

        // Close field when clicking outside of it
        document.addEventListener('click', (e) => {
            if (e.target !== toggleButton1 && e.target !== veld1) {
                veld1.style.display = 'none';
            }
        });
    }
    const toggleSlide = document.getElementById('toggle-slide-up');
    const slideUpContent = document.getElementById('slideUpContent');
    if (toggleSlide && slideUpContent) {
        toggleSlide.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click event from propagating
            slideUpContent.style.display = slideUpContent.style.display === 'block' ? 'none' : 'block';
        });
        // Close field when clicking outside of it
        document.addEventListener('click', (e) => {
            if (e.target !== toggleSlide && e.target !== slideUpContent) {
                slideUpContent.style.display = 'none';
            }
        });
    }
    const toggleSlide1 = document.getElementById('toggle-slide-up1');
    const slideUpContent1 = document.getElementById('slideUpContent1');
    if (toggleSlide1 && slideUpContent1) {
        toggleSlide1.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click event from propagating
            slideUpContent1.style.display = slideUpContent1.style.display === 'block' ? 'none' : 'block';
        });
        // Close field when clicking outside of it
        document.addEventListener('click', (e) => {
            if (e.target !== toggleSlide1 && e.target !== slideUpContent1) {
                slideUpContent1.style.display = 'none';
            }
        });
    }
    const toggleSlide2 = document.getElementById('toggle-slide-up2');
    const slideUpContent2 = document.getElementById('slideUpContent2');
    if (toggleSlide2 && slideUpContent2) {
        toggleSlide2.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click event from propagating
            slideUpContent2.style.display = slideUpContent2.style.display === 'block' ? 'none' : 'block';
        });
        // Close field when clicking outside of it
        document.addEventListener('click', (e) => {
            if (e.target !== toggleSlide2 && e.target !== slideUpContent2) {
                slideUpContent2.style.display = 'none';
            }
        });
    }

    // Google Translate initialization
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'nl',
            includedLanguages: 'en,nl,fr,de',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }

    const googleTranslateElement = document.getElementById('google_translate_element');
    if (googleTranslateElement) {
        googleTranslateElement.addEventListener('click', function () {
            const iframe = document.querySelector('iframe.goog-te-menu-frame');
            if (iframe) {
                const dropdown = iframe.contentWindow.document.querySelector('.goog-te-menu2-item div');
                if (dropdown) dropdown.click(); // Simulate a click on the dropdown
            }
        });
    }

    // Hover effect for the .about-page-div
    document.querySelectorAll('.about-page-div').forEach(div => {
        div.addEventListener('mouseover', () => {
            const arrowIcon = div.querySelector('.about-div-arrow button i');
            if (arrowIcon) {
                arrowIcon.classList.remove('fa-chevron-right');
                arrowIcon.classList.add('fa-angles-right', 'fa-beat-fade', 'icon-hover');
            }
        });

        div.addEventListener('mouseout', () => {
            const arrowIcon = div.querySelector('.about-div-arrow button i');
            if (arrowIcon) {
                arrowIcon.classList.remove('fa-angles-right', 'fa-beat-fade', 'icon-hover');
                arrowIcon.classList.add('fa-chevron-right');
            }
        });
    });

    // Google Translate initialization (if needed)
    if (typeof google !== 'undefined' && google.translate) {
        googleTranslateElementInit();
    }
});


