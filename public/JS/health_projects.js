function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// counting numbers
function formatNumber(number) {
    if (number >= 1000000) {
        return (number / 1000000).toFixed(1) + 'M';
    } else if (number >= 1000) {
        return (number / 1000).toFixed(1) + 'K';
    } else {
        return number;
    }
}

function animateNumberOnScroll(element, start, end, duration) {
    let isAnimated = false;

    function animate() {
        if (!isAnimated && isElementInViewport(element)) {
            isAnimated = true;
            const range = end - start;
            const increment = range / (duration / 10);
            let current = start;

            const timer = setInterval(function () {
                current += increment;
                element.innerText = formatNumber(Math.floor(current));

                if (current >= end) {
                    element.innerText = formatNumber(end);
                    clearInterval(timer);
                }
            }, 10);
        }
    }

    animate();
    window.addEventListener("scroll", animate);
}

const countingNumber = document.getElementById("countingNumber");
const startNumber = 0;
const endNumber = 70; 
const duration = 2000; 

animateNumberOnScroll(countingNumber, startNumber, endNumber, duration);