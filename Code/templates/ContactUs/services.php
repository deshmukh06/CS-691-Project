<php>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List and Gird view using Javascript</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="wrapper">
    
    <div class="view_main">
        <div class="view_wrap list-view" style="display: block;">
            <div class="view_item">
                <div class="vi_left">
                    <img src="https://media.istockphoto.com/photos/rock-band-playing-at-a-nightclub-picture-id1129172065?b=1&k=20&m=1129172065&s=170667a&w=0&h=v-Pod4G29_XGsVESvkUCGfTMH2R_RfLo5CNss69SOvA=" alt="tomato">
                </div>
                <div class="vi_right">
                    <p class="title">Fransisco Rockers</p>
                    <p class="content">
                    <br><b>Services: </b>Rock band, live music for parties or restaurants and DJ services </br>
                    <br><b>Musicians:</b>Kelly Morgan, Brandy Clovey, Stew gardner, Shakes Mill</br>
                    <br><b>Email Address:</b>fransiscorockers@yahoo.com</br>
                    <br><b>Contact Number:</b>8765436785</br>
                    <br><b>Amount:</b>Starting from $1500</br>
                    <div class="btn">Contact this Band</div>
                </div>
            </div>
            <div class="view_item">
                <div class="vi_left">
                    <img src="https://media.istockphoto.com/photos/mixed-race-woman-singing-and-playing-guitar-picture-id1125877063?b=1&k=20&m=1125877063&s=170667a&w=0&h=Wph-n-O4zDidsfyMn5-hrElaMBOftZyjQ9bEglHaC6A=" alt="chilli">
                </div>
                <div class="vi_right">
                    <p class="title">Chilli</p>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam impedit, veniam! Voluptate a impedit animi!</p>
                    <div class="btn">View More</div>
                </div>
            </div>
            <div class="view_item">
                <div class="vi_left">
                    <img src="https://media.istockphoto.com/photos/blondie-lookalike-singer-on-stage-picture-id173352097?b=1&k=20&m=173352097&s=170667a&w=0&h=mxyEOBa9IF_rFlPff5-0EffTnMDhyUB9cDGfQxUPpKs=" alt="carrot">
                </div>
                <div class="vi_right">
                    <p class="title">Carrot</p>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam impedit, veniam! Voluptate a impedit animi!</p>
                    <div class="btn">View More</div>
                </div>
            </div>
            <div class="view_item">
                <div class="vi_left">
                    <img src="https://images.unsplash.com/photo-1481886756534-97af88ccb438?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmFuZHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="onion">
                </div>
                <div class="vi_right">
                    <p class="title">Onion</p>
                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam impedit, veniam! Voluptate a impedit animi!</p>
                    <div class="btn">View More</div>
                </div>
            </div>
           
                
           
          

        </div>
    </div>
</div>
    
<script src="scripts.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap');

*{
    list-style: none;
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background: #ebecf1;
    color: #b3b9b9;
}

.view_item img{
    width: 1000px;
}

.wrapper{
    width: 1000px;
    margin: 100px auto;
}

.links{
    margin-bottom: 25px;
    background: #fff;
    padding: 15px;
    border-radius: 3px;
}

.links ul{
    display: flex;
    justify-content: center;
}

.links ul li{
    margin: 0 15px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 20px;
    cursor: pointer;
}

.links ul li:hover,
.links ul li.active{
    color: #4abd3e;
}

.view_main{
    background: #fff;
    border-radius: 3px;
    padding: 25px;
}

.list-view .view_item {
    background: #fff;
    border: 1px solid #e2efe1;
    margin: 10px;
    padding: 20px 20px;
    display: flex;
    align-items: left;
}

.list-view .view_item:last-child{
    margin-bottom: 0;
}

.list-view .view_item .vi_left{
    margin-right: 15px;
}

.view_item .title{
    font-weight: 1000;
}

.view_item .content{
    margin: 10px 20px;
    font-size: 14px;
    line-height: 20px;
    font-weight: 200;
}

.view_item .btn{
    width: 125px;
    background: #e8ab41;
    padding: 8px 5px;
    border-radius: 3px;
    color: #fff;
    text-align: center;
    font-weight: 200;
    cursor: pointer;
}

.view_item .btn:hover{
    background: #e8ab41;
}

.grid-view{
    width: 200%;
}

.grid-view .view_item {
    display: inline-block;
    border: 1px solid #e2efe1;
    width: 300px;
    padding: 25px;
    text-align: center;
    margin: 10px;
}

.grid-view .view_item .vi_left{
    margin-bottom: 10px;
}

.grid-view .view_item .btn{
    margin: 0 auto;
}

</style>
</body>
</html>
      