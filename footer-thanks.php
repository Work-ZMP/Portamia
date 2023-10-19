

<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>
<script>
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 400,
        'tolerance': 70
    });

    function close(eve) {
        eve.preventDefault();
        slideout.close();
        document.getElementById('panel').classList.toggle('hide');
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.remove('active');
    }

    slideout
        .on('beforeopen', function() {
            this.panel.classList.add('panel-open');
        })
        .on('open', function() {
            this.panel.addEventListener('click', close);
        })
        .on('beforeclose', function() {
            this.panel.classList.remove('panel-open');
            this.panel.removeEventListener('click', close);
        });

    // Toggle button
    document.querySelector('.header__btn-menu').addEventListener('click', function() {
        slideout.toggle();
        document.getElementById('panel').classList.toggle('hide')
    });

    document.querySelector('#menu .menu-mob__close-btn').addEventListener('click', function() {
        slideout.toggle();
        document.getElementById('panel').classList.toggle('hide');
        document.querySelector('#menu-left-products').classList.remove('active');
        document.querySelector('#menu-left-more').classList.remove('active');
    });
</script>

</body>

<?php wp_footer(); ?>

</html>