// logo scroll animation

function handleAnimation(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.marginBottom = '0';
            observer.unobserve(entry.target);
        }
    });
}
const logooptions = {
    threshold: 0.5
};
const logoobserver = new IntersectionObserver(handleAnimation, logooptions);
const logotarget = document.getElementById('logo_pic');
logoobserver.observe(logotarget);





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

const countingNumber1 = document.getElementById("countingNumber1");
const startNumber1 = 0;
const endNumber1 = 50;
const duration1 = 1000;

animateNumberOnScroll(countingNumber1, startNumber1, endNumber1, duration1);

const countingNumber2 = document.getElementById("countingNumber2");
const startNumber2 = 0;
const endNumber2 = 250;
const duration2 = 1500;

animateNumberOnScroll(countingNumber2, startNumber2, endNumber2, duration2);

const countingNumber3 = document.getElementById("countingNumber3");
const startNumber3 = 0;
const endNumber3 = 1400000;
const duration3 = 2000;

animateNumberOnScroll(countingNumber3, startNumber3, endNumber3, duration3);




