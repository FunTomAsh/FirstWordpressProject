<div id="contact" class="h-auto bg-cover bg-no-repeat bg-center flex items-center text-white">
    <div class="container mx-auto h-full flex flex-wrap md:flex-row items-center justify-center">
        <div class="relative w-3/4 flex flex-col md:flex-row items-center justify-center"> 
            <div class="flex flex-col items-start justify-center md:w-1/2">
                <?php 
                    $contact_form_shortcode = get_field('contact_form_shortcode');
                    if (isset($contact_form_shortcode['url'])) {
                        echo do_shortcode($contact_form_shortcode);
                    } else {
                        echo do_shortcode('[contact-form-7 id="2ca1b34" title="Contact form 1"]');
                    }
                ?>
                <p class="text-xs text-gray-500 items-start justify-start text-left my-[18px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>

            <div class="flex flex-col my-4 md:my-0 items-center justify-center md:items-end text-center md:text-right md:w-1/2">
                <h2 class="text-3xs md:text-3xl font-bold mb-4">Lorem<br>ipsum</h2>
                <p>Lorem ipsum</p>
                <p>11-111 Lorem ipsum</p>
                <p>www.loremipsum.pl</p>
                <p>lorem@ipsum.pl</p>
                <p>tel: 123456789</p>
            </div>
        </div>
    </div>
</div>