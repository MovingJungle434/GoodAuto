window.onscroll = function () { myFunction() }

function myFunction() {
    const elementsToAnimate = [
        { id: "div_mercedes", threshold: 400, className: "sliderUp" },
        { id: "about_us_left", threshold: 200, className: "sliderDown" },
        { id: "relative", threshold: 900, className: "sliderDown" },
        { id: "show_left", threshold: 2200, className: "sliderDown" },
        { id: "show_right", threshold: 2300, className: "sliderUp" },
        { id: "car_top", threshold: 3200, className: "sliderUp" },
        { id: "car_botton", threshold: 3500, className: "sliderDown" },
        { id: "small_left", threshold: 4100, className: "sliderDown" },
        { id: "small_between", threshold: 4100, className: "sliderUp" },
        { id: "small_right", threshold: 4100, className: "sliderDown" },
        { id: "sign_up", threshold: 4600, className: "sliderUp" },
        { id: "full_name", threshold: 4700, className: "sliderDown" },
        { id: "email1", threshold: 4800, className: "sliderDown" },
        { id: "phone1", threshold: 4900, className: "sliderDown" },
        { id: "sign_up_button", threshold: 5000, className: "sliderDown" },
        { id: "contact", threshold: 4700, className: "sliderDown" },
        { id: "contact1", threshold: 4700, className: "sliderDown" },
        { id: "contact2", threshold: 4700, className: "sliderDown" }
    ]

    elementsToAnimate.forEach(element => {
        const el = document.getElementById(element.id)
        if (el) {
            const rect = el.getBoundingClientRect()
            const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

            if (isVisible) {
                el.classList.add(element.className)
            }
        }
    })
}
