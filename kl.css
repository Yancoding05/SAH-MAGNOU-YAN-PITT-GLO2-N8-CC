*{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-color: rgb(97, 87, 86);
}

.container{
    width: 800px;
    height: 500px;
    overflow: hidden;
    position: relative;
    background-color: white;
}

.container .user{
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
}

.user .img{
    width: 50%;
    height: 100%;
    position: relative;
    transition: 0.5s;
}

.user .img img{
    width: 100%;
    height: 100%;
}

.user .form{
    transition: 0.5s;
    position: relative;
    width: 50%;
    height: 100%;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px;
    box-sizing: border-box;
}

.user .form h2{
    width: 100%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
}

.user .form input{
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 10px;
    border: none;
    border-bottom: 1px solid grey;
    letter-spacing: 2px;
}

.user .form input[type="submit"]{
    width:100px;
    background-color: royalblue;
    color: white;
    font-size: 15px;
    cursor: pointer;
}

.user .form p{
    /* text-transform: uppercase; */
    letter-spacing: 1px;
    color: grey;
    margin-top: 20px;
}

.user .form p a{
    text-decoration: none;
    color: royalblue;
}

.signup{
    pointer-events: none;
}

.active .signup{
    pointer-events: initial;
}


.signup .form{
    left:100%;
}
.signup .img{
    left:-100%;
}

.signin .form, .signin .img{
    left: 0;
}

.active .signup .form{
    left: 0;
}

.active .signup .img{
    left: 0;
}

.active .signin .form{
    left: 100%;
}
.active .signin .img{
    left: -100%;
}

@media (max-width:950px){
    .container{
        width: 500px;
    }
    .user .img{
        display: none;
    }
    .user .form{
        width: 100%;
    }
}



button{
    border: 0;
    outline: none;
    padding: 10px 20px;
    background-color: teal;
    color: #fff;
    letter-spacing: 1px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}
.modal{
    /* display: none; */
    position:fixed;    
    width: 20rem;
    height: 10rem;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.5s;
}
.modal.show{
    pointer-events: initial;
    opacity: 1;
}
.modal-content{
    width: 500px;
    max-width: 90%;
    background-color: white;
    padding: 15px 20px;
    border-radius: 5px;
    transform: translateY(-100px);
    transition: transform 0.7s;
}
.modal.show .modal-content{
    transform: translateY(0);
}
.modal-content p{
    margin: 10px 0;
    opacity: 0.7;
}