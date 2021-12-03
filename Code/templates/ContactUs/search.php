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
   <center> <br><input type="text" placeholder="Location..">&nbsp;&nbsp;<input type="text" placeholder="Services">&nbsp;&nbsp;<input type="Number" placeholder="Price">&nbsp;&nbsp;<input type="Submit" value="Filter Search"></center>
<table>
<tr>
<div class="wrapper">
    <div class="view_main">
        <div class="view_wrap list-view" style="display: block; size:100%">
            
            

            <div class="view_item">
                <div class="vi_left">
                    <img src="https://media.istockphoto.com/photos/rock-band-playing-at-a-nightclub-picture-id1129172065?b=1&k=20&m=1129172065&s=170667a&w=0&h=v-Pod4G29_XGsVESvkUCGfTMH2R_RfLo5CNss69SOvA=" alt="tomato">
                </div>

                <div class="vi_right">
                    <p class="title">Fransisco Rockers</p>
                    <p class="content">
                    <br><b>Services: </b>Rock band, live music for parties or restaurants and DJ services </br>
                    <br><b>Music Genre:</b> Rock</br>
                    <br><b>Musicians:</b>Harshey Smith,Kelly Morgan, Brandy Clovey, Stew gardner, Shakes Mill</br>
                    <br><b>Email:</b>fransiscorockers@yahoo.com</br>
                    <br><b>Contact Number:</b>8765436785</br>
                    <br><b>Amount:</b>Starting from $1500</br>
                    <br><input type="Submit" value="Contact this Band" onclick="window.location.href = 'http://localhost/code/contactUs/contactband';"></br>
                    
                </div>
            </div>

        </div>
    </div>
</div>
  </tr>
  <tr>
    <div class="wrapper">
    <div class="view_main">
        <div class="view_wrap list-view" style="display: block;">
            <div class="view_item">
                <div class="vi_left">
                    <img src="https://images.pexels.com/photos/167636/pexels-photo-167636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="tomato">
                </div>
                <div class="vi_right">
                    <p class="title">Highlanders</p>
                    <p class="content">
                    <br><b>Services: </b>Rock band, live music for parties or restaurants and DJ services </br>
                    <br><b>Music Genre:</b> Pop</br>
                    <br><b>Musicians:</b>Nami Brandon, Stark Lewis, Amy Thompson, Kris Mcdowel</br>
                    <br><b>Email:</b>highlanders@gmail.com</br>
                    <br><b>Contact Number:</b>2019874325</br>
                    <br><b>Amount:</b>Starting from $2500</br>
                    <br><input type="Submit" value="Contact this Band" onclick="window.location.href = 'http://localhost/code/contactUs/contactband';"></br>
                    
                </div>
            </div>

        </div>
    </div>
</div>
</tr>

<tr>
    <div class="wrapper">
    <div class="view_main">
        <div class="view_wrap list-view" style="display: block;">
            <div class="view_item">
                <div class="vi_left">
                    <img src="https://images.unsplash.com/photo-1526478806334-5fd488fcaabc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmFuZHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="tomato">
                </div>
                <div class="vi_right">
                    <p class="title">Fantastic Four</p>
                    <p class="content">
                    <br><b>Services: </b>Rock band, live music for parties or restaurants and DJ services </br>
                    <br><b>Music Genre:</b> Jazz</br>
                    <br><b>Musicians:</b>Kingsley Joui, Diana Estella, Edith Clovey, Morgan Young</br>
                    <br><b>Email:</b>fantasticfour@hotmail.com</br>
                    <br><b>Contact Number:</b>9756431768</br>
                    <br><b>Amount:</b>Starting from $1000</br>
                    <br><input type="Submit" value="Contact this Band" onclick="window.location.href = 'http://localhost/code/contactUs/contactband';"></br>
                    
                </div>
            </div>

        </div>
    </div>
</div>
</tr>
<tr>
    <div class="wrapper">
    <div class="view_main">
        <div class="view_wrap list-view" style="display: block;">
            <div class="view_item">
                <div class="vi_left">
                    <img src="https://www.wallpaperflare.com/static/89/103/605/live-concert-concert-stage-people-wallpaper.jpg" alt="tomato">
                </div>
                <div class="vi_right">
                    <p class="title">Ultra Tune</p>
                    <p class="content">
                    <br><b>Services: </b>Rock band, live music for parties or restaurants and DJ services </br>
                    <br><b>Music Genre:</b> Classical Music</br>
                    <br><b>Musicians:</b>Shanks Karter, Pear Flanigan, Bob Marshals, Peggy Jordan</br>
                    <br><b>Email:</b>ultratune@yahoo.com</br>
                    <br><b>Contact Number:</b>8809754328</br>
                    <br><b>Amount:</b>Starting from $3500</br>
                    <br><input type="Submit" value="Contact this Band" onclick="window.location.href = 'http://localhost/code/contactUs/contactband';"></br>
                    
                </div>
            </div>

        </div>
    </div>
</div>
</tr>
</table>
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
    margin: 10px auto;
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
    padding: 50px;
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
    text-align: center;
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
    align-self: center;
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
