const list = document.querySelectorAll(".num");
let interval = 1000;

const targetElement = document.querySelector(".project-card");




function animateNumbers(elements) {
    for (element of elements) {
        if (element.isIntersecting) {

            list.forEach((valueDisplay) => {
                let startValue = 0;
                let endValue = parseInt(valueDisplay.getAttribute("data-val"))
                let duration = Math.floor(interval / endValue)

                let counter = setInterval(function () {
                    startValue += 1
                    valueDisplay.textContent = startValue;

                    if (startValue == endValue) {
                        clearInterval(counter);
                    }
                }, duration)

            })
        }
    }
}

function animateCrads(elements) {
    for (element of elements) {
        if (element.isIntersecting) {
            element.target.classList.add("project-card-animation");
        }
    }
}

const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5
}

const observer_animate_numbers = new IntersectionObserver(animateNumbers, options);
const observer_animate_cards = new IntersectionObserver(animateCrads, options);



observer_animate_numbers.observe(targetElement)

for(card of targetElement){
    observer_animate_cards.observe(card)
}
