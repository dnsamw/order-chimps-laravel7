const steps = document.getElementsByClassName("step");
const stepsContainer = document.querySelector(".steps");
const featureContent = document.getElementsByClassName("feature-content");
// const cunterMonitor = document.getElementById("counter");
// const cunterPRMonitor = document.getElementById("counterPr");
const progressBar = document.getElementById("bar");
let intervalID;

function reset() {
    clearInterval(intervalID);
    progressBar.style.width = 0;
}

const handleIteration = (e) => {
    reset();
    handleStepClick(e);
};

function handleStepClick(e) {
    startProgress();
    for (const step of steps) {
        step.classList.remove("current");
    }
    e.target.classList.toggle("current");

    for (const fc of featureContent) {
        fc.classList.remove("visible");
    }

    if (e.target.id === "pp") {
        document.getElementById("ft_pp").classList.toggle("visible");
    } else if (e.target.id === "dm") {
        //("Digital Marketng");
        document.getElementById("ft_dm").classList.toggle("visible");
    } else if (e.target.id === "dp") {
        //("Digital Precense");
        document.getElementById("ft_dp").classList.toggle("visible");
    }
}

for (const step of steps) {
    step.addEventListener("click", handleIteration);
}

function startProgress() {
    //PROGRESS
    const progressWidth = document
        .getElementById("progress")
        .getBoundingClientRect().width;

    let barWidth = 0;

    const animate = () => {
        barWidth++;
        progressBar.style.width = `${barWidth}px`;
        // cunterMonitor.innerText = barWidth;
        // cunterPRMonitor.innerText = ` progress width :${progressWidth}px`;
    };

    // animation starts 2 seconds after page load
    //let stepCounter = 0;
    //let timeoutHandle = setTimeout(() => {
    intervalID = setInterval(() => {
        if (barWidth === Math.round(progressWidth)) {
            clearInterval(intervalID);
            //console.log("END!!!");
        } else {
            animate();
        }
    }, 60); //this sets the speed of the animation
    //}, 100);
}

var myArray = [...steps];
var i = 0;

(function loop() {
    if (i <= myArray.length - 1) {
        ////(myArray[i]);
        myArray[i].click();
        //handleIteration();

        i++;

        if (i >= myArray.length) {
            i = 0;
        }
    } else {
        // myArray.reverse();
        // i = 0;
        // ////(myArray[i]);
        // myArray[i].click();
        // startProgress();
        // i = 1;
    }
    let duration = setTimeout(loop, 30000);
})();
