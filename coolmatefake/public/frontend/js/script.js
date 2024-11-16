const SliderArrowRight = document.querySelector('.fa-arrow-right')
const SliderArrowLeft = document.querySelector('.fa-arrow-left')
const SlideItem = document.querySelector('.slider-items')
const SlideItems = document.querySelectorAll('.slider-item')
let SlideLength = SlideItems.length - 1
let active = 0;
if (SliderArrowRight) {
    SliderArrowRight.addEventListener('click', () => {
        if (active >= SlideLength) {
            active = 0

        } else {
            active++

        }
        activeBanner(active)

    })
}
if (SliderArrowLeft) {
    SliderArrowLeft.addEventListener('click', () => {

        if (active - 1 < 0) {
            active = SlideLength

        } else {
            active--


        }
        activeBanner(active)
    })
}
function activeBanner(active) {
    SlideItem.style.left = "-" + active * 100 + "%"
}



// Menu Mobil active

const MenuBar = document.querySelector('.header-bar-icon');
const NavMobile = document.querySelector('header nav');
MenuBar.addEventListener('click', () => {
    NavMobile.classList.toggle('active');
    NavMobile.style.transition = '0.3s'
})

//Header -> sticky

const header = document.querySelector('header')
window.addEventListener('scroll', () => {
    window.pageYOffset >= 50 ? header.classList.add('active')
        : header.classList.remove('active')
})

//product-detail
const subImg = document.querySelectorAll('.small-img')

for (let index = 0; index < subImg.length; index++) {
    if (subImg[index].src == document.querySelector('.big-img').src) {
        subImg[index].classList.add('active')
    }
    subImg[index].addEventListener('click', () => {
        for (let index = 0; index < subImg.length; index++) {
            subImg[index].classList.remove('active')

        }
        document.querySelector('.big-img').src = subImg[index].src
        subImg[index].classList.add('active')
    })

}
//Product-quantity
const InputValue = document.querySelectorAll('.product-detail-quantity input')
const InputMinus = document.querySelectorAll('.product-detail-quantity i:first-child')
const InputPlus = document.querySelectorAll('.product-detail-quantity i:last-child')

if (InputMinus != null && InputPlus != null && InputValue != null) {
    for (let index = 0; index < InputValue.length; index++) {
       
        InputPlus[index].addEventListener('click', () => {
            let a = InputValue[index].value;
            a++
            InputValue[index].value = a
        })
        InputMinus[index].addEventListener('click', () => {
            let a = InputValue[index].value;
            if (a <= 1) {
                a = 1
            } else {
                a--
            }
            InputValue[index].value = a
        })
        
    }

   
}

//Mouse hover cart
const CartIcon = document.querySelector('.header-cart-icon')
const CartBox = document.querySelector('.header-cart-box')
CartIcon.addEventListener('mouseover', () => {
    CartBox.classList.add('active')

})
window.addEventListener('scroll', () => {
    window.pageYOffset >= 0 ? CartBox.classList.remove('active')
        : CartBox.classList.add('active')
})
// window.addEventListener('click', (event) => {
//     if (event.target != CartBox && CartBox.classList.contains('active')) {
//         // alert('123')
//         CartBox.classList.remove('active')
//     }

// })