
<style>
    /* Navtop */
.navtop {
    /* position: relative; */
    z-index: -1;
    background-color: var(--black);
    height: 7vh;
    overflow: hidden;
    display: flex;
    flex: 3;
    font-size: 14px;
    align-items: center;
    color: #fff;
    justify-content: space-between;
    /* padding: 15px; */
}

.navtop a {
    color: white;
    text-decoration: none;
    padding: 14px 16px;
}


@media screen and (max-width: 900px) {
    .navtop {
        flex-direction: row;
        height: auto;
        /* padding: 5px 0; */
    }

    .navtop a {
        padding: 5px 0;
    }
    .navtop .c{
        display: none;
    }
}
@media screen and (max-width: 600px) {
    .navtop {
        flex-direction: column;
        height: auto;
        /* padding: 10px 0; */
    }

    .navtop a {
        padding: 10px 0;
    }
    .navtop .c{
        display: none;
    }
}

@media screen and (max-width: 360px) {
    .navtop {
        flex-direction: column;
        height: auto;
        /* padding: 10px 0; */
    }

    .navtop a {
        padding: 10px 0;
    }
    .navtop .c{
        display: none;
    }
    .navtop div{
        display: none;
    }
    
}

</style>
<div class="landing">
        <div class="navtop">
           <p>30 DAYS REFUND GUARANTEE</p>
           <span class="c">COUNTRYWISE DELIVERY | FREE ISLAMABAD DELIVERY</span>
            <div>
                <a href="">| CONTACT US |
                </a>
                <a href="">| LOGIN |
                </a>
                <a href="">| REGISTER|
                </a>
            </div>       
        </div>
</div>
