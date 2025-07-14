<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<style>
    /*--------------------------------------------------------------
    # Scroll Top Button
    --------------------------------------------------------------*/
    .scroll-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: -15px;
    z-index: 99999;
    background-color: var(--accent-color);
    width: 44px;
    height: 44px;
    border-radius: 50px;
    transition: all 0.4s;
    }

    .scroll-top i {
    font-size: 24px;
    color: var(--contrast-color);
    line-height: 0;
    }

    .scroll-top:hover {
    background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
    color: var(--contrast-color);
    }

    .scroll-top.active {
    visibility: visible;
    opacity: 1;
    bottom: 15px;
    }
</style>
<script>
    /**
     * Scroll to top button functionality
     * Use with: Scroll Top Button component
     */
    function initScrollTopButton() {
    let scrollTop = document.querySelector('.scroll-top');

    function toggleScrollTop() {
        if (scrollTop) {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
        }
    }

    if (scrollTop) {
        scrollTop.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        });

        window.addEventListener('load', toggleScrollTop);
        document.addEventListener('scroll', toggleScrollTop);
    }
    }

    // Initialize when scroll top button component mounts
    initScrollTopButton();
</script>