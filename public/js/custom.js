// This function is use in /partials/navbar/navbar
function navMenuToggle() {
    var el = document.getElementById('custom-click');
    if(el.classList.contains('active_nav_toggle')){
        el.classList.remove('active_nav_toggle');
        el.classList.add('remove_active_nav_toggle');
    } else {
        el.classList.remove('remove_active_nav_toggle');
        el.classList.add('active_nav_toggle');
    }
}
// End