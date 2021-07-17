<style type='text/CSS'>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
.row{
    margin-left: 0px !important;
    margin-right: 0px !important;
}
html{
    scroll-behavior:smooth;
}
.nav_style{
    background-color: red;
}
.nav_style a{
    color: white;
}
.main_header{
    height:450px;
    width:100%;
}
.rightside h1{
    font-size: 3rem;
}
.leftside img{
    animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat {
    0%
    {
        transform: scale(0.75);
    }
    20%
    {
        transform: scale(1);
    }
    60%
    {
        transform: scale(0.75);
    }
    80%
    {
        transform: scale(1);
    }
    100%
    {
        transform: scale(0.75);
    }
}
/* **************corona update******************** */
.corona_update{
    margin: 0px 0px 25px 0px;
}
.corona_update h3{
    color: #ff7675;
}
.corona_update h1{
    font-size: 2rem;
    text-align: center;
}
/* ************************About********************* */
.sub_section{
    background-color: #fbfafd;
}
/* **********************Footer******************************* */
.footer_style{
    background-color: #a29bf2 !important;
}
.footer_style p{
    margin-bottom: 0 !important;
}

/* ********************responsiveness**************************** */
@media(max-width:769px){
    .main_header{
        height: 700px;
        text-align: center;
    }
    .main_header h1{
        text-align: center;
        padding: 0px;
        width: 100%;
        font-size: 30px;
    }
    .count_style{
        display: inine !important;
    }
    .count_style p{
        text-align: center;
    }
    .about_res{
        margin-left: 0px !important;
    }
}
</style>
