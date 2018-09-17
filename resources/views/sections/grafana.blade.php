<div class="grafana">
    <section class="section">
        <div class="columns">
            <div class="column is-one-fifth">
            </div>
            <div class="column ">
                <a href="https://grafana.com/">
                    <picture>
                        <source type="image/webp" srcset="img/webP/grafana.webp">
                        <source srcset='img/jpeg2000/grafana_logo.jp2' type='image/jp2'>
                        <img src="img/grafana_logo.jpg" height="200" width="200" alt="Logo grafana">
                    </picture>

                </a>
            </div>
            <div class="column ">
                <div class="content ">
                    <h3 class="title has-text-white">Grafana</h3>
                </div>
                Grafana est le logiciel de facto pour l'analyse des séries temporelles, avec plus de 100 000
                installations actives. Les clients se tournent vers Grafana Labs pour rassembler leurs sources de
                données disparates, via des logiciels neutres et open source.
            </div>
            <div class="column is-one-fifth">
            </div>
        </div>
        <b-carousel id="carousel1"
                    style="text-shadow: 1px 1px 2px #333;"
                    controls
                    indicators
                    :interval="3000"
                    img-width="200"
                    img-height="480"
        >

            <!-- Text slides with image -->
            <b-carousel-slide img-src="img/grafana1.png">

            </b-carousel-slide>

            <!-- Slides with custom text -->
            <b-carousel-slide img-src="img/grafana2.png">
            </b-carousel-slide>

            <!-- Slides with image only -->
            <b-carousel-slide img-src="img/grafana3.png">
            </b-carousel-slide>

        </b-carousel>
    </section>
</div>