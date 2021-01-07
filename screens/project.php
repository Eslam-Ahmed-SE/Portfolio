<div class="project">
    
<!--    <h2>Project: <?php echo ucfirst($_GET["projectID"]); ?></h2>-->
    
    <h2 class="proj-name">Project name</h2>
    <p class="proj-date">Uploaded: 15-3-2021</p>
    <a href="#" class="proj-category" onclick="contactsScreen(this, 'projects-gallery.php?project-category=mobile', false)">Mobile</a>
    <p class="proj-info"><i class="far fa-eye"></i> 120<br><span>Views</span></p>
    <p class="proj-info"> 4/5 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><br><span>136 Ratings</span></p>
    <hr>
    <h2 class="proj-header">Previews</h2>
    <div class="previews">
        <img src="imgs/test-poejects/1.png"/>
        <img src="imgs/test-poejects/2.jpg"/>
        <img src="imgs/test-poejects/3.png"/>
    </div>
    <hr>
    <h2 class="proj-header">Descrition</h2>
    <p class="proj-description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam efficitur nec metus quis tristique. Duis id augue sagittis, tincidunt massa non, dignissim ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sapien metus, sagittis vitae luctus sed, scelerisque at metus. Aenean nec velit libero. Praesent eget magna ac sapien egestas consectetur eget vel libero. Maecenas a risus accumsan, pretium metus sit amet, vestibulum dolor. Duis volutpat nisi sem, quis dignissim massa laoreet quis. Donec facilisis ullamcorper lacus ac mollis. Etiam fringilla libero eu diam facilisis feugiat. Quisque semper placerat bibendum. Donec tristique vestibulum maximus. Vestibulum posuere nibh eget nisi scelerisque consequat. Duis arcu velit, mattis nec neque eget, aliquam sodales sapien. Ut sodales sit amet nisl vitae fringilla. Vivamus varius ornare dolor, ac lobortis nibh fringilla at.

        Sed non metus dapibus, pretium lorem at, tincidunt tortor. Etiam vehicula congue mollis. Donec dignissim sit amet velit non dapibus. Curabitur consectetur dapibus augue, eu convallis diam tincidunt a. Nullam aliquam elementum ex at consequat. Curabitur nec arcu et ligula euismod imperdiet in ut nisl. Nam vel elit arcu. Quisque finibus risus pellentesque nibh ultrices interdum. Pellentesque egestas lobortis vestibulum. Vivamus venenatis aliquet nunc.
    </p>
    
</div>

<style>
    
    .project {
        text-align: left;
        padding: 15px;
    }
    
    .project hr {
        margin: 15px 0;
        border: 1px solid RGBA(0, 0, 0, 0.5);
    } 
    
    .project .proj-name {
        text-align: left;
        padding: 0 0 5px 0 ;  
        color: RGBA(0, 0, 0, 1);
        font-size: 2rem;
    }
    
    .project .proj-date {
        margin-bottom: 5px;
        color: RGBA(0, 0, 0, 0.5);
    }
    
    .project .proj-category {
        text-align: left;
        text-decoration: none;
        color: RGBA(0, 120, 250, 1);
        display: block;
    }
    
    .project .proj-info {
        font-size: 1.25rem;
        color: RGBA(0, 0, 0, 0.65);
        margin-top: 10px;
        margin-right: 10px;
        padding: 10px 20px;
        background: RGBA(247, 247, 247, 1);
        display: inline-block;
        border-radius: 10px;
    }
    
    .project .proj-info span {
        font-size: 1rem;
        font-weight: bold;
    }
    
    .project .proj-description {
        margin-top: 10px;
    }
    
    .previews {
        text-align: left;
        overflow-y: scroll;
        white-space: nowrap;
    }
    
    .previews img {
        margin: 15px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        height: 250px;
    }
    
</style>