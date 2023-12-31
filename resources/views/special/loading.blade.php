

<div class="global-box" id="loadingbox" style="display: none;">
    <div class="box-container">
        <div class="loading">
            <img class="sharingan" src="{{asset('/img/sharingan.png')}}" height="100" width="100" alt="">
        </div>
    </div>
</div>
<style>
.global-box{
    position:fixed;
    height: 100%;
    width: 100%;
    background-color: rgb(216, 209, 209,0.8);
    top: 0;
    left: 0;
    z-index: 1000;
    overflow-y: hidden;

}
.box-container{
    justify-items: center;
    text-align: center;
    height: 100%;
    padding-top: 20%;
}
.loading{
    display: inline-block;
  
   
    animation: tiyog 3s infinite linear;
}

@media(max-width:700px){
.sharingan{width: 50px; height: 50px;}
.box-container{
    align-content: center;
    align-items: center;
    vertical-align: center;
}
}

@keyframes tiyog{
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}
</style>

<script>
function showLoading(){
    document.getElementById('loadingbox').style.display ='';
}

</script>