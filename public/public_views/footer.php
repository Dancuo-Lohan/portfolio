<?php

use CorianderCore\Core\Support\PublicUrl;

$requestedView = isset($__corianderRequestedView) ? $__corianderRequestedView : 'home';
$scriptPath = 'assets/js/' . $requestedView . '/index.js';
?>
</section>
<footer id="footer" class="w-full absolute bottom-0 h-auto border-t-2 border-dark-green dark:border-accent-green bg-white dark:bg-black">
    <div class="relative w-full max-w-screen-2xl text-center m-auto h-full inset-x-0 font-poppins md:text-lg sm:text-lg text-sm pb-2 md:pb-0">
        <div class="sm:pt-4 md:pb-4 pb-16 flex sm:flex-col flex-col-reverse">
            <div id="wcb" class="carbonbadge mx-auto dark:first sm:pt-0 pt-2"></div>
            <div class="flex md:flex-row md:justify-center md:gap-8 gap-1 flex-col mt-4">
                <a href="/legal-notice" title="View the Legal Notices" class="underline underline-offset-2 text-dark-green dark:text-accent-green tracking-1">Legal notice</a>
                <a href="/terms-and-conditions" title="Read the Terms and Conditions" class="underline underline-offset-2 text-dark-green dark:text-accent-green tracking-1">Terms and conditions</a>
                <span>&copy; Dancuo Lohan - <?php echo date('Y'); ?></span>
            </div>
        </div>
    </div>
</footer>

<?php if (file_exists(PROJECT_ROOT . '/public/' . $scriptPath)) { ?>
    <script type="module" src="<?= PublicUrl::versionedAsset($scriptPath) ?>" defer></script>
<?php } ?>
<script src="https://unpkg.com/website-carbon-badges@1.1.3/b.min.js" defer></script>
</body>

</html>
