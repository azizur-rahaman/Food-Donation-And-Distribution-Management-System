/**
 * Admin Dashboard JavaScript
 * Handles interactivity for the Food Donation Management System
 */

class AdminDashboard {
    constructor() {
        this.init();
    }

    init() {
        this.setupSidebar();
        this.setupNotifications();
        this.animateStats();
        this.animateCharts();
    }

    /**
     * Setup sidebar toggle for mobile
     */
    setupSidebar() {
        const sidebar = document.querySelector('.sidebar');
        const toggleBtn = document.createElement('button');
        toggleBtn.className = 'sidebar-toggle';
        toggleBtn.innerHTML = `
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 12H21M3 6H21M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        `;

        // Add toggle button on mobile
        if (window.innerWidth <= 768) {
            document.querySelector('.header__search').before(toggleBtn);
            
            toggleBtn.addEventListener('click', () => {
                sidebar.classList.toggle('sidebar--open');
            });

            // Close sidebar when clicking outside
            document.addEventListener('click', (e) => {
                if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                    sidebar.classList.remove('sidebar--open');
                }
            });
        }
    }

    /**
     * Setup notification interactions
     */
    setupNotifications() {
        const notificationBtn = document.querySelector('.header__notification');
        
        if (notificationBtn) {
            notificationBtn.addEventListener('click', () => {
                this.showNotifications();
            });
        }
    }

    /**
     * Show notification dropdown
     */
    showNotifications() {
        console.log('Showing notifications...');
        // Notification dropdown logic would go here
        alert('Notification panel will be implemented here');
    }

    /**
     * Animate stats cards on load
     */
    animateStats() {
        const statsCards = document.querySelectorAll('.stats-card');
        
        statsCards.forEach((card, index) => {
            setTimeout(() => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                
                requestAnimationFrame(() => {
                    card.style.transition = 'all 0.5s ease-out';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                });
            }, index * 100);
        });

        // Animate numbers counting up
        this.animateCounters();
    }

    /**
     * Animate counter numbers
     */
    animateCounters() {
        const counters = document.querySelectorAll('.stats-card__value');
        
        counters.forEach(counter => {
            const target = counter.textContent.replace(/,/g, '');
            const isNumeric = !isNaN(parseFloat(target));
            
            if (isNumeric) {
                const value = parseFloat(target);
                const duration = 2000;
                const increment = value / (duration / 16);
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < value) {
                        counter.textContent = Math.floor(current).toLocaleString();
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = counter.textContent; // Keep original format
                    }
                };

                updateCounter();
            }
        });
    }

    /**
     * Animate charts on scroll
     */
    animateCharts() {
        const charts = document.querySelectorAll('.chart-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('chart-card--visible');
                    this.animateBarChart(entry.target);
                    this.animatePieChart(entry.target);
                }
            });
        }, { threshold: 0.2 });

        charts.forEach(chart => {
            observer.observe(chart);
        });
    }

    /**
     * Animate bar chart bars
     */
    animateBarChart(chartCard) {
        const bars = chartCard.querySelectorAll('.bar-chart__bar');
        
        bars.forEach((bar, index) => {
            const height = bar.style.height;
            bar.style.height = '0';
            
            setTimeout(() => {
                bar.style.transition = 'height 0.8s ease-out';
                bar.style.height = height;
            }, index * 100);
        });
    }

    /**
     * Animate pie chart segments
     */
    animatePieChart(chartCard) {
        const segments = chartCard.querySelectorAll('.pie-chart__segment');
        
        segments.forEach((segment, index) => {
            const dashArray = segment.getAttribute('stroke-dasharray');
            segment.setAttribute('stroke-dasharray', '0 500');
            
            setTimeout(() => {
                segment.style.transition = 'stroke-dasharray 1s ease-out';
                segment.setAttribute('stroke-dasharray', dashArray);
            }, index * 200);
        });
    }
}

// Utility Functions

/**
 * Format numbers with commas
 */
function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

/**
 * Format date
 */
function formatDate(date) {
    const options = { year: 'numeric', month: 'short', day: 'numeric' };
    return new Date(date).toLocaleDateString('en-US', options);
}

/**
 * Show toast notification
 */
function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    toast.className = `toast toast--${type}`;
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.classList.add('toast--show');
    }, 100);
    
    setTimeout(() => {
        toast.classList.remove('toast--show');
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}

/**
 * Confirm dialog
 */
function confirmDialog(message) {
    return new Promise((resolve) => {
        const confirmed = window.confirm(message);
        resolve(confirmed);
    });
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new AdminDashboard();
});

// Export for use in other modules
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { AdminDashboard, formatNumber, formatDate, showToast, confirmDialog };
}
