// Sidebar layout - Highlight active section/page
$('aside a[href="'+window.location.href+'"]')
    .addClass('active')
    .parent()
    .addClass('show')
    .prev()
    .addClass('show');

// Topbar layout - Highlight active section/page
$('header.top a[href="'+window.location.href+'"]')
    .addClass('active')
    .parent()
    .addClass('active')
    .parent()
    .addClass('active');