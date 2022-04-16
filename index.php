<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./pusher/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="./pusher/style.css">
</head>
<body>
    <div class="container">
        <div class="chat_box m-5">
            <div class="form-group screen col-md-10 ">

            </div> 
            <div class="from-group ml-5">
                <label for="name" >Name</label>
                <input type="text" name="name" id="" class="input_name form-control col-md-7" placeholder="Enter your name">
            </div>
            <div class="from-group ml-5 ">
                <label for="message">Message</label>
                <textarea name="message" placeholder="Type your message here" id="" class="input_message form-control col-md-7"></textarea>
            </div>
            <button type="submit" class="btn btn-primary button ml-5 mt-2">Send</button>
        </div>
    </div>
    <script src="./pusher/dev/pusher.min.js"></script>
    <script src="./pusher/dev/jquery.min.js"></script>
    <script src="./pusher/js/index.js"></script>
</body>
</html>
