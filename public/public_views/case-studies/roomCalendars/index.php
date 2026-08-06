<div class="max-w-screen-2xl mx-auto font-poppins">
    <div class="relative mt-6 w-4/5 mx-auto">
        <div class="relative flex">
            <a href="/my-work" class="flex underline underline-offset-2 border-2 border-dark-green text-dark-green dark:border-accent-green dark:text-accent-green lg:mr-auto px-4 py-1 rounded-md hover:opacity-60 hover:cursor-pointer transition-opacity ml-2 sm:ml-6 md:ml-8">
                < Go back
                    </a>
        </div>


        <h1 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-6">
            [Project] Room Calendars
        </h1>
        <div class="h-1 bg-dark-green dark:bg-accent-green w-2/6 mt-1 sm:mt-4 ml-2 sm:ml-6 md:ml-8"></div>
        <p class="mt-2 text-sm sm:text-base md:text-lg ml-2 sm:ml-6 md:ml-8">Last updated: <?= date('jS F Y', filemtime(__FILE__)) ?></p>

        <?= \CorianderCore\Core\Image\ImageHandler::render('/public/assets/img/case-studies/roomCalendars/mockup.jpg', [
            'alt' => 'A Mockup of the RoomCalendars application.',
            'pictureClass' => 'w-full h-auto ml-2 sm:ml-6 md:ml-8 mt-16',
            'class' => 'h-auto w-full sm:w-4/5 mx-auto object-cover object-right rounded-lg',
            'loading' => 'lazy',
            'decoding' => 'async',
            'draggable' => 'false',
        ]) ?>

        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            Project Overview
        </h2>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            RoomCalendars is a web application developed to tackle the inefficiencies of managing room bookings through Microsoft Outlook.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            The goal was simple yet crucial: create an intuitive and fast interface that allows employees to view room availability and meeting schedules across multiple days, addressing the slow and cumbersome process in Outlook.
        </p>
        <p class="text-lg sm:text-xl mt-8">
            Previously, the company relied on a SaaS product for handling room bookings, but after discontinuing that service in favor of Outlook, employees struggled to manage bookings efficiently.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            Outlook's native interface required multiple clicks and loaded data slowly when viewing multiple rooms over several days. A faster and more comprehensive solution was needed.
        </p>
        <p class="text-lg sm:text-xl mt-8">
            Additionally, receptionists frequently encountered inquiries such as:
            <span class="block pl-2 border-l-2 border-dark-green dark:border-accent-green opacity-90">"Hello, I'm John Doe, and I don't know which room my meeting with Mr. Smith is in. Can you help me?"</span>
            As a result, a secondary goal of the project was to develop an advanced search panel to quickly locate meeting participants and their assigned rooms.
        </p>

        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            Planning & Research
        </h2>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Initial Considerations:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            To ensure I had a clear understanding of the problem, I first explored Outlook's room booking system.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            As expected, it required several clicks and took too long to load the schedule for even a single room. This confirmed that an external solution was necessary.
        </p>
        <p class="text-lg sm:text-xl mt-8">
            The next step was exploring Microsoft's Active Directory (AD) to understand how the rooms were structured. I found that each room was treated as a “user” within AD.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This allowed me to leverage Microsoft Graph API, a powerful tool for retrieving room and meeting data.
        </p>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Core Requirements:
        </h3>
        <p class="text-lg sm:text-xl mt-8">
            As the sole developer on the project, I set my focus on a few critical areas to ensure success:
        </p>
        <ul class="text-lg sm:text-xl mt-4 list-disc list-inside">
            <li>
                <b class="tracking-1">User Experience (UX)</b>: The interface had to be user-friendly and intuitive, making it easy for employees to find what they needed quickly.
            </li>
            <li class="mt-2">
                <b class="tracking-1">Performance</b>: Loading times needed to be minimized, especially since Outlook's native interface was too slow.
            </li>
            <li class="mt-2">
                <b class="tracking-1">Search Functionality</b>: Receptionists needed a way to search for meeting participants by name, further streamlining the process.
            </li>
            <li class="mt-2">
                <b class="tracking-1">Security and Scalability</b>: The app had to be secure and adaptable to future growth, with minimal maintenance.
            </li>
        </ul>

        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            Approach & Methodology
        </h2>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Logical Process:
        </h3>

        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            I adopted an agile approach, breaking the project into sprints that were managed collaboratively with the project manager.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            Each sprint focused on delivering specific functionality, with a strong emphasis on user feedback and iteration.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This allowed for continuous refinement based on real-world use and ensured that the end product met the users' needs.
        </p>

        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            To keep the development process organized, I tracked tasks using GitHub issues.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            Each issue represented a well-defined objective, such as:
            <span class="block pl-2 border-l-2 border-dark-green dark:border-accent-green opacity-90">"Create admin search page.".</span>
        </p>
        <p class="text-lg sm:text-xl mt-2">
            To ensure these larger tasks were manageable, I broke them down into smaller, actionable subtasks. For example, "<span class="opacity-90">Create admin search page.</span>" was separated into multiple subtasks like:
            <span class="block pl-2 border-l-2 border-dark-green dark:border-accent-green opacity-90">"Create page and add route.".</span>
            <span class="block pl-2 border-l-2 border-dark-green dark:border-accent-green opacity-90 mt-1">"Add user role verification.".</span>
            <span class="block pl-2 border-l-2 border-dark-green dark:border-accent-green opacity-90 mt-1">"Create basic form.".</span>
            <span class="block pl-2 border-l-2 border-dark-green dark:border-accent-green opacity-90 mt-1">"Create form controller.".</span>
        </p>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            Each subtask was tracked as a separate issue, with new branches created for each.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            Once a subtask was completed, it was merged back into the main branch using pull requests.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This approach ensured a clean, organized, and transparent development process, allowing for smooth progress and minimal conflicts.
        </p>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            For larger, more complex tasks, I employed the "eat the frog" method, a time management technique where you tackle the most challenging tasks first.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            In this case, integrating Microsoft Graph API functionality was the most difficult and risk-heavy part of the project.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            By addressing it early, I minimized the chance of bottlenecks later on and ensured the core functionality was solid before moving to easier subtasks.
        </p>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            This structured process allowed me to:
        </p>
        <ul class="text-lg sm:text-xl mt-4 list-disc list-inside">
            <li>
                <b class="tracking-1">Iterate Efficiently</b>: Frequent feedback cycles enabled quick adjustments to the UI and UX based on input from coworkers, ensuring the product evolved based on real user needs.
            </li>
            <li class="mt-2">
                <b class="tracking-1">Maintain Clear Focus</b>: Breaking down large tasks into manageable pieces ensured that no part of the project became overwhelming, keeping the momentum going.
            </li>
        </ul>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Technologies Used:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            The backend was developed using a custom framework built in PHP 8.3, entirely in vanilla PHP.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This framework was designed with modularity in mind, featuring custom-built business logic models that can function as independent libraries, allowing them to be easily reused in future projects or other parts of the system.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            The framework also includes a built-in Node.js environment for managing TypeScript and Tailwind CSS.
        </p>
        <ul class="text-lg sm:text-xl mt-4 list-disc list-inside">
            <li>
                <b class="tracking-1">TypeScript</b> was chosen to enforce code rigor and ensure that errors could be caught during development, making the codebase more maintainable and reducing potential bugs in production.
            </li>
            <li class="mt-2">
                <b class="tracking-1">Tailwind CSS</b> streamlined the UI development process by allowing for fast and consistent styling with minimal custom CSS, which was crucial in maintaining a clean, unified design across the app.
            </li>
        </ul>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            This architecture not only improved code quality and maintainability but also optimized development speed, allowing for flexible feature additions and ensuring that the project was scalable and adaptable for future needs.
        </p>

        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            Problem Solving
        </h2>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            As with any complex project, RoomCalendars presented a variety of technical and design challenges, particularly around creating an efficient and intuitive user interface.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            The project's success depended on overcoming these hurdles while maintaining a strong focus on performance and user experience.
        </p>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Challenges:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            One of the most difficult aspects of this project was designing a calendar UI that was both functional and intuitive.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This was my first time working with grid-based calendar layouts, and making sure it felt user-friendly required a careful balance between information density and visual clarity.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            I aimed to leverage negative space wherever possible to prevent the UI from feeling cluttered and to make the calendar easier to read at a glance.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            The layout needed to display room availability and meetings in a way that was instantly clear to users, while also minimizing visual overload.
        </p>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            In addition, retrieving meeting data from Microsoft's Graph API presented its own set of challenges.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            Since I was new to the Graph API, I needed to carefully manage API limits and optimize the way data was retrieved to ensure the app performed smoothly, even when dealing with large amounts of data.
        </p>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Decision-Making Process:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            To address these challenges, I adopted an iterative design approach for the calendar UI.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            The interface went through three major design iterations, each one shaped by real-world feedback from coworkers who would be using the application.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            Their insights helped me refine the interface until it struck the right balance between visual appeal and usability, ensuring that it was both intuitive and effective.
        </p>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            In parallel, I focused on optimizing data retrieval from Microsoft Graph API. After experimenting with different methods, I implemented a batch request system that pulled data in chunks.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This approach drastically reduced load times by preventing unnecessary API calls, which allowed the application to handle large amounts of data efficiently while staying responsive to user interactions.
        </p>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Efficient Data Handling:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            To optimize data retrieval and ensure the app could handle large amounts of meeting data efficiently, I used Microsoft Graph API JSON batching.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This technique allowed me to combine multiple requests into a single API call, minimizing overhead and reducing the number of individual API requests required. By fetching data in manageable chunks, I significantly improved both the performance and responsiveness of the application.
        </p>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            Additionally, I implemented the use of a MySQL database to store the API data, with a caching system that stores meeting data for the current month and the next month.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This cache system lasts for 15 minutes, ensuring that frequently accessed data is readily available without needing to constantly query the API.
        </p>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            To further enhance performance, I set up a cronjob to refresh the database every 10 minutes, syncing room and meeting data.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This ensures that the database is always up to date, keeping the user experience seamless and minimizing delays.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            The cronjob is critical for maintaining the website's fluidity, as it preloads the necessary data ahead of time, preventing users from experiencing delays.
        </p>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            If the cronjob fails or doesn't run for any reason, the system falls back to a manual data refresh process.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            In this case, after 15 minutes, when the cache expires, the first user to access the app will experience a loading time of approximately 40 seconds as the system retrieves updated meeting information for the next 15 minutes.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This ensures that the data remains current, even if the cronjob isn't functioning, but it introduces a brief delay for that first user. The cronjob is in place to minimize such interruptions and make the website more fluid under normal circumstances.
        </p>

        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            Security
        </h2>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            Security was a top priority throughout the project, particularly because RoomCalendars involved sensitive meeting data and relied on Microsoft's authentication services.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            I implemented several key security measures to ensure data privacy and system integrity.
        </p>
        <ul class="text-lg sm:text-xl mt-4 list-disc list-inside">
            <li>
                <b class="tracking-1">Microsoft Single Sign-On (SSO)</b>:<br>
                Leveraging Microsoft's OAuth2-based Single Sign-On (SSO) provided a robust and secure authentication mechanism. This centralized login process ensured that only authorized users could access RoomCalendars, and it minimized security risks by offloading password management to Microsoft's trusted system. SSO not only streamlined user access but also reduced the attack surface by eliminating the need for an internal password system.
            </li>
            <li class="mt-4">
                <b class="tracking-1">Role-Based Access Control</b>:<br>
                Not every employee had the same access needs. While all users could view room availability, only receptionists and certain administrators had access to the advanced search features, such as looking up meetings by participant names. Role-based access control (RBAC) was implemented to ensure that users only had access to the features relevant to their roles.
            </li>
            <li class="mt-4">
                <b class="tracking-1">Data Encryption</b>:<br>
                All data transmission between RoomCalendars, the Microsoft Graph API, and the user's browser was encrypted using SSL/TLS. This ensured that sensitive data, like room schedules and meeting details, were protected from eavesdropping during transit.
            </li>
            <li class="mt-4">
                <b class="tracking-1">Cronjob Security & Tokenization</b>:<br>
                The cronjobs that run every 10 minutes to sync room and meeting data from Microsoft Graph API were secured through the use of unique tokens. These tokens acted as a safeguard, ensuring that only authorized scripts could execute the background jobs necessary to update the system's data.
            </li>
            <li class="mt-4">
                <b class="tracking-1">AJAX for Seamless User Experience</b>:<br>
                When a user selects a different date to view meeting information, the server uses AJAX to load the data dynamically without refreshing the entire page. This not only enhances the user experience by providing faster responses but also ensures security. The AJAX requests are protected by verifying the request's referer—if the referer isn't from the server, the system returns a 404 error, effectively blocking unauthorized access attempts.
            </li>
        </ul>

        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            Scalability & Future-Proofing
        </h2>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            Scalability was built into the foundation of RoomCalendars to ensure that it could grow with the company's evolving needs.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            The design and architecture were carefully planned to handle future expansions, such as the addition of new meeting rooms or an increase in the number of users.
        </p>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Dynamic Room Management:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            The application was designed to dynamically update as rooms were added, modified, or removed in Microsoft Active Directory.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This meant that the system could automatically adjust to changes in the company's infrastructure without requiring manual intervention. The use of the Microsoft Graph API allowed for real-time syncing of room data, ensuring the app stayed up to date.
        </p>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Modular Codebase:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            The backend framework was built with a modular architecture in mind, meaning that new features could be added or existing ones updated without extensive rework.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            For example, the business logic around room data was isolated from other parts of the system, allowing for easy updates or modifications without affecting other components. This approach makes it easier to maintain and extend the application in the future.
        </p>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Efficient Database Queries & Views:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            To handle an increasing volume of room and meeting data, the MySQL database was optimized with efficient queries and custom views.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This minimized the amount of data processed during each query and reduced the load on the system. As the company grows and the number of meetings increases, these optimizations will ensure that the application remains responsive and fast.
        </p>

        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            Results & Outcome
        </h2>
        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Success:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            RoomCalendars has been a resounding success within the company.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            Users reported that finding available rooms became exponentially easier, with the average time to check room availability dropping from 2–3 minutes in Outlook to less than 10 seconds in RoomCalendars.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            Receptionists were particularly pleased with the advanced search functionality, which allowed them to quickly locate meetings by participant name, improving their ability to assist visitors and coworkers.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            The user feedback consistently highlighted how much more efficient the system was compared to the previous Outlook-based process.
        </p>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Quantifiable Impact:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            For a company of 1,000 employees, each holding an average of four meetings per week, the time savings are substantial:
        </p>
        <p class="text-lg sm:text-xl mt-2">
            By reducing the time to find a room from 2–3 minutes to under 10 seconds, the company saves approximately <b class="tracking-1">7,766 hours per year</b>.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This translates to significant improvements in productivity and cost savings, as employees can now focus more on their core tasks instead of spending unnecessary time searching for room availability.
        </p>

        <h3 class="font-concert-one text-xl sm:text-2xl text-dark-green dark:text-accent-green tracking-1 ml-1 sm:ml-3 md:ml-4 mt-12">
            Reflection & Areas for Improvement:
        </h3>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            Overall, the project was a major success.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            However, looking back, I realize that implementing unit tests for the API and integrating GitHub Actions to automatically run these tests on each pull request would have made the development process even smoother.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            This would have caught potential issues earlier and ensured a more robust application from the outset.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            Additionally, introducing automated monitoring for API response times and database performance would allow for proactive adjustments as the system scales.
        </p>


        <h2 class="font-concert-one text-2xl sm:text-4xl text-dark-green dark:text-accent-green tracking-1 ml-2 sm:ml-6 md:ml-8 mt-16">
            Conclusion
        </h2>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            RoomCalendars successfully addressed the inefficiencies of viewing room bookings in Microsoft Outlook, offering a fast, user-friendly solution that saves the company thousands of hours annually.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            The application's seamless UX, combined with its optimized performance and security measures, provides a reliable tool for managing room availability.
        </p>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            By focusing on performance optimization, security, and scalability, RoomCalendars is not only a solution for today but also one that can grow with the company's future needs.
        </p>
        <p class="text-lg sm:text-xl mt-2">
            The application's seamless UX, combined with its optimized performance and security measures, provides a reliable tool for managing room availability.
        </p>
        <p class="text-lg sm:text-xl mt-4 sm:mt-8">
            Moving forward, further enhancements such as automated testing and additional features for room management can continue to improve the app, keeping it at the forefront of the company's internal tools.
        </p>
    </div>
</div>
