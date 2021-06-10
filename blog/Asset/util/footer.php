<div class="footer text-light bg-purple">
    <ul>
        <li><a href="https://www.facebook.com/Purpl-Things-108371314782981"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="https://t.me/joinchat/bcDcl_dXXWc2NGY1"><i class="fab fa-telegram-plane"></i></a></li>
        <li><a href="https://wa.me/+917989216155?text=Hi *PurplThings* i need a help!"><i class="fab fa-whatsapp"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCd4CivLOKRSOjp155qCapBg"><i class="fab fa-youtube"></i></a></li>
     </ul>
     <p class="text-center">&copy; PURPLTHINGS 2021.</p>
</div>
<style>
    .footer {
        bottom: 0;
        margin-bottom:-100px;
    }
    .footer ul{
        padding-top: 20px;
        width: 100%;   text-align: center;
    }
    .footer ul li{
        list-style: none;
        display: inline-block;
        width: 40px;  height: 40px;
        margin: 0 10px;  
        border-radius: 50%;
        transform: rotate(45deg);
        overflow: hidden;
    }
    .footer ul li a{
        position: relative;
        text-decoration: none;
        display: inline-block;
        width: 100%;  height: 100%;
        color: #fff;
        font-size: 20px;
        border-radius: 50%;
        border: 3px solid #fff; 
        transform: rotate(-45deg);
        box-sizing: border-box;
        
    }
    .footer ul li a .fa{
        line-height: 20px; 
    }

    .footer ul li::before{
        content: '';
        position: absolute;
        top: 0;  left: 0;
        width: 100%;  height: 100%;
        background: #fff;
        z-index: -1;
        transition: .9s;
        transform: scaleY(0);
    }

    .footer ul li a:hover{
        color: purple;
    }
    .footer ul li:hover::before{
        transform: scaleY(1); 
    }
</style>