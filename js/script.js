const header = document.querySelector(&quot;header&quot;);

window.addEventListener (&quot;scroll&quot;, function() {
    header.classList.toggle (&quot;sticky&quot;, window.scrollY &gt;0);
});

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () =&gt; {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

window.onscroll = () =&gt; {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
};

const sr = ScrollReveal ({
    distance: '25px',
    duration: 250,
    reset: true
})

sr.reveal('.home-text',{delay:190, origin:'bottom'})

sr.reveal('.about,.services,.portfolio,.contact',{delay:200, origin:'bottom'})
