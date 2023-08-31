// Set menu auto close state if not set by developer
document.querySelectorAll('header a.nav-link.dropdown-toggle').forEach(function(el) {
    if (!el.getAttribute("data-bs-auto-close")) {
        el.dataset.bsAutoClose = 'true';
    }
});
document.querySelectorAll('aside a.nav-link.dropdown-toggle').forEach(function(el) {
    if (!el.getAttribute("data-bs-auto-close")) {
        el.dataset.bsAutoClose = 'false';
    }
});

// Bar layout - Highlight active section/page
[...document.querySelectorAll('aside a[href], header.top a[href]')]
    .filter(el => window.location.href.split("#")[0].split("?")[0] === el.href)
    .forEach(el => {
        while (/(nav-item|nav-link|dropdown)/.test(el.className)) {
            if (el.previousElementSibling?.dataset.bsAutoClose === 'false')  {
                el.classList.add('show');
            }
            let container = el.parentElement?.parentElement;
            let parentContainer = container;
            while (parentContainer.classList.contains('dropend')) {
                parentContainer.querySelector('a.dropdown-toggle').classList.add('active');
                parentContainer = parentContainer.parentElement?.parentElement;
            }
            if (parentContainer.parentElement.parentElement.parentElement.parentElement.tagName.toLowerCase() === 'aside') {
                parentContainer.querySelector('a.dropdown-toggle').classList.add('show');
                parentContainer.querySelector('div.dropdown-menu').classList.add('show');
                [...parentContainer.querySelectorAll('.active')].forEach(function(activeDropdown) {
                    if(activeDropdown.classList.contains('dropdown-toggle') && activeDropdown !== el) {
                        activeDropdown.classList.add('show');
                        activeDropdown.nextElementSibling.classList.add('show');
                    }
                });
            } else if (parentContainer.classList.contains('nav-item')) {
                parentContainer.classList.add('active');
            
                parentContainer.querySelector('a.dropdown-toggle').addEventListener('click', function () {
                    [...parentContainer.querySelectorAll('.active')].forEach(function(activeDropdown) {
                        if (activeDropdown.classList.contains('dropdown-toggle') && activeDropdown !== el) {
                           setTimeout(function() {
                            activeDropdown.click();               
                            }, 10);
                            
                        }
                    });
                }); 
            }
            el.classList.add('active');
            el = el.parentElement;
        }
    });
