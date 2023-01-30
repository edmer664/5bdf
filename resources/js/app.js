import * as basicLightbox from 'basiclightbox'

function lightbox(img){
    basicLightbox.create(`<img src="${img}" width="800" height="600">`).show()
}

// query all elements with data-lightbox attribute
const images = document.querySelectorAll('[data-lightbox]')
images.forEach(image => {
    image.addEventListener('click', function(e){
        e.preventDefault()
        console.log(this)
        // get the data-lightbox attribute value
        const img = this.getAttribute('data-lightbox')
        lightbox(img)
    })
})