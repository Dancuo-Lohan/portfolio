<?php
$text[0] = ['TypeScript', 'Developer', 'Performance', 'Front-End'];
$text[1] = ['Internal tools', 'Deployment', 'Business users', 'Web'];
$text[2] = ['Open Source', 'Back-End', 'Agile', 'Testing'];
$text[3] = ['Optimization', 'Tailwind', 'Security', 'PHP'];
$direction = 0;

$coreTech = [
    'Front-end' => [
        'HTML5' => 'html',
        'JavaScript' => 'javascript',
        'TypeScript' => 'typescript',
        'CSS' => 'css',
        'Tailwind' => 'tailwind'
    ],
    'Database' => [
        'MySQL' => 'mysql',
        'SQLite' => 'sqlite',
        'Oracle' => 'oracle'
    ],
    'Back-end' => [
        'PHP 7.4 - 8.5' => 'php'
    ],
    'Versioning' => [
        'GitHub' => 'github'
    ],
    'Design' => [
        'Figma' => 'figma'
    ]
];

$wallOfStacks = [
    'Symfony' => 'symfony',
    'Laravel' => 'laravel',
    'Yii' => 'yii',
    'NodeJS' => 'nodejs',
    'BunJS' => 'bunjs',
    'React' => 'react',
    'Electron' => 'electron',
    'NextJS' => 'nextjs',
    'ThreeJS' => 'threejs',
    'Python' => 'python',
    'Django' => 'django',
    'C#' => 'csharp',
    'Skript' => 'skript',
    'Godot' => 'godot',
    'Microsoft Graph API' => 'microsoftgraphapi',
    'Laserfiche' => 'laserfiche',
    'ChatGPT' => 'chatgpt',
    'Bubble Plan' => 'bubbleplan',
    'Trello' => 'trello',
    'Notion ' => 'notion'
];
?>
<div class="js-h-screen-small relative w-full h-screen md:-top-16 max-w-screen-2xl mx-auto">
    <div class="hidden md:flex absolute w-full h-full pt-16">
        <div class="relative w-2/3 h-4/5 my-auto right-0 left-auto ml-auto">
            <div class="relative w-11/12 h-4/5 overflow-hidden font-concert-one uppercase font-bold md:text-8xl hsm:text-5xl sm:text-5xl text-4xl text-opacity-10 tracking-4 pointer-events-none select-none" aria-hidden="true">
                <?php
                for ($i = 0; $i < 2; $i++) {
                    foreach ($text as $words) {
                        $directionClass = $direction == 0 ? 'right' : 'left';
                        $direction = $direction == 0 ? 1 : 0;

                        echo '<div class="animated-' . $directionClass . ' flex flex-row whitespace-nowrap justify-start left-0 w-full will-change-transform">';
                        for ($y = 0; $y < 2; $y++) {
                            echo '<p class="animated-' . $directionClass . ' block py-2 text-dark-green dark:text-accent-green !text-opacity-15 antialiased will-change-transform">';
                            foreach ($words as $word) {
                                echo '<span class="md:px-6 lg:px-8 xl:px-12">' . $word . '</span>';
                            }
                            echo '</p>';
                        }
                        echo '</div>';
                    }
                }
                ?>
                <div class="absolute inset-0 shadow-white dark:shadow-black pointer-events-none">
                </div>
            </div>
        </div>
    </div>

    <div class="relative w-full md:w-9/12 xl:w-7/12 h-full">
        <div class="relative mx-auto md:w-11/12 top-6 md:top-1/2 md:-translate-y-2/3 right-0 bottom-0">
            <div class="relative flex">
                <div class="relative px-8 pt-6 z-10 pb-4 w-full md:w-auto text-center md:text-left">
                    <div class="absolute inset-0 w-full h-full -z-10 hidden md:block">
                        <div class="absolute inset-0 w-full h-full shadow-outer-white dark:shadow-outer-black"></div>
                        <div class="absolute bg-dark-green dark:bg-accent-green w-1/2 h-4/5 -top-[2px] -left-[2px] inline-block rounded-tl-2xl"></div>
                        <div class="absolute bg-white dark:bg-black w-full h-full inline-block rounded-tl-2xl"></div>
                    </div>
                    <p class="font-concert-one text-4xl sm:text-5xl hsm:text-6xl md:text-8xl tracking-2 md:pl-[3px]">Hello!</p>
                </div>
            </div>
            <div class="relative">
                <div class="relative bg-white dark:bg-black px-8 md:pb-8 z-10 font-poppins text-center md:text-left rounded-br-2xl">
                    <h1 class="text-xl sm:text-2xl hsm:text-4xl md:text-6xl tracking-2 text-dark-green dark:text-accent-green font-bold pt-8">
                        I'm Lohan, a fullstack developer<span class="inline-block">.</span>
                    </h1>
                </div>
                <div class="absolute inset-0 w-full h-full hidden md:block">
                    <div class="absolute inset-0 w-full h-full shadow-outer-white dark:shadow-outer-black rounded-br-2xl"></div>
                    <div class="absolute bg-dark-green dark:bg-accent-green w-2/5 h-1/2 -bottom-[2px] -right-[2px] inline-block rounded-br-2xl"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-20 md:bottom-8 flex justify-center w-full">
        <a href="#Have-you-ever-wondered-what-drives-someone-to-become-a-web-developer" title="Scroll down to the next section" class="font-bold tracking-1 text-lg sm:text-xl hsm:text-xl md:text-2xl duration-300 hover:opacity-70">
            <p class="text-black dark:text-white">
                Learn more
            </p>
            <svg class="w-10 md:w-12 h-10 md:h-12 mx-auto animate-slow-bounce" aria-hidden="true" width="34" height="20" viewBox="0 0 34 20" xmlns="http://www.w3.org/2000/svg">
                <path class="fill-dark-green dark:fill-accent-green" d="M15.0831 18.4422C16.1434 19.5164 17.8653 19.5164 18.9255 18.4422L32.497 4.69219C33.5572 3.61798 33.5572 1.87344 32.497 0.799225C31.4367 -0.274994 29.7148 -0.274994 28.6545 0.799225L17.0001 12.607L5.34562 0.807818C4.28535 -0.266401 2.56348 -0.266401 1.50321 0.807818C0.442941 1.88204 0.442941 3.62657 1.50321 4.70079L15.0746 18.4508L15.0831 18.4422Z" />
            </svg>

        </a>
    </div>
