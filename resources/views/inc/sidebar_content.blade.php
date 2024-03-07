@include(backpack_view('inc.menu_items'))

@push('after_scripts')
@bassetBlock('tabler-menu-javascript.js')
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        [...document.querySelectorAll('aside .dropdown-toggle.active')].forEach(el => { 
            let bsDropdown = bootstrap.Dropdown.getInstance(el);
            if(typeof bsDropdown !== 'undefined' && bsDropdown !== null) {
                bsDropdown.show();
                el.blur();                 
            }
        });

        // this is used to close only "main menus" when navigating in the sidebar. 
        // in topbar we can use `click outside` to close the menu, but here we don't want
        // the menu closing while we interact with the page, only when another main menu is clicked
        [...document.querySelectorAll('aside .nav-item.dropdown')].forEach(el => {
        let bsDropdown = bootstrap.Dropdown.getInstance(el.firstElementChild);
        if(typeof bsDropdown !== 'undefined' && bsDropdown !== null) {
            bsDropdown._config.autoClose = false;
            bsDropdown.update();
            
            bsDropdown._element.addEventListener('show.bs.dropdown', function(e) {
                let openDropdownInstance = document.querySelector('aside .nav-link.dropdown-toggle.show');
                if(openDropdownInstance !== null) {
                    let openDropdown = bootstrap.Dropdown.getInstance(openDropdownInstance);
                    openDropdown.hide();
                }
            });
            
        }
        });

        [...document.querySelectorAll('header.top .dropdown-toggle, aside .dropdown-toggle')].forEach(el => {
            let bsDropdown = bootstrap.Dropdown.getInstance(el);
            if(typeof bsDropdown !== 'undefined' && bsDropdown !== null) {
                if(!bsDropdown._element.classList.contains('nav-link')) {
                    bsDropdown._element.addEventListener('show.bs.dropdown', function(e) {
                        // whenever a dropdown is shown, we close all other nested dropdowns
                        let targetParent = e.target.parentElement.classList.contains('dropend') ? e.target.parentElement.parentElement : e.target.parentElement.parentElement.parentElement;
                        let openDropdownInstances = targetParent.querySelectorAll('.dropdown-toggle.show');
                        if(openDropdownInstances !== null) {
                           openDropdownInstances.forEach(function(openDropdownInstance) {
                                let openDropdown = bootstrap.Dropdown.getInstance(openDropdownInstance);
                                openDropdown.hide();
                            });
                        }
                    });
                }else{
                    // when nav-link is active we re-open the complete active menu
                    bsDropdown._element.addEventListener('show.bs.dropdown', function(e) {
                        if(e.target.parentElement.classList.contains('active') || e.target.classList.contains('active')) {
                            e.target.parentElement.querySelectorAll('.dropdown-toggle.active').forEach(function(openDropdownInstance) {
                                if(openDropdownInstance !== e.target) {
                                    let openDropdown = bootstrap.Dropdown.getInstance(openDropdownInstance);
                                    openDropdown.show();
                                }
                            });
                        }
                    });
                }
                
            }
                         
        });

        // closes the main dropdown when clicking outside
        [...document.querySelectorAll('header.top .nav-item.dropdown')].forEach(el => {
            let bsDropdown = bootstrap.Dropdown.getInstance(el.firstElementChild);
            if(typeof bsDropdown !== 'undefined' && bsDropdown !== null) {
                bsDropdown._config.autoClose = 'outside';
                bsDropdown.update();
            }
                
        });
    });
</script>
@endBassetBlock
@endpush