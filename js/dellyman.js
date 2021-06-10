let option = document.querySelector('.online');
let boxTwo = document.querySelector(".xo");
let inbox = document.querySelector(".inbox");
let submit = document.querySelector(".submit");
let light = document.querySelector(".boxTwo")
let on = document.getElementById('on');
let form = document.querySelector(".whole");
let show = document.querySelector(".show");
let within = document.querySelector(".within");
let overlay = document.querySelector(".overlay");
let overlay2 = document.querySelector(".overlay2");
let van = document.querySelector('.boxOne');

let output = "";
let Answer = "";

async function delly() {

    let steve = await fetch("./apicode/selectOrder.php");
    let data = await steve.json();
    console.log(data)
    let control = data.filter((item) => item !== null && item !== "undefined")

    ayo(control)

    const stone = ["Select Order", ...new Set(control.map(item => item.order_id))]

    console.log(stone)
    let zine = stone.forEach((item) => {

        output += `<option data-id='${item}'>${item}</option>`;
    })
    option.innerHTML = output


}

delly();

let black = "";
function ayo(deji) {
    option.addEventListener("change", (e) => {
        let select = e.target.options[e.target.selectedIndex].dataset.id
        let tunde = deji.filter((item) => item.order_id == select)
        let still = tunde.map((item) => {

            let { id, purchasedItem, purchasedQuantity, update_time } = item;

            return `<p class='product' >${purchasedItem}  x${purchasedQuantity}  || ${update_time}      </p>
         <button type="button" class="btn">
           <span></span>
           <span    class="switch"></span>
           <span></span>
       </button>
       <article class="quantity" >
         
        <input type="number" id="qty${id}"  value='${purchasedQuantity}' placeholder="Quantity" />
        <button type="submit" data-number=${id}   data-id=${purchasedQuantity} class="second" >Update</button>
        <p class="err"></p>
        </article>
     </div>
     <hr/>
       `;
        })
        inbox.innerHTML = still.join(' ')
        //  console.log(black)

        let buttons = [...document.querySelectorAll(".btn")];
        let quantity = document.querySelectorAll(".quantity");
        let btnIn = [...document.querySelectorAll(".second")]



        quantity.forEach((quan) => {
            let num = quan.querySelector('input')
            let second = quan.querySelector('.second');
            let err = quan.querySelector(".err")

            second.addEventListener("click", function (e) {
                e.preventDefault();
                let important = e.target.getAttribute('data-number');
                let con = document.querySelectorAll('input')
                // let cole = [];
                // con.forEach((one) => cole.push(one.value))

                let goat = e.target.getAttribute('data-id');
                let purchasedQuantity = tunde.map(item => item.purchasedQuantity)

                function func() {

                    var cole = [];
                    for (var i = 0; i <= con.length - 1; i++) {
                        cole.push(con[i].value);

                    }
                    console.log(cole)

                    function sub(cole, purchasedQuantity) {

                        purchasedQuantity.map((total, figure) => {
                            Answer = total - cole[figure];

                        })
                    }
                    sub(cole, purchasedQuantity);
                    // console.log(Answer)  
                    // if (cole == purchasedQuantity) {
                    //     // console.log(true)
                    //     submit.disabled = false
                    //     on.removeAttribute('disabled')
                    //     submit.style.backgroundColor = '#9D2143'
                    //     console.log(false)
                    //     err.innerText = `${num.value} quantity(es) will be shipped `
                    //     err.style.color = `green`;
                    // }

                    if (cole > purchasedQuantity) {
                        // console.log(true)
                        on.setAttribute('disabled', true)
                        // submit.disabled = true
                        // submit.style.backgroundColor = '#9d214262'
                        console.log(true)
                        err.innerText = `quantity(es) ${num.value} is greater than order `
                    }
                    else if (cole <= purchasedQuantity) {
                        // submit.disabled = false
                        on.removeAttribute('disabled')
                        // submit.style.backgroundColor = '#9D2143'
                        console.log(false)
                        err.innerText = `${num.value} quantity(es) will be shipped `
                        err.style.color = `green`;
                    }
                    // if (cole != purchasedQuantity) {
                    //     // console.log(true)
                    //     on.setAttribute('disabled', true)
                    //     submit.disabled = true
                    //     submit.style.backgroundColor = '#9d214262'
                    //     console.log(true)
                    //     err.innerText = `quantity(es) ${num.value} is greater than order `
                    // }



                }
                func();



                if (num.value == 0) {

                    err.innerText = `${num.value} quantity(es)  can't  be shipped `
                    num.style.border = "1px solid red";
                    on.setAttribute('disabled', true)
                    // submit.setAttribute('disabled', true)
                    // submit.style.backgroundColor = '#9d214262';  
                    err.style.color = `red`;
                }

                if (num.value < 0) {

                    err.innerText = `${num.value} quantity(es) can't  be shipped `
                    err.style.color = `red`
                    num.style.border = "1px solid red";
                    on.setAttribute('disabled', true)
                    // submit.setAttribute('disabled', true)
                    // submit.style.backgroundColor = '#9d214262';  
                }


            })


        })

        buttons.forEach(btn => {
            let move = btn.querySelector(".btn .switch");
            console.log(move.classList.contains("slide"))
            btn.addEventListener('click', e => {
                let quantity = e.currentTarget.nextSibling.nextSibling;
                buttons.forEach(one => {
                    if (one !== btn) {
                        one.classList.remove("slide")
                    }
                })

                if (!move.classList.contains("slide")) {
                    move.classList.add("slide")
                    btn.classList.add("active")
                    quantity.style.transition = "all 1s";
                    quantity.style.display = "block"
                } else {
                    move.classList.remove("slide")
                    btn.classList.remove("active")
                    quantity.style.transition = "all 1s";
                    quantity.style.display = "none"
                }
            })
        })


        numberItem = tunde.length

    })
}

