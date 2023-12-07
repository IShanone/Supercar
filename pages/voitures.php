<style>
    .rond-bottom {
        border-radius: 0 0 30px 30px !important;
    }

    div#carour {
        perspective: 200px;
        padding-top: 10%;
        font-size: 0;
        overflow: hidden;
    }

    figure#spinner {
        transform-style: preserve-3d;
        height: 100px;
        transform-origin: 50% 50% -500px;
        transition: 1s;
    }

    figure#spinner img {
        width: 100px;
        height: 100px;
        position: absolute;
        left: 30%;
        transform-origin: 50% 50% -500px;
        outline: 1px solid transparent;
    }

    figure#spinner img:hover {
        transform: translate(100px, 300px);
    }

    figure#spinner img:nth-child(1) {
        transform: rotateY(0deg);
    }

    figure#spinner img:nth-child(2) {
        transform: rotateY(-45deg);
    }

    figure#spinner img:nth-child(3) {
        transform: rotateY(-90deg);
    }

    figure#spinner img:nth-child(4) {
        transform: rotateY(-135deg);
    }

    figure#spinner img:nth-child(5) {
        transform: rotateY(-180deg);
    }

    figure#spinner img:nth-child(6) {
        transform: rotateY(-225deg);
    }

    figure#spinner img:nth-child(7) {
        transform: rotateY(-270deg);
    }

    figure#spinner img:nth-child(8) {
        transform: rotateY(-315deg);
    }

    div#carour~span {
        color: #fff;
        margin: 5%;
        display: inline-block;
        text-decoration: none;
        font-size: 2rem;
        transition: 0.6s color;
        position: relative;
        margin-top: -6rem;
        border-bottom: none;
        line-height: 0;
    }

    div#carour~span:hover {
        color: #888;
        cursor: pointer;
    }

    .ss-icon:hover {
        color: black !important;

    }
</style>
<section>
    <div class="card border border-light w-50 mx-auto rond-bottom">
        <div class="row no-gutters">
            <div class="col-md-6">
                <div id="carour">
                    <figure id="spinner">
                        <img src="https://media.istockphoto.com/id/1481468103/photo/wind-turbines-in-the-sea.jpg?s=2048x2048&w=is&k=20&c=uWRCb4IY82SjD0wr-juNkkX8jhfyLmWbbyvdOJDS92Q=" height="100px" width="100px" alt>
                        <img src="https://media.istockphoto.com/id/848895602/photo/soap-bubbles.jpg?s=2048x2048&w=is&k=20&c=VC3ef4wf_HDrtNIGAX2ZRp9D8CfddGnZqk28hws2Xz4=" height="100px" width="100px" alt>
                        <img src="https://media.istockphoto.com/id/511010862/photo/whale-shark-coming-to-you-underwater.jpg?s=2048x2048&w=is&k=20&c=Ar7CISV867L7BmZ4BkfNbe_eJI-_6W_ccYAGi2rlt8I=" height="100px" width="100px" alt>
                        <img src="https://media.istockphoto.com/id/1336266880/photo/drone-view-of-white-sand-beach-of-mayotte-turquoise-lagoon.jpg?s=612x612&w=0&k=20&c=Gyq2ABZY3QD_IVcbzS0MU4TFahf-JZTpGRGsOWxTOtM=" height="100px" width="100px" alt>
                        <img src="https://media.istockphoto.com/id/1159408935/photo/from-the-tourist-tent-hand.jpg?s=612x612&w=0&k=20&c=F0dLAACo-nsrM2GijQ6pqS24j0dnTmoChC1tjx6a2R8=" height="100px" width="100px" alt>
                        <img src="https://media.istockphoto.com/id/1403004831/photo/islands-and-tropical-blue-bays-birds-eye-view.jpg?s=612x612&w=0&k=20&c=rs7IBj0OaImKWvjZcDeU0DO2-KDJtdw-bwwcmQCEatY=" height="100px" width="100px" alt>
                        <img src="https://media.istockphoto.com/id/1336266880/photo/drone-view-of-white-sand-beach-of-mayotte-turquoise-lagoon.jpg?s=612x612&w=0&k=20&c=Gyq2ABZY3QD_IVcbzS0MU4TFahf-JZTpGRGsOWxTOtM=" height="100px" width="100px" alt>
                        <img src="https://media.istockphoto.com/id/1159408935/photo/from-the-tourist-tent-hand.jpg?s=612x612&w=0&k=20&c=F0dLAACo-nsrM2GijQ6pqS24j0dnTmoChC1tjx6a2R8=" height="100px" width="100px" alt>
                    </figure>
                </div>
                <span style="float:left;color:blue;" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
                <span style="float:right;color:blue;" class="ss-icon" onclick="galleryspin('')">&gt;</span>
                <script>
                    var angle = 0;

                    function galleryspin(sign) {
                        spinner = document.querySelector("#spinner");
                        if (!sign) {
                            angle = angle + 45;
                        } else {
                            angle = angle - 45;
                        }
                        spinner.setAttribute("style", "-webkit-transform: rotateY(" + angle + "deg); -moz-transform: rotateY(" + angle + "deg); transform: rotateY(" + angle + "deg);");
                    }
                </script>
            </div>

            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Voiture de marque:</h5>
                    <img class="txt-center" src="https://www.jefchaussures.com/media/catalog/product/cache/9ab37239f981347561fd982c4c0ecc36/j/e/jef_4-778-modifier.jpg" height="100px" width="100px" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>