</div>

<div id="Have-you-ever-wondered-what-drives-someone-to-become-a-web-developer" class="relative mx-auto pt-12 md:pt-24 pb-4 max-w-screen-2xl">
    <div class="relative horizontal-scroll-main-container" style="height: 200vw;">
        <div class="sticky overflow-hidden top-0 md:top-16 js-h-screen horizontal-scroll-sticky-container">
            <div class="absolute top-0 h-full will-change-transform flex items-center justify-between horizontal-scroll" style="width: 200vw;">
                <div class="w-full h-full flex justify-center">
                    <div class="my-auto w-4/5 text-4xl">
                        <p class="font-concert-one text-2xl sm:text-4xl hsm:text-5xl md:text-6xl text-dark-green dark:text-accent-green tracking-1 text-center m-auto w-4/5">
                            Have you ever wondered what makes someone want to become a web developer?
                        </p>
                    </div>
                </div>
                <div class="w-full h-full flex justify-center">
                    <div class="my-auto w-4/5 text-4xl">
                        <p class="font-concert-one text-2xl sm:text-4xl hsm:text-5xl md:text-6xl text-dark-green dark:text-accent-green tracking-1 text-center m-auto w-4/5">
                            For me, it's the pleasure of turning an idea into a concrete project through code.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 shadow-white dark:shadow-black pointer-events-none">
        </div>
    </div>
</div>

