document.querySelector("#sub").addEventListener('mouseover', function () {
    // document.querySelector("#submenu").style.display="block"
    document.querySelector("#w").style.color="white"
})

document.querySelector("#sub").addEventListener('click', function () {
    document.querySelector("#submenu").style.display="block"
    document.querySelector("#w").style.color="white"
})

document.querySelector("#submenu").addEventListener('mouseover', function () {
    document.querySelector("#submenu").style.display="block"
    document.querySelector("#sub").style.backgroundColor="rgb(67, 194, 67)"
    document.querySelector("#w").style.color="white"
})

document.querySelector("#sub").addEventListener('blur', function () {
    document.querySelector("#submenu").style.display="none"
    document.querySelector("#w").style.color="rgb(67, 194, 67)"
})

document.querySelector("#submenu").addEventListener('mouseout', function () {
    document.querySelector("#submenu").style.display="none"
    document.querySelector("#sub").style.backgroundColor=""
    document.querySelector("#w").style.color="rgb(67, 194, 67)"
})