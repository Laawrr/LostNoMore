<template>
    <div class="min-h-screen bg-gray-50">
        <!-- Hero Section -->
        <div class="relative">
            <!-- Carousel Background -->
            <div class="absolute inset-0 overflow-hidden">
                <transition-group name="fade">
                    <img v-for="(slide, index) in slides" :key="slide" :src="slide" v-show="currentSlide === index"
                        class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000"
                        alt="Background Image">
                </transition-group>
                <div class="absolute inset-0 bg-gradient-to-r from-teal-500/80 to-teal-600/80"></div>
            </div>

            <!-- Content -->
            <div class="relative text-white py-40">
                <div class="container mx-auto px-4 text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Lost & Found Made Easy</h1>
                    <p class="text-xl mb-8 max-w-2xl mx-auto">Find what you've lost or help others recover their
                        belongings.</p>
                    <button
                        class="bg-white text-teal-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Get Started
                    </button>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <section id="features" class="py-16" style="background-color: #F5F5F5">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12" style="color: #333333">Why Choose Us</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Easy to Use Card -->
                    <div class="p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105"
                        style="background-color: #ADD8E6">
                        <div class="text-3xl mb-4" style="color: #008080">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2" style="color: #333333">Easy to Use</h3>
                        <p style="color: #333333">Our platform is designed with simplicity in mind, making it easy for
                            anyone to report or find lost items.</p>
                    </div>
                    <!-- Quick Results Card -->
                    <div class="p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105"
                        style="background-color: #FFFACD">
                        <div class="text-3xl mb-4" style="color: #FF7F50">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2" style="color: #333333">Quick Results</h3>
                        <p style="color: #333333">Get instant notifications and quick matches for your lost items
                            through our efficient matching system.</p>
                    </div>
                    <!-- Secure Platform Card -->
                    <div class="p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105"
                        style="background-color: #ADD8E6">
                        <div class="text-3xl mb-4" style="color: #008080">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2" style="color: #333333">Secure Platform</h3>
                        <p style="color: #333333">Your data and item information are protected with top-notch security
                            measures and encryption.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-[#219B9D] text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-8">Ready to Get Started?</h2>
                <p class="text-xl mb-8">Join our community and start finding lost items today.</p>
                <button
                    class="bg-teal-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-teal-600 transition-colors">
                    Join Now
                </button>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-8">
            <div class="container mx-auto px-4 text-center">
                <p>&copy; 2024 Lost Finder. All rights reserved.</p>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue';

const slides = [
    '/img/image3.png',
    '/img/image4.png',
    '/img/image5.png',
    '/img/image6.png',
];
const currentSlide = ref(0);

const nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % slides.length;
};

onMounted(() => {
    setInterval(nextSlide, 5000);
});
</script>

<style>
@import '@fortawesome/fontawesome-free/css/all.css';

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.feature-card:hover {
    transform: translateY(-4px);
}

@keyframes spin {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}

.animate-spin {
    animation: spin 1s linear infinite;
}

html {
    scroll-behavior: smooth;
}
</style>