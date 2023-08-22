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
            if (el.previousElementSibling?.dataset.bsAutoClose === 'false') el.classList.add('show');
            el.classList.add('active');
            el = el.parentElement;
        }
    });
