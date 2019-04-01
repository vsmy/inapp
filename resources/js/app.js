//CONTACT FORM
const errMsgClass= 'error-msg';
const errActiveClass = 'error-active';
const successMsgClass = 'success-msg';
const successMsgCloseClass = 'success-msg-close';
const successActiveClass = 'success-active';
const STATES = {DEFAULT: 0, LOADING: 1, SUCCESS: 2, ERROR: 3}

let form = document.forms.contact_form;

function recaptchaCallback() {
    return new Promise((resolve, reject) => {
        const captcha = grecaptcha.getResponse();
        contactUs(captcha);
        grecaptcha.reset();
        return resolve();
    })
}

function contactUs(captcha) {

    let data = {
        name: form.name.value,
        email: form.email.value,
        company: form.company.value,
        message: form.message.value,
        captcha: captcha
    }
    //
    sendForm(data);
}

async function sendForm(data = {name: '', email: '', company: '', message: '', captcha: ''}) {
    formState(STATES.LOADING)

    await postData('/contact_us', data)
        .then((response) => {
            let status = response.status;
            let data =  response.json().then((json) => {
                if (status == 200)
                    formState(STATES.SUCCESS)
                else
                    formState(STATES.ERROR, json.errors)
                formState(STATES.DEFAULT)
            })
        })
        .catch((error) => {
        });
}

function formState(state = STATES.DEFAULT, ...args) {
    if (state == STATES.DEFAULT) {
        let submitBtn = form.querySelector('[type=submit]');

        submitBtn.classList.remove('btn-loading')
        submitBtn.disabled = false;
    } else if (state == STATES.LOADING) {
        let submitBtn = form.querySelector('[type=submit]');

        submitBtn.classList.add('btn-loading')
        submitBtn.disabled = true;
        form.querySelectorAll(`.${errActiveClass}`).forEach((errMsg) => {
            errMsg.classList.remove(errActiveClass);
        });
    } else if (state == STATES.SUCCESS) {
        let successMsgBlock = form.querySelector(`.${successMsgClass}`);

        successMsgBlock.classList.add(successActiveClass);
        form.querySelectorAll('input, textarea').forEach((input)=> {input.value = ''})
        setTimeout(() => {
            successMsgBlock.classList.remove(successActiveClass);
        }, 2000)
    } else if (state == STATES.ERROR) {
        let errMsgBlock;
        let errField;
        args[0].forEach((err) => {
            errMsgBlock = form.querySelector(`.${errMsgClass}.${errMsgClass}-${err.name}-${err.value}`);
            errField = form.querySelector(`[name=${err.name}]`);
            if (errMsgBlock)
                errMsgBlock.classList.add(errActiveClass);
            if(errField)
                errField.classList.add(errActiveClass);
        });
    }
}

function postData(url, data) {
    return new Promise((resolve, reject) => {
        fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data)
        })
            .then((response) => {
                resolve(response);
            })
            .catch((error) => {
                reject(error);
            });
    });
}

form.querySelectorAll('input, textarea').forEach((input) => {
    input.addEventListener("input", (e) => {
        input.classList.remove(errActiveClass);
        form.querySelectorAll(`.${errMsgClass}-${input.getAttribute("name")}`).forEach((errMsg) => {
            errMsg.classList.remove(errActiveClass);
        })
    }, true);
})

document.querySelectorAll(`.${successMsgClass}`).forEach((successMsg) => {
    successMsg.querySelectorAll(`.${successMsgCloseClass}`).forEach((successMsgClose) => {
        successMsgClose.addEventListener('click', (e) => {
            successMsg.classList.remove(successActiveClass)
        }, true)
    })
})
//CONTACT FORM


