$('aside a[href="'+window.location.href+'"]')
    .addClass('active')
    .parent()
    .addClass('show')
    .prev()
    .addClass('show');