<div class="relative mx-auto max-w-screen-2xl">
    <h1 class="mt-6 md:mt-16 font-concert-one text-2xl sm:text-4xl hsm:text-5xl md:text-6xl text-dark-green dark:text-accent-green tracking-1 mx-auto w-4/5">
        Ready to start a conversation?
    </h1>
    <p class="mt-8 text-lg sm:text-2xl hsm:text-2xl md:text-3xl text-black dark:text-white !leading-normal m-auto w-4/5">
        Connect with me on LinkedIn. 
    </p>

    <div class="flex w-4/5 mx-auto justify-between mt-16 flex-col-reverse lg:flex-row">
        <div class="md:w-1/2 flex flex-col gap-4 text-base md:text-lg tracking-1 mx-auto lg:mx-0">
            <a href="https://www.linkedin.com/in/lohan-dancuo/" title="Go to my LinkedIn account (open a new tab)" target="_blank" class="flex gap-3 underline underline-offset-2 border-2 border-dark-green text-dark-green dark:border-accent-green dark:text-accent-green lg:mr-auto pr-4 pl-2 py-1 rounded-md hover:opacity-60 hover:cursor-pointer transition-opacity">
                <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/mainStack/linkedin.png', [
                    'alt' => 'Logo of LinkedIn',
                    'class' => 'block w-10 md:w-12 h-auto mx-auto rounded-lg object-cover dark:invert',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                    'convert' => false,
                ]) ?>
                <p class="my-auto">See my LinkedIn account</p>
            </a>
            <a href="https://github.com/Dancuo-Lohan" title="Go to my GitHub account (open a new tab)" target="_blank" class="flex gap-3 underline underline-offset-2 border-2 border-dark-green text-dark-green dark:border-accent-green dark:text-accent-green lg:mr-auto pr-7 pl-2 py-1 rounded-md hover:opacity-60 hover:cursor-pointer transition-opacity">
                <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/mainStack/github.png', [
                    'alt' => 'Logo of GitHub',
                    'class' => 'block w-10 md:w-12 h-auto mx-auto rounded-lg object-cover dark:invert',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                    'convert' => false,
                ]) ?>
                <p class="my-auto">See my GitHub account</p>
            </a>
        </div>
    </div>
</div>
