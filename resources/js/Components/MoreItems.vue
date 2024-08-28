<template>
    <div class="more">
        <div>
            <img src="../../../public/assets/food2.webp" width="100%" height="90%" />
            <div>
                <div>Title</div>
                <div>ZMW 20</div>
            </div>
        </div>
        <div>
            <img src="../../../public/assets/food2.webp" width="100%" height="90%" />
            <div>
                <div>Title</div>
                <div>ZMW 20</div>
            </div>
        </div>
        <div>
            <img src="../../../public/assets/food2.webp" width="100%" height="90%" />
            <div>
                <div>Title</div>
                <div>ZMW 20</div>
            </div>
        </div>
        <div>
            <img src="../../../public/assets/food2.webp" width="100%" height="90%" />
            <div>
                <div>Title</div>
                <div>ZMW 20</div>
            </div>
        </div>
    </div> 
</template>
<style>
    .more{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        margin: 20px 60px;
        padding: 20px;
        grid-gap: 20px;

    }

    .more>div{
        background: rgb(254, 254, 254);
        border-radius: 8px;
        height: 200px;
        box-shadow: 0 0 2px rgb(197, 194, 194);
        cursor: pointer;
        font-size: 10px;

    }

    .more>div>div:last-child{
        padding: 0 10px
    }

    .more>div>div:last-child>div:last-child{
        font-weight: bolder
    }

</style>