$(document).ready(function () {
    $("#createForm").toggle();
    $("#spin").toggle();
    function loadData() {
        $("#container").html("");
        fetch("config/logic.php")
            .then((res) => {
                return res.json();
            }).then((data) => {
                // console.log(Object.values(data));
                // console.log(data[1])
                for (let i = 0; i < Object.values(data).length; i++) {
                    let { id, fname, mobile, budget, date, time, location } = data[i];

                    //using html() function to create dynamic html element with data

                    $(`#container`).append(`
            <article class="dashboard">
                <article>
                    <span class="name">${fname}</span><br>
                    <span>${mobile}</span><br>
                    <span>${date} | </span>
                    <span>${time}</span><br>
                    <span>${budget} | </span>
                    <span>${location}</span>
                </article>
                <article>
                    <a href="${id}"><i class="fa-solid fa-phone"></i></a>
                    <a href="${id}"><i class="fa-solid fa-eye"></i></a>
                </article>
           </article>

        `);

                }
            });
    }
    loadData();
    async function postFormData(formData) {
        await fetch("config/logic.php", {
            method: 'post',
            body: formData
        }).then((response) => {
            if (!response.ok) {
                console.log("error occured!!")
            } else {
                loadData();
                $("#fform").trigger("reset");
                $("#spin").toggle();
                $("body").removeClass("blur");
                $("#create").click();
            }
        })
    }

    $("#create").on("click", function (e) {
        e.preventDefault();
        $("#container").toggle("");
        $("#createForm").toggle();
    })
    $("#fform").on("submit", function (e) {
        e.preventDefault();
        $("#spin").toggle();
        $("body").addClass("blur");
        const formData = new FormData(this);
        const consoleLog = postFormData(formData);
    })

});