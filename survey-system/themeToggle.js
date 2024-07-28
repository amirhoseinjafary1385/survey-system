// انتخاب آیکون‌ها و بدنۀ صفحه

document.addEventListener('DOMContentLoaded', function(){


const darkModeIcon = document.getElementById('dark-mode-icon'); 
const lightModeIcon = document.getElementById('light-mode-icon');


const body  = document.body;

// در ابتدا حالت روشن را نمایش دهید

lightModeIcon.style.display = 'block';// نمایش  دادن  آیکون نور
darkModeIcon.style.display = 'block';// نمایش آیکون تاریکی

lightModeIcon.addEventListener('click', function() {
    body.classList.remove('dark-theme');
    lightModeIcon.style.display = 'block';
    darkModeIcon.style.display = 'block';
    });

// افزودن رویداد کلیک به آیکون روشن
darkModeIcon.addEventListener('click', function() {
    body.classList.add('dark-theme');
    darkModeIcon.style.display = 'block';
    lightModeIcon.style.display = 'block';
    });
});