<div class="bg-dark-green dark:bg-accent-green contain-paint">
    <div class="sticky top-0 w-full js-h-screen z-10 overflow-hidden scale-on-scroll contain-layout pointer-events-none">
        <svg class="absolute contain-layout w-full h-full top-1/2 -translate-y-[50%] -mt-[1px]" xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 4519 3213" preserveAspectRatio="xMidYMid slice">
            <path class="fill-white dark:fill-black" fill-rule="evenodd" clip-rule="evenodd" d="M4519 0V3213H0V0H4519ZM2346.5 1439.5C2346.5 1324.5 2166 1323 2166 1439.5V1486.5C2191.5 1496.5 2202.5 1510.5 2204 1540.5V1607.5H2191.5V1540.5C2191.5 1486.5 2099 1475 2099 1540.5V1622.5C2099 1731.5 2099 1731.5 2166 1731.5V1862H2346.5V1743.5C2421 1743.5 2421 1744 2421 1673V1617C2421 1583.5 2392.5 1563 2359.5 1579V1673H2346.5V1611.5V1439.5Z" />
        </svg>
    </div>
    <div class="js-h-screen"></div>
    <div class="relative mx-auto max-w-screen-2xl pb-8">
        <div class="w-4/5 mx-auto">
            <h2 class="font-concert-one text-white dark:text-black mx-auto text-4xl sm:text-6xl hsm:text-6xl md:text-8xl tracking-1">
                Main technologies
            </h2>
            <h3 class="text-white dark:text-black mx-auto text-xl sm:text-3xl hsm:text-3xl md:text-5xl mt-16 font-bold">
                The stack I use daily
            </h3>

            <div class="xl:sticky xl:top-24 mt-8 xl:pb-48 flex">
                <div class="bg-white dark:bg-black w-full rounded-xl py-4 px-8 border-8 border-dark-green dark:border-accent-green">
                    <h3 class="font-concert-one text-2xl sm:text-4xl hsm:text-4xl md:text-6xl text-dark-green dark:text-accent-green tracking-1">Front-end</h3>
                    <div class="flex mt-8 flex-wrap justify-around lg:justify-between">
                        <?php
                        foreach ($coreTech['Front-end'] as $techno => $imgName) {
                        ?>
                            <div class="p-2 sm:p-4 w-1/2 sm:w-auto">
                                <div class="border border-dark-green dark:border-accent-green border-opacity-20 dark:border-opacity-20 rounded-lg py-4 px-2">
                                    <p class="font-bold text-xs hsm:text-base xl:text-xl text-center tracking-1"><?= $techno ?></p>
                                    <div class="w-4/5 h-1 rounded-sm bg-dark-green dark:bg-accent-green my-2 mx-auto opacity-20"></div>
                                    <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/mainStack/' . $imgName . '.png', [
                                        'alt' => 'Logo of ' . $techno,
                                        'class' => 'mt-6 block w-12 sm:w-18 lg:w-20 xl:w-28 h-auto mx-auto rounded-lg object-cover bg-true-white',
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                    ]) ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>



            <div class="xl:sticky xl:top-48 xl:pb-24 xl:mt-0 mt-16 flex justify-between flex-col lg:flex-row">
                <div class="bg-white dark:bg-black rounded-xl py-4 px-8 border-8 border-dark-green dark:border-accent-green">
                    <h3 class="font-concert-one text-2xl sm:text-4xl hsm:text-4xl md:text-6xl text-dark-green dark:text-accent-green tracking-1">Database</h3>
                    <div class="flex mt-8 flex-wrap justify-around">
                        <?php
                        foreach ($coreTech['Database'] as $techno => $imgName) {
                        ?>
                            <div class="p-2 sm:p-4 w-1/2 sm:w-auto">
                                <div class="border border-dark-green dark:border-accent-green border-opacity-20 dark:border-opacity-20 rounded-lg py-4 px-2">
                                    <p class="font-bold text-xs hsm:text-base xl:text-xl text-center tracking-1"><?= $techno ?></p>
                                    <div class="w-4/5 h-1 rounded-sm bg-dark-green dark:bg-accent-green my-2 mx-auto opacity-20"></div>
                                    <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/mainStack/' . $imgName . '.png', [
                                        'alt' => 'Logo of ' . $techno,
                                        'class' => 'mt-6 block w-12 sm:w-18 lg:w-20 xl:w-28 h-auto mx-auto rounded-lg object-cover bg-true-white',
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                    ]) ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="lg:mt-0 mt-16 bg-white dark:bg-black rounded-xl py-4 px-8 border-8 border-dark-green dark:border-accent-green">
                    <h3 class="font-concert-one text-2xl sm:text-4xl hsm:text-4xl md:text-6xl text-dark-green dark:text-accent-green tracking-1">Back-end</h3>
                    <div class="flex mt-8 flex-wrap justify-around">
                        <?php
                        foreach ($coreTech['Back-end'] as $techno => $imgName) {
                        ?> 
                            <div class="p-2 sm:p-4 w-1/2 sm:w-auto">
                                <div class="border border-dark-green dark:border-accent-green border-opacity-20 dark:border-opacity-20 rounded-lg py-4 px-2">
                                    <p class="font-bold text-xs hsm:text-base xl:text-xl text-center tracking-1"><?= $techno ?></p>
                                    <div class="w-4/5 h-1 rounded-sm bg-dark-green dark:bg-accent-green my-2 mx-auto opacity-20"></div>
                                    <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/mainStack/' . $imgName . '.png', [
                                        'alt' => 'Logo of ' . $techno,
                                        'class' => 'mt-6 block w-12 sm:w-18 lg:w-20 xl:w-28 h-auto mx-auto rounded-lg object-cover bg-true-white',
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                    ]) ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>



            <div class="xl:sticky xl:mt-24 mt-16 flex justify-between flex-col sm:flex-row">
                <div class="bg-white dark:bg-black rounded-xl py-4 px-8 border-8 border-dark-green dark:border-accent-green">
                    <h3 class="font-concert-one text-2xl sm:text-4xl hsm:text-4xl md:text-6xl text-dark-green dark:text-accent-green tracking-1">Versioning</h3>
                    <div class="flex mt-8 flex-wrap justify-around">
                        <?php
                        foreach ($coreTech['Versioning'] as $techno => $imgName) {
                        ?>
                            <div class="p-2 sm:p-4 w-1/2 sm:w-auto">
                                <div class="border border-dark-green dark:border-accent-green border-opacity-20 dark:border-opacity-20 rounded-lg py-4 px-2">
                                    <p class="font-bold text-xs hsm:text-base xl:text-xl text-center tracking-1"><?= $techno ?></p>
                                    <div class="w-4/5 h-1 rounded-sm bg-dark-green dark:bg-accent-green my-2 mx-auto opacity-20"></div>
                                    <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/mainStack/' . $imgName . '.png', [
                                        'alt' => 'Logo of ' . $techno,
                                        'class' => 'mt-6 block w-12 sm:w-18 lg:w-20 xl:w-28 h-auto mx-auto rounded-lg object-cover bg-true-white',
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                    ]) ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="sm:mt-0 mt-16 bg-white dark:bg-black rounded-xl py-4 px-8 border-8 border-dark-green dark:border-accent-green">
                    <h3 class="font-concert-one text-2xl sm:text-4xl hsm:text-4xl md:text-6xl text-dark-green dark:text-accent-green tracking-1">Design</h3>
                    <div class="flex mt-8 flex-wrap justify-around">
                        <?php
                        foreach ($coreTech['Design'] as $techno => $imgName) {
                        ?>
                            <div class="p-2 sm:p-4 w-1/2 sm:w-auto">
                                <div class="border border-dark-green dark:border-accent-green border-opacity-20 dark:border-opacity-20 rounded-lg py-4 px-2">
                                    <p class="font-bold text-xs hsm:text-base xl:text-xl text-center tracking-1"><?= $techno ?></p>
                                    <div class="w-4/5 h-1 rounded-sm bg-dark-green dark:bg-accent-green my-2 mx-auto opacity-20"></div>
                                    <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/mainStack/' . $imgName . '.png', [
                                        'alt' => 'Logo of ' . $techno,
                                        'class' => 'mt-6 block w-12 sm:w-18 lg:w-20 xl:w-28 h-auto mx-auto rounded-lg object-cover bg-true-white',
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                    ]) ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-4/5 mx-auto mt-[40vh]">
            <h2 class="font-concert-one text-white dark:text-black mx-auto text-4xl sm:text-6xl hsm:text-6xl md:text-8xl tracking-1">
                Other stacks & tools
            </h2>
            <h3 class="text-white dark:text-black mx-auto text-xl sm:text-3xl hsm:text-3xl md:text-5xl mt-16 font-bold">
                Technologies I've used in projects
            </h3>

            <div class="bg-white dark:bg-black w-full rounded-xl mt-8 py-4 px-8 border-2 border-dark-green dark:border-accent-green">
                <div class="flex flex-wrap justify-around">
                    <?php
                    foreach ($wallOfStacks as $techno => $imgName) {
                    ?>
                    <div class="p-2 sm:p-4 w-1/2 sm:w-auto">
                        <div class="border border-dark-green dark:border-accent-green border-opacity-20 dark:border-opacity-20 rounded-lg py-4 px-2">
                            <p class="font-bold text-xs hsm:text-base xl:text-xl text-center tracking-1"><?= $techno ?></p>
                            <div class="w-4/5 h-1 rounded-sm bg-dark-green dark:bg-accent-green my-2 mx-auto opacity-20"></div>
                            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/sideStack/' . $imgName . '.png', [
                                'alt' => 'Logo of ' . $techno,
                                'class' => 'mt-6 block w-12 sm:w-18 lg:w-20 xl:w-28 h-auto mx-auto rounded-lg object-cover bg-true-white',
                                'loading' => 'lazy',
                                'decoding' => 'async',
                            ]) ?>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-black contain-paint">
        <div class="sticky top-0 w-full h-screen z-10 overflow-hidden scale-on-scroll contain-layout pointer-events-none">
            <svg class="absolute contain-layout w-full h-full top-1/2 -translate-y-[50%] -mt-[1px]" xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 4519 3213" preserveAspectRatio="xMidYMid slice">
                <path class="fill-dark-green dark:fill-accent-green" fill-rule="evenodd" clip-rule="evenodd" d="M4519 0V3213H0V0H4519ZM2346.5 1439.5C2346.5 1324.5 2166 1323 2166 1439.5V1486.5C2191.5 1496.5 2202.5 1510.5 2204 1540.5V1607.5H2191.5V1540.5C2191.5 1486.5 2099 1475 2099 1540.5V1622.5C2099 1731.5 2099 1731.5 2166 1731.5V1862H2346.5V1743.5C2421 1743.5 2421 1744 2421 1673V1617C2421 1583.5 2392.5 1563 2359.5 1579V1673H2346.5V1611.5V1439.5Z" />
            </svg>
        </div>
        <div class="js-h-screen"></div>
        <div class="relative mx-auto max-w-screen-2xl pb-4">
            <div class="w-4/5 mx-auto">
                <h2 class="font-concert-one text-dark-green dark:text-accent-green text-4xl sm:text-6xl hsm:text-6xl md:text-8xl tracking-1">
                    How I work
                </h2>
                <div class="mt-14 sm:mt-20 md:mt-32 border-l-8 border-dark-green dark:border-accent-green pl-6 sm:pl-8">
                    <h3 class="text-dark-green dark:text-accent-green text-xl sm:text-3xl hsm:text-3xl md:text-5xl font-bold">
                        Business applications & users
                    </h3>
                    <p class="mt-5 text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                        I like working on internal applications and business tools. These projects require understanding how users work every day. Before thinking about the technical solution, I first try to identify habits, constraints, and steps that can be simplified.
                    </p>
                    <p class="mt-4 text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                        Being close to users helps build features that really fit their needs, instead of starting from assumptions. That is also what I enjoy in this kind of project: a sometimes simple improvement can save time, make information easier to access, or improve daily comfort.
                    </p>
                </div>

                <div class="mt-28 md:mt-44 border-r-8 border-dark-green dark:border-accent-green pr-6 sm:pr-8">
                    <h3 class="text-dark-green dark:text-accent-green text-xl sm:text-3xl hsm:text-3xl md:text-5xl font-bold">
                        Continuous learning
                    </h3>
                    <p class="mt-5 text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                        The development world moves quickly, so I take time to stay up to date by following changes in tools, practices, and technologies almost every day.
                    </p>
                    <p class="mt-4 text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                        I complete that monitoring with personal projects, small or more ambitious. They let me test an idea, discover a tool I know less, or experiment with another way of doing things. Even when a project does not reach a final version, it remains useful if it taught me something I can reuse later in another context.
                    </p>
                    <p class="mt-4 text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                        This way of learning also helps me regularly step outside my habits and gradually broaden the way I approach technical problems.
                    </p>
                </div>

                <div class="mt-28 md:mt-44 border-l-8 border-dark-green dark:border-accent-green pl-6 sm:pl-8">
                    <h3 class="text-dark-green dark:text-accent-green text-xl sm:text-3xl hsm:text-3xl md:text-5xl font-bold">
                        User experience
                    </h3>
                    <p class="mt-5 text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                        User experience is not only about how an interface looks. It mainly depends on how easy it is to understand and use every day.
                    </p>
                    <p class="mt-4 text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                        I put a lot of importance on discussions with users, mockups, and feedback during development. I try to design clear interfaces that are easy to understand and adapted to their context of use.
                    </p>
                    <div class="mt-4 flex flex-col-reverse gap-4 sm:flex-row sm:items-start">
                        <div class="flex flex-col text-center pr-0 sm:pr-6 max-w-[50%] sm:max-w-40 sm:w-auto mx-auto">
                            <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/opquast.png', [
                                'alt' => 'Opquast badge',
                                'class' => 'block h-full w-auto mx-auto object-contain object-left-top mt-3',
                                'loading' => 'lazy',
                                'decoding' => 'async',
                            ]) ?>
                            <a class="underline underline-offset-2 text-dark-green dark:text-accent-green tracking-1" href="https://directory.opquast.com/fr/certificat/7XJFKT/" target="_blank" title="See the Opquast certificate of Lohan Dancuo (open a new tab)">Certificate</a>
                        </div>
                        <p class="text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                            I also pay attention to accessibility and performance, especially page weight and loading times. An interface that is pleasant to use should stay that way even on a low-bandwidth internet connection. My Opquast certification gave me a broader frame for these subjects and web quality in general.
                        </p>
                    </div>
                </div>

                <div class="mt-28 md:mt-44 border-r-8 border-dark-green dark:border-accent-green pr-6 sm:pr-8">
                    <h3 class="text-dark-green dark:text-accent-green text-xl sm:text-3xl hsm:text-3xl md:text-5xl font-bold">
                        Professionalism
                    </h3>
                    <p class="mt-5 text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                        Readable, structured, and documented code remains easier to understand and maintain over time. Reliability, security, and privacy are also considered from the design stage.
                    </p>
                    <p class="mt-4 text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                        Beyond code, I keep a broader view of the project: priorities, deadlines, constraints, and the value being delivered. When something unexpected or urgent happens, I can reorganize my work, review my priorities, and adapt the solution without losing sight of the original goal.
                    </p>
                    <p class="mt-4 text-base sm:text-lg hsm:text-lg md:text-xl text-black dark:text-white !leading-normal">
                        A project also depends on clear communication, owned decisions, and enough follow-up to know where the project stands and what still needs to be done.
                    </p>
                </div>

                <div class="mt-[50vh] mb-[10vh] block text-dark-green dark:text-accent-green sm:mb-[25vh]">
                    <span class="block w-4/5 mx-auto">
                        <span class="block font-concert-one text-2xl tracking-1 sm:text-4xl hsm:text-5xl md:text-6xl">
                            What does that look like in practice?
                        </span>
                        <a href="/en/my-work" class="group relative mt-8 inline-flex min-w-[min(100%,22rem)] items-center gap-4 pb-5 pr-20 font-poppins text-base font-semibold text-black transition focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-8 focus-visible:outline-dark-green dark:text-white dark:focus-visible:outline-accent-green sm:text-xl md:text-2xl">
                            View my work
                            <span class="pointer-events-none absolute bottom-0 left-0 h-px w-full bg-dark-green/20 dark:bg-accent-green/25" aria-hidden="true"></span>
                            <span class="pointer-events-none absolute bottom-0 left-0 h-1 w-14 bg-dark-green transition-all duration-500 ease-in-out group-hover:w-full group-focus-visible:w-full dark:bg-accent-green" aria-hidden="true"></span>
                            <span class="absolute right-8 inline-block text-3xl leading-none transition-all duration-500 ease-in-out group-hover:right-0 group-focus-visible:right-0" aria-hidden="true">&rarr;</span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
