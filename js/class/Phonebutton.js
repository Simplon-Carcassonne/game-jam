/*
    You must have a container like a <div> or <a>
    with an ID you'll pass to this object at creation

    function isMobile => https://stackoverflow.com/questions/11381673/detecting-a-mobile-browser
*/

class PhoneButton {

    constructor(ID = "phone-btn") {
        //reach good html element
        // <a href="tel:+33632096792" class="contact-phone" id="phone-btn">Appeler</a>
        this.phoneBtn = document.getElementById(ID);
        /**** Manage phone button ******/
        if (this.isMobile()) {
            this.phoneBtn.innerHTML = '<a href="tel:+33632096792" class="contact-phone" id="phone-btn">Appeler</a>';
        } else {
            //this.phoneBtn.style.display = "none";
            this.phoneBtn.innerHTML = '<span class="contact-phone" id="phone-btn">Appeler au +33632096792</span>';
        }
    }
    isMobile() {
        var match = window.matchMedia || window.msMatchMedia;
        if (match) {
            var mq = match("(pointer:coarse)");
            return mq.matches;
        }
        return false;
    }

}