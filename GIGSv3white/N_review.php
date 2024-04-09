

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating</title>
    <link rel="stylesheet" href="assets/stylereview.css">
    <link rel="stylesheet" type="text/css" href="fontawesome\css/all.min.css">
</head>

<body>

    <h1>GIGS review</h1><br>

    
    <div class="rateContainer">
        <div class="feedback">
            <div class="text">Thanks for do a Review!</div>
            <div class="edit">Edit</div>
        </div>
        <div class="star-widget">
            <input type="radio" name="rate" id="rate-5">
            <label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4">
            <label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3">
            <label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2">
            <label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1">
            <label for="rate-1" class="fas fa-star"></label>

            <form action="" method="POST">
                <header></header>
                <div class="textarea">
                    <textarea id="feedback" cols="30" name="feedback" placeholder="Your experience was..."></textarea>
                </div>
                <div class="btn">
                    <button type="submit" name="review">Feedback</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const btn = document.querySelector("button");
        const feedback = document.querySelector(".feedback");
        const widget = document.querySelector(".star-widget");
        const edit = document.querySelector(".edit");
        
        btn.onclick = ()=> {
            widget.style.display = "none";
            feedback.style.display = "block";

                edit.onclick = ()=> {
                    widget.style.display = "block";
                    feedback.style.display = "none";                
                }
                return false;
        }
    </script>
</body>
</html>