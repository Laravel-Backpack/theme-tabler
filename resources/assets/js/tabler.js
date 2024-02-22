// Bar layout - Highlight active section/page
[...document.querySelectorAll('aside a[href], header.top a[href]')]
    .filter(el => window.location.href.split("#")[0].split("?")[0] === el.href)
    .forEach(el => {
        while (/(nav-item|nav-link|dropdown)/.test(el.className)) {
            let parentContainer = el.parentElement?.parentElement;
            while (parentContainer.classList.contains('dropend')) {
                parentContainer.querySelector('a.dropdown-toggle').classList.add('active');
                parentContainer = parentContainer.parentElement?.parentElement;
            }
           
            if (parentContainer.parentElement.parentElement.parentElement.parentElement.tagName.toLowerCase() === 'aside') {
                parentContainer.querySelector('a.dropdown-toggle').classList.add('active');
            } else if (parentContainer.classList.contains('nav-item')) {
                parentContainer.classList.add('active');
            }
            el.classList.add('active');
            el = el.parentElement;
        }
    });
