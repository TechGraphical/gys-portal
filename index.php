<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYS - Portal</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <section id="spin-holder">
        <article id="spin"></article>
    </section>
    <section id="allContent">
        <section id="header">
            <h1 id="title">GYS Portal</h1>
        </section>
        <section id="container">

        </section>
        <section id="createForm">
            <form action="" id="fform">
                <input type="hidden" value="" name="id" id="id">
                <label for="fname">Name</label>
                <input type="text" value="" placeholder="Ex. Suraj Mohanty" name="fname">
                <label for="mobile">Mobile</label>
                <input type="number" value="" placeholder="Ex. 9876543210" name="mobile">
                <label for="requirments">Requirements</label>
                <input type="text" value="" placeholder="Ex. 2bhk" name="requirements">
                <label for="type">Type of Party</label>
                <select name="type" id="type">
                    <option value="rent" selected>Rent</option>
                    <option value="buy">Buy</option>
                </select><br>
                <label for="budget">Budget</label>
                <input type="text" value="" placeholder="Ex. 10k" name="budget">
                <label for="location">Location</label>
                <input type="text" value="" placeholder="Ex. Baguiati" name="location">
                <label for="date">Visit Date</label>
                <input type="date" value="" id="date" name="date">
                <label for="time">Visit Time</label>
                <input type="time" value="" placeholder="Ex. Baguiati" name="time">
                <label for="status">Client Status</label>
                <select name="status" id="status">
                    <option value="select">Select</option>
                    <option value="contacted">Contacted</option>
                    <option value="visited">Visited</option>
                    <option value="not_visited">Not_visited</option>
                    <option value="no_communication">No_communication</option>
                    <option value="follow_up_needed">Follow_up_needed</option>
                    <option value="out_of_town">Out_of_town</option>
                    <option value="rejected">Rejected</option>
                    <option value="unfit">Unfit</option>
                </select><br>
                <label for="remarks">Remarks</label>
                <textarea rows="4" cols="40" name="remarks" id="remarks" placeholder="Ex. will let us know"></textarea>
                <button type="submit" class="darkStyle">Submit</button>
                <button type="button" id="back" class="darkStyle">Back</button>
            </form>
        </section>
        <footer>
            <a href="#" id="create"><i class="fa-solid fa-plus"></i></a>
        </footer>

    </section>
</body>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/app.js"></script>

</html>