<section class="kopa-area-17 pt-20 pb-20 kopa-area-parallax cover-iframe-main" style="background-color: rgb(240, 232, 232);">
    <div class="mask"></div>
    <div class="video-wrapper">

        <h4 class="title-responsive" style="padding-top: 7px; color: white; margin-bottom: 20px; z-index: 10;">
            <img src="https://bangladesh.ucsiuniversity.edu.my/sites/default/files/vdo-icon-res.png" alt="">
            <span class="word">Featured</span>
            <span class="word">Videos</span>
        </h4>

        <div class="video-grid">
            <div class="video-element">
                <h5 class="iframe-heading">Remembering 1-year journey of our university</h5>
                <iframe style="border: 2px solid rgb(184, 12, 12);" width="530" height="299" src="https://www.youtube.com/embed/Lr37Nc4YBPc?si=FaU0Smc8BwfP_3ov" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-element">
                <h5 class="iframe-heading">International Day of Education</h5>
                <iframe style="border: 2px solid rgb(184, 12, 12);" width="530" height="299" src="https://www.youtube.com/embed/mc5VXS-eL3I?si=KGltd-tcaZ8KFN2i" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-element">
                <h5 class="iframe-heading">World-Class Learning Environment</h5>
                <iframe style="border: 2px solid rgb(184, 12, 12);" width="530" height="299" src="https://www.youtube.com/embed/rcCraz73VQI?si=sw4VscaqXv0kTVcb" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-element">
                <h5 class="iframe-heading">Special Messages from UCSI University</h5>
                <iframe style="border: 2px solid rgb(184, 12, 12);" width="530" height="299" src="https://www.youtube.com/embed/GanClnWz8D8?si=UNdavd_mSpfgJNsd" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</section>


<style>

    .iframe-heading{
        color: white;
        text-align: center;
    }

    .video-wrapper{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .video-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        row-gap: 100px;
        column-gap: 40px;
        z-index: 10;
    }

    .video-element {
        width: 530px;
        height: 299px;
    }

    .cover-iframe-main{
        height: 950px;
    }

    @media (max-width: 768px) {
    .video-element{
        height: 182.25px;
        width: 324px;
        max-width: none;
    }

    .title-responsive{
        padding-right: 20px;
    }

    .video-grid {
        grid-template-columns: repeat(1, 1fr); /* Display one column on mobile screens */
        gap: 100px;
    }
    
    
    .video-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-bottom: 1.5rem; 
    }


    .cover-iframe-main{
        height: 1250px;
    }
}


@media (min-width: 1600px) {
    .cover-iframe-main{
        height: 950px;
    }
}

</style>