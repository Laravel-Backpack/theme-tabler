@include(backpack_view('inc.menu_items'))

@push('after_scripts')
@bassetBlock('tabler-menu-javascript.js')
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        [...document.querySelectorAll('aside .dropdown-toggle.active')].forEach(el => {
            let bsDropdown = bootstrap.Dropdown.getInstance(el);
            if(typeof bsDropdown !== 'undefined' && bsDropdown !== null) {
                bsDropdown.show();
            }
            
            el.blur();

            
        });
        [...document.querySelectorAll('header.top .dropdown-toggle.active')].forEach(el => {
            let bsdropdown = bootstrap.Dropdown.getInstance(el);
            bsdropdown.show();
            el.blur(); 
        }); 

        [...document.querySelectorAll('header.top .nav-item.dropdown')].forEach(el => {
            console.log(el);
            let bsDropdown = bootstrap.Dropdown.getInstance(el.firstElementChild);
            if(typeof bsDropdown !== 'undefined' && bsDropdown !== null) {
                bsDropdown._config.autoClose = 'outside';
                bsDropdown.update();
            }
                
        });

        [...document.querySelectorAll('aside .nav-item.dropdown')].forEach(el => {
            let bsDropdown = bootstrap.Dropdown.getInstance(el.firstElementChild);
            if(typeof bsDropdown !== 'undefined' && bsDropdown !== null) {
                bsDropdown._config.autoClose = false;
                bsDropdown.update();
            }
                
        });
    });
</script>
@endBassetBlock
@endpush