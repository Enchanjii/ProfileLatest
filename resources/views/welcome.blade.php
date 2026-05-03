<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-sm sticky top-0 z-10">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-900">My Portfolio</h1>
                <nav class="space-x-6">
                    <a href="#about" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">About</a>
                    <a href="#projects"
                        class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Projects</a>
                    <a href="#contact"
                        class="text-gray-600 hover:text-blue-600 font-medium transition-colors">Contact</a>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <main class="flex-grow">
            <section id="about"
                class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 leading-tight">Hi, I'm an <span
                            class="text-blue-600">IT Student</span></h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">I'm passionate about technology, coding, and
                        building awesome applications. Welcome to my personal portfolio where I showcase my journey and
                        projects!</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="#contact"
                            class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors shadow-md">Get
                            in touch</a>
                        <a href="#projects"
                            class="inline-block bg-white text-gray-700 border border-gray-300 px-6 py-3 rounded-lg font-medium hover:bg-gray-50 transition-colors shadow-sm">View
                            Projects</a>
                    </div>
                </div>
                <div class="flex-1 flex justify-center">
                    <div
                        class="w-72 h-72 bg-gray-200 rounded-full overflow-hidden border-4 border-white shadow-xl relative">
                        <img src="a.jpg" alt="Profile Picture" class="w-full h-full object-cover">
                    </div>
                </div>
            </section>

            <!-- Projects Section -->
            <section id="projects" class="bg-white py-20 border-t border-gray-100">
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">My Projects</h3>
                        <div class="w-16 h-1 bg-blue-600 mx-auto rounded"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                        <!-- Project Card 1 -->
                        <div
                            class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex flex-col">
                            <div
                                class="h-48 bg-gray-200 flex items-center justify-center text-gray-400 overflow-hidden">
                                <img src="EcoCycle.png" alt="EcoCycle Project" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex-grow flex flex-col">
                                <h4 class="text-xl font-bold mb-2 text-gray-900">EcoCycle Website</h4>
                                <p class="text-gray-600 mb-4 flex-grow">Built with HTML/CSS/JS, EcoCycle is a modern
                                    landing page connecting users to e-waste recycling hubs and DIY resources to promote
                                    a circular economy.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span
                                        class="px-2 py-1 bg-blue-50 text-blue-600 text-xs rounded font-medium">HTML/CSS</span>
                                    <span
                                        class="px-2 py-1 bg-blue-50 text-blue-600 text-xs rounded font-medium">JavaScript</span>
                                </div>
                                <a href="https://enchanjii.github.io/EcoCycle/#"
                                    class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">View
                                    Project <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg></a>
                            </div>
                        </div>

                        <!-- Project Card 2 -->
                        <div
                            class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex flex-col">
                            <div class="h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                                <img src="EmotiTrack.png" alt="EmotiTrack System" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex-grow flex flex-col">
                                <h4 class="text-xl font-bold mb-2 text-gray-900">EmotiTrack Desktop App</h4>
                                <p class="text-gray-600 mb-4 flex-grow">Developed in NetBeans, this system rewards
                                    emotional awareness by granting points for exercising or meditating, turning
                                    self-care into a tangible wellness tracker.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-blue-50 text-blue-600 text-xs rounded font-medium">Java</span>
                                    <span
                                        class="px-2 py-1 bg-blue-50 text-blue-600 text-xs rounded font-medium">Swing GUI</span>
                                </div>
                                <a href="https://enchanjii.github.io/Group6_EmotiTrack/#"
                                    class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">View
                                    Project <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg></a>
                            </div>
                        </div>

                        <!-- Project Card 3 -->
                        <div
                            class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow border border-gray-100 flex flex-col">
                            <div
                                class="h-48 bg-gray-200 flex items-center justify-center text-gray-400 overflow-hidden">
                                <img src="Profile.jpg" alt="Portfolio Website Project"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 flex-grow flex flex-col">
                                <h4 class="text-xl font-bold mb-2 text-gray-900">Portfolio Website</h4>
                                <p class="text-gray-600 mb-4 flex-grow">A responsive personal portfolio website designed
                                    to showcase my skills, projects, and contact information.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span
                                        class="px-2 py-1 bg-blue-50 text-blue-600 text-xs rounded font-medium">HTML/CSS</span>
                                    <span
                                        class="px-2 py-1 bg-blue-50 text-blue-600 text-xs rounded font-medium">JavaScript</span>
                                </div>
                                <a href="https://enchanjii.github.io/myProfile/#"
                                    class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">View
                                    Project <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Let's Work Together</h3>
                <p class="text-lg text-gray-600 mb-8">I'm currently open for new opportunities, freelance work, and
                    collaborations. Feel free to reach out if you have a project in mind or just want to say hi!</p>

                @if(session('success'))
                    <div class="mb-4 p-4 text-green-700 bg-green-100 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="text-left space-y-4 max-w-lg mx-auto">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm p-3 border">
                        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm p-3 border">
                        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 sm:text-sm p-3 border"></textarea>
                        @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full inline-flex items-center justify-center bg-gray-900 text-white px-8 py-4 rounded-lg font-medium hover:bg-gray-800 transition-colors shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            Send me an email
                        </button>
                    </div>
                </form>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-400 py-8 border-t border-gray-800">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
                <p class="mb-4 md:mb-0">&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
                <div class="flex space-x-4">
                    <a href="https://github.com/Enchanjii" target="_blank" rel="noopener noreferrer"
                        class="hover:text-white transition-colors">
                        <span class="sr-only">GitHub</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/christian-jay-58b1633ab/" target="_blank"
                        rel="noopener noreferrer" class="hover:text-white transition-colors">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/herskie08?_rdc=1&_rdr#" target="_blank" rel="noopener noreferrer"
                        class="hover:text-white transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/krischanjii_/?hl=en" target="_blank" rel="noopener noreferrer"
                        class="hover:text-white transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>