async function vehicle() {
    let vehicle = await fetch("./apicode/vehicle.php");
    let channel = await vehicle.json();
    let think = ['Select Carrier', ...new Set(channel.map((item) => item.Name))]
    let soon = think.map(item => {
        return `<option>${item}</option>`;
    })
    on.innerHTML = soon
}
vehicle();



submit.addEventListener('click', (e) => {
    e.preventDefault();
    overlay.classList.add('hide-overlay')

})




within.addEventListener('click', (e) => {
    let input = [...form.querySelectorAll("input")]

    if (e.target.innerText == "Yes") {
        window.scrollTo(0, 0);
        input.forEach((one) => {
            let id = one.getAttribute('id').slice(3);
            let formData = new FormData();
            formData.append(`id`, id);
            formData.append(`order_id`, option.value);
            formData.append(`value`, one.value);
            formData.append(`vehicle`, on.value)
            formData.append(`remaining`, Answer)
            url = 'send.php';

            fetch(url, {
                method: "POST",
                body: formData
            }).then(Response => {
                return Response.json()
                //   console.log(Response)

            }).then(res => {
                console.log(res)



                if (res.ResponseCode == 101) {
                    show.innerHTML = `${res.ResponseMessage} please try again later thank you`;
                    show.style.border = "1px solid #9D2143";
                    show.style.color = "#9D2143"

                } else if (res.ResponseCode != 101) {
                    show.innerHTML = `${res.ResponseMessage} `;
                    show.style.border = "1px solid green";
                    show.style.color = "green"
                }
                setTimeout(() => {

                    show.innerText = ``;
                    show.style.border = "";
                    show.style.color = ""
                }, 14000);
            })
                .catch(err => {
                    console.log(err)
                })


        })

        overlay.classList.remove('hide-overlay')
        overlay2.classList.add('hide-overlay2')
        setTimeout(() => {
            overlay2.classList.remove('hide-overlay2')
        }, 3000)
    } else if (e.target.innerText == "No") {
        overlay.classList.remove('hide-overlay')
    }

})

on.addEventListener("change", function (e) {

    if (e.target.options[e.target.selectedIndex].innerText === "Select Carrier") {
        submit.setAttribute('disabled', true)
        console.log(true)
    } else if (e.target.options[e.target.selectedIndex].innerText !== "Select Carrier") {
        submit.setAttribute('disabled', false)
        console.log(false)
        submit.disabled = false
        submit.style.backgroundColor = '#9D2143'
    }
})

/**second method */


/**second method */
