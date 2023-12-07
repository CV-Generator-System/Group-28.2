// form repeater
$(document).ready(function(){
    $('.repeater').repeater({
        initEmpty: false,
        defaultValues: {
            'text-input': ''
        },
        show:function(){
            $(this).slideDown();
        },
        hide: function(deleteElement){
            $(this).slideUp(deleteElement);
            setTimeout(() => {
                generateCV();
            }, 500);
        },
        isFirstItemUndeletable: true
    })
})

function toggleMobileMenu() {
    var mobileMenu = document.querySelector(".mobile-menu");
    if (mobileMenu.style.display === "block" || mobileMenu.style.display === "") {
        mobileMenu.style.display = "none";
    } else {
        mobileMenu.style.display = "block";
    }
}