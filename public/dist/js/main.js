document.addEventListener("DOMContentLoaded", function () {
    // FAQ EXPAND and COLLASE

    // Get all elements with class "togglefaq"
    const toggleFAQs = document.querySelectorAll(".togglefaq");

    // Loop through all elements with class "togglefaq"
    toggleFAQs.forEach(function (toggleFAQ) {
        // Add event listener to the element
        toggleFAQ.addEventListener("click", function (event) {
            event.preventDefault();

            // Get all elements with class "active" except the clicked element
            const notThis = [];

            for (const elem of toggleFAQs) {
                if (elem !== event.target) {
                    notThis.push(elem);
                }
            }

            //console.log("all", notThis);

            // Loop through all elements with class "active" except the clicked element
            notThis.forEach(function (item) {
                item.querySelector(".fa-minus-circle")?.classList.add(
                    "fa-plus-circle"
                );
                item.querySelector(".fa-minus-circle")?.classList.remove(
                    "fa-minus-circle"
                );
                item.classList.remove("active-faq");
                item.nextElementSibling.style.display = "none";
            });

            // Toggle class "active" and slide toggle the next sibling with class "faqanswer"
            event.target.classList.toggle("active-faq");
            // console.log("THIS", event.target.style.display === "");

            if (
                event.target?.nextElementSibling.style.display === "" ||
                event.target?.nextElementSibling.style.display === "none"
            ) {
                event.target.nextElementSibling.style.display = "block";
            } else {
                event.target.nextElementSibling.style.display = "none";
            }

            // Toggle class "icon-plus" and "icon-minus" of the clicked element's child with tag name "i"
            this.querySelector("i").classList.toggle("fa-plus-circle");
            this.querySelector("i").classList.toggle("fa-minus-circle");
        });
    });

    //hero text animation
    gsap.fromTo(
        ".h1-anim span",
        {
            x: 50,
            opacity: 0,
        },
        {
            delay: 0.2,
            duration: 1,
            x: 0,
            opacity: 1,
            ease: "power2.easeOut",
            stagger: {
                from: "start",
                amount: 0.5,
            },
        }
    );

    // BACKGROUND COLOR CHANGE

    let tl_fs = gsap.timeline({
        yPercent: 90,
        scrollTrigger: {
            trigger: ".scrolling-text-contact-form",
            // pin: '.animate-position-btn',
            start: "-=300",
            end: "bottom bottom",
            ease: "none",
            pin: true,
            scrub: 1.5,
            //markers: true,
        },
    });

    // tl_fs.to(
    //   "#main",
    //   {
    //     background: "#ffb627",
    //   },
    //   0
    // );

    // tl_fs.to(
    //   ".contact-form-container",
    //   {
    //     //background: "#ffb627",
    //   },
    //   0
    // );

    // tl_fs.to(
    //   ".kpis-container",
    //   {
    //     background: "#ffb627",
    //   },
    //   0
    // );

    // tl_fs.to(
    //   ".scrolling-text-container-map",
    //   {
    //     //background: "#ffb627",
    //   },
    //   0
    // );

    // tl_fs.to(
    //   ".form-container",
    //   {
    //     background: "#ffb627",
    //   },
    //   0
    // );
    // tl_fs.to(
    //   ".partners-slider",
    //   {
    //     background: "#ffb627",
    //   },
    //   0
    // );
    // tl_fs.to(
    //   ".faq-container",
    //   {
    //     background: "#ffb627",
    //   },
    //   0
    // );

    // tl_fs.to(
    //   ".kpis-container",
    //   {
    //     background: "#ffb627",
    //   },
    //   0
    // );

    tl_fs.to(".book-a-demo", {
        background: "#fff",
        duration: 0.1,
        ease: "none",
        //scrub: true,
        //pin: true,
        //markers: true,
    });

    // KPI ANIMATIONS

    let numberSlots = document.getElementsByClassName("number");
    let kpiS1 = document.getElementById("kpis_1");

    function kpifunc() {
        for (const number of numberSlots) {
            let counter = 0;
            setInterval(() => {
                let currentKpi =
                    number.parentElement.parentElement.parentElement.querySelector(
                        "circle"
                    );

                let currentKpiVal = number.getAttribute("kpival");

                if (counter == currentKpiVal) {
                    clearInterval();
                } else {
                    counter += 1;
                    number.innerHTML = counter + "%";
                    currentKpi.style.strokeDashoffset =
                        475 - (counter / 100) * 435; // 475 came from dash array value (see the css file, here assume 475 = 100)
                }
            }, 30);
        }
    }

    let tl_kpi = gsap.timeline({
        yPercent: 90,
        scrollTrigger: {
            trigger: ".kpis-container",
            start: "-=700",
            end: "bottom bottom",
            onEnter: () => {
                //console.log("KPI TRIGGER Enter");
                kpifunc();
            },
            onLeave: () => {
                //console.log("KPI TRIGGER Leave");
            },
            //markers: true,
            scrub: 0,
            // onEnterBack: myEnterFunc,
            // onLeaveBack: myLeaveFunc
        },
    });

    tl_kpi.to(
        ".kpis-container",
        {
            background: "#000",
            // duration: 1,
            // ease: "none",
        },
        1
    );

    tl_kpi.to(
        ".kpi-text",
        {
            color: "#fff",
            // duration: 1,
            // ease: "none",
        },
        1
    );

    tl_kpi.to(
        ".number",
        {
            color: "#fff",
            // duration: 1,
            // ease: "none",
        },
        1
    );

    tl_kpi.to(
        ".scrolling-text-container",
        {
            background: "#000",
            color: "#fff",
            // duration: 1,
            // ease: "none",
        },
        1
    );

    tl_kpi.to(
        ".form-container",
        {
            background: "#000",
            color: "#fff",
            // duration: 1,
            // ease: "none",
        },
        1
    );

    tl_kpi.to(
        ".map-container",
        {
            background: "#000",
            color: "#fff",
            // duration: 1,
            // ease: "none",
        },
        1
    );

    tl_kpi.to(
        ".accordion",
        {
            background: "#000",
            color: "#fff",
            // duration: 1,
            // ease: "none",
        },
        1
    );

    // SCROLL MONITOR
    const body = document.body;
    const header = document.querySelector("#header");
    const scaphold_sol = document.querySelector("#dropdown-wapper");
    const scaphold_srv = document.querySelector("#dropdown-wapper__services");
    const scaphold_resrv = document.querySelector(
        "#dropdown-wapper__reservation"
    );
    const main = document.querySelector("#main");
    const headerHeight = document.querySelector("#header").offsetHeight;
    main.style.top = headerHeight + "px";
    let lastScroll = 0;

    window.addEventListener("scroll", () => {
        let currentScroll = window.pageYOffset;
        if (currentScroll - lastScroll > 0) {
            // console.log("scrollup...");
            header.classList.add("scroll-down");
            header.classList.remove("scroll-up");

            scaphold_srv.style.display = "none";
            scaphold_sol.style.display = "none";
            scaphold_resrv.style.display = "none";
        } else {
            // scrolled up -- header show
            //console.log("scroll down...");

            header.classList.add("scroll-up");
            header.classList.remove("scroll-down");

            scaphold_srv.style.display = "block";
            scaphold_sol.style.display = "block";
            scaphold_resrv.style.display = "block";
        }
        lastScroll = currentScroll;
    });

    //HERO ART ANIMATION

    let rotate = gsap.timeline({
        scrollTrigger: {
            trigger: ".top-navigation",
            pin: false,
            scrub: 0,
            start: "top top",
            end: "+=900",
        },
    });

    rotate.to(
        "#HeroArt",
        {
            x: 30,
            y: 200,
            rotation: 180,
            duration: 1,
            ease: "none",
        },
        0
    );

    rotate.to(
        "#OrderchimpsPlatform",
        {
            rotation: -180,
            transformOrigin: "center",
            duration: 1,
            ease: "none",
        },
        0
    );

    rotate.to(
        "#SocialMedia",
        {
            rotation: -180,
            transformOrigin: "center",
            duration: 1,
            ease: "none",
        },
        0
    );

    rotate.to(
        "#DigitalMarketing",
        {
            rotation: -180,
            transformOrigin: "center",
            duration: 1,
            ease: "none",
        },
        0
    );

    rotate.to(
        "#OrderchimpsPlatform",
        {
            y: -100,
            x: 100,
            scale: 0,
            //opacity: 0,
            rotation: 120,
            transformOrigin: "center",
            duration: 1,
            ease: "none",
        },
        1
    );

    rotate.to(
        "#HeroArt",
        {
            opacity: 0,
            duration: 1,
            ease: "none",
        },
        1
    );

    // SCROLLING TEXT BEFORE MAP SECTION

    let proxy = { skew: 0 },
        skewSetter = gsap.quickSetter(".skewText", "skewX", "deg"), // fast
        clamp = gsap.utils.clamp(-20, 20); // don't let the skew go beyond 50 degrees.

    let tl_scrollingText2 = gsap.timeline();
    tl_scrollingText2.to(".scrollingTextMap", {
        xPercent: 30,
        scrollTrigger: {
            trigger: ".scrollingTextMap",
            // start: "-=300",
            scrub: 1,
            onUpdate: (self) => {
                let skew = clamp(self.getVelocity() / -10);
                //console.log("updated sct..", skew);
                if (Math.abs(skew) > Math.abs(proxy.skew)) {
                    proxy.skew = skew;
                    gsap.to(proxy, {
                        skew: 0,
                        duration: 0.8,
                        ease: "power3",
                        overwrite: true,
                        onUpdate: () => skewSetter(proxy.skew),
                    });
                }
            },
        },
    });
    // SCROLLING TEXT BEFORE FORM SECTION

    let proxyForm = { skew: 0 },
        skewSetterForm = gsap.quickSetter(".skewText", "skewX", "deg"), // fast
        clampForm = gsap.utils.clamp(-20, 20); // don't let the skew go beyond 50 degrees.

    let tl_scrollingText2Form = gsap.timeline();
    tl_scrollingText2Form.to(".scrollingTextContactForm", {
        xPercent: 30,
        scrollTrigger: {
            trigger: ".scrollingTextContactForm",
            // start: "-=300",
            scrub: 1,
            onUpdate: (self) => {
                let skew = clamp(self.getVelocity() / -10);
                //console.log("updated sct..", skew);
                if (Math.abs(skew) > Math.abs(proxyForm.skew)) {
                    proxyForm.skew = skew;
                    gsap.to(proxyForm, {
                        skew: 0,
                        duration: 0.8,
                        ease: "power3",
                        overwrite: true,
                        onUpdate: () => skewSetterForm(proxyForm.skew),
                    });
                }
            },
        },
    });

    // MOBILE MENU NAV BAR BEHAVIOR
    const burgerMenuButton = document.getElementById("burger-icon");
    const burgerMenuCloseButton = document.getElementById("burger-close-icon");
    const burgerMenu = document.getElementById("mobile-top-menu");
    burgerMenuButton.addEventListener("click", () => {
        //console.log("clicked burger icon!", burgerMenu);
        if (burgerMenu.classList.contains("active-burger-menu")) {
            burgerMenu.classList.remove("active-burger-menu");
        } else {
            burgerMenu.classList.add("active-burger-menu");
        }
    });

    burgerMenuCloseButton.addEventListener("click", () => {
        // console.log("clicked burger icon!", burgerMenu);
        if (burgerMenu.classList.contains("active-burger-menu")) {
            burgerMenu.classList.remove("active-burger-menu");
        } else {
            burgerMenu.classList.add("active-burger-menu");
        }
    });

    // Key Fetures Accordion - Mobile View
    const items = document.querySelectorAll(".mobile-accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute("aria-expanded");

        if (itemToggle == "false") {
            this.setAttribute("aria-expanded", "true");
        } else {
            this.setAttribute("aria-expanded", "false");
        }
    }

    items.forEach((item) => item.addEventListener("click", toggleAccordion));

    // DROPDOWN BUTTON MENU
    let mainBtn = document.getElementById("dropdown-btn");
    let arrow = document.getElementById("dropdown-arrow");
    let arrowServices = document.getElementById("dropdown-arrow__services");
    let list = document.getElementById("dropdown-list");

    let listServices = document.getElementById("dropdown-list__services");
    let listArea = document.getElementById("dropdown-wapper");

    let servicesBtn = document.getElementById("dropdown-btn__services");
    let servicesArea = document.getElementById("dropdown-wapper__services");

    let listReservation = document.getElementById("dropdown-list__reservation");
    let arrowReservation = document.getElementById(
        "dropdown-arrow__reservation"
    );
    let reservationBtn = document.getElementById("dropdown-btn__reservation");
    let reservationArea = document.getElementById(
        "dropdown-wapper__reservation"
    );

    //overlay
    const overlayArea = document.getElementById("overlay");
    overlayArea?.addEventListener("mouseenter", () => {
        listReservation.classList.remove("active-drop-list");
        arrowReservation.classList.remove("chvron-up-down");
        list.classList.remove("active-drop-list");
        arrow.classList.remove("chvron-up-down");
        document.getElementById("overlay").style.display = "none";
    });

    //nav items
    let partnershipNavItem = document.getElementById("partnership__nav__item");

    partnershipNavItem.addEventListener("mouseenter", () => {
        listReservation.classList.remove("active-drop-list");
        arrowReservation.classList.remove("chvron-up-down");
        //document.getElementById("main").style.filter = "blur(0rem)";
        document.getElementById("overlay").style.display = "none";
    });

    mainBtn.addEventListener("mouseenter", (e) => {
        //console.log(e.target.id);
        list.classList.add("active-drop-list");
        arrow.classList.add("chvron-up-down");
        listServices.classList.remove("active-drop-list");
        arrowServices.classList.remove("chvron-up-down");

        document.getElementById("overlay").style.display = "block";
    });

    listArea.addEventListener("mouseleave", (e) => {
        //console.log(e.target.id);
        list.classList.remove("active-drop-list");
        arrow.classList.remove("chvron-up-down");
        //document.getElementById("main").style.filter = "blur(0rem)";
        document.getElementById("overlay").style.display = "none";
    });

    // SERVICES TAB
    servicesBtn.addEventListener("mouseenter", (e) => {
        //console.log(e.target.id);
        listServices.classList.add("active-drop-list");
        arrowServices.classList.add("chvron-up-down");
        list.classList.remove("active-drop-list");
        arrow.classList.remove("chvron-up-down");

        listReservation.classList.remove("active-drop-list");
        arrowReservation.classList.remove("chvron-up-down");

        //document.getElementById("main").style.filter = "blur(0rem)";
        document.getElementById("overlay").style.display = "block";
    });

    servicesArea.addEventListener("mouseleave", (e) => {
        //console.log(e.target.id);
        listServices.classList.remove("active-drop-list");
        arrowServices.classList.remove("chvron-up-down");
        //document.getElementById("main").style.filter = "blur(0rem)";
        document.getElementById("overlay").style.display = "none";
    });

    // RESERVATION TAB
    reservationBtn.addEventListener("mouseenter", (e) => {
        //console.log(e.target.id);
        listReservation.classList.add("active-drop-list");
        arrowReservation.classList.add("chvron-up-down");
        listServices.classList.remove("active-drop-list");
        arrowServices.classList.remove("chvron-up-down");

        //document.getElementById("main").style.filter = "blur(0rem)";
        document.getElementById("overlay").style.display = "block";
    });

    reservationArea.addEventListener("mouseleave", (e) => {
        //console.log(e.target.id);
        listReservation.classList.remove("active-drop-list");
        arrowReservation.classList.remove("chvron-up-down");
        //document.getElementById("main").style.filter = "blur(0rem)";
        document.getElementById("overlay").style.display = "none";
    });

    // Free Reservation Click & For ppulation
    const freeReservationContactNavLink = document.getElementById(
        "free_reservation_contact__nav_link"
    );
    const subjectFormSelector = document.getElementById(
        "form_subject_selector"
    );

    freeReservationContactNavLink.addEventListener("click", () => {
        subjectFormSelector.options[2].selected = true;
    });

    // MOBILE SUBMENU NAV
    const mobileSolutions = document.getElementById("burger-item__solutions");
    const mobileServices = document.getElementById("burger-item__services");
    const mobileFreeReservation = document.getElementById(
        "burger-item__freereservation"
    );

    mobileSolutions.addEventListener("click", (e) => {
        document
            .getElementById("solutions__submenu")
            .classList.toggle("active");
        document
            .getElementById("freereservation__submenu")
            .classList.remove("active");
        document.getElementById("services__submenu").classList.remove("active");

        //console.log(e.target.id);
    });
    mobileServices.addEventListener("click", (e) => {
        document.getElementById("services__submenu").classList.toggle("active");
        document
            .getElementById("freereservation__submenu")
            .classList.remove("active");
        document
            .getElementById("solutions__submenu")
            .classList.remove("active");
        //console.log(e.target.id);
    });
    mobileFreeReservation.addEventListener("click", (e) => {
        document
            .getElementById("freereservation__submenu")
            .classList.toggle("active");
        document.getElementById("services__submenu").classList.remove("active");
        document
            .getElementById("solutions__submenu")
            .classList.remove("active");
        //console.log(e.target.id);
    });

    //SCROLL REVEAL GSAP
    // const reveal = gsap.utils.toArray(".reveal");
    // reveal.forEach((text, i) => {
    //   ScrollTrigger.create({
    //     trigger: text,
    //     toggleClass: "active",
    //     start: "top 90%",
    //     end: "top 20%",
    //   });
    // });

    // const images = gsap.utils.toArray('img');
    // images.forEach((img, i) => {
    //   ScrollTrigger.create({
    //     trigger: img,
    //     toggleClass: 'active',
    //     start: "top 90%",
    //     end: "top 20%",
    //   })
    // })

    // TYPING EFFECT
    new Typed("#h1anim", {
        strings: [
            "Is digital marketing causing you headaches?",
            "Too many systems to manage your business?",
            "Need more sales from your website?",
            "Need to reduce expenses to improve your bottom line?",
        ],
        typeSpeed: 90,
        cursorChar: "",
        backSpeed: 50,
        delaySpeed: 100,
        loop: true,
    });
});

//backup - <span id='typed_h1'>The Digital Food</span><br /><span id='typed_h2'>Experience,</span><br /><span class='yellow' id='typed_h3'>Evolved.</span>
