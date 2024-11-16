<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<div class="relative min-h-screen flex items-center">
    <div class="absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-gray-100"></div>
        <div class="absolute inset-0 opacity-20">
            <?php for($i = 0; $i < 3; $i++): ?>
                <div class="absolute rounded-full mix-blend-multiply filter blur-xl animate-blob"
                    style="background-color: <?php echo $i === 0 ? '#ffe4e4' : ($i === 1 ? '#fca5a5' : '#ff7070'); ?>;
                           top: <?php echo rand(0, 100); ?>%;
                           left: <?php echo rand(0, 100); ?>%;
                           width: <?php echo rand(200, 600); ?>px;
                           height: <?php echo rand(200, 600); ?>px;
                           animation: blob <?php echo rand(20, 30); ?>s infinite;">
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
        <div class="text-center animate-fade-up">
            <h1 class="text-5xl md:text-7xl font-bold text-gray-900 mb-6 leading-tight">
                Elevate Your Brand's<br>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-600 to-primary-500">
                    Digital Presence
                </span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                We transform ideas into exceptional digital experiences that captivate and convert.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#contact" class="px-8 py-4 bg-primary-600 text-white rounded-full font-medium hover:bg-primary-700 transition-colors flex items-center gap-2 group">
                    Get Started
                    <svg class="group-hover:translate-x-1 transition-transform" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
                <a href="#portfolio" class="px-8 py-4 border border-gray-300 text-gray-700 rounded-full font-medium hover:border-primary-300 hover:text-primary-600 transition-colors">
                    View Portfolio
                </a>
            </div>
        </div>
    </div>
</div>

<?php 
include 'includes/services.php';
include 'includes/portfolio.php';
include 'includes/contact.php';
include 'includes/footer.php';
?>